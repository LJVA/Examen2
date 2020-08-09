<div class="container" style="margin-top: 80px">
    <div class="jumbotron">
        <h2>Lista de Generos</h2>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($genero as $datos):
                ?>
                    <tr>
                        <th><?php echo $datos->getCodigo();?></th>
                        <th><?php echo $datos->getNombre();?></th>
                        <th>
                            <a href="index.php?c=genero&a=viewActualizar&codigo=<?=$datos->getCodigo();?>" class="btn btn-primary">Editar</a>
                        </th>
                    </tr>
                <?php
                    endforeach;
                ?>
            </tbody>
        </table>
    </div>    
</div>