<?php
    session_start();

    if (!isset($_SESSION["logado"])) {
        header("location: index.html");
    }
?>

<html>
    <head>
        <title>Minhas Fotos</title>
    </head>
    <body>
       <h1>Minhas Fotos</h1>

       <img src="fotos/foto-01.jpg" alt=""> 
       <img src="fotos/foto-02.jpg" alt="">
       <img src="fotos/foto-03.jpg" alt="">

       <img src="fotos/foto-04.jpg" alt="">
       <img src="fotos/foto-05.jpg" alt="">
       <img src="fotos/foto-06.jpg" alt="">

       <br>
       <br>
       <form action="sair.php">
            <button type="submit">Sair</button>
       </form>
    </body>
</html>