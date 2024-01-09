<?php

class UserService implements UserServiceInterface {

    private $db;

    public function __construct(){
        $this->db = Database::getInstance();
    }

    public function insert(User $user){

        $fullname = $user->getFullname();
        $username = $user->getUsername();
        $picture = $user->getPicture();
        $email = $user->getEmail();
        $password = $user->getPassword();

        // $fullname = "2";
        // $username = "2";
        // $picture = "2";
        // $email = "2";
        // $password = "2";

        $sql = "INSERT INTO users (fullname, username, picture, email, password) VALUES (:fullname, :username, :picture, :email, :password)";
        $this->db->query($sql);
        $this->db->bind(":fullname", $fullname);
        $this->db->bind(":username", $username);
        $this->db->bind(":picture", $picture);
        $this->db->bind(":email", $email);
        $this->db->bind(":password", $password);
        $this->db->execute();

    }

    public function last(){

        $this->db->query('SELECT * FROM users ORDER BY id DESC');
        return $this->db->single();

    }

    public function fetchByEmail($email){

        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(":email", $email);
        return $this->db->single();

    }
}