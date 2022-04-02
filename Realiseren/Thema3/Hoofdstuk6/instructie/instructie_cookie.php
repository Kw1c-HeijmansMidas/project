<?php
//Aantal seconden na 1-1-1970 + 24 uur.
$expired = time() + 3600 * 24;
//echo  $expired;

//Controleren of dat er een action wordt meegestuurd en of deze de waarde "reset" heeft.
if(isset($_GET["action"]) == true && $_GET["action"] == "reset")
{

    $count = 0;
}

else
{
    if(isset($_COOKIE["userCount"]) == true)
    {
        $count = $_COOKIE["userCount"] + 1;
    }
    else
    {
        $count = 1;
    }
}

echo $count;



setcookie("userCount", $count, $expired, "/");

?>
<?php
include "../Opdrachten/includes/footer.php"
?>
<a href="instructie_cookie.php">Click</a>
<a href="instructie_cookie.php?action=reset">Reset</a>
