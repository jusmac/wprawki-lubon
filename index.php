<?php
include 'funkcje.php';
$pora = @pora_roku($_GET['pora']);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Schronisko PPTK Luboń Wielki</title>
        <link href="wspolne.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $pora; ?>.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet/less" type="text/css" href="wspolne.less">
        <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.1.0/less.min.js"></script>
    </head>
    <body>
        <header class="bordered">
            <img id="banner" src="/Lubon/img/bannerek.gif" alt="Schronisko PTTK na Luboniu Wielkim" />
            <h1>Schronisko PTTK na Luboniu Wielkim</h1>
        </header>
        <section id="s1" class="bordered">
            <?php
            echo obsluz_formularz($_POST);

            if ($_GET['content']) {
                if (file_exists($_GET['content'])) {
                    echo file_get_contents($_GET['content']);
                }
            }
            ?>
        </section>

        <section id="zawartosc">
            <section id="data" class="bordered">
                <p>  <?php echo("Aktualna data: " . date("d-m-Y") ); ?> </p>
            </section>
            <section id="licznik" class="bordered">
                <p>Ta strona została odwiedzona <?php echo licznik(); ?> razy od 04.11.2014r.</p>
            </section>
            <section id="menu" class="bordered">
                <p>
                    <a href="?content=Lubon.html&pora=<?php echo $pora; ?>">Strona główna</a><br>
                    <a href ="?content=schronisko.html&pora=<?php echo $pora; ?>">O schronisku</a><br>
                    <a href="?content=dojazd.html&pora=<?php echo $pora; ?>">Dojazd</a><br>
                    <a href="?content=formularz_kontaktowy.php&pora=<?php echo $pora; ?>">Skontaktuj się z nami</a></p>
            </section>
        </section>
        <footer class="bordered">
            <section id="footer1">
                <p><contact> Telefony do schroniska: 608791020<br> 
                    182676435 (gospodarz)<br>
                    604 876110 (kierownik)</contact></p> 
                <p><contact>Adres: Schronisko PTTK na Luboniu Wielkim<br>
                    34 - 701 Rabka Zaryte 165<br></contact></p>
            </section>

            <section id="footer2">

                <p><contact>Krzysztof Knofliczek<br>
                    Lubień 545   32 - 433 Lubień<br>
                    <br>
                    Współrzędne: N 49° 39' 13'', E 19° 59' 31''
                    QTH Loc. JN99XP</contact></p></section>
        </footer>
    </body>
</html>
