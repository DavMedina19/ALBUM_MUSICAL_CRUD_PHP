<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <form action="insert3.php" method="post">
            <h2>INGRESA UNA NUEVA COLECCION</h2>
            <table>
                <tr>
                    <td>ID: <input type="text" name="id" require></td>
                </tr>
                <tr>
                    <td>Titulo: <input type="text" name="titulo" require></td>
                </tr>
                <tr>
                    <td>Artistas: <input type="text" name="artistas" require></td>
                </tr>
                <tr>
                    <td>Genero: <input type="text" name="genero" require></td>
                </tr>
                <tr>
                    <td>PrecioTotal: <input type="text" name="preciototal" require></td>
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