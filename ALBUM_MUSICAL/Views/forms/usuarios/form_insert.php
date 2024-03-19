<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <form action="insert.php" method="post">
            <h2>INGRESA UN NUEVO ARTISTA</h2>
            <table>
                <tr>
                    <td>ID: <input type="text" name="id" require></td>
                </tr>
                <tr>
                    <td>Nombre: <input type="text" name="nombre" require></td>
                </tr>
                <tr>
                    <td>PaisOrigen: <input type="text" name="paisorigen" require></td>
                </tr>
                <tr>
                    <td>EstiloMusical: <input type="text" name="estilomusical" require></td>
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