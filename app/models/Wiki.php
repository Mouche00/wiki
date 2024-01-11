<?php

class Wiki {

    private $id;
    private $title;
    private $content;
    private $picture;
    private $dateCreated;
    private $dateModified;
    private $archived;
    private $categoryId;
    private $userId;

    public function __construct()
    {
    }

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getTitle(){
		return $this->title;
	}

	public function setTitle($title){
		$this->title = $title;
	}

	public function getContent(){
		return $this->content;
	}

	public function setContent($content){
		$this->content = $content;
	}

	public function getPicture(){
		return $this->picture;
	}

	public function setPicture($picture){
		$this->picture = $picture;
	}

	public function getDateCreated(){
		return $this->dateCreated;
	}

	public function setDateCreated($dateCreated){
		$this->dateCreated = $dateCreated;
	}

	public function getDateModified(){
		return $this->dateModified;
	}

	public function setDateModified($dateModified){
		$this->dateModified = $dateModified;
	}

	public function getArchived(){
		return $this->archived;
	}

	public function setArchived($archived){
		$this->archived = $archived;
	}

	public function getCategoryId(){
		return $this->categoryId;
	}

	public function setCategoryId($categoryId){
		$this->categoryId = $categoryId;
	}

	public function getUserId(){
		return $this->userId;
	}

	public function setUserId($userId){
		$this->userId = $userId;
	}
}