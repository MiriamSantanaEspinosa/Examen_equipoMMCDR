<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 04/06/2018
 * Time: 03:45 PM
 */

namespace AppData\Model;


class Registro
{
    function __construct()
    {
        $this->conexion=new conexion();
    }
    public function set($atributo, $valor){
        $this->$atributo=$valor;
    }
    public function get($atributo){
        return $this->$atributo;
    }

}