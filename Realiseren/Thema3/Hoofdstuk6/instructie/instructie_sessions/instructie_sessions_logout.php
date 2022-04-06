<?php
//Sessie starten
session_start();

//Specifieke sessie variabelen weg te gooien.
//unset($_SESSION["loggedIn])

//Vernietig je de bestaande sessie.
session_destroy();

//Doorsturen naar de loginpagina.
header("Location: instructie_sessions.php");
?>