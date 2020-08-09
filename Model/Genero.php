<?php

require_once 'DB/conexion.php';

class Genero {
   private $codigo;
   private $nombre;
   private $conexion;
   
   function __construct() {
       $this->conexion = new conexion();
   }
   
   function getCodigo() {
       return $this->codigo;
   }

   function getNombre() {
       return $this->nombre;
   }

   function setCodigo($codigo) {
       $this->codigo = $codigo;
   }

   function setNombre($nombre) {
       $this->nombre = $nombre;
   }
   
    public function registar($nuevo){
        $this->conexion->getConeccion();
        $sql = "INSERT INTO GENEROS (NOMBRE) VALUES (?)";
        $tipos = 's';
        $valores = array($nuevo->getNombre());
        $this->conexion->executeQuery($sql, $tipos, $valores);
        $this->conexion->cerrarConeccion();
    }
    
    public function listar(){
        $this->conexion->getConeccion();
        $sql = "SELECT * FROM GENEROS";
        $datos = $this->conexion->executeQueryReturnData($sql);
        $generos = array();
        foreach ($datos as $posicion => $fila){
            $genero = new Genero();
            $genero->setCodigo($fila['codigo']);$genero->setNombre($fila['nombre']);
            array_push($generos, $genero);
        }
        $this->conexion->cerrarConeccion();
        return $generos;
    }
    
    public function eliminar($codigo){
         $this->conexion->getConeccion();
         $sql = "DELETE FROM GENEROS WHERE CODIGO = ?";
         $tipos = 'i';
         $valores = array($codigo);
         $this->conexion->executeQuery($sql, $tipos, $valores);
         $this->conexion->cerrarConeccion();
    }
    
    public function buscarXcodigo($codigo){
         $this->conexion->getConeccion();
         $sql = "SELECT * FROM GENEROS WHERE CODIGO = $codigo";
         $fila = $this->conexion->executeQueryReturnData($sql);
         $genero = new Genero();
         $genero->setCodigo($fila[0]['codigo']);$genero->setNombre($fila[0]['nombre']);
         $this->conexion->cerrarConeccion();
         return $genero;
    }
    
    public function actualizar($nuevo){
        $this->conexion->getConeccion();
        $sql = "UPDATE GENEROS SET NOMBRE = ? WHERE CODIGO = ?";
        $tipos = 'si';
        $valores = array($nuevo->getNombre(),$nuevo->getCodigo());
        $this->conexion->executeQuery($sql, $tipos, $valores);
        $this->conexion->cerrarConeccion();
    }



}
