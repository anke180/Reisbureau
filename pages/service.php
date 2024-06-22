<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Reisbureau</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+VIC:wght@142&family=Playwrite+SK:wght@100..400&family=Playwrite+US+Trad&family=Playwrite+VN:wght@100..400&display=swap" rel="stylesheet">    <title>Reisbureau</title>

</head>
<body>
    <?php
        include "../include/nav.php"
    ?>
        <div class="container">
       
            <div id='margin-background' class="achtergrond"></div>
     
 
            </div>
            <div class="b3">
                <div class="mailing">
                    <h2 class="tekst-blok-service">Klachten, en nu?</h2>
                    <h3 class="tekst-blok-service">Neem gerust contact op met een van onze collega’s die kunnen je verder helpen met uw problemen/vragen.</h3>
                </div>
 
                <div class="socmed">
                    <div class="tekst-blok-service">
                        <div class="tekst-service-info">
                            <h2>Social media</h2>
                        </div>
                        <div class="tekst-service-info">
                            <h3>Instagram</h3>
                        </div>
                        <div class="tekst-service-info">
                            <h3>Facebook</h3>
                        </div>
                        <div class="tekst-service-info">
                            <h3>TikTok</h3>
                        </div>
                    </div>
                </div>
 
                <div class="mailing">
                <div class="tekst-service-info">
                    <h3 class="tekst-blok-service">E-mails verzenden naar ons:</h2>
                       
                            <h3>Naam: Ruveyda Bal</h3>
                            <h3>E-mail: 1197794@student.roc-nijmegen.nl</h3>
                        <!-- </div> -->
                        <!-- <div class="tekst-service-info"> -->
                            <h3>Naam: Anke van Dommelen</h3>
                            <h3>E-mail: 1208834@student.roc-nijmegen.nl</h3>
                        <!-- </div> -->
                        <!-- <div class="tekst-service-info"> -->
                            <h3>Naam: Rens Peters</h3>
                            <h3>E-mail: 1195839@student.roc-nijmegen.nl</h3>
                        </div>
                </div>
                <div class="numb">
                <div class="tekst-service-info">
                    <h2>Telefoonnummers:</h2>
                </div>
                    <div class="tekst-service-info">
                            <h3>Naam: Ruveyda Bal</h3>
                            <h3>Nummer: 06 48795818</h3></div>
                        <div class="tekst-service-info">
                            <h3>Naam: Anke van Dommelen</h3>
                            <h3>Nummer: 06 20065856</h3>
                        </div>
                        <div class="tekst-service-info">
                            <h3>Naam: Rens Peters</h3>
                            <h3>Nummer: 06 30613747</h3>
                        </div>
                </div>
            </div>
        </div>
 
        <div class="container-service-email">
          <!-- <form action='service-verstuur-mail.php' name='service-verstuur-mail' method='POST'> -->
            <div class="blok-email">
                <div class="mail-blok">
                    <div class="tekst-mail-sturen-balk">
                        <a class="tekst-mail-sturen">vul in om een mail te sturen</a>
                    </div>
                    <div class="blok-lang-mail">
                        <div class="blok-klein-mail">
                            <div class="balk-groot-mail">
                                <div class="balk-mail">
                                <input class='mail'  type='text' name='email' placeholder='email'>
                                </div>
                            </div>
                            <div class="balk-groot-mail">
                                <div class="blok-send">
                                <input class='send' type='button' value='send'>
                                </div>
                            </div>
                        </div>
                        <div class="blok-klein-mail">
                            <div class="blok-tekst-mail">
                                <input class='tekst' type='text' name='tekst' placeholder='uw vraag.....'>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        <?php
            include "../include/footer.php"
        ?>
 
</body>
</html>