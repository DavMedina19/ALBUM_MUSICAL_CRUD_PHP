<?php
include 'C:\wamp64\www\ALBUM_MUSICAL\Models\Entities\conexionbd.php';
$sentencia = $db->query("SELECT * FROM colecciones;");
$dato = $sentencia->fetchAll(PDO::FETCH_OBJ);
print_r($dato);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APP ALBUM MUSICAL</title>
</head>

<body>
    <center>
        <h3>LISTA DE REGISTRO DE COLECCIONES</h3>
        <a href="/ALBUM_MUSICAL/Views/forms/usuarios/form3_insert.php"><button>REGISTRAR UNA NUEVA COLECCION</button></a>
        <table>
            <tr>
                <td>ID</td>
                <td>Titulo</td>
                <td>Artistas</td>
                <td>Genero</td>
                <td>PrecioTotal</td>
            </tr>
            <?php foreach ($dato as $registroCO) { ?>
                <tr>
                    <td><?php echo $registroCO->ID; ?></td>
                    <td><?php echo $registroCO->Titulo; ?></td>
                    <td><?php echo $registroCO->Artistas; ?></td>
                    <td><?php echo $registroCO->Genero; ?></td>
                    <td><?php echo $registroCO->PrecioTotal; ?></td>
                    <td> <a href="/ALBUM_MUSICAL/Controllers/update/form3_update.php?id=<?php echo $registroCO->ID; ?>"><button>EDITAR COLECCION</button></a></td>
                    <td> <a href="/ALBUM_MUSICAL/Controllers/delete/delete3.php?id=<?php echo $registroCO->ID; ?>"><button>ELIMINAR COLECCION</button></a></td>
                </tr>
            <?php } ?>
        </table>
    </center>
</body>

</html>