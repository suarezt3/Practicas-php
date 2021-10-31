<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Funciones matematicas y casting</title>
</head>
<h1>Funciones matematicas y casting</h1>

<body>

<?php

$num1 = rand(10, 50);
$num2 = pow(3, 2);
$num3 = 75.66; 
$num4 = 35.45762;  

echo "El numero aleatorio es: $num1 <br>";
echo "El exponente de 3 es: $num2 <br>";
echo "Numero redondeado es: "  . round($num3); //@ Redondea al numero mas cercano en este caso a 76.
echo "<br>";
echo "Numero redondeado con maximo 2 decimales: " . round($num4, 2); //@ Redondea al numero mas cercano con maximo 2 decimales en este caso a 35.46.

//@ Casting Inplicito cuando el lenguaje hace el cambio de tipo de dato automaticamente.

$num5 = "5"; //? Inicialmente es de tipo string.
$num5 += 1; //? Ahora es de tipo numerico entero.
$num5 + 5.75; //? Ahora es de tipo numerico flotante.

//@ Casting explicito cuando nosotros decimos al lenguage a que tipo de dato queremos convertir la variable

$num6 = "10";
$resultado = (int)$num6; //? Ahora es un numero 10 pero de tipo numerico entero.

echo "<br>";

echo $resultado;

?>

</body>
</html>