<?php
/**
 * User: Midas Heijmans
 * Date: 14-03-22
 * File: Project thema 3
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php
        echo 'Realiseren instructies thema 3 en 4.';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/forms.css" rel="stylesheet">
    <link href="../styles/menu.css" rel="stylesheet">
</head>
<body>
<!--include voor nav-->
<nav>
    <?php
    include "../includes/header.php"
    ?>
</nav>
<!--start header-->
    <header>
<!-- title-->
        <h1 id="title">
            Vragenlijst:
        </h1>
<!--rode streep -->
        <img src="../images/Screenshot%202022-04-13%20120735.jpg" alt="redline" id="redline">
    </header>
<!--start main-->
    <main>
<!-- begin form-->
        <form method="post" action="results.php">
<!--            input veld voor naam -->
            <p>
                <label for="name">Naam: </label>
                <input type="text" name="name" id="name" required>
            </p>
<!--             input veld voor leeftijd -->
            <p>
                <label for="leeftijd">Leeftijd: </label>
                <input type="number" name="leeftijd" id="leeftijd" required>
            </p>

            <p>
                Leerjaar:
            </p>
<!--                input veld voor het leerjaar (je kan er meerdere aanklikken)-->
            <div>
                <label><input type="checkbox" name="leerjaar" value="Leerjaar 1">Leerjaar 1</label><br>
                <label><input type="checkbox" name="leerjaar" value="Leerjaar 2">Leerjaar 2</label><br>
                <label><input type="checkbox" name="leerjaar" value="Leerjaar 3">Leerjaar 3</label><br>
                <label><input type="checkbox" name="leerjaar" value="Leerjaar 4">Leerjaar 4</label><br>
                <label><input type="checkbox" name="leerjaar" value="Leerjaar 5">Leerjaar 5</label><br>
            </div>

            <p>
                Heb je ervaring?
            </p><br>
<!--                alle ja en nee vragen gebruiken een "radio" button (ja kan er maar een aanklikken) -->
            <div>
                <label><input type="radio" name="ervaring" value="ja" required>ja</label><br>
                <label><input type="radio" name="ervaring" value="nee" required>nee</label><br>
            </div>

            <p>
                Vind je het leuk om met computers om te gaan?
            </p><br>

            <div>
                <label><input type="radio" name="leuk" value="ja" required>ja</label><br>
                <label><input type="radio" name="leuk" value="nee" required>nee</label><br>
            </div><br>

            <p>
                Ben je bereid meerdere uren achter de pc te zitten?
            </p><br>

            <div>
                <label><input type="radio" name="uren" value="ja" required>ja</label><br>
                <label><input type="radio" name="uren" value="nee" required>nee</label><br>
            </div><br>

            <p>
                Kunt u goed in teams werken?
            </p><br>

            <div>
                <label><input type="radio" name="teams" value="ja" required>ja</label><br>
                <label><input type="radio" name="teams" value="nee" required>nee</label><br>
            </div><br>

            <p>
                Ben je goed stress bestendig?
            </p><br>

            <div>
                <label><input type="radio" name="stress" value="ja" required>ja</label><br>
                <label><input type="radio" name="stress" value="nee" required>nee</label><br>
            </div><br>

            <p>
                Bent u creatief?
            </p><br>

            <div>
                <label><input type="radio" name="creatief" value="ja" required>ja</label><br>
                <label><input type="radio" name="creatief" value="nee" required>nee</label><br>
            </div><br>

            <p>
                Kunt u goed out off the box denken?
            </p><br>

            <div>
                <label><input type="radio" name="box" value="ja" required>ja</label><br>
                <label><input type="radio" name="box" value="nee" required>nee</label><br>
            </div><br>

            <p>
                Kan je je houden aan een deadline?
            </p><br>

            <div>
                <label><input type="radio" name="deadline" value="ja" required>ja</label><br>
                <label><input type="radio" name="deadline" value="nee" required>nee</label><br>
            </div><br>

            <p>
                Kan je werkend leren?
            </p><br>

            <div>
                <label><input type="radio" name="leren" value="ja" required>ja</label><br>
                <label><input type="radio" name="leren" value="nee" required>nee</label><br>
            </div><br>

            <p>
                Heb je goeie motivatie?
            </p><br>

            <div>
                <label><input type="radio" name="concentratie" value="ja" required>ja</label><br>
                <label><input type="radio" name="concentratie" value="nee" required>nee</label><br>
            </div><br>

            <p>
                Ben je efficient werken?
            </p><br>

            <div>
                <label><input type="radio" name="efficient" value="ja" required>ja</label><br>
                <label><input type="radio" name="efficient" value="nee" required>nee</label><br>
            </div><br>

            <p>
                Kan je compact werken?
            </p><br>

            <div>
                <label><input type="radio" name="compact" value="ja" required>ja</label><br>
                <label><input type="radio" name="compact" value="nee" required>nee</label><br>
            </div>



            <input type="submit" value="inleveren">
        </form>
        <br>
    </main>
<!--start footer-->
    <footer>
        <?php
        include "../includes/footer.php"
        ?>
    </footer>
</body>
</html>