<?php

require_once 'DB/conexion.php';

class Usuario {
   private $id;
   private $cedula;
   private $nombre;
   private $telefono;
   private $correo;
   private $password;
   private $conexion;
   
   function __construct() {
       $this->conexion = new conexion();
   }
   
   function getId() {
       return $this->id;
   }

   function getCedula() {
       return $this->cedula;
   }

   function getNombre() {
       return $this->nombre;
   }

   function getTelefono() {
       return $this->telefono;
   }

   function getCorreo() {
       return $this->correo;
   }

   function getPassword() {
       return $this->password;
   }

   function getConexion() {
       return $this->conexion;
   }

   function setId($id) {
       $this->id = $id;
   }

   function setCedula($cedula) {
       $this->cedula = $cedula;
   }

   function setNombre($nombre) {
       $this->nombre = $nombre;
   }

   function setTelefono($telefono) {
       $this->telefono = $telefono;
   }

   function setCorreo($correo) {
       $this->correo = $correo;
   }

   function setPassword($password) {
       $this->password = $password;
   }

   function setConexion($conexion) {
       $this->conexion = $conexion;
   }

   public function validarusuario($correo, $password){
        $this->conexion->getConeccion();
        $sql = "SELECT * FROM ADMINISTRADOR WHERE CORREO = '$correo' AND PASSWORD = '$password'";
        $fila = $this->conexion->executeQueryReturnData($sql);
        $this->conexion->cerrarConeccion();
        if($fila != NULL){
            $user = new Usuario();
            $user->setId($fila[0]['id']);$user->setCedula($fila[0]['cedula']);$user->setNombre($fila[0]['nombre']);
            $user->setTelefono($fila[0]['telefono']);$user->setCorreo($fila[0]['correo']);$user->setPassword($fila[0]['password']);
        }
        return $user;
    }
}
