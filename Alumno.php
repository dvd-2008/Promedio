<?php

class Alumno {
    
    private $nombre;
    private $ep;
    private $ef;
    private $pp;

    public function __construct($nombre, $ep, $ef, $pp) {
        $this->nombre = $nombre;
        $this->ep = $ep;
        $this->ef = $ef;
        $this->pp = $pp;
    }

    public function calcularPromedio() {
        return ($this->ep + $this->ef + $this->pp) / 3;
    }

    public function determinarEstado() {
        $promedio = $this->calcularPromedio();
        if ($promedio >= 10) {
            return "Aprobado";
        } else {
            return "Desaprobado";
        }
    }

    public function obtenerNombre() {
        return $this->nombre;
    }

}

?>
