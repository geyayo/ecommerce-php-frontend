<?php

class ControladorProductos{
    /*========== MOSTRAT CATEGORÍAS ==========*/
    public function ctrMostrarCategorias(){
        $tabla = "categorias";
        $respuesta = ModeloProductos::mdlMostrarCategorias($tabla);
        return $respuesta;
    }
    /*========== MOSTRAT SUB-CATEGORÍAS ==========*/
    static public function ctrMostrarSubCategorias($id){
        $tabla = "subcategorias";
        $respuesta = ModeloProductos::mdlMostrarSubCategorias($tabla, $id);
        return $respuesta;
    }
}