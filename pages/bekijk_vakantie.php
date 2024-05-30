<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reisbueau bekijk vakantie</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">
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
                $stmt = $connection->query("SELECT * FROM verblijven WHERE id=1 ");
                while ($row = $stmt->fetch()){ 
                    echo "<div class='informatie-verblijf'>";
                        echo "<div class='naam-verblijf'>";
                            echo $row ['naam']."<br>\n";
                            echo $row ['land-van-verblijf']."<br>\n";
                        echo "</div>"; //einde naam-verblijf
                        echo "<div class='plaatje-verblijf'>";
                            echo "<img src=" . $row ['image'] . "><br>\n";
                        echo "</div>";//einde plaatje-verblijf
                        echo "<div class='informatie-en-prijs-verblijf'>";
                            echo "<div class='alle-informatie-verblijf'>";
                                    echo ($row ['zwembad']) ? 'zwembad' : ''."<br>\n";
                                    echo $row ['airco']."<br>\n";
                                    echo $row ['wasmachine'] ? 'wasmachine': ''."<br>\n";
                                    echo $row ['strand']."<br>\n";
                                    echo $row ['all-inclusive']."<br>\n";
                                    echo $row ['half-pension']."<br>\n";
                                    echo $row ['vol-pension']."<br>\n";
                                    echo $row ['glijbanen']."<br>\n";
                                    echo $row ['animatie-kinderen']."<br>\n";
                                    echo $row ['adult-only']."<br>\n";
                                    echo $row ['spa']."<br>\n";
                                    echo $row ['sport-plaats']."<br>\n";
                                    echo $row ['bars']."<br>\n";
                                    echo $row ['internet']."<br>\n";
                                    echo $row ['restaurant']."<br>\n";
                            echo "</div>"; //alle-informatie-verblijf
                            echo "<div class='prijs-per-persoon-verblijf'>";
                                echo "<a>€</a>";
                                echo $row ['prijs']."<br>\n";
                                echo "<a>per persoon</a>";
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