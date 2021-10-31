<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>priorida operadores</title>
</head>

<h1>Prioridad operadores</h1>

<body>

<?php

$var1 = true;
$var2 = false;
$resultado = $var1 && $var2; //? Resultado false.

if($resultado == true) {
    echo "Correto";
}else {
    echo "Incorrecto";
}

?>

</body>
</html>