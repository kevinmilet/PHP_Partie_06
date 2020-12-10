<?php

if (isset($_GET["lastname"]) && isset($_GET["firstname"]))
{
     echo $_GET['firstname'] . ' ' . $_GET["lastname"];
     
} else {
    echo 'Paramètre manquant!';
}
