<?php

class Utils{
    
    public static function logeado(){
        if(isset($_SESSION['logeado'])){
            return true;
        }else{
            header('location:index.php?c=usuario&a=viewLogin'); 
        }
    }
}
?>

