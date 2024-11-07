<?php
    session_start();
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center; font-size: 30px">
    <?php


    $numeroRandom = rand(1, 20);
    $numeroUtente = $_GET['numeroUtente'];



    if(!isset($_SESSION['tentativi'])) {
        $_SESSION['tentativi'] = 0;
    } else {
        $_SESSION['tentativi']++;
    }

    

    if($numeroUtente == $numeroRandom) {
        echo "<h1 style='color: green'>Hai vinto</h1>";
        if(!isset($_SESSION['vittorie'])) {
            $_SESSION['vittorie'] = 0;
        } else {
            $_SESSION['vittorie']++;
        }
        $_SESSION['tentativi'] = 0;
    } else {
        echo "<h1 style='color: red'>Hai perso</h1>";
    }

    echo "<br> Numero casuale: " . $numeroRandom; 
    echo "<br>Numero scelto: " . $numeroUtente;
    echo "<br>Tentativi: " . $_SESSION['tentativi'];
    echo "<br>Vittorie: " . $_SESSION['vittorie'];
    echo "<br>";
    echo "<a href='scelta.html' style='text-decoration: none'>Indovina</a>";





?>
</body>
</html>

