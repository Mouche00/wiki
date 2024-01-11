<?php

class TagService implements TagServiceInterface {

    private $db;

    public function __construct(){
        $this->db = Database::getInstance();
    }

    public function read(){

        $sql = "SELECT * FROM tags";
        $this->db->query($sql);
        return $this->db->resultSet();

    }

    public function insert(Tag $tag){

        $name = $tag->getName();

        $sql = "INSERT INTO tags (name) VALUES (:name)";
        $this->db->query($sql);
        $this->db->bind(":name", $name);
        $this->db->execute();

    }

    public function edit(Tag $tag){

        $id = $tag->getId();
        $name = $tag->getName();

        $sql = "UPDATE tags SET name = :name WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind(":name", $name);
        $this->db->bind(":id", $id);
        $this->db->execute();

    }

    public function delete($id){

        $sql = "DELETE FROM tags WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind(":id", $id);
        $this->db->execute();

    }

    public function fetch($id){
        $sql = "SELECT * FROM tags WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind(":id", $id);
        return $this->db->single();
    }

    public function fetchByWiki($id){
        $sql = "SELECT tags.name FROM tags 
        JOIN tagsOfWiki ON tags.id = tagsOfWiki.tags_id 
        JOIN wikis ON tagsOfWiki.wikis_id = wikis.id
        WHERE wikis.id = :id";
        $this->db->query($sql);
        $this->db->bind(":id", $id);
        return $this->db->resultSet();
    }

    public function getColumns(){
        $sql = "DESCRIBE `tags`";
        $this->db->query($sql);
        return $this->db->resultSet();
    }
}