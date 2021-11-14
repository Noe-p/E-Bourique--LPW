<?php

class User {
  private $id;
  private $email;
  private $password;
  private $firstName;
  private $lastName;
  private $address;
  private $postalCode;
  private $city;
  private $admin;
  

  public function hydrate(array $donnees){ 
    foreach($donnees as $key => $value){
      if($key == 'password')
        $this->$key=htmlspecialchars(addslashes(crypt($value,'st')));
      else
        $this->$key=htmlspecialchars(addslashes($value));
    }
  }

//Setter
  public final function setId($id1){
    $this->id=htmlspecialchars(addslashes($id1));
  }

  public final function setEmail($email1){
    $this->email=htmlspecialchars(addslashes($email1));
  }

  public final function setPassword($password1){
    $this->password=htmlspecialchars(addslashes(crypt($password1, 'st')));
  }

  public final function setFirstName($firstName1){
    $this->firstName=htmlspecialchars(addslashes($firstName1));
  }

  public final function setLastName($lastName1){
    $this->lastName=htmlspecialchars(addslashes($lastName1));
  }

  public final function setAdresse($adresse1){
    $this->adresse=htmlspecialchars(addslashes($adresse1));
  }

  public final function setPostalCode($postalCode1){
    $this->postalCode=htmlspecialchars(addslashes($postalCode1));
  }

  public final function setCity($city1){
    $this->city=htmlspecialchars(addslashes($city1));
  }

//Getter
  public final function getId(){
    return $this->id;
  }

  public final function getEmail(){
    return $this->email;
  }

  public final function getPassword(){
    return $this->password;
  }

  public final function getFirstName(){
    return $this->firstName;
  }

  public final function getLastName(){
    return $this->lastName;
  }

  public final function getAddress(){
    return $this->address;
  }

  public final function getPostalCode(){
    return $this->postalCode;
  }

  public final function getCity(){
    return $this->city;
  }

  public final function getAdmin(){
    return $this->admin;
  }


}

 ?>
