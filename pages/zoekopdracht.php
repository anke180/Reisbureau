<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">
    <title>Reisbueau Bestemming pagina</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>

    <?php
        include "../include/nav.php";
        include "../include/conn.php";
    ?>    

    <div class="container">
        <div class="container-row">
            <div id='margin-background' class="achtergrond">   </div>
            <!-- hier moeten de col30 en col70 in? -->
        </div>
       
        <!-- filter begint hier -->
        <div class="container-om-col30">
            <div class="col30">
                <div class="filter-lijst">
                    <table >            
                        <tr class=''>
                            <label class='tekst-filter'>zwembad</label>
                            <input type='checkbox' id='isZwembad'>

                            <label class='tekst-filter'>airco</label>
                            <input type='checkbox' id='isAirco'>

                            <label class='tekst-filter'>wasmachine</label>
                            <input type='checkbox' id='isWasmachine'>

                            <label class='tekst-filter'>strand</label>
                            <input type='checkbox' id='isStrand'>

                            <label class='tekst-filter'>spa</label>
                            <input type='checkbox' id='isSpa'>

                            <label class='tekst-filter'>sport-plaats</label>
                            <input type='checkbox' id='isSportPlaats'>

                            <label class='tekst-filter'>bars</label>
                            <input type='checkbox' id='isBars'>

                            <label class='tekst-filter'>internet</label>
                            <input type='checkbox' id='isInternet'>

                            <label class='tekst-filter'>restaurant</label>
                            <input type='checkbox' id='isRestaurant'>
                           

                            <button onclick='filter()'>zoek</button>
                        </tr>
                    </table>  
                    
                    </table>
                </div>
            </div>
        </div>

        <div class="col70" id='product_results'>

            <?php
                    $stmt = $connection->query("SELECT * FROM verblijven");
                while ($row = $stmt->fetch()){ 
                
                    echo "<div class='container-col'>";
                        echo "<div class='container-row products'>";
                            echo "<div class='row70'>";
                                echo "<div class='vakantie-balk' >";
                            
                                    echo "<div class='vakantie-blok-wit'>";
                                    echo "<img src=" . $row ['image'] . " class='img-vakantie'><br>\n";
                                    echo "</div>";

                                    echo "<div class='vakantie-blok-blauw'>";
                                        echo "<div class='een-vakantie-informatie'>";
                                            echo "<div class='balk-verblijven'>";
                                                echo $row ['naam']."<br>\n"; 
                                            echo "</div>";

                                            echo "<div class='balk-beordeling'>";
                                                echo $row ['beoordeling']."<br>\n"; 
                                            echo "</div>";

                                            echo "<div class='balk-tekst-hotel'>";
                                                echo"<a class='tekst-hotel'>In dit verblijf hebben we een: </a>";
                                            echo "</div>";

                                            echo "<div class='balk-verblijven'>";                                              

                                                if($row['zwembad'] == 1){
                                                    echo'Zwembad' ."<br>\n";
                                                }
                                                else{
                                                    echo''."<br>\n";
                                                }

                                                if($row['airco'] == 1){
                                                    echo'airco' ."<br>\n";
                                                }
                                                else{
                                                    echo''."<br>\n";
                                                }

                                                if($row['wasmachine'] == 1){
                                                    echo'wasmachine' ."<br>\n";
                                                }
                                                else{
                                                    echo''."<br>\n";
                                                }

                                                if($row['strand'] == 1){
                                                    echo'strand' ."<br>\n";
                                                }
                                                else{
                                                    echo''."<br>\n";
                                                }

                                                if($row['spa'] == 1){
                                                    echo'spa' ."<br>\n";
                                                }
                                                else{
                                                    echo''."<br>\n";
                                                }

                                                if($row['sport-plaats'] == 1){
                                                    echo'sport-plaats' ."<br>\n";
                                                }
                                                else{
                                                    echo''."<br>\n";
                                                }

                                                if($row['bars'] == 1){
                                                    echo'bars' ."<br>\n";
                                                }
                                                else{
                                                    echo''."<br>\n";
                                                }
                                                
                                                if($row['internet'] == 1){
                                                    echo'internet' ."<br>\n";
                                                }
                                                else{
                                                    echo''."<br>\n";
                                                }

                                                if($row['restaurant'] == 1){
                                                    echo'restaurant' ."<br>\n";
                                                }
                                                else{
                                                    echo''."<br>\n";
                                                }

                                              
                                            echo "</div>";
                                        echo "</div>";

                                    echo "</div>"; 

                                    echo "<div class='vakantie-blok-blauw'>";
                                        echo "<div class='een-vlucht-informatie'>";
                                            echo "<div class='balk-verblijven'>";
                                                echo "<a class='tekst-vlucht'>voor meer informatie over de vakantie klik op 'bekijk vakantie'</a>";
                                            echo "</div>";
                                            echo "<div class='balk-beordeling'>";
                                                echo "<div class='balk-tekst-vlucht'>";
                                                    echo "<a class='tekst-vlucht'>€</a>";
                                                echo "</div>";
                                                echo $row ['prijs']."<br>\n"; 
                                            echo "</div>";

                                            // echo "<div class='balk-tekst-vlucht'>";
                                            //     echo "<a class='tekst-vlucht'>hier komt een stuk tekst over de vlucht te staan</a>";
                                            // echo "</div>";
                                        
                                            echo "<div class='balk-bekijk-vakantie'>";
                                                echo "<div class='bekijk-vakantie'>";
                                                    echo "<a class='tekst-bekijk-vakantie' href='bekijk_vakantie.php?id=" . $row['id'] . "'>Bekijk vakantie</a>";
                                                echo "</div>";

                                            echo "</div>";
                                        echo "</div>";
                                    echo "</div>";
                                echo "</div>";
                            
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                }
            ?>
        </div>
       
           <script src='../js/main.jsx'></script>
    </div>

<?php
    include "../include/footer.php"
?>

</body>
</html>