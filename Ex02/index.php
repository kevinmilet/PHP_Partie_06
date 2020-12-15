<!-- Faire une page index.php. Tester sur cette page que le paramètre age existe
et si c'est le cas l'afficher sinon le signaler : index.php?lastname=Nemare&firstname=Jean -->

<?php

    // if (isset($_GET['age']))
    if (!empty($_GET['lastname']) && !empty($_GET['firstname']) && !empty($_GET['age']))
    {
        echo 'Bonjour ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . ', vous avez ' . $_GET['age'] . ' ans';
    } else {
        // echo 'Il manque votre age!';
        echo 'Bonjour ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . '. Il manque votre âge!!!';
    }