<?php
include 'C:\wamp64\www\ALBUM_MUSICAL\Models\Entities\conexionbd.php';
$sentencia = $db->query("SELECT * FROM cdsindividuales;");
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
        <h3>LISTA DE REGISTRO DE CDS</h3>
        <a href="/ALBUM_MUSICAL/Views/forms/usuarios/form2_insert.php"><button>REGISTRAR NUEVO CD</button></a>
        <table>
            <tr>
                <td>ID</td>
                <td>Titulo</td>
                <td>Artista</td>
                <td>Genero</td>
                <td>Duracion</td>
                <td>Precio</td>
                <td>ColeccionID</td>
                <td>CompaniaDiscograficaID</td>
            </tr>
            <?php foreach ($dato as $registroCD) { ?>
                <tr>
                    <td><?php echo $registroCD->ID; ?></td>
                    <td><?php echo $registroCD->Titulo; ?></td>
                    <td><?php echo $registroCD->Artista; ?></td>
                    <td><?php echo $registroCD->Genero; ?></td>
                    <td><?php echo $registroCD->Duracion; ?></td>
                    <td><?php echo $registroCD->Precio; ?></td>
                    <td><?php echo $registroCD->ColeccionID; ?></td>
                    <td><?php echo $registroCD->CompaniaDiscograficaID; ?></td>
                    <td> <a href="/ALBUM_MUSICAL/Controllers/update/form2_update.php?id=<?php echo $registroCD->ID; ?>"><button>EDITAR CD</button></a></td>
                    <td> <a href="/ALBUM_MUSICAL/Controllers/delete/delete2.php?id=<?php echo $registroCD->ID; ?>"><button>ELIMINAR CD</button></a></td>
                </tr>
            <?php } ?>
        </table>
    </center>
</body>

</html>