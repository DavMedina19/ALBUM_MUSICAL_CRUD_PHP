<?php
include 'C:\wamp64\www\ALBUM_MUSICAL\Models\Entities\conexionbd.php';
$sentencia = $db->query("SELECT * FROM companiasdiscograficas;");
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
        <h3>LISTA DE REGISTRO DE COMPAÑIAS DISCOGRAFICAS</h3>
        <a href="/ALBUM_MUSICAL/Views/forms/usuarios/form4_insert.php"><button>REGISTRAR UNA NUEVA COMPAÑIA</button></a>
        <table>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Pais</td>
                <td>Ciudad</td>
                <td>Direccion</td>
            </tr>
            <?php foreach ($dato as $registroCOD) { ?>
                <tr>
                    <td><?php echo $registroCOD->ID; ?></td>
                    <td><?php echo $registroCOD->Nombre; ?></td>
                    <td><?php echo $registroCOD->Pais; ?></td>
                    <td><?php echo $registroCOD->Ciudad; ?></td>
                    <td><?php echo $registroCOD->Direccion; ?></td>
                    <td> <a href="/ALBUM_MUSICAL/Controllers/update/form4_update.php?id=<?php echo $registroCOD->ID; ?>"><button>EDITAR COMPAÑIA</button></a></td>
                    <td> <a href="/ALBUM_MUSICAL/Controllers/delete/delete4.php?id=<?php echo $registroCOD->ID; ?>"><button>ELIMINAR COMPAÑIA</button></a></td>
                </tr>
            <?php } ?>
        </table>
    </center>
</body>

</html>