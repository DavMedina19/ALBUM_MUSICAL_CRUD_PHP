<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <form action="insert4.php" method="post">
            <h2>INGRESE UNA NUEVA COMPAÑIA DISCOGRAFICA</h2>
            <table>
                <tr>
                    <td>ID: <input type="text" name="id" require></td>
                </tr>
                <tr>
                    <td>Nombre: <input type="text" name="nombre" require></td>
                </tr>
                <tr>
                    <td>Pais: <input type="text" name="pais" require></td>
                </tr>
                <tr>
                    <td>Ciudad: <input type="text" name="ciudad" require></td>
                </tr>
                <tr>
                    <td>Direccion: <input type="text" name="direccion" require></td>
                </tr>
                <input type="hidden" name="oculto" value="1">
                <tr>
                    <td><input type="reset"></td>
                    <td><input type="submit" value="Registrar"></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>