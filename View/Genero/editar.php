<div class="container">
    <div class="jumbotron">
        <h2>Formulario Edicion Generos</h2>
    </div>
    <div class="col-md-6 col-md-offset-3">
        <div class="form-horizontal" style="">
            <form action="index.php?c=genero&a=Actualizar" method="post">                    
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_cedula">CODIGO:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" readonly name="codigo" value="<?=$genero->getCodigo();?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_nombre">NOMBRE:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nombre" value="<?=$genero->getNombre();?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12 col-md-off-set-3">
                        <input type="submit" class="btn btn-primary form-control" name="a" value="Actualizar">
                    </div>
                </div>
            </form>
            
        </div>
    </div>
    
</div>