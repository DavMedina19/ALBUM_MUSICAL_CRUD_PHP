<?php
#VERIFICACION DE ENVIO DE DATOS
#print_r($_POST);

if (!isset($_POST['oculto'])) {
    header('Location: http://localhost/ALBUM_MUSICAL/Models/Entities/indexCompDisco.php');
}

#CONEXION A LA BASE DE DATOS
include 'C:\wamp64\www\ALBUM_MUSICAL\Models\Entities\conexionbd.php';

#ARTISTAS ACTUALIZADOS
$id2 = $_POST['id2'];
$nombre = $_POST['nombre'];
$pais = $_POST['pais'];
$ciudad = $_POST['ciudad'];
$direccion = $_POST['direccion'];

#SQL PARA ARTISTAS ACTUALIZADOS
$sentencia = $db->prepare("UPDATE companiasdiscograficas SET nombre=?, pais=?, ciudad=?, direccion=? WHERE id=?;");
$resultado = $sentencia->execute([$nombre,$pais,$ciudad,$direccion,$id2]);

#REDIRECCION PARA ACTUALIZACION CORRECTA DE ARTISTAS
if ($resultado === true) {
    header('Location: http://localhost/ALBUM_MUSICAL/Models/Entities/indexCompDisco.php');
}else{
    echo'ERROR! NO SE PUDIERON ACTUALIZAR LOS NUEVOS REGISTROS';
}