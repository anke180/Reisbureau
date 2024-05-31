<?php
    session_start();
    ?><div class="danger">
      <?php  if($_SESSION['errormessage']){
            echo $_SESSION['errormessage'];
        }
        ?>
    </div>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">
        <title>Reisbureau home pagina</title>
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
        <?php
            include "./include/nav.php";
        ?>

    
    </body>
</html>

