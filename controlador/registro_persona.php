<?php 

include "conexion/conexion.php";

if (!empty($_POST["btnenviar"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["telefono"]) && !empty($_POST["correo"]) && !empty($_POST["asunto"]) && !empty($_POST["fecha"]) && !empty($_POST["comentario"])) {
        
        $nombre = $_POST["nombre"];
        $telefono = $_POST["telefono"];
        $correo = $_POST["correo"];
        $asunto = $_POST["asunto"];
        $fecha = $_POST["fecha"];
        $comentario = $_POST["comentario"];

        $sql = $conexion->query("insert into contacto(nombre,telefono,correo,asunto,fecha,comentario)values('$nombre',' $telefono',' $correo','$asunto','$fecha','$comentario')");
        if ($sql) {
            echo"<div class=alert alert-success>persona registrada correctamente</div";
        } else {
            echo"<div class=alert alert-danger>Error al registrarse</div";
        }
        
    }else{
        echo"<div class=alert alert-warning>Alguno de los campos esta vacio</div";

    }

}

?>