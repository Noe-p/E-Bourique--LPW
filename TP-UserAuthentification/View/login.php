<?php require('header.php'); ?>

<section class="login">
    <div class="form-card">
        <h2>Se connecter :</h2>
        <form action="index.php?ctrl=user&action=doLogin" method="POST">
            <label>Mail</label>
            <input type="email" name="email" placeholder="Mail.." />
            <label>Mot de passe</label>
            <input type="password" name="password" placeholder="Mot de passe..">
            <?php 
                if(isset($info)){echo "<p class='validate'>$info</p>";} 
                if(isset($error)){echo "<p class='error'>$error</p>";} 
            ?>
            <input type="submit" class="submit-btn" value="Connexion"> 
        </form>
        <a href="index.php?ctrl=user&action=doCreate">Créer un compte</a>
    </div>
</section>

<?php require('footer.php'); ?>

<style>
    .login{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .login a{
        color: black;
        margin-top: 30px;
    }

</style>