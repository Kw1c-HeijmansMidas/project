
<!--/*-->
<!-- * Name:-->
<!-- * Date:-->
<!-- * Hoger/Lager-->
<!-- */-->
<!---->
<!--//Maak een formulier waarin je kan kiezen voor hoger of lager. Zorg dat dit formulier naar zichzelf wordt gestuurd en in de juiste template wordt ingeladen.-->
<!---->
<!---->
<!--//Maak een variabele $randomNumber met een nieuw random getal tussen de 1-100. Toon dit nummer op je scherm-->
<!---->
<!---->
<!--//Controleren of er een sessie bestaat waarin het getal is opgeslagen.-->
<!--    //Zo niet, maak dan één sessie variabele om het getal in op te slaan en één om de score in op te slaan.-->
<!--    //Zo wel, maak dan een variabele $lastScore om de score uit de huidige sessie in op te slaan. Overschrijf daarna de sessievariabele met het nieuw random getal($randomNumber).-->
<!---->
<!---->
<!--//Controleren nu of er een POST waarde is gestuurd.-->
<!---->
<!--	//Controleren of er gekozen is voor hoger .-->
<!--		//Controleren of het gegenereerde getal hoger is dan het opgeslagen getal ($lastScore) *-->
<!--            //Ja?, Toon winst melding en verhoog score met 1.-->
<!--            //Nee? Toon verlies melding en zet score op 0.-->


<!DOCTYPE html>
<html>
<head>
    <title> Gamble </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <?php

    include('config.php');
    if(!$_SESSION['username']) {
        header("Location: index.php");
    }

    $num1 = rand(1, 100);

    if(isset($_POST))
    {
        if($_POST['higher']) {
            $num2 = rand(1, 100);
            $oldNum = intval($_POST['num1']);
                if($num2 > $oldNum) {
                    echo "You win! Your number:".$oldNum." , and the new number is: ".$num2;
                }
        }
    }

    ?>
    <form method="POST">
        <input type="Hidden" value="<?= $num1 ?>" name="num1"><?= $num1 ?><br>
        <input type="Submit" name="higher" value="Higher">
        <input type="Submit" name="lower" value="Lower">
    </form>
</body>
</html>