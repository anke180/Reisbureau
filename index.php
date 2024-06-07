<?php
    session_start();
    if(isset($_SESSION['errormessage'])){
        echo '<div class="danger">';
            echo $_SESSION['errormessage'];
        echo '</div>';
        unset($_SESSION['errormessage']);
    }
?>


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

