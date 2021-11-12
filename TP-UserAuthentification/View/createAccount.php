<?php
    require('header.php');
?>

<div class="sign-card">
    <header>
        <h1>Création/Modification d'un User</h1>
    </header>
    <hr />
    <section id="main-section">
        <form action="index.php?ctrl=user&action=doCreate" method="POST">
            <label>Mail</label>
            <input type="email" name="email" placeholder="Mail.." />
            <label>Mot de passe</label>
            <input type="password" name="password" placeholder="Mot de passe..">
            <label>Nom</label>
            <input type=" text" name="lastName" placeholder="Nom.." />
            <label>Prénom</label>
            <input type="text" name="firstName" placeholder="Prénom.." />
            <label>Adresse</label>
            <input type="text" name="address" placeholder="Adresse.." />
            <label>Code Postal</label>
            <input type="text" name="postalCode" placeholder="Code Postal.." />
            <label>Ville</label>
            <input type="text" name="city" placeholder="Ville.." />
            <?php 
                if(isset($error)){ echo $error;}
            ?>
            <input type="submit" class="submit-btn" value="Créer/Valider"> 
        </form>
    </section>
</div>

<style>
        /* Minimal properties */
.bold {
  font-weight: bold;
}

/*General*/
body {
  background-color: #f1f1f1;
  min-height: 100%;
  margin: 0;
  font-family: 'Source Sans Pro', sans-serif;
  color: black;
  text-align: center;
}

.sign-card {
  width: 500px;
  position: relative;
  left: 50%;
  top: 30px;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  padding: 15px;
  -webkit-box-shadow: 0 1px 20px rgba(0, 0, 0, 0.5);
          box-shadow: 0 1px 20px rgba(0, 0, 0, 0.5);
  border-radius: 15px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  /* Title */
  /* Form */
}

.sign-card hr {
  border: none;
  border-top: 1px solid rgba(0, 0, 0, 0.3);
  width: 80%;
  margin: 20px 10%;
}

.sign-card h1 {
  font-family: 'Glegoo', serif;
  font-size: 1.5em;
}

.sign-card #main-section {
  width: 80%;
  margin: 10px;
}

.sign-card #main-section form {
  text-align: left;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  /* Buttons */
}

.sign-card #main-section form input {
  width: 100%;
  border: solid 1px black;
  height: 40px;
  padding: 0;
  border-radius: 5px;
  padding-left: 10px;
  margin-bottom: 10px;
}

.sign-card #main-section form .submit-btn {
  background-color: #4d9c4f;
  color: white;
  font-size: 1em;
  width: 70%;
  margin-top: 30px;
}

.sign-card #main-section form .submit-btn:hover {
  cursor: pointer;
}
</style>