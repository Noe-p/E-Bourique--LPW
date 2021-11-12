<header>
    <a href="index.php?ctrl=user&action=home">Noé PHILIPPE</a>
    <h1>TP Authentification et MVC</h1>
    <?php
        if(isset($_SESSION['user'])){
            echo "<a href='index.php?ctrl=user&action=unset'>Déconnexion</a>";
        }else{
            echo "<a href='index.php?ctrl=user&action=login'>Login</a>";
        }
    ?>
</header>

<style>
    header{
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: solid 1px black;
    }
</style>