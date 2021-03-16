<?php

//Creamos una clase con el nombre que estamos instanciado en plantilla.php
class ControladorPlantilla{
    //declaramos el metodo que se esta ejecutando
    public function plantilla(){
        //incluimos
        include "vistas/plantilla.php";
    }
    /* =========== TRAEMOS LOS ESTILOS DINÁMICOS DE LA PLANTILLA ==========*/
    public function ctrEstiloPlantilla(){
        $tabla = "plantilla";
        $respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);
        return $respuesta;
    }
}