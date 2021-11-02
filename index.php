<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>E-BOUTIQUE</title>
  </head>
  <body>
    <?php
      require('Model/connection.php');
      require('Model/user.php');
      require('Model/userManager.php');


      $bdd = new Connection();
      $userManager = new UserManager($bdd->getDb());

      include('View/formulaire.php');
      
      $donnees = array(
        'password'=> $_POST['password'],
        'email'=> $_POST['email'],
        'firstName' =>$_POST['firstName'],
        'lastName' =>$_POST['lastName'],
        'address' =>$_POST['address'],
        'postalCode' =>$_POST['postalCode'],
        'city' =>$_POST['city'],
      );
      
      
      $user = new User(); 
      $formulaireVide = $user->hydrate($donnees);
      if(!$formulaireVide){
        $userManager->create($user);
      }

      //$userManager->delete(1)
      
            
    ?>
  </body>
</html>
