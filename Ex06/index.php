<?php

if (isset($_GET["building"]) && isset($_GET["room"]))
{
    echo 'Immeuble: ' . $_GET['building'] . ' Chambre: ' . $_GET["room"];
     
} else {
    echo 'Paramètre manquant!';
}