<?php

class vistasModelo
{
    protected function obtener_vistas_model($vistas)
    {
        $listaenlace = [
            "admin",
            "home",
            "salon-admin",
            "school"
        ];
        if (in_array($vistas, $listaenlace)) {
            
            if(is_file("./vistas/contenidos/".$vistas.".php")){
                $contenido="./vistas/contenidos/".$vistas.".php";
            }else{
                $contenido = "login";
            }



        } elseif ($vistas = "login") {
            $contenido = "login";
            # code...
        } elseif ($vistas == "index") {
            $contenido = "login";
        } else {
            $contenido = "login";
        }

        return $contenido;

    }
}