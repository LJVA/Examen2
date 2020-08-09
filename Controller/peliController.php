<?php

require_once 'Model/Pelicula.php';
require_once 'Model/Genero.php';
require_once 'Controller/usuarioController.php';
class peliController {
   private $model;
   private $Gmodel;
   private $Umodel;
    
    function __construct() {
        $this->model = new Pelicula();
        $this->Gmodel = new Genero();
        $this->Umodel = new usuarioController();
    }


    public function viewListar(){
        Utils::logeado();
        $peli = $this->model->listar();
        require_once 'View/Include/header.php';
        require_once 'View/Pelicula/listar.php';
        require_once 'View/Include/footer.php';
   }
   
   public function viewRegistro(){
       Utils::logeado();
       $listaGeneros = $this->Gmodel->listar();
       require_once 'View/Include/header.php';
       require_once 'View/Pelicula/crear.php';
       require_once 'View/Include/footer.php';
   }
   
   public function Registrar() {
       $nuevo = new Pelicula();
       $nuevo->setNombre($_POST['nombre']);$nuevo->setDirector($_POST['director']);$nuevo->setSinopsis($_POST['sinopsis']);
       $nuevo->setGENERO($_POST['genero']);$nuevo->setPuntuacion(0);$nuevo->setVotantes(0);
       $nuevo->setImagen((file_get_contents($_FILES['imagen']['tmp_name'])));
       $this->model->registar($nuevo);
       header('location:index.php');
   }
   
   public function viewActualizar(){
       Utils::logeado();
       $codigo = $_GET['codigo'];
       $peli = $this->model->buscarXcodigo($codigo);
       $listaGeneros = $this->Gmodel->listar();
       require_once 'View/Include/header.php';
       require_once 'View/Pelicula/editar.php';
       require_once 'View/Include/footer.php';
   }
   
   public function Actualizar(){
       $nuevo = new Pelicula();
       $nuevo->setNombre($_POST['nombre']);$nuevo->setDirector($_POST['director']);$nuevo->setSinopsis($_POST['sinopsis']);
       $nuevo->setGENERO($_POST['genero']);$nuevo->setPuntuacion($_POST['puntuacion']);$nuevo->setVotantes($_POST['votantes']);$nuevo->setCodigo($_POST['codigo']);
       $nuevo->setImagen((file_get_contents($_FILES['imagen']['tmp_name'])));
       $this->model->actualizar($nuevo);
       header('location:index.php');
   }
   
   public function Eliminar(){
       $codigo = $_GET['codigo'];
       $this->model->eliminar($codigo);
       header("location:index.php");
   }
}

