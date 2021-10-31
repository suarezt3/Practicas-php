<link rel="stylesheet" href="./css/styles.css">
<?php

//@ El metodo isset valida si se hace clic en un boton
        if (isset($_POST["enviando"])) {
            $usuario = $_POST["nombre_usuario"];
            $edad = $_POST["edad_usuario"];
                
                if ($usuario == "Eyder" && $edad>=18) {
                    echo "<p class='validado'>Puedes entrar</p>";
                }else {
                    echo "<p class='no_validado'>No puedes entrar</p>";
                }
                  

        }

        ?>