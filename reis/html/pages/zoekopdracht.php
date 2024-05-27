<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
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
        
        <?php
                $stmt = $connection->query("SELECT * FROM verblijven  ");
            while ($row = $stmt->fetch()){ 

                echo "<div class='container-col'>";
                    echo "<div class='container-row'>";
                        echo "<div class='row70'>";
                            echo "<div class='vakantie-balk'>";
                                echo "<div class='vakantie-blok-wit'>";
                                                // hier komt een foto    
                                echo "</div>";

                                echo "<div class='vakantie-blok-blauw'>";
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

                                echo "<div class='vakantie-blok-blauw'>";
                                    echo "<div class='een-vlucht-informatie'>";
                                        echo "<div class='balk-tekst-vlucht'>";
                                            echo "<a class='tekst-vlucht'>hier komt een stuk tekst over de vlucht te staan</a>";
                                        echo "</div>";
                                    
                                        echo "<div class='balk-bekijk-vakantie'>";
                                            echo "<div class='bekijk-vakantie'>";
                                                echo "<a class='tekst-bekijk-vakantie'>Bekijk vakantie</a>";
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
   

  <!-- <h1 id='titel'>hoi hoi</h1>

    <button onclick='waarschuwing()'>klik hier</button>


    <script src="../js/main.jsx"></script> -->

</body>
</html>