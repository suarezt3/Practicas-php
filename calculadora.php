<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Operadores matematicos II</title>
</head>

<h1>Calculadora PHP</h1>

<body>
    
<?php


function calcular ($calculo) {

    if(!strcmp("Suma", $calculo)) {

        global $numero1;
        global $numero2;

        echo "El resultado es: " . ($numero1+$numero2);
    }

    if(!strcmp("Resta", $calculo)) {

        global $numero1;
        global $numero2;
        $resultado = $numero1 + $numero2;

        echo "El resultado es: $resultado";
    }

    if(!strcmp("Multiplicacion", $calculo)) {

        global $numero1;
        global $numero2;
        $resultado = $numero1 * $numero2;

        echo "El resultado es: $resultado";
    }

    if(!strcmp("Division", $calculo)) {

        global $numero1;
        global $numero2;
        $resultado = $numero1 / $numero2;

        echo "El resultado es: $resultado";
    }

    if(!strcmp("Modulo", $calculo)) {

        global $numero1;
        global $numero2;
        $resultado = $numero1 % $numero2;

        echo "El resultado es: $resultado";
    }

    if(!strcmp("Incremento", $calculo)) {

        global $numero1;
        
        $numero1++;

        $resultado = $numero1;

        echo "El resultado es: $resultado";
    }

    if(!strcmp("Decremento", $calculo)) {

        global $numero1;
        $numero1--;
        $resultado = $numero1;

        echo "El resultado es: $resultado";
    }
}

?>

</body>
</html>