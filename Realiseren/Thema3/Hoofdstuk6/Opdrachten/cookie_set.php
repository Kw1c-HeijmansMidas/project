<?php

    // Is er een POST value "txtUsername" opgegeven?
    if( isset($_POST["txtUsername"]) == true)
    {
        //  opdracht 1: Programmeer hieronder (via cookieset) een cookie met de volgende eisen:
        //   Expiration date: over 356 dagen (1 jaar)
        //   Naam: userUsernameCookie
        //   Value: $_POST["txtUsername"]
		//   Path:  "/"
    }
    else
    {
        echo "<p>Je bent vergeten een username op te geven. Ga terug!</p>";
    }

    // Is er een POST value "selCountry" opgegeven?
    if( isset($_POST["selCountry"]) == true)
    {
        //  Opdracht 2: Programmeer hieronder (via cookieset) een cookie met de volgende eisen:
        //   Expiration date: over 356 dagen (1 jaar)
        $expired = time() + 3600 * 24;
        //   Naam: userCountryCode
        //   Value: $_POST["selCountry"]
		//   Path: "/"
    }
    else
    {
        echo "<p>Je bent vergeten een land op te geven. Ga terug!</p>";
    }

    // Stuur een gebruiker door naar de index pagina!
    // header("Location: /T3_REA_Oefeningen/index.php");

?>