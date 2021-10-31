<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Operadores matematicos III</title>
</head>

<h1>Operadores de incremento y decremento</h1>

<body>
<p>&nbsp;</p>

<!-- el atributo action del formulario hace refenecia al archivo externo donde queremos enviar la informacion formulario -->

<form name="form1" method="post" action="">

	<p>
    	<label for="num1"></label>
        <input type="text" name="num1" id="num1" />
        <label for="num2"></label>
        <input type="text" name="num2" id="num2" />
        <label for="operacion"></label>
        <select name="operacion" id="operacion">
        	<option>Suma</option>
            <option>Resta</option>
            <option>Multiplicacion</option>
            <option>Division</option>
            <option>Modulo</option>
            <option>Incremento</option>
            <option>Decremento</option>       
        </select>
    </p>
    <p>
    	<input type="submit" name="button" id="button" value="enviar" onClick="prueba" />
    </p>
    </form>
    <p>&nbsp;</p>


<?php

include ("calculadora.php");

if(isset ($_POST["button"])) {
    $numero1 = $_POST["num1"];
    $numero2 = $_POST["num2"];
    $operacion = $_POST["operacion"];
    calcular($operacion);

}

?>

</body>
</html>