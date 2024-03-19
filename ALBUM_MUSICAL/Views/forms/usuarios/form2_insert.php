<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <form action="insert2.php" method="post">
            <h2>INGRESA UN NUEVO CD</h2>
            <table>
                <tr>
                    <td>ID: <input type="text" name="id" require></td>
                </tr>
                <tr>
                    <td>Titulo: <input type="text" name="titulo" require></td>
                </tr>
                <tr>
                    <td>Artista: <input type="text" name="artista" require></td>
                </tr>
                <tr>
                    <td>Genero: <input type="text" name="genero" require></td>
                </tr>
                <tr>
                    <td>Duracion: <input type="text" name="duracion" require></td>
                </tr>
                <tr>
                    <td>Precio: <input type="text" name="precio" require></td>
                </tr>
                <tr>
                    <td>ColeccionID: <input type="text" name="coleccionid" require></td>
                </tr>
                <tr>
                    <td>CompaniaDiscograficaID: <input type="text" name="companiadiscograficaid" require></td>
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