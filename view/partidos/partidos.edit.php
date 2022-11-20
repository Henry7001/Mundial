<?php require_once HEADER;?>
    <div class="container">
        <div class="row">
            <div>
                <h1>Actualizar goles del partido con ID: <?php echo $partido['id']?></h1>
                <form action="index.php?type=partidos&function=edit" onsubmit="" method="POST" name="EditPartidos" id="EditPartidos">
                <input type="hidden" name="id" value="<?php echo $partido['id']?>">
                <div class="row" id="rowCard">
                        <div class="partido">
                            <div class="partido-header">
                                <div class="row">
                                    <div class="col-md-4">
                                        <center>
                                            <h4 class="text-center"><?php echo $partido['Anfitrion'] ?></h4>
                                            <img src="<?php echo $partido['BandAnf'] ?>" alt="Bandera del equipo anfitrion" class="img-fluid">
                                        </center>
                                    </div>
                                    <div class="col-md-4">
                                        <h4 class="text-center">VS</h4>
                                    </div>
                                    <div class="col-md-4">
                                        <center>
                                            <h4 class="text-center"><?php echo $partido['Visitante'] ?></h4>
                                            <img src="<?php echo $partido['BandVis'] ?>" alt="Bandera del equipo visitante" class="img-fluid">
                                        </center>
                                    </div>
                                </div>
                            </div><br>
                            <center>
                            <div class="partido-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <center>
                                            <input type="number" class="form-control" name="ganf" id="ganf" placeholder="0" value="<?php echo $partido['Ganf']?>"  >
                                        </center>
                                    </div>
                                    <div class="col-md-4">
                                        <h4 class="text-center">-</h4>
                                    </div>
                                    <div class="col-md-4">
                                        <center>
                                            <input type="number" class="form-control" name="gvis" id="gvis" placeholder="0" value="<?php echo $partido['Gvis']?>"  >
                                        </center>
                                    </div>
                                </div>
                            </div>
                            </center><br>
                            <div class="partido-footer">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-center"><?php echo $partido['Datetime'] ?></h4>
                                    </div>
                                    <div class="col-md-4">
                                        <h4 class="text-center"><?php echo $partido['Fase'].' - Grupo '.$partido['Grupo'] ?></h4>
                                    </div>
                                    <div class="col-md-4">
                                        <h4 class="text-center"><?php echo $partido['Estadio'] ?></h4>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <center>
                                <div class="form-group mx-auto">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                    <a href="index.php?type=partidos&function=index" class="btn btn-danger">Cancelar</a>
                                </div>
                            </center>
                        </div>
                    </div>               
                </form>
            </div>
        </div>
    </div>
<?php require_once FOOTER?>