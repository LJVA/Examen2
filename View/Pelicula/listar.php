<div class="container" style="margin-top: 80px">
    <div class="jumbotron">
        <h2>Lista de Peliculas</h2>
    </div>
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
                    <th>Acción</th>
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
                        <th> <img height="200px" src="data:image/jpg;base64,<?php echo base64_encode($datos->getImagen()); ?>"/> </th>
                        <th>
                            <a href="index.php?c=peli&a=viewActualizar&codigo=<?=$datos->getCodigo();?>" class="btn btn-primary">Editar</a>
                            <a href="index.php?c=peli&a=Eliminar&codigo=<?=$datos->getCodigo();?>" class="btn btn-primary">Eliminar</a>
                        </th>
                    </tr>
                <?php
                    endforeach;
                ?>
            </tbody>
        </table>
    </div>    
</div>