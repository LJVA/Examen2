<?php

require_once 'Model/Genero.php';

class generoController {
    private $model;
    
    function __construct() {
        $this->model = new Genero();
    }
    
    public function viewListar(){
       Utils::logeado();
       $genero = $this->model->listar();
       require_once 'View/Include/header.php';
       require_once 'View/Genero/listar.php';
       require_once 'View/Include/footer.php';
   }
   
   public function viewRegistro(){
       Utils::logeado();
       require_once 'View/Include/header.php';
       require_once 'View/Genero/crear.php';
       require_once 'View/Include/footer.php';
   }
   
   public function Registrar() {
       $nuevo = new Genero();
       $nuevo->setNombre($_POST['nombre']);
       $this->model->registar($nuevo);
       header('location:index.php');
   }
   
   public function viewActualizar(){
       Utils::logeado();
       $codigo = $_GET['codigo'];
       $genero = $this->model->buscarXcodigo($codigo);
       require_once 'View/Include/header.php';
       require_once 'View/Genero/editar.php';
       require_once 'View/Include/footer.php';
   }
   
   public function Actualizar(){
       $nuevo = new Genero();
       $nuevo->setCodigo($_POST['codigo']);$nuevo->setNombre($_POST['nombre']);
       $this->model->actualizar($nuevo);
       header('location:index.php');
   } 

    
    
    
}
