<?php
class PartidosDto
{
    private $id, $Fase, $Grupo, $Anfitrion, $Visitante, $Ganf, $Gvis, $Datetime, $Estadio, $BandAnf, $BandVis;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getFase()
    {
        return $this->Fase;
    }

    public function setFase($Fase)
    {
        $this->Fase = $Fase;
    }

    public function getGrupo()
    {
        return $this->Grupo;
    }

    public function setGrupo($Grupo)
    {
        $this->Grupo = $Grupo;
    }

    public function getAnfitrion()
    {
        return $this->Anfitrion;
    }

    public function setAnfitrion($Anfitrion)
    {
        $this->Anfitrion = $Anfitrion;
    }

    public function getVisitante()
    {
        return $this->Visitante;
    }

    public function setVisitante($Visitante)
    {
        $this->Visitante = $Visitante;
    }

    public function getGanf()
    {
        return $this->Ganf;
    }

    public function setGanf($Ganf)
    {
        $this->Ganf = $Ganf;
    }

    public function getGvis()
    {
        return $this->Gvis;
    }

    public function setGvis($Gvis)
    {
        $this->Gvis = $Gvis;
    }

    public function getDatetime()
    {
        return $this->Datetime;
    }

    public function setDatetime($Datetime)
    {
        $this->Datetime = $Datetime;
    }

    public function getEstadio()
    {
        return $this->Estadio;
    }

    public function setEstadio($Estadio)
    {
        $this->Estadio = $Estadio;
    }

    public function getBandAnf()
    {
        return $this->BandAnf;
    }

    public function setBandAnf($BandAnf)
    {
        $this->BandAnf = $BandAnf;
    }

    public function getBandVis()
    {
        return $this->BandVis;
    }

    public function setBandVis($BandVis)
    {
        $this->BandVis = $BandVis;
    }
}
?>