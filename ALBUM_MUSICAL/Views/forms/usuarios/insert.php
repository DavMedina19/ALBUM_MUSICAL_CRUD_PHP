<?php
#print_r($_POST);

if (!isset($_POST['oculto'])) {
    exit();
}

#CONEXION A LA BASE DE DATOS
include 'C:\wamp64\www\ALBUM_MUSICAL\Models\Entities\conexionbd.php';

#CAMPOS DEL FORMULARIO PARA INSERTAR ARTISTAS (REGISTROS)
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$paisorigen = $_POST['paisorigen'];
$estilomusical = $_POST['estilomusical'];

#SENTENCIA SQL PARA REGISTRAR ARTISTAS EN LA BD
$sentencia = $db->prepare("INSERT INTO artistas(ID,Nombre,PaisOrigen,EstiloMusical)
VALUES(?,?,?,?)");
$resultado = $sentencia->execute([$id, $nombre, $paisorigen, $estilomusical]);

#VALIDACION DE REDIRECCION
if ($resultado === true) {
    header('Location: http://localhost/ALBUM_MUSICAL/Models/Entities/indexArtistas.php');
} else {
    echo 'error en insertar datos';
}
