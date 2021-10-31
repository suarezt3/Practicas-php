<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Constantes</title>
</head>

<h1>Constantes</h1>
<body>



<?php
//@ Las constantes no llevan el signo de $ al comienzo.
//@ El nombre de las constantes se deben escribir en mayusculas.
//@ Es obligatorio el uso de la funcion define() para definir constantes.
//@ El ambito de las constantes es global por defecto.
//@ Las constantes solo reciben valores escalares


    define("AUTOR", "Eyder");
    echo "Mi nombre es: " . AUTOR . "<br>";


//@ Constantes preddefinidas

echo "La linea de esta instrucion es: " . __LINE__ . "<br>";
echo "Estamos trabajando con este archivo " . __FILE__ . "<br>";


?>

</body>
</html>