<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reisbueau bekijk vakantie</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">
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
                $_GET['id'];
                $stmt = $connection->prepare("SELECT * FROM verblijven WHERE id = :id ");
                $stmt->execute(['id' => $_GET['id']]);
                while ($row = $stmt->fetch()){ 
                    echo "<div class='informatie-verblijf'>";
                        echo "<div class='naam-verblijf'>";
                            echo "<h1>";
                            echo $row ['naam']."<br>\n";
                            echo "</h1>";
                            echo $row ['land-van-verblijf']."<br>\n";
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
                                echo ($row ['animatie-kinderen']) ? 'Animatie-kinderen' ."<br>\n" : '';
                                echo ($row ['adult-only']) ? 'Adult-only' ."<br>\n" : '';
                                echo ($row ['spa']) ? 'Spa' ."<br>\n" : '';
                                echo ($row ['sport-plaats']) ? 'Sport-plaats' ."<br>\n" : '';
                                echo ($row ['bars']) ? 'Bars' ."<br>\n" : '';
                                echo ($row ['internet'])? 'Internet' ."<br>\n" : '';
                                echo ($row ['restaurant']) ? 'Restaurant' ."<br>\n" : '';
                            echo "</div>"; 
                            echo "<div class='prijs-per-persoon-verblijf'>";
                                echo '<div class="faciliteiten-lijst">';
                                    echo "<a class='tekst'>De prijs per persoon is: €" . ($row ['prijs']) ."</a>";
                                    echo ($row ['all-inclusive']) ? 'All-inclusive' : '';
                                    echo ($row ['half-pension']) ? 'Half-pension' : '';
                                    echo ($row ['vol-pension']) ? 'Vol-pension' : '';
                                    echo "<a class='tekst'>De hoeveelheid slaapplekken in deze kamer is: " . ($row ['hoeveelheid-personen']) ."</a>";
                                echo '</div>';
                            echo "</div>";
                        echo "</div>";
                        echo "<div class='boeken-knop'>";
                            echo "<a href='boeken.php' class='boeken-verblijf'>Boeken vakantie</a>";
                        echo "</div>";
                    echo "</div>"; 
                }
            ?>
        </main>
        <footer>

        </footer>
    </body>
</html>