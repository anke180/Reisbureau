<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reisbueau bekijk vakantie</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+VIC:wght@142&family=Playwrite+SK:wght@100..400&family=Playwrite+US+Trad&family=Playwrite+VN:wght@100..400&display=swap" rel="stylesheet">    <title>Reisbureau</title>
        <link rel="stylesheet" href="../css/index.css">
    </head>
    <body>
        <header>
            <?php
                include "../include/nav.php";
                include "../include/conn.php";
            ?>
        </header>
        <main>
            <?php
            // sql sum -> tel kolom op waar id overeenkomt 

            // $stmt = $connection->prepare(" SELECT COUNT (rating) FROM AppartementMorenaRating"  ) 
                $_GET['id'];
                $stmt = $connection->prepare("SELECT * FROM verblijven WHERE id = :id "); ;
                $stmt->execute(['id' => $_GET['id']]);
                while ($row = $stmt->fetch()){ 
                    echo "<div class='informatie-verblijf'>";
                        echo "<div class='naam-verblijf'>";
                            echo "<h1>";
                            echo $row ['naam']."<br>\n";
                            echo "</h1>";
                            echo $row ['land_van_verblijf']."<br>\n";
                        echo "</div>"; 
                        echo "<div class='plaatje-reacties-verblijf'>";
                            echo "<div class='plaatje-verblijf'>";
                                echo "<img src=" . $row ['image'] . " width='750px' height='400px'><br>\n";
                            echo "</div>";
                            
                   
                            echo "<div class='reacties-verblijf'>";
                                echo "<div class='review1'>";
                                    echo "<p>Review 1:</p>";
                                    echo "<a class='review'>We hebben het fijn gehad. Mooie kamer. Ook was het personeel heel vriendelijk.  - Anoniem uit Nijmegen</a>";
                                echo "</div>";
                                echo "<div class='review2'>";
                                    echo "<p>Review 2:</p>";
                                    echo "<a class='review'>Niet wat we verwacht hadden!  - Anoniem uit van den Heuvel</a>";
                                echo "</div>";
                                echo "<div class='review3'>";
                                    echo "<p>Review 3:</p>";
                                    echo "<a class='review'>Ligging is echt geweldig, recht voor het strand en midden op de strip. Afkoelen in het zwembad ook prima.  - Anoniem uit Rotterdam</a>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                        echo "<div class='informatie-en-prijs-verblijf'>";
                            echo "<div class='alle-informatie-verblijf'>";
                                echo ($row ['zwembad']) ? 'Zwembad' ."<br>\n" : '';
                                echo ($row ['airco']) ? 'Airco' ."<br>\n" : '';
                                echo ($row ['wasmachine']) ? 'Wasmachine' ."<br>\n" : '';
                                echo ($row ['strand']) ? 'Strand' ."<br>\n" : '';
                                echo ($row ['glijbanen']) ? 'Glijbanen' ."<br>\n" : '';
                                echo ($row ['animatie_kinderen']) ? 'animatie_kinderen' ."<br>\n" : '';
                                echo ($row ['adult_only']) ? 'adult_only' ."<br>\n" : '';
                                echo ($row ['spa']) ? 'Spa' ."<br>\n" : '';
                                echo ($row ['sport_plaats']) ? 'sport_plaats' ."<br>\n" : '';
                                echo ($row ['bars']) ? 'Bars' ."<br>\n" : '';
                                echo ($row ['internet'])? 'Internet' ."<br>\n" : '';
                                echo ($row ['restaurant']) ? 'Restaurant' ."<br>\n" : '';
                            echo "</div>"; 

                            $stmt = $connection->prepare("SELECT COUNT(rating) AS rating_count FROM `AppartementMorenaRating` WHERE rating = 1");
    
                            $stmt->execute();

                            $result = $stmt->fetch(PDO::FETCH_ASSOC);

                            echo "<a class='rating-knop' href='rate_vakantie.php?id=" . $row['id'] . "'>Like</a>";
                            echo "<div class='balk-likes'>";
                                echo "De likes die dit verblijf heeft ontvangen zijn: " . $result['rating_count'];
                            echo "</div>";
                            // echo $row['rating'];  
                          

                            echo "<div class='prijs-per-persoon-verblijf'>";
                                echo '<div class="faciliteiten-lijst">';
                                    echo "<a class='tekst'>De prijs per persoon is: €" . ($row ['prijs']) ."</a>";
                                    echo ($row ['all_inclusive']) ? 'all_inclusive' : '';
                                    echo ($row ['half_pension']) ? 'half_pension' : '';
                                    echo ($row ['vol_pension']) ? 'vol_pension' : '';
                                    echo "<a class='tekst'>De hoeveelheid slaapplekken in deze kamer is: " . ($row ['hoeveelheid_personen']) ."</a>";
                                echo '</div>';
                            echo "</div>";
                        echo "</div>";
                        echo "<div class='boeken-knop'>";
                            echo "<a href='booking.php' class='boeken-verblijf'>Boeken vakantie</a>";
                        echo "</div>";
                    echo "</div>"; 
                }
            ?>
        </main>
        <footer>
            
            <?php
                include "../include/footer.php"
            ?>

        </footer>
    </body>
</html>