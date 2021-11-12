<?php
    require('header.php');
    if(isset($_SESSION['user'])){
        echo $info;
        echo "<h1>Bonjour ".$_SESSION['user']->getFirstName().", Vous êtes connecté !</h1>";
    };
?>

