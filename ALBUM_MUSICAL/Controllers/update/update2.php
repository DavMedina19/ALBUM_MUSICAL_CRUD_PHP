<?php
#VERIFICACION DE ENVIO DE DATOS
#print_r($_POST);

if (!isset($_POST['oculto'])) {
    header('Location: http://localhost/ALBUM_MUSICAL/Models/Entities/indexCDSindividuales.php');
}

#CONEXION A LA BASE DE DATOS
include 'C:\wamp64\www\ALBUM_MUSICAL\Models\Entities\conexionbd.php';

#ARTISTAS ACTUALIZADOS
$id2 = $_POST['id2'];
$titulo = $_POST['titulo'];
$artista = $_POST['artista'];
$genero = $_POST['genero'];
$duracion = $_POST['duracion'];
$precio = $_POST['precio'];
$coleccionid = $_POST['coleccionid'];
$companiadiscograficaid = $_POST['companiadiscograficaid'];

#SQL PARA ARTISTAS ACTUALIZADOS
$sentencia = $db->prepare("UPDATE cdsindividuales SET titulo=?, artista=?, genero=?, duracion=?, precio=?, coleccionid=?, companiadiscograficaid=? WHERE id=?;");
$resultado = $sentencia->execute([$titulo,$artista,$genero,$duracion,$precio,$coleccionid,$companiadiscograficaid,$id2]);

#REDIRECCION PARA ACTUALIZACION CORRECTA DE ARTISTAS
if ($resultado === true) {
    header('Location: http://localhost/ALBUM_MUSICAL/Models/Entities/indexCDSindividuales.php');
}else{
    echo'ERROR! NO SE PUDIERON ACTUALIZAR LOS NUEVOS REGISTROS';
}