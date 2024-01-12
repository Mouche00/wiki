<?php

class CategoryService implements CategoryServiceInterface {

    private $db;

    public function __construct(){
        $this->db = Database::getInstance();
    }

    public function read(){

        $sql = "SELECT * FROM categories ORDER BY id DESC";
        $this->db->query($sql);
        return $this->db->resultSet();

    }

    public function search($string){

        $sql = "SELECT * FROM categories WHERE name LIKE :string";
        $this->db->query($sql);
        $this->db->bind(":string", '%' . $string . '%');
        return $this->db->resultSet();

    }

    public function insert(Category $category){

        $name = $category->getName();
        $description = $category->getDescription();

        $sql = "INSERT INTO categories (name, description) VALUES (:name, :description)";
        $this->db->query($sql);
        $this->db->bind(":name", $name);
        $this->db->bind(":description", $description);
        $this->db->execute();

    }

    public function edit(Category $category){

        $id = $category->getId();
        $name = $category->getName();
        $description = $category->getDescription();

        $sql = "UPDATE categories SET name = :name, description = :description WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind(":name", $name);
        $this->db->bind(":description", $description);
        $this->db->bind(":id", $id);
        $this->db->execute();

    }

    public function delete($id){

        $sql = "DELETE FROM categories WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind(":id", $id);
        $this->db->execute();

    }

    public function fetch($id){
        $sql = "SELECT * FROM categories WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind(":id", $id);
        return $this->db->single();
    }

    public function getColumns(){
        $sql = "DESCRIBE `categories`";
        $this->db->query($sql);
        return $this->db->resultSet();
    }
}