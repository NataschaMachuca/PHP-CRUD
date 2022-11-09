<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTU ALUMNO</title>
    <link rel="stylesheet" href="../../public/estilos.css">
</head>
<body>
<?php
    require_once("../../models/classAlumno.php");
    $id = $_REQUEST['id'];
    $alumno = new Aprendiz();
    $datos = $alumno ->consultarAlumnoXId($id);
    while($data = $datos -> fetch(PDO::FETCH_ASSOC)){
print'
        <div class="contenedor">
        <Form class="form" action="../../controllers/controladorAlumno.php" method= "Post">
        <h1> Actualizar Alumno <h1>

        <label class="label">  </label>
        <input type="hidden"  value="'. $data['ID'].'" name="newId" id="newId"  placeholder="Escriba su Apellido"> <br>

        <label class="label">  </label>
        <input type="text" value="'. $data['NOMBRE']. '" name="newNombre" id="newNombre" required="" placeholder="Escriba su Nombre"> <br>

        <label class="label">  </label>
        <input type="text"  value="'. $data['APELLIDO']. '" name="newApellido" id="newApellido" placeholder="Escriba su Apellido"> <br>

        <label class="label">  </label>
        <input type="email"  value="'. $data['CORREO']. '" name="newCorreo" id="newCorreo"  placeholder="Escriba su Correo"> <br>

        <label class="label">  </label>
        <input type="number"  value="'.$data['TELEFONO'].'" name="newTelefono" id="newTelefono" placeholder="Escriba su Telefono"> <br>

        <label class="label">  </label>
        <input type="text"  value="'.$data['PROGRAMA'].'" name="newPrograma" id="newPrograma"placeholder="Escriba su Programa"> <br>

        <input class="input" type="submit" id="btnActuAlumno" name="btnActuAlumno" value="Enviar"></input>
        <input class="input" type="reset" id="" name="" value="Restablecer"></input>
        <br> 
        <a href="../../views/aprendiz.php"> Regresar.. </a>
        </form> 
        </div>';
    }
    ?>
    
</body>
</html>