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
            echo 'Syntax Error : '.$e->getMessage();
        }
    }

    public function getDb() {
        return $this->db;
    }
}
?>