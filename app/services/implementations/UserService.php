<?php

class UserService implements UserServiceInterface {

    private $db;

    public function __construct(){
        $this->db = Database::getInstance();
    }

    public function read(){

        $this->db->query('SELECT users.id, users.picture, users.fullname, users.email, roles.name as role_name FROM users 
        JOIN rolesOfUser ON users.id = rolesOfUser.users_id 
        JOIN roles ON rolesOfUser.roles_id = roles.name');
        return $this->db->resultSet();

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

        $this->db->query('SELECT *, roles.name as role_name FROM users 
        JOIN rolesOfUser ON users.id = rolesOfUser.users_id 
        JOIN roles ON rolesOfUser.roles_id = roles.name 
        WHERE email = :email');
        $this->db->bind(":email", $email);
        return $this->db->single();

    }

    public function getColumns(){
        $sql = "DESCRIBE `users`";
        $this->db->query($sql);
        return $this->db->resultSet();
    }
    
}