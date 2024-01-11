<?php

class CategoryService implements CategoryServiceInterface {

    private $db;

    public function __construct(){
        $this->db = Database::getInstance();
    }

    public function read(){

        $sql = "SELECT * FROM categories";
        $this->db->query($sql);
        return $this->db->resultSet();

    }

    public function insert(Category $category){

        $name = $category->getName();
        $description = $category->getDescription();
        $picture = $category->getPicture();

        // $fullname = "2";
        // $username = "2";
        // $picture = "2";
        // $email = "2";
        // $password = "2";

        $sql = "INSERT INTO categories (name, description, picture) VALUES (:name, :description, picture)";
        $this->db->query($sql);
        $this->db->bind(":name", $name);
        $this->db->bind(":description", $description);
        $this->db->bind(":picture", $picture);
        $this->db->execute();

    }
}