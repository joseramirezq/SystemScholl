<?php
require_once "./modelos/vistasModelo.php";

class vistasControlador extends vistasModelo
{

    public function obtener_plantilla_controller()
    {
        return require_once "./vistas/plantilla.php";
    }

    public function obtener_vistas_controller(){
        if(isset($_GET['views'])){
            $ruta=explode("/",$_GET['views']);
            $respuesta=vistasModelo::obtener_vistas_model($ruta[0]);
        }else{
            $respuesta="login";
        }
        return $respuesta;
    }

}