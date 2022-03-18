<?php
/**
 * User: Mike Huijberts
 * Date: 9-2-2021
 * File: T3_REA_Oefening1.1.php
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
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link href="./stylesheet/faq.css" rel="stylesheet">
    <script src="script/javascript.js" defer></script>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a id="MenuHome" href="home.php">Home</a></li>
            <li><a id="MenuFAQ" href="faq.php">FAQ</a></li>
        </ul>
    </nav>
</header>
<main>
    <article>
        <button class="accordion">Is het een binnen of een buiten sportschool?</button>
        <div class="panel">
            <p> Is het een binnen of een buiten sportschool?</p>
        </div>

        <button class="accordion">Hoeveel kost een lidmaatschap?</button>
        <div class="panel">
            <p>Hoeveel kost een lidmaatschap?</p>
        </div>

        <button class="accordion">Wat zijn de openingstijden?</button>
        <div class="panel">
            <p>Wat zijn de openingstijden?</p>
        </div>
    </article>
</main>
</body>
</html>

