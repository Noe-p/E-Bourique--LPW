<section id="main-section">
    <?php
        if(isset($page)){
            require("./View/".$page.".php");
        }
    ?>
</section>