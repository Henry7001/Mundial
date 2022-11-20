<?php require_once HEADER?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Lista de partidos</h1>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Fase de partido</th>
                            <th>Grupo</th>
                            <th>Anfitrión</th>
                            <th>Gol de anfitrión</th>
                            <th>Gol de visitante</th>
                            <th>Visitante</th>
                            <th>Horario</th>
                            <th>Estadio</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody class="JSON">
                        <?php foreach($respartidos as $partidos){ ?>
                        <tr>
                            <td><?php echo $partidos['id'] ?></td>
                            <td><?php echo $partidos['Fase'] ?></td>
                            <td><?php echo $partidos['Grupo'] ?></td>
                            <td><img height=24 weight=24 src="<?php echo $partidos['BandAnf'] ?>"><?php echo $partidos['Anfitrion'] ?></td>
                            <td><?php echo $partidos['Ganf'] ?></td>
                            <td><?php echo $partidos['Gvis'] ?></td>
                            <td><img height=24 weight=24 src="<?php echo $partidos['BandVis'] ?>"><?php echo $partidos['Visitante'] ?></td>
                            <td><?php echo $partidos['Datetime'] ?></td>
                            <td><?php echo $partidos['Estadio'] ?></td>
                            <td>
                                <a href="index.php?type=partidos&function=editPartido&id=<?php echo $partidos['id'] ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php require_once FOOTER ?>
    <script>
        var txtBuscar = document.querySelector("#b");
        txtBuscar.addEventListener('keyup', cargarpartidos);

        function cargarpartidos() {
            var bus = txtBuscar.value;
            var url = "index.php?type=partidos&function=searchAjax&b=" + bus;
            console.log(url);
            var xmlh = new XMLHttpRequest();
            xmlh.open("GET", url, true);
            console.log(xmlh);
            xmlh.send();
            xmlh.onreadystatechange = function () {
                if (xmlh.readyState === 4 && xmlh.status === 200) {
                    var respuesta = xmlh.responseText;
                    console.log(respuesta);
                    actualizar(respuesta);
                }
            };
        }

        function actualizar(respuesta) {
            var tbody = document.querySelector('.JSON');
            var partidos = JSON.parse(respuesta);
            console.log(partidos);
            resultados = '';
            //mostrar todos los resultados del JSON tazas en la tabla
            for (var i = 0; i < partidos.length; i++) {
                resultados += '<tr>';
                resultados += '<td>' + partidos[i].id + '</td>';
                resultados += '<td>' + partidos[i].Nombre + '</td>';
                resultados += '<td>' + partidos[i].Talla + '</td>';
                resultados += '<td>' + partidos[i].Descripcion + '</td>';
                resultados += '<td>' + partidos[i].Precio + '</td>';
                resultados += '<td>' + partidos[i].Cantidad + '</td>';
                //opciones
                resultados += '<td>';
                //botones editar y eliminar con sus respectivos iconos en bootstrap
                resultados += '<a href="index.php?type=partidos&function=editGorra&id=' + partidos[i].id + '" class="btn btn-primary"><i class="fas fa-edit"></i></a> <a href="index.php?type=partidos&function=deleteGorra&id=' + partidos[i].id + '" class="btn btn-danger" onclick="return confirm(\'¿Está seguro de eliminar la Gorra ' + partidos[i].nombre + '?\')"><i class="fas fa-trash-alt"></i></a>';
                resultados += '</td>';
                resultados += '</tr>';
            }
            tbody.innerHTML = resultados;
        }
    </script>


<?php require_once FOOTER?>
