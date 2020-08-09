<div class="container" style="margin-top: 80px">
    <div class="jumbotron">
        <h2>Lista de Peliculas</h2>
    </div>
    <div>
        <h3>Busqueda Personalizada</h3>
        <form action="index.php?c=usuario&a=Buscar" method="post">
            <input type="text" name="buscar" placeholder="Ingrese Su Busqueda">
            <input type="submit" name="" value="Buscar">
        </form>
    </div><br><br><br>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Director</th>
                    <th>Sinopsis</th>
                    <th>Genero</th>
                    <th>Puntuacion</th>
                    <th>Votantes</th>
                    <th>Imagen</th>
                    <th>Dar Puntaje</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($peli as $datos):
                ?>
                    <tr>
                        <th><?php echo $datos->getCodigo();?></th>
                        <th><?php echo $datos->getNombre();?></th>
                        <th><?php echo $datos->getDirector();?></th>
                        <th><?php echo $datos->getSinopsis();?></th>
                        <th><?php echo $datos->getGenero();?></th>
                        <th><?php echo $datos->getPuntuacion();?></th>
                        <th><?php echo $datos->getVotantes();?></th>
                        <th> <img height="200px" src="data:image/jpg;base64,<?php echo base64_encode($datos->getImagen()); ?>"/></th>
                        <th>
                            <form action="index.php?c=usuario&a=Voto" method="post">
                                <input hidden name="codigo" value="<?php echo $datos->getCodigo();?>">
                                <select name="voto">
                                    <?php for($i=1; $i<11; $i++): ?>
                                    <option><?php echo $i; ?></option>
                                    <?php endfor;?>
                                </select>
                                <input type="submit" value="Votar">
                            </form>
                        </th>
                    </tr>
                <?php
                    endforeach;
                ?>
            </tbody>
        </table>
    </div>    
</div>

