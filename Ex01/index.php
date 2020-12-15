<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent
et les afficher : index.php?lastname=Nemare&firstname=Jean -->

<?php

    if (!empty($_GET['lastname']) && !empty($_GET['firstname'])) 
    {
        echo $_GET['firstname'] . ' ' . $_GET['lastname'];
    } else {
        echo 'Paramètre manquant!';
    }
