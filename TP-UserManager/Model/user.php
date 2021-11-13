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

  

  public function hydrate(array $donnees){ 
    foreach($donnees as $key => $value){
      if(empty($value)){
        echo "$key est vide";
        return 1;
      }
      $this->$key=htmlspecialchars($value);
    }
    return 0;
  }

//Setter
  public final function setId($id1){
    $this->id=$id1;
  }

  public final function setEmail($email1){
    $this->email=$email1;
  }

  public final function setPassword($password1){
    $this->password=$password1;
  }

  public final function setFirstName($firstName1){
    $this->firstName=$firstName1;
  }

  public final function setLastName($lastName1){
    $this->lastName=$lastName1;
  }

  public final function setAdresse($adresse1){
    $this->adresse=$adresse1;
  }

  public final function setPostalCode($postalCode1){
    $this->postalCode=$postalCode1;
  }

  public final function setCity($city1){
    $this->city=$city1;
  }

//Getter
  public final function getId(){
    return $this->id;
  }

  public final function getEmail(){
    return $this->email;
  }

  public final function getPassword(){
    return sha1($this->password);
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


}

 ?>
