<?php
$username = "1234";
$password = "1234";
if ($username == $_POST["username"] && $password == $_POST["password"])
{
    echo "<img id='schatkist' src='images/schatkist.png' alt='schatkist'>";
}

else
{
    echo "Password en / of username incorrect";
}
?>

