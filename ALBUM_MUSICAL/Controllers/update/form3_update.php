<?php
#VALIDACION DE DATOS NO VACIOS
if (!isset($_GET['id'])) {
    header('Location: http://localhost/ALBUM_MUSICAL/Models/Entities/indexColecciones.php');
}
#CONEXION A LA BASE DE DATOS
include 'C:\wamp64\www\ALBUM_MUSICAL\Models\Entities\conexionbd.php';
#SENTENCIA SQL
$id = $_GET['id'];
$sentencia = $db->prepare("SELECT * FROM colecciones WHERE id=?");
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
        <form action="update3.php" method="post">
            <h2>INGRESA UNA NUEVA COLECCION</h2>
            <table>
                <tr>
                    <td>ID: <input type="text" name="id" require value="<?php echo $persona->ID;  ?>"></td>
                </tr>
                <tr>
                    <td>Titulo: <input type="text" name="titulo" require value="<?php echo $persona->Titulo;  ?>"></td>
                </tr>
                <tr>
                    <td>Artistas: <input type="text" name="artistas" require value="<?php echo $persona->Artistas;  ?>"></td>
                </tr>
                <tr>
                    <td>Genero: <input type="text" name="genero" require value="<?php echo $persona->Genero;  ?>"></td>
                </tr>
                <tr>
                    <td>PrecioTotal: <input type="text" name="preciototal" require value="<?php echo $persona->PrecioTotal;  ?>"></td>
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