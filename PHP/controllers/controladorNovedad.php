<?php
include_once("../models/classNovedad.php");
if(!isset($_REQUEST['id'])){
$_REQUEST['id'] = 0;
}

if(!isset($_REQUEST["novedad"])){
    if(($_REQUEST['id']!=null)&&($_REQUEST["value"]=="Borra")){
        $ID_NOVEDAD = $_REQUEST['id'];
        $nuevoNovedad = new Novedad();
        $nuevoNovedad -> borrarNovedad($ID_NOVEDAD);

}elseif(isset($_REQUEST["Add"])) {   
    header("location: ../views/novedades/addnovedad.php");      
}elseif(isset($_POST["btnNewNov3"]) && ($_REQUEST["btnNewNov3"] != null)){
    $TIPO = $_REQUEST['TipoNov'];
    $DESCRPCION = $_REQUEST['DesNov'];
    $nuevoNovedad = new Novedad ();   
    $nuevoNovedad -> addNovedad($TIPO, $DESCRPCION);

}elseif(($_REQUEST['id'] != null) && ($_REQUEST['value'] == "Actualiza")) {
        header("location: ../views/novedades/actualizarnovedad.php?id=".$_REQUEST['id']);
     }
     elseif(isset($_POST["btnNewNove2"]) && ($_REQUEST['btnNewNove2'] != null)){
        $id = $_REQUEST['nuevoId'];
        $tipo = $_REQUEST["nuevoTipo"];
        $descripcion = $_REQUEST["nuevaDescripcion"];
        $novedad = new Novedad();
        $novedad ->  actualizarNovedad($tipo, $descripcion, $id);
     };
}
    elseif($_REQUEST["novedad"] ==1){
        header("location: ../views/novedad.php");
}; 
?>