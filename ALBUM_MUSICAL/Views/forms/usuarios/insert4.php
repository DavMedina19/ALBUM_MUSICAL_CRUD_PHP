<?php
#print_r($_POST);

if (!isset($_POST['oculto'])) {
    exit();
}

#CONEXION A LA BASE DE DATOS
include 'C:\wamp64\www\ALBUM_MUSICAL\Models\Entities\conexionbd.php';

#CAMPOS DEL FORMULARIO PARA AGREGAR NUEVAS COMPAÑIAS DISCOGRAFICAS (REGISTROS)
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$pais = $_POST['pais'];
$ciudad = $_POST['ciudad'];
$direccion = $_POST['direccion'];

#SENTENCIA SQL PARA REGISTRAR COMPAÑIAS EN LA BD
$sentencia = $db->prepare("INSERT INTO companiasdiscograficas(ID,Nombre,Pais,Ciudad,Direccion)
VALUES(?,?,?,?,?)");
$resultado = $sentencia->execute([$id, $nombre, $pais, $ciudad, $direccion]);

#VALIDACION DE REDIRECCION
if ($resultado === true) {
    header('Location: http://localhost/ALBUM_MUSICAL/Models/Entities/indexCompDisco.php');
} else {
    echo 'error en insertar datos';
}