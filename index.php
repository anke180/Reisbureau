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
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Reisbureau</title>
</head>
<body>
<?php
        include "include/nav.php";
        include "include/conn.php";
?>  
 
       
<div id='margin-background' class="achtergrond">   </div>
       
       
    </div>
    <div class="main">
        <div class="b2">
            <div class="inf2">
                <h2>Waarom kies je voor .....?</h2>
                <div class="inf">
                <h3 id="text">Unieke voordelen en aanbiedingen</h3>
                </div>
                <div class="inf">
                <h3 id="text">Betrouwbaarheid</h3>
                <!-- <h6 id="text">Gegarandeerde Veiligheid en Beveiliging</h6> -->
                <!-- <h6 id="text">Betrouwbare Reviews en Beoordelingen</h6> -->
                </div>
                <div class="inf">
                <h3 id="text">Gebruiksvriendelijkheid</h3>
                <!-- <h6 id="text">Eenvoudig Boeken</h6> -->
                <!-- <h6 id="text">24/7 Klantenservice</h6> -->
                </div>
                <div class="inf">
                <h3 id="text">Extra Diensten</h3>
                </div>
            </div>
            <div class="inf3">
                <h3>Onze top verblijven</h3>
                <?php
                    $stmt = $connection->query("SELECT * FROM verblijven");
                    while ($row = $stmt->fetch()){
                        echo "<div class='inf4'>";
                            echo "<div class='beoordeling-row'>";
                                echo $row  ['naam']."<br>\n";
                                echo $row ['land-van-verblijf']."<br>\n";
                                echo $row ['beoordeling']."<br>\n";
                            echo "</div>";
                             
                        echo "</div>";
                    }
                ?>
            </div>
 
        </div>
    </div>
        <div class="balk-leeg"></div>
        <div class="container-footer">
            <a href="pages/algemene-voorwaarden.php" >Algemene voorwaarden</a>
            <a href="pages/privacy-voorwaarden.php" >Privacy voorwaarden</a>
        </div>
 
</body>
</html>