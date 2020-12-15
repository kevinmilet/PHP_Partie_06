<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent
et les afficher : index.php?startDate=2/05/2016&endDate=27/11/2016 -->

<?php

    if (!empty($_GET['startDate']) && !empty($_GET['endDate']))
    {
        echo 'Cela commence le ' . $_GET['startDate'] . ' et fini le ' . $_GET['endDate'];
    } else {
        echo 'Il manque les dates';
    }