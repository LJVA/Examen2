<?php
   session_start();
   require_once 'AutoLoad.php';
   require_once 'Utils/Utils.php';
    
   if(isset($_GET['c'])){
       $nombreControlador = $_GET['c'].'Controller';
       $controller = new $nombreControlador();
   }else{
       $controller = new peliController();
   }
   
   
   
    if(!isset($_GET['a'])){
        $controller->viewListar();
    }else{
        $metodo = $_GET['a'];
        $controller->$metodo();
    }
?>
