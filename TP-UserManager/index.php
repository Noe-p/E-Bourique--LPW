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
      
      if(
        !empty($_POST['email']) &&
        !empty($_POST['password']) && 
        !empty($_POST['lastName']) &&
        !empty($_POST['firstName']) &&
        !empty($_POST['address']) &&
        !empty($_POST['postalCode']) &&
        !empty($_POST['city'])
      ){
        $user = new User(); 
        $user->hydrate($_POST);
        $userManager->create($user);
        //$userManager->delete(1)
      }
      else{
        echo "Veuillez remplir tous le formulaire";
      }

        
        

        
      
      
      
      
      
            
    ?>
  </body>
</html>
