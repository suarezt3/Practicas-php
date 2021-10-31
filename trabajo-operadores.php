<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Trabajo operadores</title>
</head>


<!--Las variables super globales tienen un ambito que incluso se salen del archivo para poder ver la informacion que es enviada desde otro -->

    <body>
        <h1>USANDO OPERADORES DE COMPARACIÓN</h1>
<!--action="validacion.php" nos lleva a ese documento externo--> 
        <form action="validacion.php" method="post" name="datos_usuario" id="datos_usuario">
            <table width="15%" align="center">
                <tr>
                    <td>Nombre:</td>
                    <td><label for="nombre_usuario"></label>
                        <input type="text" name="nombre_usuario" id="nombre_usuario">
                    </td>
                </tr>
                <tr>
                    <td>Edad:</td>
                    <td><label for="edad_usuario"></label>
                        <input type="text" name="edad_usuario" id="edad_usuario">
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
                </tr>
            </table>
        </form>

        


    </body>

</html>