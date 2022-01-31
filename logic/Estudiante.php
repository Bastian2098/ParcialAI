<?php 

require "persistence/EstudianteDAO.php";
require "persistence/Connection.php";

class Estudiante{
    
    private $codigo;
    private $nombre;
    private $apellido;
    private $fecNacimiento;

    public function Estudiante($codigo="", $nombre="", $apellido="", $fecNacimiento=""){
        $this -> codigo = $codigo;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> fecNacimiento = $fecNacimiento;
        $this -> conexion = new Connection();
        $this -> estudianteDAO = new EstudianteDAO($this -> codigo, $this -> nombre, $this -> apellido, $this -> fecNacimiento);
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function getNombre(){
        return $this->Nombre;
    }

    public function getApellido(){
        return $this->Apellido;
    }

    public function getFecNacimiento(){
        return $this->FecNacimiento;
    }

    function consultar(){
        $this -> conexion -> abrir();      
        $this -> conexion -> ejecutar($this -> estudianteDAO -> consultar());
        $this -> conexion -> cerrar(); 
        $resultado = $this -> conexion -> extraer();
        $this -> nombre = $resultado[0];
        $this -> apellido = $resultado[1];
        $this -> fecNacimiento = $resultado[2];                
    }

    public function crear(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> estudianteDAO -> crear());
        $this -> conexion -> cerrar();
    }

}

?>