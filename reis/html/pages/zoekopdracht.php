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
                            <!-- hier komt een foto -->
                        </div>
                        <div class="vakantie-blok-blauw">
                            <!-- hier komt de naam hotel + beooordeling hotel + informatie vakantieplek -->
                        </div>
                        <div class="vakantie-blok-blauw">
                            <!-- hier komt een stuk tekst over vlucht? + prijs en button voor bekijk vakatie -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
   

  <!-- <h1 id='titel'>hoi hoi</h1>

    <button onclick='waarschuwing()'>klik hier</button>


    <script src="../js/main.jsx"></script> -->

</body>
</html>