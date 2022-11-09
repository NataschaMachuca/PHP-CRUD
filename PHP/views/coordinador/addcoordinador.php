<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/estilos.css">
    <title>Document</title>
</head>
<body>
<div class="contenedor">
    
    <Form  action="../../controllers/controladorCoordinador.php" method= "Post" class="form">
    <h1> Adicionar Coordinador <h1>
    <label class="label">  </label>
    <input type="text" name="newNombreCoor" placeholder="Escriba su Nombre" />
    <br />
    <label class="label">  </label>
    <input type="text" name="newApellidoCoor" placeholder="Escriba su Apellido" />
    <br />
    <label class="label">  </label>
    <input type="email" name="newCorreoCoor" placeholder="Escriba su Correo" />
    <br />
    <label class="label">  </label>
    <input type="text" name="newProgramaCoor" placeholder="Escriba su Programa" />
    <br />
        <input class="input" type='submit' id='btnNewCoor1' name='btnNewCoor1' value='Enviar'></input>
        <input class="input" type='reset' id='' name='' value='Restablecer'></input>
        <br> 
        <a href="../../views/coordinador.php"> Regresar.. </a>
</form>
</div>
</body>
</html>

