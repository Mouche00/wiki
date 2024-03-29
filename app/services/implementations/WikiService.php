<?php

class WikiService implements WikiServiceInterface {

    private $db;

    public function __construct(){
        $this->db = Database::getInstance();
    }

    public function readTruncated(){

        $sql = "SELECT wikis.id, title, content, dateModified, categories.name AS category_name, users.username AS author, users.picture AS user_picture FROM wikis 
        JOIN categories ON wikis.category_id = categories.id
        JOIN users ON users.id = wikis.user_id
        WHERE archived = '0'
        ORDER BY id DESC
        LIMIT 6";
        $this->db->query($sql);
        return $this->db->resultSet();

    }

    public function search($string){

        $sql = "SELECT wikis.id, title, content, dateModified, categories.name AS category_name, users.username AS author, users.picture AS user_picture FROM wikis 
        JOIN categories ON wikis.category_id = categories.id
        JOIN users ON users.id = wikis.user_id 
        WHERE title LIKE :string";
        $this->db->query($sql);
        $this->db->bind(":string", '%' . $string . '%');
        return $this->db->resultSet();

    }

    public function read(){

        $sql = "SELECT wikis.id, title, dateModified, categories.name AS category_name, users.username AS author, users.picture AS user_picture FROM wikis 
        JOIN categories ON wikis.category_id = categories.id
        JOIN users ON users.id = wikis.user_id
        WHERE archived = '0'";
        $this->db->query($sql);
        return $this->db->resultSet();

    }

    public function readArchived(){

        $sql = "SELECT wikis.id, title, dateModified, categories.name AS category_name, users.username AS author FROM wikis 
        JOIN categories ON wikis.category_id = categories.id
        JOIN users ON users.id = wikis.user_id
        WHERE archived = '1'";
        $this->db->query($sql);
        return $this->db->resultSet();

    }

    public function wikisOfAuthor($id){

        $sql = "SELECT wikis.id, title, dateModified, categories.name AS category_name FROM wikis 
        JOIN categories ON wikis.category_id = categories.id
        WHERE wikis.user_id = :id AND archived = '0'";
        $this->db->query($sql);
        $this->db->bind(':id', $id);
        return $this->db->resultSet();

    }

    public function last(){

        $this->db->query('SELECT * FROM wikis ORDER BY id DESC');
        return $this->db->single();

    }

    public function insert(Wiki $wiki){

        $title = $wiki->getTitle();
        $content = $wiki->getContent();
        $picture = $wiki->getPicture();
        $dateCreated = $wiki->getDateCreated();
        $dateModified = $wiki->getDateModified();
        $categoryId = $wiki->getCategoryId();
        $userId = $wiki->getUserId();

        $sql = "INSERT INTO wikis (title, content, picture, dateCreated, dateModified, category_id, user_id) VALUES (:title, :content, :picture, :dateCreated, :dateModified, :category_id, :user_id)";
        $this->db->query($sql);
        $this->db->bind(":title", $title);
        $this->db->bind(":content", $content);
        $this->db->bind(":picture", $picture);
        $this->db->bind(":dateCreated", $dateCreated);
        $this->db->bind(":dateModified", $dateModified);
        $this->db->bind(":category_id", $categoryId);
        $this->db->bind(":user_id", $userId);
        $this->db->execute();

    }

    public function edit(Wiki $wiki){

        $id = $wiki->getId();
        $title = $wiki->getTitle();
        $content = $wiki->getContent();
        $picture = $wiki->getPicture();
        $dateModified = $wiki->getDateModified();
        $categoryId = $wiki->getCategoryId();

        $sql = "UPDATE wikis SET title = :title, content = :content, picture = :picture, dateModified = :dateModified, category_id = :category_id WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind(":title", $title);
        $this->db->bind(":content", $content);
        $this->db->bind(":picture", $picture);
        $this->db->bind(":dateModified", $dateModified);
        $this->db->bind(":category_id", $categoryId);
        $this->db->bind(":id", $id);
        $this->db->execute();

    }

    public function softDelete($id){

        $sql = "UPDATE wikis SET archived = '1' WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind(":id", $id);
        $this->db->execute();

    }

    public function restore($id){

        $sql = "UPDATE wikis SET archived = '0' WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind(":id", $id);
        $this->db->execute();

    }

    public function delete($id){

        $sql = "DELETE FROM wikis WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind(":id", $id);
        $this->db->execute();

    }

    public function fetch($id){
        $sql = "SELECT * FROM wikis WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind(":id", $id);
        return $this->db->single();
    }

    public function getColumns(){
        $sql = "DESCRIBE `wikis`";
        $this->db->query($sql);
        return $this->db->resultSet();
    }
}