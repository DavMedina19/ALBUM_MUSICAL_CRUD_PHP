<?php
#VERIFICACION DE ENVIO DE DATOS
#print_r($_POST);

if (!isset($_POST['oculto'])) {
    header('Location: http://localhost/ALBUM_MUSICAL/Models/Entities/indexColecciones.php');
}

#CONEXION A LA BASE DE DATOS
include 'C:\wamp64\www\ALBUM_MUSICAL\Models\Entities\conexionbd.php';

#ARTISTAS ACTUALIZADOS
$id2 = $_POST['id2'];
$titulo = $_POST['titulo'];
$artistas = $_POST['artistas'];
$genero = $_POST['genero'];
$preciototal = $_POST['preciototal'];

#SQL PARA ARTISTAS ACTUALIZADOS
$sentencia = $db->prepare("UPDATE colecciones SET titulo=?, artistas=?, genero=?, preciototal=? WHERE id=?;");
$resultado = $sentencia->execute([$titulo,$artistas,$genero,$preciototal,$id2]);

#REDIRECCION PARA ACTUALIZACION CORRECTA DE ARTISTAS
if ($resultado === true) {
    header('Location: http://localhost/ALBUM_MUSICAL/Models/Entities/indexColecciones.php');
}else{
    echo'ERROR! NO SE PUDIERON ACTUALIZAR LOS NUEVOS REGISTROS';
}