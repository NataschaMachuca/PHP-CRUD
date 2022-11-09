<?php
    require_once("../../models/classCoordinador.php");
    $id = $_REQUEST['id'];
    $coordinador = new Coordinador();
    $datos = $coordinador ->consultarCoordinadorXId($id);
    while($data = $datos -> fetch(PDO::FETCH_ASSOC)){
    print' <div class="contenedor">
    <Form  action="../../controllers/controladorCoordinador.php" method= "Post" class="form">
    <h1> Formulario para actualizar <h1>

    <label class="label">  </label>
    <input type="hidden" value="'. $data['id']. '" name="nuevoIdCoor" id="nuevoIdCoor" required="">
    <br />
    <label class="label">  </label>
    <input type="text" value="'. $data['NOMBRE']. '" name="nuevoNombreCoor" id="nuevoNombreCoor" placeholder="Escriba su Nombre" />
    <br />
    <label class="label">  </label>
    <input type="text" value="'. $data['APELLIDO']. '" name="nuevoApellidoCoor" id="nuevoApellidoCoor" placeholder="Escriba su Apellido" />
    <br />
    <label class="label">  </label>
    <input type="email" value="'. $data['CORREO']. '" name="nuevoCorreoCoor" id="nuevoCorreoCoor" placeholder="Escriba su Correo" />
    <br />
    <label class="label">  </label>
    <input type="text" value="'. $data['PROGRAMA']. '" name="nuevoProgramaCoor" id="nuevoProgramaCoor" placeholder="Escriba su Programa" />
    <br />
    <input type="submit" name="btnNewAlumno1" id="btnNewAlumno1" value="Enviar"/>
    <input type="reset" name="" id="" value="Restablecer">
    <br> 
    <a href="../../views/coordinador.php"> Regresar.. </a>
    </form>
    </div>';
}
?>
</body>

