<?php require_once HEADER
?>

<div class="container">
        <h1 class="text-center">Lista de partidos</h1>
        <hr>
            <!-- Ordenar por Grupos, por Etapa, por orden de id con una etiqueta y una lista desplegable -->
            <div class="row">
                <form action="index.php?type=partidos&function=ordenar" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="ordenar">Ordenar por:</label>
                            <select name="ordenar" id="ordenar" class="form-control-sm">
                                <option value="Datetime ASC">Horario (Ascendente)</option>
                                <option value="Datetime DESC">Horario (Descendente)</option>
                                <option value="Grupo ASC">Grupo (Ascendente)</option>
                                <option value="Grupo DESC">Grupo (Descendente)</option>
                            </select>
                        </div> <br>
                        <div class="col-md-12">
                            <label for="filtro">Filtrar por:</label>
                            <select name="filtro" id="filtro" class="form-control-sm">
                                <option value="">Ninguno</option>
                                <option value="Fase de grupos">Fase de grupos</option>
                                <option value="A">&nbsp&nbspGrupo A</option>
                                <option value="B">&nbsp&nbspGrupo B</option>
                                <option value="C">&nbsp&nbspGrupo C</option>
                                <option value="D">&nbsp&nbspGrupo D</option>
                                <option value="E">&nbsp&nbspGrupo E</option>
                                <option value="F">&nbsp&nbspGrupo F</option>
                                <option value="G">&nbsp&nbspGrupo G</option>
                                <option value="H">&nbsp&nbspGrupo H</option>
                                <option value="Octavos de final">Octavos de Final</option>
                                <option value="Cuartos de final">Cuartos de Final</option>
                                <option value="Semifinal">Semifinal</option>
                                <option value="Tercer lugar">Tercer lugar</option>
                                <option value="Final">Final</option>
                            </select>
                        </div> <br>
                        <button type="submit" class="btn btn-dark btn-sm">Ordenar</button>
                    </div>
                </form>
            </div>
        <hr>
        <div class="row" id="rowCard">
            <?php foreach ($respartidos as $card) { ?>
                <div>
                    <!-- Football Scoreboard with css style-->
                    <div>
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-4">
                                        <center>
                                            <h4 class="text-center"><?php echo $card['Anfitrion'] ?></h4>
                                            <img src="<?php echo $card['BandAnf'] ?>" alt="Bandera del equipo anfitrion" class="img-fluid">
                                        </center>
                                    </div>
                                    <div class="col-md-4">
                                        <h4 class="text-center">VS</h4>
                                    </div>
                                    <div class="col-md-4">
                                        <center>
                                            <h4 class="text-center"><?php echo $card['Visitante'] ?></h4>
                                            <img src="<?php echo $card['BandVis'] ?>" alt="Bandera del equipo visitante" class="img-fluid">
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-center"><?php echo $card['Ganf'] ?></h4>
                                    </div>
                                    <div class="col-md-4">
                                        <h4 class="text-center">-</h4>
                                    </div>
                                    <div class="col-md-4">
                                        <h4 class="text-center"><?php echo $card['Gvis'] ?></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-center"><?php echo $card['Datetime'] ?></h4>
                                    </div>
                                    <div class="col-md-4">
                                        <h4 class="text-center"><?php echo $card['Fase'].' - Grupo '.$card['Grupo'] ?></h4>
                                    </div>
                                    <div class="col-md-4">
                                        <h4 class="text-center"><?php echo $card['Estadio'] ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <br>
            <?php } ?>
        </div>
</div>
<?php require_once FOOTER ?>