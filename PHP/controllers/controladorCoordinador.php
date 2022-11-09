<?php
    include_once("../models/classCoordinador.php");
    if(!isset($_REQUEST["id"])){
        $_REQUEST["id"]=0;
    }

if(!isset($_REQUEST["coordinador"])){
    if(($_REQUEST['id']!=null)&&($_REQUEST["value"]=="Borra")){
        $id = $_REQUEST['id'];    
        $nuevoCoordinador = new Coordinador ();   
        $nuevoCoordinador -> borrarCoordinador($id);

    }elseif(isset($_REQUEST["Add"])) {
        header("location: ../views/coordinador/addcoordinador.php");

    }elseif(isset($_POST["btnNewCoor1"]) && ($_REQUEST["btnNewCoor1"] != null)){
        $NOMBRE = $_REQUEST['newNombreCoor'];
        $APELLIDO = $_REQUEST['newApellidoCoor'];
        $CORREO = $_REQUEST['newCorreoCoor'];
        $PROGRAMA = $_REQUEST['newProgramaCoor'];
        $nuevoCoordinador = new Coordinador ();   
        $nuevoCoordinador -> addCoordinador($NOMBRE, $APELLIDO, $CORREO, $PROGRAMA);

    }elseif(($_REQUEST['id'] != null) && ($_REQUEST['value'] == "Actualiza")) {
        header("location: ../views/coordinador/actualizarcoordinador.php?id=".$_REQUEST['id']);
    }
    elseif(isset($_POST["btnNewAlumno1"]) && ($_REQUEST['btnNewAlumno1'] != null)){
        $id = $_REQUEST['nuevoIdCoor'];
        $NOMBRE = $_REQUEST["nuevoNombreCoor"];
        $APELLIDO = $_REQUEST["nuevoApellidoCoor"];
        $CORREO = $_REQUEST["nuevoCorreoCoor"];
        $PROGRAMA = $_REQUEST["nuevoProgramaCoor"];
        $nuevoCoordinador = new Coordinador();
        $nuevoCoordinador -> actualizarCoordinador($nombre, $apellido, $correo, $programa, $id);
     };
    }
    elseif($_REQUEST["coordinador"] ==1){
        header("location: ../views/coordinador.php");
    };  
    ?>