<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP flujo de ejecucion</title>
</head>
<body>
    
<h1>Introdicion a la funciones y el flujo de ejecucion</h1>

<hr>

<h2>Se pueden tener varios bloques de codigo PHP</h2>

    <?php

    echo "Este es el primer mensaje <br>";

    //? Declaracion de una funcion
    function dameDatos () {
        echo "Este es un mensaje dentro de una funcion <br>";
    }


    //? Podemos incluir datos externos con la sentencia include
    include ('datos.php');

    dameDatos();

    //? y aqui invocamos la funcion que trajimos de los datos externos
    datosExternos();


    echo "Este es el segundo mensaje <br>";

    ?>

</body>
</html>