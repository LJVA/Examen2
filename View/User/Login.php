<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LOGIN TICO CINES</title>
        <link rel="stylesheet" type="text/css" href="Assets/Css/bootstrap.min.css">
    </head>
    <body>
        <section>
            <br>
            <h1>Inicio Sesion</h1>
            <form method="post" action="index.php?c=usuario&a=Validar">		
                    <input type="text" placeholder="Correo" name="correo" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <input type="submit" name="accion" value="Ingresar"><br><br>
                    <a href="index.php?c=usuario&a=viewListar">Iniciar Sin Login</a><br><br>
            </form>
        </section>
        <footer>
        <p>&copy; Lonnys Varela Segundo Examen Programacion IV -- Tico Cines<p>
        </footer>                
    </body>
</html>
