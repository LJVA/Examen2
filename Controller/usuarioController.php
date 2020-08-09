<?php

require_once 'Model/Usuario.php';
require_once 'Model/Pelicula.php';

class usuarioController {
   private $model;
   private $Pmodel;
    
    function __construct() {
        $this->model = new Usuario();
        $this->Pmodel = new Pelicula();
    }
    
    public function destroy(){
        session_destroy();
        header('location:index.php?c=usuario&a=viewLogin'); 
    }
    
    public function viewLogin(){
        require_once 'View/User/Login.php';
    }

    public function Validar(){
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $validado = $this->model->validarusuario($correo, $password);
        if($validado!=null){
            $_SESSION['logeado'] = $validado;
            header('location:index.php');
        } else {
            header('location:index.php?c=usuario&a=viewLogin'); 
        }
    }
    
    public function viewListar(){
        $peli = $this->Pmodel->listar();
        require_once 'View/User/header.php';
        require_once 'View/User/Listar.php';
        require_once 'View/User/footer.php';
   }
   
   public function Voto(){
       $peli = $this->Pmodel->buscarXcodigo($_POST['codigo']);
       $peli->setPuntuacion($peli->getPuntuacion()+$_POST['voto']);
       $peli->setVotantes($peli->getVotantes()+1);
       $this->Pmodel->actualizar($peli);
       header('location:index.php?c=usuario&a=viewListar');
   }
   
   public function Buscar(){
        $peli = $this->Pmodel->buscarXdato($_POST['buscar']);
        require_once 'View/User/header.php';
        require_once 'View/User/Listar2.php';
        require_once 'View/User/footer.php';
   }
}
