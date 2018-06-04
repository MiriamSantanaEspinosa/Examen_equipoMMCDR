<?php
/**
 * Created by PhpStorm.
 * User: MARICELA
 * Date: 04/06/2018
 * Time: 14:57
 */

namespace AppData\Model;


class conexion
{

    private $datos=array("server"=>"localhost","user"=>"root", "password"=>"", "db"=>"examen");

    private $conexion;

    function __construct()
    {
        $this->conexion=new \mysqli($this->datos["server"],$this->datos["user"], $this->datos["password"],$this->datos["db"]);
        $this->conexion->set_charset("utf8");
    }

    public function QuerySimple($sql)
    {
        $this->conexion->query($sql) or die (mysqli_error($this->conexion));
    }
    public function QueryResultado($sql)
    {
        $datos=$this->conexion->query($sql) or die (mysqli_error($this->conexion));
        return $datos;
    }

    public function __destruct()
    {
        $this->conexion->close();
    }
}