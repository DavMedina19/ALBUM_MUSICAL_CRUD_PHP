<?php
#print_r($_POST);

if (!isset($_POST['oculto'])) {
    exit();
}

#CONEXION A LA BASE DE DATOS
include 'C:\wamp64\www\ALBUM_MUSICAL\Models\Entities\conexionbd.php';

#CAMPOS DEL FORMULARIO PARA AGREGAR CD'S (REGISTROS)
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$artista = $_POST['artista'];
$genero = $_POST['genero'];
$duracion = $_POST['duracion'];
$precio = $_POST['precio'];
$coleccionid = $_POST['coleccionid'];
$companiadiscograficaid = $_POST['companiadiscograficaid'];

#SENTENCIA SQL PARA REGISTRAR CD'S EN LA BD
$sentencia = $db->prepare("INSERT INTO cdsindividuales(ID,Titulo,Artista,Genero,Duracion,Precio,ColeccionID,CompaniaDiscograficaID)
VALUES(?,?,?,?,?,?,?,?)");
$resultado = $sentencia->execute([$id, $titulo, $artista, $genero, $duracion, $precio, $coleccionid, $companiadiscograficaid]);

#VALIDACION DE REDIRECCION
if ($resultado === true) {
    header('Location: http://localhost/ALBUM_MUSICAL/Models/Entities/indexCDSindividuales.php');
} else {
    echo 'error en insertar datos';
}
