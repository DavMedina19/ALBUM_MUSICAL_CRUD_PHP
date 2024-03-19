<?php
#VALIDACION DE DATOS NO VACIOS
if (!isset($_GET['id'])) {
    header('Location: http://localhost/ALBUM_MUSICAL/Models/Entities/indexCDSindividuales.php/');
}
#CONEXION A LA BASE DE DATOS
include 'C:\wamp64\www\ALBUM_MUSICAL\Models\Entities\conexionbd.php';
#SENTENCIA SQL
$id = $_GET['id'];
$sentencia = $db->prepare("SELECT * FROM cdsindividuales WHERE id=?");
$resultado = $sentencia->execute([$id]);
$persona = $sentencia->fetch(PDO::FETCH_OBJ);
#PRUEBA
#print_r($persona);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <form action="update2.php" method="post">
            <h2>INGRESA UN NUEVO CD</h2>
            <table>
                <tr>
                    <td>ID: <input type="text" name="id" require value="<?php echo $persona->ID;  ?>"></td>
                </tr>
                <tr>
                    <td>Titulo: <input type="text" name="titulo" require value="<?php echo $persona->Titulo;  ?>"></td>
                </tr>
                <tr>
                    <td>Artista: <input type="text" name="artista" require value="<?php echo $persona->Artista;  ?>"></td>
                </tr>
                <tr>
                    <td>Genero: <input type="text" name="genero" require value="<?php echo $persona->Genero;  ?>"></td>
                </tr>
                <tr>
                    <td>Duracion: <input type="text" name="duracion" require value="<?php echo $persona->Duracion;  ?>"></td>
                </tr>
                <tr>
                    <td>Precio: <input type="text" name="precio" require value="<?php echo $persona->Precio;  ?>"></td>
                </tr>
                <tr>
                    <td>ColeccionID: <input type="text" name="coleccionid" require value="<?php echo $persona->ColeccionID;  ?>"></td>
                </tr>
                <tr>
                    <td>CompaniaDiscograficaID: <input type="text" name="companiadiscograficaid" require value="<?php echo $persona->CompaniaDiscograficaID;  ?>"></td>
                </tr>

                <tr>
                    <input type="hidden" name="oculto">
                    <input type="hidden" name="id2" value="<?php echo $persona->ID; ?>">
                    <td colspan="2"><input type="submit" value="Guardar"> </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>