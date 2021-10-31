<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Strings</title>
</head>
<body>

<h1 class="title">String</h1>    

<?php

//? strcmp: Compara valores de tipo string teniendo en cuenta mayusculas o minusculas devuelve 0 si coinciden o 1 si no coinciden.

//? stcasecmp: Compara valores de tipo string no tiene en cuenta las mayusculas o minusculas devuelve 0 si coinciden o 1 si no coinciden.

    $variable1 = "casa";
    $variable2 = "CASA";

    $resultado = strcmp($variable1, $variable2); //? devuelve 1 si no son iguales o 0 si son iguales.

    if($resultado){
        echo "No coinciden <br>";
    }else {
        echo "Si coinciden <br>";
    }

    $resultado1 = strcasecmp($variable1, $variable2); //? devuelve 1 si no son iguales o 0 si son iguales.

    echo "El resultadi es $resultado1 <br>";

    echo "El resultado es $resultado";

    $name = "Eyder";

    echo '<p class="resaltar"> Esto es un ejemplo de frase </p>';

    echo "Mi nombre es $name"; //? Esta tambien es una forma de concatenar sin necesida de porner el . es encerrar todo en comillas dobles
    

    

?>

</body>
</html>