<?php
require_once 'model/dao/PartidosDao.php';
require_once 'model/dto/PartidosDto.php';
class PartidosController
{
    private $model;
    public function __construct()
    {
        $this->model = new PartidosDao();
    }

    public function index()
    {
        $this->model=new PartidosDao();
        $respartidos = $this->model->getAll();
        if (empty($_SESSION[ID_ROLE]) || $_SESSION[ID_ROLE] != '1') {
            require_once VPARTIDOS . 'list.php';
        }else{
            require_once VPARTIDOS . 'list.admin.php';
        }
    }

    public function ordenar()
    {
        $orden= (!empty($_POST["ordenar"])) ? htmlentities($_POST["ordenar"]) : "";
        $filtro= (!empty($_POST["filtro"])) ? htmlentities($_POST["filtro"]) : "";
        $respartidos = $this->model->getByOrder($orden,$filtro);
        require_once VPARTIDOS . 'list.php';
    }

    public function editPartido ()
    {
        $id = $_GET['id'];
        $partido = $this->model->getById($id);
        require_once VPARTIDOS.'edit.php';
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $Partidos = new PartidosDto();
            $Partidos->setId(htmlentities($_POST['id']));
            $Partidos->setGanf(htmlentities($_POST['ganf']));
            $Partidos->setGvis(htmlentities($_POST['gvis']));
            $exito = $this->model->update($Partidos);
            $msj = 'Partido actualizado exitosamente';
            $color = 'primary';
            if (!$exito) {
                $msj = "No se pudo actualizar el partido";
                $color = "danger";
            }
            if (!isset($_SESSION)) {
                session_start();
            };
            $_SESSION['mensaje'] = $msj;
            $_SESSION['color'] = $color;
            header('Location:index.php?type=Partidos&f=index');
        }
    }

}
?>
