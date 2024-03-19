<?php
#VALIDACION DE DATOS NO VACIOS
if (!isset($_GET['id'])) {
    header('Location: http://localhost/ALBUM_MUSICAL/Models/Entities/indexCompDisco.php');
}
#CONEXION A LA BASE DE DATOS
include 'C:\wamp64\www\ALBUM_MUSICAL\Models\Entities\conexionbd.php';
#SENTENCIA SQL
$id = $_GET['id'];
$sentencia = $db->prepare("SELECT * FROM companiasdiscograficas WHERE id=?");
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
        <form action="update4.php" method="post">
            <h2>INGRESE UNA NUEVA COMPAÑIA DISCOGRAFICA</h2>
            <table>
                <tr>
                    <td>ID: <input type="text" name="id" require value="<?php echo $persona->ID;  ?>"></td>
                </tr>
                <tr>
                    <td>Nombre: <input type="text" name="nombre" require value="<?php echo $persona->Nombre;  ?>"></td>
                </tr>
                <tr>
                    <td>Pais: <input type="text" name="pais" require value="<?php echo $persona->Pais;  ?>"></td>
                </tr>
                <tr>
                    <td>Ciudad: <input type="text" name="ciudad" require value="<?php echo $persona->Ciudad;  ?>"></td>
                </tr>
                <tr>
                    <td>Direccion: <input type="text" name="direccion" require value="<?php echo $persona->Direccion;  ?>"></td>
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