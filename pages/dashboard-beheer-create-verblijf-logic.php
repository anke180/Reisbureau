<?php
    session_start();
    include '../include/conn.php';
 
    if (empty($_POST['type_verblijf']) || empty($_POST['land_van_verblijf']) || empty($_POST['naam']) || empty($_POST['informatie']) || empty($_POST['prijs']) || empty($_POST['image']) || empty($_POST['hoeveelheid_personen'])  || empty($_POST['beoordeling']) || empty($_POST['vertrek_datum'])) {
        header("Location: dashboard_beheer.php");
        exit();
    }
 
    $type_verblijf = $_POST["type_verblijf"];
    $land_van_verblijf = $_POST["land_van_verblijf"];
    $naam = $_POST['naam'];
    $informatie = $_POST['informatie'];
    $prijs = $_POST['prijs'];
    $image = $_POST['image'];
    $zwembad = isset($_POST['zwembad']) ? $_POST['zwembad'] : 'off';
    $airco = isset($_POST['airco']) ? $_POST['airco'] : 'off';
    $wasmachine = isset($_POST['wasmachine']) ? $_POST['wasmachine'] : 'off';
    $strand = isset($_POST['strand']) ? $_POST['strand'] : 'off';
    $all_inclusive = isset($_POST['all_inclusive']) ? $_POST['all_inclusive'] : 'off';
    $half_pension = isset($_POST['half_pension']) ? $_POST['half_pension'] : 'off';
    $vol_pension = isset($_POST['vol_pension']) ? $_POST['vol_pension'] : 'off';
    $glijbanen = isset($_POST['glijbanen']) ? $_POST['glijbanen'] : 'off';
    $animatie_kinderen = isset($_POST['animatie_kinderen']) ? $_POST['animatie_kinderen'] : 'off';
    $adult_only = isset($_POST['adult_only']) ? $_POST['adult_only'] : 'off';
    $spa = isset($_POST['spa']) ? $_POST['spa'] : 'off';
    $sport_plaats = isset($_POST['sport_plaats']) ? $_POST['sport_plaats'] : 'off';
    $bars = isset($_POST['bars']) ? $_POST['bars'] : 'off';
    $internet = isset($_POST['internet']) ? $_POST['internet'] : 'off';
    $restaurant = isset($_POST['restaurant']) ? $_POST['restaurant'] : 'off';
    $hoeveelheid_personen = $_POST['hoeveelheid_personen'];
    $beoordeling = $_POST["beoordeling"];
    $vertrek_datum = $_POST['vertrek_datum'];
    $slaapplekken = $_POST['aantalslaapplekken'];
 
    $sql = $connection->prepare("INSERT INTO verblijven (type_verblijf, land_van_verblijf, naam, informatie, prijs, image, zwembad, airco, wasmachine, strand, all_inclusive, half_pension, vol_pension, glijbanen, animatie_kinderen, adult_only, spa, sport_plaats, bars, internet, restaurant, hoeveelheid_personen, beoordeling, vertrek_datum, slaapplekken)
            VALUES (:type_verblijf, :land_van_verblijf, :naam, :informatie, :prijs, :image, :zwembad, :airco, :wasmachine, :strand, :all_inclusive, :half_pension, :vol_pension, :glijbanen, :animatie_kinderen, :adult_only, :spa, :sport_plaats, :bars, :internet, :restaurant, :hoeveelheid_personen, :beoordeling, :vertrek_datum, :slaapplekken)");
    $sql->bindParam(":type_verblijf", $type_verblijf);
    $sql->bindParam(":land_van_verblijf", $land_van_verblijf);
    $sql->bindParam(":naam", $naam);
    $sql->bindParam(":informatie", $informatie);
    $sql->bindParam(":prijs", $prijs);
    $sql->bindParam(":image", $image);
    $sql->bindParam(":zwembad", $zwembad);
    $sql->bindParam(":airco", $airco);
    $sql->bindParam(":wasmachine", $wasmachine);
    $sql->bindParam(":strand", $strand);
    $sql->bindParam(":all_inclusive", $all_inclusive);
    $sql->bindParam(":half_pension", $half_pension);
    $sql->bindParam(":vol_pension", $vol_pension);
    $sql->bindParam(":glijbanen", $glijbanen);
    $sql->bindParam(":animatie_kinderen", $animatie_kinderen);
    $sql->bindParam(":adult_only", $adult_only);
    $sql->bindParam(":spa", $spa);
    $sql->bindParam(":sport_plaats", $sport_plaats);
    $sql->bindParam(":bars", $bars);
    $sql->bindParam(":internet", $internet);
    $sql->bindParam(":restaurant", $restaurant);
    $sql->bindParam(":hoeveelheid_personen", $hoeveelheid_personen);
    $sql->bindParam(":beoordeling", $beoordeling);
    $sql->bindParam(":vertrek_datum", $vertrek_datum);
    $sql->bindParam(":slaapplekken", $slaapplekken);
    $sql->execute();
 
    header('Location: dashboard_beheer.php');
?>