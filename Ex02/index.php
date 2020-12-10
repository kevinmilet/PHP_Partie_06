<?php

if (isset($_GET["age"]))
{
     echo 'Vous avez ' . $_GET['age'] . ' ans';
     
} else {
    echo 'Il manque votre age!';
}