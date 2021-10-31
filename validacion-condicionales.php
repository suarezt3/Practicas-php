<link rel="stylesheet" href="./css/styles.css">

<?php

if (isset($_POST["enviando"])) {

    $edad = $_POST["edad_usuario"];

    if($edad <= 18) {
        echo "Eres menor de edad";
    }else if ($edad <= 40) {
        echo "Ers joven";
    }else if ($edad <= 65) {
        echo "Eres Adulto";
    }else {
        echo "Cuidate eres anciano";
    }

}

?>