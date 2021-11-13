<?php
    require('header.php');
?>

<section class="unauthorized">
    <p>Vous n'êtes pas autorisé à accéder à cette page.</p>
    <p>Veuillez contacter l'administrateur du site.</p>
</section>

<?php require('footer.php'); ?>

<style>
    .unauthorized{
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
    }
</style>