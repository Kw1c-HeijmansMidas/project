<?php
session_start();
var_dump($_SESSION);

if ($_SESSION["loggedIn"] == true)
{
    echo "De pagina weergeven";
}

else
{
    echo "U bent nog niet ingelogd";
}
?>