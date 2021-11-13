<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>E-BOUTIQUE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
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
    ?>
  </body>

  <style>
    body{
      padding: 0;
      margin: 0;
      margin-bottom: 130px;
      font-family: 'Roboto', sans-serif;
    }

    .error{
      color: #d22121;
    }

    .validate{
      color: #4d9c4f;
    }

      /* Form : */
    .form-card{
      width: 70%;
      border: solid 1px black;
      border-radius: 10px;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
    }
    .form-card form{
      margin-top: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 30%;
    }

    .form-card form label{
      width: 100%;
      text-align: left;
      margin-bottom: 3px;
      font-family: bold;
    }

    .form-card form input{
      width: 100%;
      padding-left: 10px;
      margin-bottom: 15px;
      border: solid 1px black;
      border-radius: 5px;
      height: 30px;
      font-size: 0.9em;
    }

    .form-card form .submit-btn{
      width: 50%;
      margin-top: 10px;
      background-color: #4d9c4f;
      border: solid 1px #333;
      color: white;
      font-size: 1.1em;
      height: 40px;

      transition: all 0.3s;
    }

    .form-card form .submit-btn:hover{
      cursor: pointer;
      width: 54%;
    }
  </style>
</html>
