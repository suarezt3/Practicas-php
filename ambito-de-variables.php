<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Ambito de variables</title>
</head>
<body>

    <h1>Ámbito de variables</h1>

<?php

//? Local: declarada dentro de una funcion visible y accesible desde dentro de la funcion

//? Global declarada en cualquier lugar del codigo PHP (dentro o fuero de funcion) visivle y accesible desde cualquier lugar del codigo

$nombre = "Eyder";



function dameNombre() {

    global $nombre; //? se debe llamar asi a una variable si queremos acceder a ella dentro de una funcion

    $nombre = "El nombre es " . $nombre;
}

dameNombre();



echo $nombre;



?>

</body>
</html>