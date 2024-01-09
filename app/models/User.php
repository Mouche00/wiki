<?php

class User {

    private $fullname;
    private $username;
    private $picture;
    private $email;
    private $password;

    public function __construct()
    {
    }

    public function getFullname(){
		return $this->fullname;
	}

	public function setFullname($fullname){
		$this->fullname = $fullname;
	}

	public function getUsername(){
		return $this->username;
	}

	public function setUsername($username){
		$this->username = $username;
	}

	public function getPicture(){
		return $this->picture;
	}

	public function setPicture($picture){
		$this->picture = $picture;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
	}
}