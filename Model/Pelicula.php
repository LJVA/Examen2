<?php

require_once 'DB/conexion.php';
require_once 'Model/Genero.php';

class Pelicula {
   private $codigo;
   private $nombre;
   private $director;
   private $sinopsis;
   private $GENERO;
   private $puntuacion;
   private $votantes;
   private $imagen;
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

   function getDirector() {
       return $this->director;
   }

   function getSinopsis() {
       return $this->sinopsis;
   }

   function getGENERO() {
       return $this->GENERO;
   }

   function getPuntuacion() {
       return $this->puntuacion;
   }

   function getVotantes() {
       return $this->votantes;
   }

   function getImagen() {
       return $this->imagen;
   }

   function getConexion() {
       return $this->conexion;
   }

   function setCodigo($codigo) {
       $this->codigo = $codigo;
   }

   function setNombre($nombre) {
       $this->nombre = $nombre;
   }

   function setDirector($director) {
       $this->director = $director;
   }

   function setSinopsis($sinopsis) {
       $this->sinopsis = $sinopsis;
   }

   function setGENERO($GENERO) {
       $this->GENERO = $GENERO;
   }

   function setPuntuacion($puntuacion) {
       $this->puntuacion = $puntuacion;
   }

   function setVotantes($votantes) {
       $this->votantes = $votantes;
   }

   function setImagen($imagen) {
       $this->imagen = $imagen;
   }

   function setConexion($conexion) {
       $this->conexion = $conexion;
   }
   
   public function registar($nuevo){
        $this->conexion->getConeccion();
        $sql = "INSERT INTO PELICULAS (NOMBRE,DIRECTOR,SINOPSIS,GENERO,PUNTUACION,VOTANTES,IMAGEN) VALUES (?,?,?,?,?,?,?)";
        $tipos = 'ssssiis';
        $valores = array($nuevo->getNombre(),$nuevo->getDirector(),$nuevo->getSinopsis(),$nuevo->getGenero(),$nuevo->getPuntuacion(),$nuevo->getVotantes(),$nuevo->getImagen());
        $this->conexion->executeQuery($sql, $tipos, $valores);
        $this->conexion->cerrarConeccion();
    }
    
    public function listar(){
        $this->conexion->getConeccion();
        $sql = "SELECT * FROM PELICULAS";
        $datos = $this->conexion->executeQueryReturnData($sql);
        $pelis = array();
        foreach ($datos as $posicion => $fila){
            $pelicula = new Pelicula();
            $pelicula->setCodigo($fila['codigo']);$pelicula->setNombre($fila['nombre']);$pelicula->setDirector($fila['director']);
            $pelicula->setSinopsis($fila['sinopsis']);$pelicula->setGENERO($fila['genero']);$pelicula->setPuntuacion($fila['puntuacion']);
            $pelicula->setVotantes($fila['votantes']);$pelicula->setImagen($fila['imagen']);
            array_push($pelis, $pelicula);
        }
        $this->conexion->cerrarConeccion();
        return $pelis;
    }
    
    public function eliminar($codigo){
         $this->conexion->getConeccion();
         $sql = "DELETE FROM PELICULAS WHERE CODIGO = ?";
         $tipos = 'i';
         $valores = array($codigo);
         $this->conexion->executeQuery($sql, $tipos, $valores);
         $this->conexion->cerrarConeccion();
        
    }
    
    public function buscarXcodigo($codigo){
         $this->conexion->getConeccion();
         $sql = "SELECT * FROM PELICULAS WHERE CODIGO = $codigo";
         $fila = $this->conexion->executeQueryReturnData($sql);
         $peli = new Pelicula();
         $peli->setCodigo($fila[0]['codigo']);$peli->setNombre($fila[0]['nombre']);$peli->setDirector($fila[0]['director']);
         $peli->setSinopsis($fila[0]['sinopsis']);$peli->setGENERO($fila[0]['genero']);$peli->setPuntuacion($fila[0]['puntuacion']);
         $peli->setVotantes($fila[0]['votantes']);$peli->setImagen($fila[0]['imagen']);
         $this->conexion->cerrarConeccion();
         return $peli;
    }
    
    public function actualizar($nuevo){
        $this->conexion->getConeccion();
        $sql = "UPDATE PELICULAS SET NOMBRE = ?, DIRECTOR = ?, SINOPSIS = ?, GENERO = ?, PUNTUACION = ?, VOTANTES = ?, IMAGEN = ? WHERE CODIGO = ?";
        $tipos = 'ssssiisi';
        $valores = array($nuevo->getNombre(),$nuevo->getDirector(),$nuevo->getSinopsis(),$nuevo->getGenero(),$nuevo->getPuntuacion(),$nuevo->getVotantes(),$nuevo->getImagen(),$nuevo->getCodigo());
        $this->conexion->executeQuery($sql, $tipos, $valores);
        $this->conexion->cerrarConeccion();
    }
    
    public function buscarXdato($dato){
         $this->conexion->getConeccion();
         $sql = "SELECT * FROM PELICULAS WHERE NOMBRE LIKE '%$dato%'";
         $row = $this->conexion->executeQueryReturnData($sql);
         $pelis = array();
         foreach ($row as $posicion => $fila){
            $peli = new Pelicula();
            $peli->setCodigo($fila['codigo']);$peli->setNombre($fila['nombre']);$peli->setDirector($fila['director']);
            $peli->setSinopsis($fila['sinopsis']);$peli->setGENERO($fila['genero']);$peli->setPuntuacion($fila['puntuacion']);
            $peli->setVotantes($fila['votantes']);$peli->setImagen($fila['imagen']);
            array_push($pelis, $peli);
         }
         $this->conexion->cerrarConeccion();
         return $pelis;
    }
}
