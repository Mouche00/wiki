<?php

class TagsOfWikiService implements TagsOfWikiServiceInterface {

    private $db;

    public function __construct(){
        $this->db = Database::getInstance();
    }

    public function insert(TagsOfWiki $tagsOfWiki){

        $tagId = $tagsOfWiki->getTagId();
        $wikiId = $tagsOfWiki->getWikiId();

        $sql = "INSERT INTO tagsOfWiki VALUES (:tagId, :wikiId);";
        $this->db->query($sql);
        $this->db->bind(":tagId", $tagId);
        $this->db->bind(":wikiId", $wikiId);
        $this->db->execute();

    }

    public function delete($id){
        $sql = "DELETE FROM tagsOfWiki WHERE wikis_id = :id;";
        $this->db->query($sql);
        $this->db->bind(":id", $id);
        $this->db->execute();
    }

}