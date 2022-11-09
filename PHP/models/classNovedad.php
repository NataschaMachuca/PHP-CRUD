<?php
class Novedad {
    public $TIPO;
    public $DESCRPCION;



    public function addNovedad($TIPO, $DESCRPCION) {
        require_once("../DAO/conectar.php");
        $conn = connect();
        $sql = "insert into novedad (TIPO, DESCRPCION) values (?, ?)";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute (Array($TIPO, $DESCRPCION));
        $conn = null;
        print("La novedad  $TIPO, $DESCRPCION ha sido agregada");
        print("<a href='../views/novedad.php'>Regresar</a>");
    }



    public function borrarNovedad($idNovedad) {
        require_once("../../19-10/DAO/conectar.php");
        $conn = connect();
        $sql = "delete from novedad where ID= ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute (Array($idNovedad));
        $conn = null;
        header('location:../views/novedad.php');
    }

    public function actualizarNovedad($tipo, $descrpcion, $id) {
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "UPDATE novedad SET TIPO =?, DESCRPCION= ? WHERE ID = ?;";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute (Array($tipo, $descrpcion, $id));
        $conn = null;
        print"La novedad $tipo, $descripcion ha sido Actualizado";
        header("location: ../views/novedad.php");
    }


    public function consultarNovedad(){
        require_once("../DAO/conectar.php");
        $conn = connect();
        $sql = "select * from novedad";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute();
        return $consulta;
        $conn = null;
    }

    public function consultarNovedadXId($id){
        require_once("../../DAO/conectar.php");
        $conn = connect();
        $sql = "select * from novedad where id = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($id));
        return $consulta;
        $conn = null;
    }
};
?>

