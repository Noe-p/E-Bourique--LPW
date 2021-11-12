<?php 
class userController{

    private $userManager; 
    private $user; 
    private $db;

    public function __construct($db1){
        require('./Model/User.php');
        require_once('./Model/UserManager.php');
        $this->userManager = new UserManager($db1);
        $this->db = $db1; 
    }

    public function login(){
        $page = 'login';
        require('./View/main.php');
    }
    public function home(){
        $page = 'home';
        require('./View/main.php');
    }
    public function userList(){
        $page = 'userList';
        require('./View/main.php');
    }
    public function unset(){
        unset($_SESSION['user']);
        $this->home();
    }

    public function doLogin(){
        $this->user = new User();
        if (
            isset($_POST['email']) &&
            isset($_POST['password']) 
        ){
            $this->user->setEmail($_POST['email']); 
            $this->user->setPassword($_POST['password']); 
        }
        $result = $this->userManager->login($this->user);
        $this->user = $result;
        
        if($result){
            $info = "Connexion réussie";
            $_SESSION['user'] = $this->user; 
            $page = 'home';
        }
        else{
            $info = "Indentifiants incorrects.";
            $page = "login";
        }
        require('./View/main.php');
    }

    public function doCreate(){
        if(
            isset($_POST['email']) &&
            isset($_POST['password']) && 
            isset($_POST['lastName']) &&
            isset($_POST['firstName']) &&
            isset($_POST['address']) &&
            isset($_POST['postalCode']) &&
            isset($_POST['city'])
        ){
            if (
                !empty($_POST['email']) &&
                !empty($_POST['password']) && 
                !empty($_POST['lastName']) &&
                !empty($_POST['firstName']) &&
                !empty($_POST['address']) &&
                !empty($_POST['postalCode']) &&
                !empty($_POST['city'])
            ){
                $alreadyExist = $this->userManager->findByEmail($_POST['email']);
                if(!$alreadyExist){
                    $newUser = new User();
                    $newUser->hydrate($_POST);
                    $this->userManager->create($newUser);
                    $page = 'login';
                    $info = 'Inscription réussie !';
                }
                else{
                    $error = "ERROR : This email (".$_POST['email'].") is used by another user.";
                    $page = 'createAccount';
                }
            }
            else{
                $error = "Veuillez compléter tous le formulaire.";
                $page = 'createAccount';
            }
        }
        else{
            $page = "createAccount";
        }
       
        require('./View/main.php');
    }
}