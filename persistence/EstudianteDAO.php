<?php 

class EstudianteDAO{

    private $codigo;
    private $nombre;
    private $apellido;
    private $fecNacimiento;

    public function EstudianteDAO($codigo="", $nombre="", $apellido="", $fecNacimiento=""){
        $this -> codigo = $codigo;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> fecNacimiento = $fecNacimiento;
    }

    function consultar(){
        return "select nombre, apellido, fecNacimiento
                from Estudiante
                where codigo = '" . $this -> codigo . "'";
    }

    function crear(){
        return "insert into Estudiante (nombre, apellido, fecNacimiento)
                values ('" . $this -> nombre . "', '" . $this -> apellido . "', '".$this -> fecNacimiento."')";                
    }

}

?>