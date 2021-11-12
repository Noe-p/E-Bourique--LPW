<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>E-BOUTIQUE</title>
  </head>
  <body>
    <?php
      session_start();
      require_once('./Model/Connection.php');
      $pdoBuilder = new Connection();
      $db = $pdoBuilder->getDb();
      if ( 
        ( isset($_GET['ctrl']) && !empty($_GET['ctrl']) ) &&
        ( isset($_GET['action']) && !empty($_GET['action']) ) 
      ){
        $ctrl = $_GET['ctrl'];
        $action = $_GET['action'];
      }
      else{
        $ctrl = 'user';
        $action = 'home';
      }
      
      require_once('./Controller/' . $ctrl . 'Controller.php');

      $ctrl = $ctrl . 'Controller'; 
      $controller = new $ctrl($db);
      $controller->$action();
     
      /*
      require('Model/connection.php');
      require('Model/user.php');
      require('Model/userManager.php');


      $bdd = new Connection();
      $userManager = new UserManager($bdd->getDb());

      include('View/formulaire.php');
      
      if(!empty($_POST['email'])){
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
      }
      
      */
    ?>
  </body>
</html>
