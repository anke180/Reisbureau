<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <?php
        include "../include/nav.php";
        include "../include/conn.php";
    ?>    
    <div class="container">
        <div class="container-row">
            <div class="achtergrond">   </div>
        </div>

 
        <?php
            
        ?> 
       
        <!-- filter begint hier -->
        <div class="col30">
            <!-- hier komt de filter in te staan -->
            <div class="filter-lijst">filter</div>
            <div class="filter-lijst">filter</div>
            <div class="filter-lijst">filter</div>
            <div class="filter-lijst">filter</div>
            <div class="filter-lijst">filter</div>
            <div class="filter-lijst">filter</div>
            <div class="filter-lijst">filter</div>
            <div class="filter-lijst">filter</div>
            <div class="filter-lijst">filter</div>
        </div>

        <!-- vakantie info kort begint hier -->
        <!-- informatie via database -->
        <div class="container-col">
            <div class="container-row">
                <div class="row70">
                    <div class="vakantie-balk">
                        <div class="vakantie-blok-wit">
                          
                        </div>
                        <div class="vakantie-blok-blauw">
                            <?php
                                 $stmt = $connection->query("SELECT * FROM verblijven  WHERE id=1 ");
                                 while ($row = $stmt->fetch()){ 
                                    
                                  


                                                                    echo "<div class='een-vakantie-informatie'>";
                                                                        echo "<div class='balk-verblijven'>";
                                                                            echo $row ['naam']."<br>\n"; 
                                                                        echo "</div>";
                                                                        echo "<div class='balk-beordeling'>";
                                                                            echo $row ['beoordeling']."<br>\n"; 
                                                                        echo "</div>";
                                                                        echo "<div class='balk-verblijven'>";
                                                                            echo $row ['informatie']."<br>\n"; 
                                                                        echo "</div>";
                                                                    echo "</div>";

                                                                    echo "</div>"; 

                                            
                                 }
                            ?>
                            <!-- hier komt de naam hotel + beooordeling hotel + informatie vakantieplek -->

                        <!-- </div>
                        <div class="vakantie-blok-blauw">
                            <div class="een-vlucht-informatie">
                                <div class="balk-tekst-vlucht">
                                    <a class="tekst-vlucht">heir komt een stuk tekst over de vlucht te staan</a>
                                </div>
                                <div class="balk-bekijk-vakantie">
                                    <div class="bekijk-vakantie">
                                        <a class="tekst-bekijk-vakantie">Bekijk vakantie</a>

                                    </div>
                                </div>
                            </div>

                        </div>



                        
                    </div>
                </div>
            </div>
        </div> -->

    </div>
   

  <!-- <h1 id='titel'>hoi hoi</h1>

    <button onclick='waarschuwing()'>klik hier</button>


    <script src="../js/main.jsx"></script> -->

</body>
</html>