<?php

namespace classes;

class User
{
    private $username;
    private $email;
    private $password;

    public function __construct($username, $email, $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function createUser(){
        $sql=
    }
    //Getters//

    public function getUsername(){
        return $this->username;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }

    //Setters

    public function setUsername($newUsername){
        $this->username = $newUsername;
    }

    public function setEmail($newEmail){
        $this->email = $newEmail;
    }

    public function setPassword($newPassword){
        $this->password = $newPassword;
    }
}