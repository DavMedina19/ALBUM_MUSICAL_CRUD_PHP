<?php
#PRUEBA DE ENVIO DE COLECCIONES (DATOS)
#print_r($_GET);

if (!isset($_GET['id'])) {
    header('Location: http://localhost/ALBUM_MUSICAL/Models/Entities/indexColecciones.php');
}

$EliminarRegistro = $_GET['id'];
#CONEXION A LA BASE DE DATOS
include 'C:\wamp64\www\ALBUM_MUSICAL\Models\Entities\conexionbd.php';

#SENTENCIA PARA ELIMINAR REGISTRO
$sentencia = $db->prepare("DELETE FROM colecciones WHERE id=?;");
$resultado = $sentencia->execute([$EliminarRegistro]);

#VALIDACION DE REDIRECCION
if ($resultado === true) {
    header('Location: http://localhost/ALBUM_MUSICAL/Models/Entities/indexColecciones.php');
} else {
    echo 'ERROR AL ELIMINAR COLECCION';
}
