<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vareiables estaticas</title>
</head>
<body>
<h1>Variables estaticas</h1>

<?php

//@ cuando una funcion se invoca despues de eso el codigo que tiene dentro se destruye, es por eso que si invocamos varias veces la funcion esta imprimira el mismo valor como en el siguiente ejemplo:

function incrementaVariable() {

    $contador = 0;
    $contador ++;

    echo $contador . "<br>";

}

incrementaVariable();
incrementaVariable();
incrementaVariable();

echo "------------------------------------------------------------ <br>";

//-----------------------------------------------------------------------

//@ Para conservar el valor de a variable y que no se destruya despues de invocar la funcion anteponemos la palabra stacti en la varible como en el siguiente ejemplo 

function incrementaVariable1() {

    static $contador = 0;
    $contador ++;

    echo $contador . "<br>";

}

incrementaVariable1();
incrementaVariable1();
incrementaVariable1()


?>
    
</body>
</html>