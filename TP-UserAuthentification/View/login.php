<?php
    require('header.php');
?>
<section class="login">
    <form action="index.php?ctrl=user&action=doLogin" method="POST">
        <label>Mail</label>
        <input type="email" name="email" placeholder="Mail.." />
        <label>Mot de passe</label>
        <input type="password" name="password" placeholder="Mot de passe..">
        <input type="submit" class="submit-btn" value="Connexion"> 
        <?php if(isset($info)){echo $info;} ?>
    </form>
    <a href="index.php?ctrl=user&action=doCreate">Créer un compte</a>
</section>

<style>
    .login{
        width: 70%;
        border: solid 1px black;
        position: relative;
        left: 50%;
        transform: translateX(-50%);
        margin-top: 50px;
        border-radius: 10px;
        padding: 30px;
    }
    .login form{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .login form input{
        margin-bottom: 15px;
        height: 20px;
    }
</style>