<?php

namespace Daw\models;

class ConsultaEquipo extends Db

{
    private $nombreEquipo = "";
    private $participantes = "";

    function __construct()
    {
        parent::__construct();
        parent::conectar();
    }

    public function listarEquipo()
    {
        $resultado = $this->getConector()->query("SELECT * FROM equipo");
        return $resultado;
    }

    public function insertaEquipo($nombreEquipo, $participantes)
    {
        if ($nombreEquipo == "" && $participantes == "") {
            return false;
        }

        $resultado = $this->getConector()
            ->query("INSERT INTO equipo(nombre,participantes) VALUES ('$nombreEquipo', '$participantes')");
        return $resultado;
    }

    public function getNombreEquipo()
    {
        return $this->nombreEquipo;
    }

    public function setNombreEquipo($nombreEquipo)
    {
        $this->nombreEquipo = $nombreEquipo;

    }

    public function getParticipantes()
    {
        return $this->participantes;
    }

    public function setParticipantes($participantes)
    {
        $this->participantes = $participantes;

    }
}

?>