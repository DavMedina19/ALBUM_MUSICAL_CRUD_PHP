<?php
#print_r($_POST);

if (!isset($_POST['oculto'])) {
    exit();
}

#CONEXION A LA BASE DE DATOS
include 'C:\wamp64\www\ALBUM_MUSICAL\Models\Entities\conexionbd.php';

#CAMPOS DEL FORMULARIO PARA AGREGAR NUEVAS COLECCIONES (REGISTROS)
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$artistas = $_POST['artistas'];
$genero = $_POST['genero'];
$preciototal = $_POST['preciototal'];

#SENTENCIA SQL PARA REGISTRAR COLECCIONES EN LA BD
$sentencia = $db->prepare("INSERT INTO colecciones(ID,Titulo,Artistas,Genero,PrecioTotal)
VALUES(?,?,?,?,?)");
$resultado = $sentencia->execute([$id, $titulo, $artistas, $genero, $preciototal]);

#VALIDACION DE REDIRECCION
if ($resultado === true) {
    header('Location: http://localhost/ALBUM_MUSICAL/Models/Entities/indexColecciones.php');
} else {
    echo 'error en insertar datos';
}
