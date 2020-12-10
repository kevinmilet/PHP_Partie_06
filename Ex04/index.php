<?php

if (isset($_GET["language"]) && isset($_GET["server"]))
{
     echo 'On utilise le langage ' . $_GET['language'] . ' sur un serveur ' . $_GET["server"];
     
} else {
    echo 'Paramètre manquant!';
}