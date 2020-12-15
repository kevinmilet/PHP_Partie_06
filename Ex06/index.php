<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent
et les afficher : index.php?building=12&room=101 -->

<?php

    if (!empty($_GET['building']) && !empty($_GET['room']))
    {
        echo 'Immeuble: ' . $_GET['building'] . ' Chambre: ' . $_GET['room'];
    } else {
        echo 'Numéros d\'immeuble et de chambre manquants!';
    }