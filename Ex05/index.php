<?php

if (isset($_GET["week"]))
{
     echo 'Nous sommes en semaine ' . $_GET['week'];
     
} else {
    echo 'Paramètre manquant!';
}