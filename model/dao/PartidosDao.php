<?php
require_once "config/Conexion.php";
require_once "model/dto/PartidosDto.php";
class PartidosDao
{
    private $con;
    static private $getAll = "SELECT * FROM partidos";

    public function __construct()
    {
        $this->con = Conexion::getConexion();
    }

    public function getByOrder($orden, $filtro)
    {
        if(empty($filtro)){
            $getByOrder = "SELECT * FROM Partidos ORDER BY ".$orden;
        }elseif($filtro == "Fase de grupos"){
            $getByOrder = "SELECT * FROM Partidos WHERE fase = 'Fase de grupos' ORDER BY ".$orden;
        }elseif($filtro == "Octavos de final" || $filtro == "Cuartos de final" || $filtro == "Semifinal" || $filtro == "Tercer lugar" || $filtro == "Final"){
            $getByOrder = "SELECT * FROM Partidos WHERE fase = '".$filtro."' ORDER BY ".$orden;
        }else{
            $getByOrder = "SELECT * FROM Partidos where Grupo = '".$filtro."' ORDER BY ".$orden;
        }
        $stmt = $this->con->prepare($getByOrder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update(PartidosDto $Partidos)
    {
        try {
            $update = "update partidos set ganf=".$Partidos->getGanf().",gvis=".$Partidos->getGvis()." where id=".$Partidos->getId();
            echo $update;
            $stmt = $this->con->prepare($update);
            $stmt->execute();
            return ($stmt->rowCount() > 0);
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getAll()
    {
        $stmt = $this->con->prepare(PartidosDao::$getAll);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $getById = "SELECT * FROM Partidos WHERE id = " . $id;
        $stmt = $this->con->prepare($getById);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>