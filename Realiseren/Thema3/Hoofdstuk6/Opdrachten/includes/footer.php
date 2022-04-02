<footer id="biggerfooter"> &copy;

        <?php

        if (isset($_COOKIE["userCountryCode"]) == true)
        {
            $countryCode = $_COOKIE["userCountryCode"];
            echo "<img src='../flags/$countryCode.png'>";
        }
        else
        {
            echo "<a href='../T3_REA_Oefening6_1.php'>Geef een land op</a>";
        }
        ?>

    <?php
    include "variabelen.php";

        echo $naam . "|" . " IO1CD4 " . "|" . $datum."<br>"
    ?>
</footer>