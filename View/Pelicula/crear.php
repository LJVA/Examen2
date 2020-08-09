<div class="container">
    <div class="jumbotron">
        <h2>formulario registro de Peliculas</h2>
    </div>
    <div class="col-md-6 col-md-offset-3">
        <div class="form-horizontal" style="">
            <form action="index.php?c=peli&a=Registrar" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_cedula">NOMBRE DE LA PELICULA:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nombre">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_cedula">NOMBRE DEL DIRECTOR:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="director">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_cedula">SINOPSIS:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="sinopsis">
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
                    <label class=" col-sm-2 control-label" for="txt_cedula">IMAGEN</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="imagen">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12 col-md-off-set-3">
                        <input type="submit" class="btn btn-primary form-control" name="" value="Registrar">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>