<?php

class TagsOfWiki {

    private $tagId;
    private $wikiId;

    public function __construct()
    {
    }

	public function getTagId(){
		return $this->tagId;
	}

	public function setTagId($tagId){
		$this->tagId = $tagId;
	}

	public function getWikiId(){
		return $this->wikiId;
	}

	public function setWikiId($wikiId){
		$this->wikiId = $wikiId;
	}
}