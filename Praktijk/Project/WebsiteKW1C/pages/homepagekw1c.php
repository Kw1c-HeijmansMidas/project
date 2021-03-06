<?php
    ?>
<!DOCTYPE html>
<title>
    homepage
</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no">
<link href="../styles/menu.css" rel="stylesheet">
<link href="../styles/homekw1c.css" rel="stylesheet">

<html lang="nl">
<body>
    <header>

        <?php
        include "../includes/header.php"
        ?>


    </header>
    <main>
        <img src="../images/achtergrond.png" id="background">

    </main>

        <h1 id="titel">ICT-ACADEMIE</h1>
            <img src="../images/Screenshot%202022-04-13%20120735.jpg" id="lijn">
    <article>
        <div id="tekst1">
            <h3 class="middenstuk" id="alg">Algemeen</h3>
                <p class="middenstuk" id="tekst">
                    Een goede ICT’er is gedreven om te leren en is bereid om kennis te delen met anderen. Dat vinden ze bij het bedrijfsleven. Verder moet je wat willen bereiken, plezier hebben in wat je doet en goed in een team kunnen werken. Tijdens je studie aan de ICT-Academie krijg je hiermee te maken. Dat gebeurt zoveel mogelijk in projectvormen: leren werken en werkend leren in klein groepsverband, met opdrachten uit de praktijk. Teamwork dus. Belangrijk is verder de adviesraad, die bestaat uit vertegenwoordigers van vooraanstaande bedrijven uit de regio.
                </p>
        </div>
    </article>
    <aside>
        <div id="informatie">
            <h3>Informatie</h3>
                <p>
                    Download de brochure van deze afdeling:
                </p>
                    <a href="https://www.kw1c.nl/media/afdeling/folders/811%20ict%20folderlijn%20aangepast.pdf" title="Download de brochure" class="aDown bgRood" target="_blank">
                        <!--Zet de tekst schuin-->
                        <i id="download"><br></i>&nbsp;Brochure in PDF</a>
        </div>
        <div id="contact">
            <h3 class="aside">Contact</h3>
            <!--Link naar telefoonnummer                                             Zet een spatie-->
            <a href="tel:0736249600" title="Bel het Studenten Succes Centrum"><i></i>&nbsp;&nbsp;073 624 9 600</a><br>
            <!--Link naar email adres-->
            <a href="mailto:info@kw1c.nl" title="Stuur een e-mail naar het Studenten Succes Centrum"><i></i>&nbsp;&nbsp;info@kw1c.nl</a>
        </div>

    </aside>
    <?php
    include "../includes/footer.php"
    ?>

</body>
</html>
