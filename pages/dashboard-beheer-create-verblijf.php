<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/index.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+VIC:wght@142&family=Playwrite+SK:wght@100..400&family=Playwrite+US+Trad&family=Playwrite+VN:wght@100..400&display=swap" rel="stylesheet">    <title>Reisbureau</title>
    </head>
    <body>
        <header>
            <?php
                include "../include/nav.php";
            ?>
        </header>
        <main>
            <form action="dashboard-beheer-create-verblijf-logic.php" name="dashboard-beheer-verblijf" method="POST">
                <div class="toevoegen">
                    <div class="type-verblijf">
                        <label class="tekst">Type verblijf:</label>
                        <input type="text" name="type_verblijf" placeholder="type-verblijf" required>
                    </div>
                    <div class="land-van-verblijf">
                        <label class="tekst">Land van verblijf:</label>
                        <input type="text" name="land_van_verblijf" placeholder="land-van-verblijf" required>
                    </div>
                    <div class="naam-van-verblijf">
                        <label class="tekst">Naam van verblijf:</label>
                        <input type="text" name="naam" placeholder="naam" required>
                    </div>
                    <div class="informatie-van-verblijf">
                        <label class="tekst">Informatie van verblijf:</label>
                        <input type="text" name="informatie" placeholder="informatie" required>
                    </div>
                    <div class="prijs-van-verblijf">
                        <label class="tekst">Prijs van verblijf:</label>
                        <input type="text" name="prijs" placeholder="prijs" required>
                    </div>
                    <div class="image-van-verblijf">
                        <label class="tekst">Weg van image van verblijf:</label>
                        <input type="text" name="image" placeholder="image" required>
                    </div>
                    <div class="checkbox">
                        <label class='tekst-filter2'>zwembad</label>
                        <input type='checkbox' id='isZwembad'>  
                        <br>  
                        <label class='tekst-filter2'>airco</label>
                        <input type='checkbox' id='isAirco'> <br>  
                        <label class='tekst-filter2'>wasmachine</label>
                        <input type='checkbox' id='isWasmachine'> <br>  
                        <label class='tekst-filter2'>strand</label>
                        <input type='checkbox' id='isStrand'> <br>  
                        <label class='tekst-filter2'>all-inclusive</label>
                        <input type='checkbox' id='isAllInclusive'> <br>  
                        <label class='tekst-filter2'>half-pension</label>
                        <input type='checkbox' id='isHalfPension'> <br>  
                        <label class='tekst-filter2'>vol-pension</label>
                        <input name=' type='checkbox' id='isVolPension'> <br>  
                        <label class='tekst-filter2'>glijbanen</label>
                        <input type='checkbox' id='isGlijbanen'> <br>  
                        <label class='tekst-filter2'>animatie-kinderen</label>
                        <input type='checkbox' id='isAnimatieKinderen'> <br>   
                        <label class='tekst-filter2'>adult-only</label>
                        <input type='checkbox' id='isAdultOnly'> <br>  
                        <label class='tekst-filter2'>spa</label>
                        <input type='checkbox' id='isSpa'> <br>  
                        <label class='tekst-filter2'>sport-plaats</label>
                        <input type='checkbox' id='isSportPlaats'> <br>  
                        <label class='tekst-filter2'>bars</label>
                        <input type='checkbox' id='isBars'> <br>  
                        <label class='tekst-filter2'>internet</label>
                        <input type='checkbox' id='isInternet'> <br>  
                        <label class='tekst-filter2'>restaurant</label>
                        <input type='checkbox' id='isRestaurant'>             
                    </div>
                    <div class="hoeveelheid-personen-van-verblijf">
                        <label class="tekst">Hoeveelheid personen van verblijf:</label>
                        <input type="text" name="hoeveelheid_personen" placeholder="hoeveelheid_personen" required>
                    </div>
                    <div class="hoeveelheid-personen-van-verblijf">
                        <label class="tekst">Aantal slaapplekken van verblijf:</label>
                        <input type="text" name="aantalslaapplekken" placeholder="aantalslaapplekken" required>
                    </div>
                    <div class="beoordeling-van-verblijf">
                        <label class="tekst">Beoordeling van verblijf:</label>
                        <input type="text" name="beoordeling" placeholder="beoordeling" required>
                    </div>
                    <div class="vertrekdatum-van-verblijf">
                        <label class="tekst">Vertrek datum van verblijf:</label>
                        <input type="date" name="vertrek_datum" placeholder="vertrek_datum" required>
                    </div>                
                    <div class="submit">
                        <input type="submit" value="submit">
                    </div>
                </div>
            </form>
        </main>
        <footer>
            <?php
                include "../include/footer.php";
            ?>
        </footer>
    </body>
</html>