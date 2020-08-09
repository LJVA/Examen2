<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="Assets/Css/bootstrap.min.css">
</head>
<body>
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CRUD</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Nuevo Registro <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                   <li><a href="index.php?c=genero&a=viewRegistro">Genero</a></li>
                   <li><a href="index.php?c=peli&a=viewRegistro">Pelicula</a></li>
                </ul>                
              </li>               
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Listar <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                   <li><a href="index.php?c=genero&a=viewListar">Generos</a></li>
                   <li><a href="index.php?c=peli&a=viewListar">Peliculas</a></li>
                </ul>                
              </li> 
              <li>
                <a href="index.php?c=usuario&a=destroy">Cerrar Sesion</a>            
              </li>    
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->        
      </nav>
</header>
    