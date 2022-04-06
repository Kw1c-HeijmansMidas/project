<nav>
    <?php

    //Controleren of de gebruiker is ingelogd.
    if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true)
    {
    ?>
       <a href='/Realiseren/Thema3/Hoofdstuk6/instructie/instructie_sessions/instructie_sessions_logout.php'>Log uit</a>
    <?php
    }

    else
    {?>

       <a href='/Realiseren/Thema3/Hoofdstuk6/instructie/instructie_sessions/instructie_sessions.php'>Login</a>
    <?php
    }
    ?>
    <h2>Thema 3</h2>
    <h3>Hoofdstuk 2</h3>
        <ul>
            <li><a href="/Realiseren/Thema3/Hoofdstuk2/Oefening/T3_REA_Oefening2.1.php">Oefening 2.1</a></li>

        </ul>
    <h3>Hoofdstuk 3</h3>
        <ul>
            <li><a href="/Realiseren/Thema3/Hoofdstuk3/Opdrachten/T3_REA_Oefening3.1.php">Oefening 3.1</a></li>
        </ul>
    <h3>Hoofdstuk 4</h3>
        <ul>
            <li><a href="/Realiseren/Thema3/Hoofdstuk4/Opdrachten/T3_REA_Oefening4.1">Oefening 4.1</a></li>
            <li><a href="/Realiseren/Thema3/Hoofdstuk4/Opdrachten/T3_REA_Oefening_4_2.php ">Oefening 4.2</a></li>
            <li><a href="/Realiseren/Thema3/Hoofdstuk4/Opdrachten/T3_REA_Oefening4.3.php">Oefening 4.3</a></li>
            <li><a href="/Realiseren/Thema3/Hoofdstuk4/Opdrachten/T3_REA_Oefening_4_4_frisdrankautomaat_bijlage">Oefening 4.4</a></li>
        </ul>
    <h3>Hoofdstuk 5</h3>
        <ul>
            <li><a href="../../Realiseren/Thema3/Hoofdstuk5/Opdrachten/T3_REA_Oefening5.1.php">Oefening 5.1</a></li>
            <li><a href="../../Realiseren/Thema3/Hoofdstuk5/Opdrachten/T3_REA_Oefening5.2.php">Oefening 5.2</a></li>
        </ul>

</nav>