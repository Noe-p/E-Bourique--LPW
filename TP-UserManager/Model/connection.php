<?php
class Connection {
    private $host;
    private $dbname;
    private $username; 
    private $password;
    private $db;
   
    public function __construct() {
        $this->host = 'np16029-001.privatesql:35815';
        $this->dbname = 'licence21';
        $this->username = 'licence21';
        $this->password = 'XtcGLoA3';
        try{
            $this->db = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname . ';charset=utf8', $this->username, $this->password);
        }
        catch(PDOException $e){
            if($e->getCode() == '2002'){
                echo "<script>console.log('connexion bdd sur localhost');</script>";
                $this->host = 'localhost';
                $this->dbname = 'TP_E-BOUTIQUE';
                $this->username = 'root';
                $this->password = 'root';

                try{
                    $this->db = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname . ';charset=utf8', $this->username, $this->password);
                }
                catch(PDOException $e){
                    echo 'Syntax Error : '.$e->getMessage();
                }
            }
            else{
                echo 'Syntax Error : '.$e->getMessage();
            }
        }
    }

    public function getDb() {
        return $this->db;
    }
}
?>