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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+VIC:wght@142&family=Playwrite+SK:wght@100..400&family=Playwrite+US+Trad&family=Playwrite+VN:wght@100..400&display=swap" rel="stylesheet">    <title>Reisbureau</title>
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
                <h2>Waarom ons kiezen?</h2>
                <div class="inf">
                <h3 id="text">Unieke voordelen</h3>
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
                    $stmt = $connection->query("SELECT * FROM verblijven LIMIT 4 ");
                    while ($row = $stmt->fetch()){ 
                        echo "<div class='inf4'>";
                            echo "<div class='beoordeling-row'>";
                                echo $row  ['naam']."<br>\n";
                                echo $row ['land_van_verblijf']."<br>\n";
                                echo $row ['beoordeling']."<br>\n";
                                echo "<div class='bekijk-vakantie-klein'>";
                                echo "<a class='tekst-bekijk-vakantie' href='../pages/bekijk_vakantie.php?id=" . $row['id'] . "'>Bekijk vakantie</a>";
                            echo "</div>";
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