<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent
et les afficher : index.php?language=PHP&server=LAMP -->

<?php

    if (!empty($_GET['language']) && !empty($_GET['server']))
    {
        echo 'On utilise le langage ' . $_GET['language'] . ' sur un serveur ' . $_GET['server'];
    } else {
        echo 'Paramètre manquant!';
    }