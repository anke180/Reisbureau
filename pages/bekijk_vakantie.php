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
            // RECENTIES MISSCHIEN NAAST HET PLAATJE VOOR MEER DINGEN OP DE PAGINA (WEL FAKE)
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
                        echo "</div>"; //einde naam-verblijf
                        echo "<div class='plaatje-verblijf'>";
                            echo "<img src=" . $row ['image'] . " width='750px' height='400px'><br>\n";
                        echo "</div>";//einde plaatje-verblijf
                        echo "<div class='informatie-en-prijs-verblijf'>";
                            echo "<div class='alle-informatie-verblijf'>";
                                echo ($row ['zwembad']) ? 'Zwembad' ."<br>\n" : '';
                                echo ($row ['airco']) ? 'Airco' ."<br>\n" : '';
                                echo ($row ['wasmachine']) ? 'Wasmachine' ."<br>\n" : '';
                                echo ($row ['strand']) ? 'Strand' ."<br>\n" : '';
                                echo ($row ['all-inclusive']) ? 'All-inclusive' ."<br>\n" : '';
                                echo ($row ['half-pension']) ? 'Half-pension' ."<br>\n" : '';
                                echo ($row ['vol-pension']) ? 'Vol-pension' ."<br>\n" : '';
                                echo ($row ['glijbanen']) ? 'Glijbanen' ."<br>\n" : '';
                                echo ($row ['animatie-kinderen']) ? 'Animatie-kinderen' ."<br>\n" : '';
                                echo ($row ['adult-only']) ? 'Adult-only' ."<br>\n" : '';
                                echo ($row ['spa']) ? 'Spa' ."<br>\n" : '';
                                echo ($row ['sport-plaats']) ? 'Sport-plaats' ."<br>\n" : '';
                                echo ($row ['bars']) ? 'Bars' ."<br>\n" : '';
                                echo ($row ['internet'])? 'Internet' ."<br>\n" : '';
                                echo ($row ['restaurant']) ? 'Restaurant' ."<br>\n" : '';
                            echo "</div>"; //alle-informatie-verblijf
                            echo "<div class='prijs-per-persoon-verblijf'>";
                                echo "<a class='tekst'>€</a>";
                                echo $row ['prijs']."<br>\n";
                                echo "<a class='tekst'>per persoon</a>";
                            echo "</div>";//prijs-per-persoon-verblijf
                        echo "</div>";//informatie-en-prijs-verblijf
                        echo "<div class='boeken-knop'>";
                            echo "<a href='boeken.php' class='boeken-verblijf'>Boeken vakantie</a>";
                        echo "</div>";//einde boeken-knop
                    echo "</div>"; //einde informatie-bedrijf
                }
            ?>
        </main>
        <footer>

        </footer>
    </body>
</html>