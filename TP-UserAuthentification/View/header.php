<header>
    <a href="index.php?ctrl=user&action=home"><img src='./View/icons/home.png' alt='home'>Noé PHILIPPE</a>
    <h1>TP Authentification et MVC</h1>
    <?php
        if(isset($_SESSION['user'])){
            echo "<a href='index.php?ctrl=user&action=unset'><img src='./View/icons/logout.png' alt='logout'>Déconnexion</a>";
        }else{
            echo "<a href='index.php?ctrl=user&action=login'><img src='./View/icons/login.png' alt='login'>Connexion</a>";
        }
    ?>

</header>

<style>
    header{
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 1px 7px black;
        padding: 20px;
        position: sticky;
        background-color: white;
        margin-bottom: 50px;
    }

    header a{
        color: black;
        text-decoration: none;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    header a img{
        width: 40px;
    }
</style>