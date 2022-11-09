 <?php
    include_once("../models/classAlumno.php");
    if(!isset($_REQUEST["id"])){
        $_REQUEST["id"]=0;
    }
    
if(!isset($_REQUEST["alumno"])){
    if(($_REQUEST['id']!= null) && ($_REQUEST["value"]=="Borra")){
        $id = $_REQUEST['id'];
        $nuevoAprendiz = new Aprendiz();
        $nuevoAprendiz -> borrarAprendiz($id);


}elseif(isset($_REQUEST["Add"])) {
        header("location: ../views/alumno/addalumno.php");
        
}elseif(isset($_POST["btnNewAlumno"]) && ($_REQUEST["btnNewAlumno"] != null)){
        $NOMBRE = $_REQUEST['newNombreAlum'];
        $APELLIDO = $_REQUEST['newApellidoAlum'];
        $CORREO = $_REQUEST['newCorreoAlum'];
        $TELEFONO = $_REQUEST['newTelefonoAlum'];
        $PROGRAMA = $_REQUEST['newProgramaAlum'];
        $nuevoAprendiz = new Aprendiz();
        $nuevoAprendiz -> addAprendiz( $NOMBRE, $APELLIDO, $CORREO, $TELEFONO, $PROGRAMA);


}elseif(($_REQUEST['id'] != null) && ($_REQUEST["value"] == "Actualiza")){
        header("location: ../views/alumno/actualizaralumno.php?id=".$_REQUEST['id']);

}elseif(isset($_POST["btnActuAlumno"]) && ($_REQUEST["btnActuAlumno"] != null)){
    $ID = $_REQUEST['newId'];
    $nombre = $_REQUEST['newNombre'];
    $apellido = $_REQUEST['newApellido'];
    $correo = $_REQUEST['newCorreo'];
    $telefono = $_REQUEST['newTelefono'];
    $programa = $_REQUEST['newPrograma'];
    $nuevoAprendiz = new Aprendiz();
    $nuevoAprendiz -> actualizarAprendiz( $nombre,$apellido, $correo, $telefono, $programa, $ID);  
    }
}
elseif($_REQUEST["alumno"] ==1){
    header("location: ../views/aprendiz.php");
};
?> 
