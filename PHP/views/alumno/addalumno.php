<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD ALUMNO</title>
    <link rel="stylesheet" href="../../public/estilos.css">
</head>
<body>
<div class="contenedor">
    <Form  action="../../controllers/controladorAlumno.php" method= "Post" class="form">
    <h1> Agregar Alumno <h1>
    <label class="label">  </label>
    <input type="text" name="newNombreAlum" placeholder="Escriba su Nombre" />
    <br />
    <label class="label">  </label>
    <input type="text" name="newApellidoAlum" placeholder="Escriba su Apellido" />
    <br />
    <label class="label">  </label>
    <input type="email" name="newCorreoAlum" placeholder="Escriba su Correo" />
    <br />
    <label class="label">  </label>
    <input type="number" name="newTelefonoAlum" placeholder="Escriba su Telefono" />
    <br />
    <label class="label">  </label>
    <input type="text" name="newProgramaAlum" placeholder="Escriba su Programa" />
    <br />
        <input class="input" type='submit' id='btnNewAlumno' name='btnNewAlumno' value='Enviar'/>
        <input class="input" type='reset' id='' name='' value='Restablecer'/>
        <br> 
        <a href="../../views/aprendiz.php"> Regresar.. </a>
</form>
</div>
</body>
</html>

