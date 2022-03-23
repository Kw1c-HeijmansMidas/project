<?php
//var_dump($_GET);

echo $_POST ['fullname'];
echo $_POST ['location'];
echo $_POST ['aantalPersonen'];
echo $_POST ['nummer'];
echo $_POST ['datum'];
echo $_POST ['voorwaarden'];

//if controleer of dat de post waarde van voorwaarden bestaat
//empty() controleerd of de waarde leeg is.
//isset controleerd of de waarde bestaat.
if(isset($_POST['voorwaarden']) == true)
{
    echo "U gaat akkoord met de voorwaarden.";
}

else
{
    echo "Helaas gaat u niet akkoord.";
}
?>