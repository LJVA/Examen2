<div class="container">
    <div class="jumbotron">
        <h2>Formulario Edicion Peliculas</h2>
    </div>
    <div class="col-md-6 col-md-offset-3">
        <div class="form-horizontal" style="">
            <form action="index.php?c=peli&a=Actualizar" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_cedula">CODIGO DE LA PELICULA:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" readonly name="codigo" value="<?=$peli->getCodigo();?>">
                        <input hidden name="puntuacion" value="<?=$peli->getPuntuacion();?>">
                        <input hidden name="votantes" value="<?=$peli->getVotantes();?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_cedula">NOMBRE DE LA PELICULA:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nombre" value="<?=$peli->getNombre();?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_cedula">NOMBRE DEL DIRECTOR:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="director" value="<?=$peli->getDirector();?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_cedula">SINOPSIS:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="sinopsis" value="<?=$peli->getSinopsis();?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_cedula">GENERO</label>
                    <div class="col-sm-10">
                        <select name="genero">
                            <?php foreach($listaGeneros as $posicion=> $genero):?>
                            <option><?= $genero->getNombre();?></option>
                             <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_cedula">NUEVA IMAGEN</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="imagen">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_cedula">IMAGEN ANTERIOR</label>
                    <div class="col-sm-10">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <img height="200px" src="data:image/jpg;base64,<?php echo base64_encode($peli->getImagen()); ?>" />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12 col-md-off-set-3">
                        <input type="submit" class="btn btn-primary form-control" name="" value="Actualizar">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>