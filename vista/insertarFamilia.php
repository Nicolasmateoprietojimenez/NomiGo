<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="section">
    
    <div class="wrap">
    <form action="../controlador/controladoRegistroFamilia.php" method="GET">
    <label for="doc">Documento</label>    
    <input type="text" name="documento_fam" id="doc" class="form-control">
    
    <label for="nombre">Nombre</label>    
    <input type="text" name="nombre" id="nombre" class="form-control">
    
    <label for="apellido">Apellido</label>    
    <input type="text" name="apellido" id="apellido" class="form-control">
    
    <label for="sexo">Sexo</label>    
    <input type="text" name="sexo" id="sexo" class="form-control">
    
    <label for="parentezco">Parentezco</label>    
    <input type="text" name="parentezco" id="parentezco" class="form-control">
    
    <label for="fechaN">Fecha de Nacimiento</label>    
    <input type="text" name="fecha_nac" id="fechaN" class="form-control">
    
    <input type="submit" name="boton" value="Insertar Registro" class="btn btn-primary">
</form>

</div>

    </form>
    </div>
    </section>         
</body>
</html>