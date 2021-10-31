<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Operadores de comparacion</title>
</head>

<h1>Operadores de comparacion </h1>

<body>
    
<?php

$variable1 = 8;
$variable2 = "8";
$variable3 = "Eyder";

if ($variable1 === $variable2) {
    echo "Son iguales <br>";
}else {
    echo "No son iguales <br>";
}

if ($variable1 != $variable3) {
    echo "Son diferentes <br>";
}else {
    echo "No son diferentes <br>";
}

?>

</body>
</html>