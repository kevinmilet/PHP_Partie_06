<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent
et les afficher : index.php?week=12 -->

<?php

    if (!empty($_GET['week']))
    {
        echo 'Nous sommes en semaine ' . $_GET['week'];
    } else {
        echo 'Numéro de la semaine non défini';
    }