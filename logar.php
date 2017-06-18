<?php
    session_start();

    if (isset($_POST["login"])) {
        
        if ($_POST["login"] == "eduardo" && $_POST["senha"] == "123456") {
            $_SESSION["logado"] = true;
            header("location: fotos.php");
        }
        else {
            echo "USUARIO OU SENHA INVALIDA!";
        }
    }
    //header("location: index.html");
?>