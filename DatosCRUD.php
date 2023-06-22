<?php

include_once('ConexionCRUD.php');

class cCRUD{

    public static function mostrarUsuarios(){
        $query = Conexion::ConexionBD()-> prepare ("select * from serv_dj");
        $query -> execute();
        $datos = $query->fetchAll();
        return $datos;
        } 

    public static function insertarNuevoUsuario(){
        $Folio = $_POST["Folio"] ?? null;
        $Nombre = $_POST["Nombre"] ?? null;
        $ApellidoPaterno = $_POST["AP"] ?? null;
        $ApellidoMaterno = $_POST["AM"] ?? null;
        $Correo = $_POST["Correo"] ?? null;
        $CURP = $_POST["CURP"] ?? null;
        $Telefono = $_POST["Telefono"] ?? null;
        $EntidadFederativa = $_POST["EF"] ?? null;
        $Alcaldia =  $_POST["Alcaldia"] ?? null;
        $Evento = $_POST["Evento"] ?? null;
        $FechaEvento = $_POST["FechaEvento"] ?? null;
        $HoraEvento = $_POST["HoraEvento"] ?? null;
        $NumeroInvitados = $_POST["NumInvitados"] ?? null;
        $DJ= $_POST["DJ"] ?? null;
        $lugar=$_POST["Lugar"] ?? null;

        $query = Conexion::ConexionBD()-> prepare ("INSERT into serv_dj(Folio,Nombre,Apellido Paterno,Apellido Materno,Correo,CURP,Telefono,EntidadFederativa,Alcaldia,Evento,FechaEvento,HoraEvento,NumeroInvitados,DJ,Lugar) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

        $query->bindParam(1,$Folio,PDO::PARAM_STR);
        $query->bindParam(2,$Nombre,PDO::PARAM_STR);
        $query->bindParam(3,$ApellidoPaterno,PDO::PARAM_STR);
        $query->bindParam(4,$ApellidoMaterno,PDO::PARAM_STR);
        $query->bindParam(5,$Correo,PDO::PARAM_STR);
        $query->bindParam(6,$CURP,PDO::PARAM_STR);
        $query->bindParam(7,$Telefono,PDO::PARAM_INT);
        $query->bindParam(8,$EntidadFederativa,PDO::PARAM_STR);
        $query->bindParam(9,$Alcaldia,PDO::PARAM_STR);
        $query->bindParam(10,$Evento,PDO::PARAM_STR);
        $query->bindParam(11,$FechaEvento,PDO::PARAM_STR);
        $query->bindParam(12,$HoraEvento,PDO::PARAM_STR);
        $query->bindParam(13,$NumeroInvitados,PDO::PARAM_INT);
        $query->bindParam(14,$DJ,PDO::PARAM_STR);
        $query->bindParam(15,$lugar,PDO::PARAM_STR);

        if($query->execute()){
            header("location: CRUD.php");

        }
        else{
            echo "Ingreso incorrecto";
        }

    }

    public static function modificarAlumno(){
        $Folio = $_POST["Folio"] ?? null;
        $Nombre = $_POST["Nombre"] ?? null;
        $ApellidoPaterno = $_POST["AP"] ?? null;
        $ApellidoMaterno = $_POST["AM"] ?? null;
        $Correo = $_POST["Correo"] ?? null;
        $CURP = $_POST["CURP"] ?? null;
        $Telefono = $_POST["Telefono"] ?? null;
        $EntidadFederativa = $_POST["EF"] ?? null;
        $Alcaldia =  $_POST["Alcaldia"] ?? null;
        $Evento = $_POST["Evento"] ?? null;
        $FechaEvento = $_POST["FechaEvento"] ?? null;
        $HoraEvento = $_POST["HoraEvento"] ?? null;
        $NumeroInvitados = $_POST["NumInvitados"] ?? null;
        $DJ= $_POST["DJ"] ?? null;
        $lugar=$_POST["Lugar"] ?? null;

        $query = Conexion::ConexionBD()-> prepare ("UPDATE serv_dj SET serv_dj.Folio = ? ,serv_dj.Nombre = ?,serv_dj.Apellido Paterno = ?,serv_dj.Apellido Materno = ?,serv_dj.Correo = ?,serv_dj.CURP = ?,serv_dj.Telefono = ?,serv_dj.EntidadFederativa = ?,serv_dj.Alcaldia = ?,serv_dj.Evento = ?,serv_dj.FechaEvento = ?,serv_dj.HoraEvento = ?,serv_dj.NumeroInvitados = ?,serv_dj.DJ = ?,serv_dj.Lugar = ? WHERE serv_dj.Folio = ?;");

        $query->bindParam(1,$Folio,PDO::PARAM_STR);
        $query->bindParam(2,$Nombre,PDO::PARAM_STR);
        $query->bindParam(3,$ApellidoPaterno,PDO::PARAM_STR);
        $query->bindParam(4,$ApellidoMaterno,PDO::PARAM_STR);
        $query->bindParam(5,$Correo,PDO::PARAM_STR);
        $query->bindParam(6,$CURP,PDO::PARAM_STR);
        $query->bindParam(7,$Telefono,PDO::PARAM_INT);
        $query->bindParam(8,$EntidadFederativa,PDO::PARAM_STR);
        $query->bindParam(9,$Alcaldia,PDO::PARAM_STR);
        $query->bindParam(10,$Evento,PDO::PARAM_STR);
        $query->bindParam(11,$FechaEvento,PDO::PARAM_STR);
        $query->bindParam(12,$HoraEvento,PDO::PARAM_STR);
        $query->bindParam(13,$NumeroInvitados,PDO::PARAM_INT);
        $query->bindParam(14,$DJ,PDO::PARAM_STR);
        $query->bindParam(15,$lugar,PDO::PARAM_STR);

        if($query->execute()){
            header("location: CRUD.php");

        }
        else{
            echo "Ingreso incorrecto";
        }

    }


    public static function eliminarUsuario(){
        $Folio = $_POST["Folio"] ?? null;

        $query = Conexion::ConexionBD()-> prepare ("DELETE from serv_dj WHERE serv_dj.Folio = ?; ");

        $query->bindParam(1,$Folio,PDO::PARAM_STR);

        if($query->execute()){
            header("location: CRUD.php");

        }
        else{
            echo "Ingreso incorrecto";
        }

    }



}


if (array_key_exists('insertar',$_POST)){
    cCRUD::insertarNuevoUsuario();
}

if (array_key_exists('modificar',$_POST)){
    cCRUD::modificarAlumno();
}

if (array_key_exists('eliminar',$_POST)){
    cCRUD::eliminarUsuario();
}


?>