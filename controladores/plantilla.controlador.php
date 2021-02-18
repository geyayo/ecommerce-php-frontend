<?php

//Creamos una clase con el nombre que estamos instanciado en plantilla.php
class ControladorPlantilla{
    //declaramos el metodo que se esta ejecutando
    public function plantilla(){
        //incluimos
        include "vistas/plantilla.php";
    }
}