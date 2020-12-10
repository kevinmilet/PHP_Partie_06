<?php

if (isset($_GET["startDate"]) && isset($_GET["endDate"]))
{
     echo 'Cela commence le ' . $_GET['startDate'] . ' et fini le ' . $_GET["endDate"];
     
} else {
    echo 'Il manque les dates';
}