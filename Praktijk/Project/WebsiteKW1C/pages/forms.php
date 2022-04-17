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
    <link href="../styles/menu2.css" rel="stylesheet">
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
            <p>
                <label for="name">Naam: </label>
                <input type="text" name="name" id="name" required>
            </p>
            <p>
                Leerjaar:
            </p>

            <p>
                <label for="leeftijd">Leeftijd: </label>
                <input type="number" name="leeftijd" id="leeftijd" required>
            </p>

            <div>
                <label><input type="checkbox" name="leerjaar" value="Leerjaar 1" required>Leerjaar 1</label><br>
                <label><input type="checkbox" name="leerjaar" value="Leerjaar 2" required>Leerjaar 2</label><br>
                <label><input type="checkbox" name="leerjaar" value="Leerjaar 3" required>Leerjaar 3</label><br>
                <label><input type="checkbox" name="leerjaar" value="Leerjaar 4" required>Leerjaar 4</label><br>
                <label><input type="checkbox" name="leerjaar" value="Leerjaar 5" required>Leerjaar 5</label><br>
            </div>

            <div>
                <label><input type="radio" name="ervaring" value="ja" required>ja</label><br>
                <label><input type="radio" name="ervaring" value="nee" required>nee</label><br>
            </div>
            <div>
                <label><input type="radio" name="leuk" value="ja" required>ja</label><br>
                <label><input type="radio" name="leuk" value="nee" required>nee</label><br>
            </div>
            <div>
                <label><input type="radio" name="uren" value="ja" required>ja</label><br>
                <label><input type="radio" name="uren" value="nee" required>nee</label><br>
            </div>
            <div>
                <label><input type="radio" name="teams" value="ja" required>ja</label><br>
                <label><input type="radio" name="teams" value="nee" required>nee</label><br>
            </div>
            <div>
                <label><input type="radio" name="stress" value="ja" required>ja</label><br>
                <label><input type="radio" name="stress" value="nee" required>nee</label><br>
            </div>
            <div>
                <label><input type="radio" name="creatief" value="ja" required>ja</label><br>
                <label><input type="radio" name="creatief" value="nee" required>nee</label><br>
            </div>
            <div>
                <label><input type="radio" name="box" value="ja" required>ja</label><br>
                <label><input type="radio" name="box" value="nee" required>nee</label><br>
            </div>
            <div>
                <label><input type="radio" name="deadline" value="ja" required>ja</label><br>
                <label><input type="radio" name="deadline" value="nee" required>nee</label><br>
            </div>
            <div>
                <label><input type="radio" name="leren" value="ja" required>ja</label><br>
                <label><input type="radio" name="leren" value="nee" required>nee</label><br>
            </div>
            <div>
                <label><input type="radio" name="concentratie" value="ja" required>ja</label><br>
                <label><input type="radio" name="concentratie" value="nee" required>nee</label><br>
            </div>
            <div>
                <label><input type="radio" name="efficient" value="ja" required>ja</label><br>
                <label><input type="radio" name="efficient" value="nee" required>nee</label><br>
            </div>
            <div>
                <label><input type="radio" name="compact" value="ja" required>ja</label><br>
                <label><input type="radio" name="compact" value="nee" required>nee</label><br>
            </div>



            <input type="submit" value="inleveren">
        </form>
    </main>
<!--start footer-->
    <footer>
        <?php
        include "../includes/footer.php"
        ?>
    </footer>
</body>
</html>