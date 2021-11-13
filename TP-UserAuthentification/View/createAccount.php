<?php
    require('header.php');
?>

<section class="createAccount">
  <div class="form-card">
    <h2>Création/Modification d'un User :</h2>
    <form action="index.php?ctrl=user&action=doCreate" method="POST">
      <div class="row">
        <div class="col">
          <label>Mail</label>
          <input type="email" name="email" placeholder="Mail.." />
          <label>Mot de passe</label>
          <input type="password" name="password" placeholder="Mot de passe..">
          <label>Nom</label>
          <input type=" text" name="lastName" placeholder="Nom.." />
          <label>Prénom</label>
          <input type="text" name="firstName" placeholder="Prénom.." />
        </div>
        <div class="col">
          <label>Adresse</label>
          <input type="text" name="address" placeholder="Adresse.." />
          <label>Code Postal</label>
          <input type="text" name="postalCode" placeholder="Code Postal.." />
          <label>Ville</label>
          <input type="text" name="city" placeholder="Ville.." />
        </div>
      </div>
      
      <?php 
          if(isset($error)){ echo "<p class='error'>$error</p>";}
      ?>
      <input type="submit" class="submit-btn" value="Créer/Valider"> 
    </form>
  </div>
</section>

<?php require('footer.php') ?>


<style>
  .createAccount{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
  }

  .createAccount .form-card form{
    width: 80%;
  }

  .createAccount .form-card form .row{
    width: 100%;
    display: flex;
    justify-content: space-around;
  }

  .createAccount .form-card form .row .col{
    display: flex;
    flex-direction: column;
    width: 40%;
  }

  
</style>