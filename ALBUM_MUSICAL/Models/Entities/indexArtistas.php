<?php
include 'C:\wamp64\www\ALBUM_MUSICAL\Models\Entities\conexionbd.php';
$sentencia = $db->query("SELECT * FROM artistas;");
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
        <h3>LISTA DE REGISTRO DE ARTISTAS</h3>
        <a href="/ALBUM_MUSICAL/Views/forms/usuarios/form_insert.php"><button>REGISTRAR NUEVO ARTISTA</button></a>
        <table>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>PaisOrigen</td>
                <td>EstiloMusical</td>
            </tr>
            <?php foreach ($dato as $registroArtista) { ?>
                <tr>
                    <td><?php echo $registroArtista->ID; ?></td>
                    <td><?php echo $registroArtista->Nombre; ?></td>
                    <td><?php echo $registroArtista->PaisOrigen; ?></td>
                    <td><?php echo $registroArtista->EstiloMusical; ?></td>
                    <td> <a href="/ALBUM_MUSICAL/Controllers/update/form_update.php?id=<?php echo $registroArtista->ID; ?>"><button>EDITAR ARTISTA</button></a></td>
                    <td> <a href="/ALBUM_MUSICAL/Controllers/delete/delete.php?id=<?php echo $registroArtista->ID; ?>"><button>ELIMINAR ARTISTA</button></a></td>
                </tr>
            <?php } ?>
        </table>
    </center>
</body>

</html>