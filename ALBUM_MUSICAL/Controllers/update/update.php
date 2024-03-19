<?php
#VERIFICACION DE ENVIO DE DATOS
#print_r($_POST);

if (!isset($_POST['oculto'])) {
    header('Location: http://localhost/ALBUM_MUSICAL/Models/Entities/indexArtistas.php');
}

#CONEXION A LA BASE DE DATOS
include 'C:\wamp64\www\ALBUM_MUSICAL\Models\Entities\conexionbd.php';

#ARTISTAS ACTUALIZADOS
$id2 = $_POST['id2'];
$nombre = $_POST['nombre'];
$paisorigen = $_POST['paisorigen'];
$estilomusical = $_POST['estilomusical'];

#SQL PARA ARTISTAS ACTUALIZADOS
$sentencia = $db->prepare("UPDATE artistas SET nombre=?, paisorigen=?, estilomusical=? WHERE id=?;");
$resultado = $sentencia->execute([$nombre,$paisorigen,$estilomusical,$id2]);

#REDIRECCION PARA ACTUALIZACION CORRECTA DE ARTISTAS
if ($resultado === true) {
    header('Location: http://localhost/ALBUM_MUSICAL/Models/Entities/indexArtistas.php');
}else{
    echo'ERROR! NO SE PUDIERON ACTUALIZAR LOS NUEVOS REGISTROS';
}