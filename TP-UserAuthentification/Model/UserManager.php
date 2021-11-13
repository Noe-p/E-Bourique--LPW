<?php
class UserManager {
    private $db;
    public function __construct( $db1 ) {
        $this->db = $db1;
    }
    
    public function create(User $user) {
        //On créer le nouvel utilisateur : 
        try{
            $req = $this->db->prepare(
                'INSERT INTO USERS (lastName, firstName, email, address, postalCode, city, password, admin ) 
                VALUES (:lastName, :firstName, :email, :address, :cp, :city, :password, 0 )'
            );
    
            $req->execute(
                array(
                    ':lastName' => $user->getLastName(),
                    ':firstName' => $user->getFirstName(),
                    ':email' => $user->getEmail(),
                    ':address' => $user->getAddress(),
                    ':cp' => $user->getPostalCode(),
                    ':city' => $user->getCity(),
                    ':password' => $user->getPassword()
                )
            );
        }catch (Exception $e) {
            echo "erreur lors de l'inscription",  $e->getMessage(), "\n";
        }

        //On ajoute l'identifiant unique à sa classe : 
        $reqId = $this->db->prepare("SELECT MAX(id) FROM USERS");
        $reqId->execute();
        foreach($reqId->fetchAll() as $id){
            $user->setId($id['MAX(id)']);
        }
    }
    
    public function login(User $user) {
        //On vérifie que l'email et le mdp correspondent ; 
        $reqUsers = $this->db->prepare("SELECT id, email, password FROM USERS"); 
        $reqUsers->execute();
        $id = 0;

        foreach($reqUsers->fetchAll() as $res){
            if($user->getEmail() == $res['email'] && $user->getPassword() == $res['password']){
                $id = $res['id'];
            }
        }

        //Si il existe un utilisateur on renvoit ses données : 
        if($id){
            $req = $this->db->prepare("SELECT * FROM USERS WHERE id='$id'");
            $req->execute();

            $res = $req->fetch();
            $user->hydrate($res);
            
            return $user;
        }
        else{
            return;
        }
    }

    public final function findOne($id) {
        $req = $this->db->prepare("SELECT * FROM USERS WHERE id='$id'");
        $req->execute();
        
        return $req->fetchAll();
    }

    public final function findAll(){
        $req = $this->db->prepare('SELECT * FROM USERS');
        $req->execute();
        
        return $req->fetchAll();
    }

    public final function findByEmail($email) {
        $req = $this->db->prepare("SELECT email FROM USERS WHERE email='$email'");
        $req->execute();
        
        return $req->fetch();
    }

    public final function update(User $user) {
        $req = $this->db->prepare("UPDATE USERS
                                    SET email=:email, 
                                        password=:password,
                                        firstName=:firstName, 
                                        lastName=:lastName, 
                                        postalCode=:cp, 
                                        address=:address, 
                                        city=:city
                                    WHERE id=:id
                                ");
        $req->execute(
            array(
                ':id' => $user->getId(),
                ':lastName' => $user->getLastName(),
                ':firstName' => $user->getFirstName(),
                ':email' => $user->getEmail(),
                ':address' => $user->getAddress(),
                ':cp' => $user->getPostalCode(),
                ':city' => $user->getCity(),
                ':password' => $user->getPassword()
            )
        );

    }

    public final function delete($id) {
        $req = $this->db->prepare("DELETE FROM USERS 
                                    WHERE id='$id'
                                ");

        $req->execute();

    }
}
