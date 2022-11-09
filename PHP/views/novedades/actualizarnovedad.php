<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/estilos.css">
    <title>ACTU NOVEDAD</title>
</head>
<body>
<?php
          require_once("../../models/classNovedad.php");
          $id = $_REQUEST['id'];
          $novedad = new Novedad();
          $datos = $novedad -> consultarNovedadXId($id);
          while($data = $datos -> fetch(PDO::FETCH_ASSOC)){
        print ' <div class="contenedor">
    <Form  action="../../controllers/controladorNovedad.php" method= "Post" class="form">
    <h1> Formulario para adicionar <h1>

    <label class="label">  </label>
    <input type="hidden" value="'. $data['ID']. '" name="nuevoId" id="nuevoId" />
    <br />

    <label class="label">  </label>
    <input type="text" value="'. $data['TIPO']. '" name="nuevoTipo" id="nuevoTipo" placeholder="Escriba el tipo" />
    <br />

    <label class="label">  </label>
    <input type="text" value="'. $data['DESCRPCION']. '" name="nuevaDescripcion" id="nuevaDescripcion" placeholder="Escriba la descripcion" />

    <input type="submit" name="btnNewNove2" id="btnNewNove2" value="Enviar"/>
    <input type="reset" name="" id="" value="Restablecer">

        <br> 
            <a href="../../views/novedad.php"> Regresar.. </a>
            </form>
        </div>';
    }
    ?>
</body>
</html>