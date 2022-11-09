<?php
class Aprendiz {
    Public $ID_APRENDIZ;
    public $nombre;
    public $apellido;
    public $correo;
    public $telefono;
    public $programa;

    public function addAprendiz($NOMBRE, $APELLIDO, $CORREO, $TELEFONO, $PROGRAMA) {
        require_once("../DAO/conectar.php");
        $conn = connect();
        $sql = "insert into aprendiz (NOMBRE, APELLIDO, CORREO, TELEFONO, PROGRAMA) values (?, ?, ?, ?, ?)";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute (Array($NOMBRE, $APELLIDO, $CORREO, $TELEFONO, $PROGRAMA));
        $conn = null;
        print("El alumno  $NOMBRE, $APELLIDO, $CORREO, $TELEFONO, $PROGRAMA ha sido agregada");
        print("<a href='../views/aprendiz.php'> Regresar... </a>");
    }


    public function borrarAprendiz($idAprendiz) {
        require_once("../DAO/conectar.php");
        $conn = connect();
        $sql = "delete from aprendiz where ID= ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute (Array($idAprendiz));
        $conn = null;
        header('location: ../views/aprendiz.php');
    }
    public function consultarAlumno(){
        require_once("../DAO/conectar.php");
        $conn = connect();
        $sql = "select * from aprendiz ";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute();
        return $consulta;
        $conn = null;
    }

    public function actualizarAprendiz ($nombre, $apellido, $correo,$telefono,$programa, $id) {
        require_once("../DAO/conectar.php");
        $conn = connect();
        $sql = "UPDATE aprendiz SET NOMBRE =?, APELLIDO= ?, CORREO= ?, TELEFONO= ?, PROGRAMA= ? WHERE ID = ?;";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute (Array($nombre, $apellido, $correo, $telefono, $programa, $id));
        $conn = null;
        print"El alumno $nombre, $apellido, $correo, $telefono, $programa ha sido Actualizado";
        header("location: ../views/aprendiz.php");
    }

    public function consultarAlumnoxId($id){
        require_once("../../DAO/conectar.php");
        $conn = connect();
        $sql = "select * from aprendiz where id = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($id));
        return $consulta;
        $conn = null;
    }
};
?> 