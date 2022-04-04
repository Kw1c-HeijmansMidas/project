<?php
//Opstarten van een sessie
session_start();

$username = "Mike";
$password = "Kw1c";

if ($username == $_POST["username"] && $password == $_POST["password"])
{
    echo "Succesvol ingelogd";
//    Toevoegen van een waarde aan mijn sessie
    $_SESSION["loggedIn"] = true;
}

else
{
    echo "Niet ingelogd";
}
?>