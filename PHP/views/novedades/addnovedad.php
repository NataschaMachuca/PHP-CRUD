<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/estilos.css">
    <title> ADD NOVEDAD</title>
</head>
<body>
<div class="contenedor">
    <Form  action="../../controllers/controladorNovedad.php" method= "Post" class="form">
    <h1> Formulario para adicionar <h1>
    <label class="label">  </label>
    <input type="text" name="TipoNov" placeholder="Escriba el tipo" />
    <br />
    <label class="label">  </label>
    <input type="text" name="DesNov" placeholder="Escriba la descripcion" /><br> 
  
        <input class="input" type='submit' id='btnNewNov3' name='btnNewNov3' value='Enviar'></input> 
        <input class="input" type='reset' id='' name='' value='Restablecer'></input>
        <br> 
        <a href="../../views/novedad.php"> Regresar.. </a>
</form>
</div>
</body>
</html>

