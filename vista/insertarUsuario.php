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
    <form action="../controlador/controladoRegistroUsuario.php", method="GET">
        <label for="doc">Documento</label>    
        <input type="text" name="doc" id="doc" class="form-control">
        
        <label for="nombre">Nombre</label>    
        <input type="text" name="nombre" id="nombre" class="form-control">
        
        <label for="apellido">Apellido</label>    
        <input type="text" name="apellido" id="apellido" class="form-control">
        
        <label for="lugarN">Lugar de Nacimiento</label>    
        <input type="text" name="lugarN" id="lugarN" class="form-control">
        
        <label for="fechaN">Fecha de Nacimiento</label>    
        <input type="text" name="fechaN" id="fechaN" class="form-control">
        
        <label for="fechaE">Fecha de Entrada</label>    
        <input type="text" name="fechaE" id="fechaE" class="form-control">
        
        <label for="genero">Género</label>    
        <input type="text" name="genero" id="genero" class="form-control">
        
        <label for="correo">Correo</label>    
        <input type="text" name="correo" id="correo" class="form-control">
        
        <label for="nombreU">Nombre de Usuario</label>    
        <input type="text" name="nombreU" id="nombreU" class="form-control">
        
        <label for="contraseña">Contraseña</label>    
        <input type="password" name="contrasena" id="contrasena" class="form-control">
        
        <input type="submit" name="boton" value="Insertar Registro" class="btn btn-primary">
    </form>
</div>

    </form>
    </div>
    </section>         
</body>
</html>