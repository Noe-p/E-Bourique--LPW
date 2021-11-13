<?php require('header.php');?>

<section class="home">
    <?php
    if(isset($_SESSION['user'])){
        $user = unserialize($_SESSION['user']);
        echo "<h2>Bonjour ".$user->getFirstName().", Vous êtes connecté !</h2>";
        echo "<a href='./index.php?ctrl=user&action=userList'><img src='./View/icons/setting.png' alt='setting'>Administration</a>";
    }else{
        echo "<p>Vous pouvez vous connecter ou créer un compte</p>";
    }
    ?>
</section>

<?php require('footer.php');?>

<style>
    .home{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .home a{
        color: black;
        text-decoration: none;
        display: flex;
        flex-direction: column;
        align-items: center;
        border: solid 1px black;
        padding: 10px;
        border-radius: 10px;
        scale: 1;

        transition: all 0.3s;
    }

    .home a:hover{
        scale: 1.1;
    }

    .home a img{
        width: 40px;
    }
</style>