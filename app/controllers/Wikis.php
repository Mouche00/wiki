<?php

class Wikis extends Controller {
    private $model;
    private $service;

    public function __construct(){
        $this->model = $this->model("Wiki");
        $this->service = $this->service("WikiService");
    }

    public function displayTruncated(){
        $data = $this->service->readTruncated();

        echo json_encode($data);
    }

    public function display(){
        $data = $this->service->read();

        echo json_encode($data);
    }

    public function displayArchived(){
        $data = $this->service->readArchived();

        echo json_encode($data);
    }

    public function wikisOfAuthor(){
        $data = $this->service->wikisOfAuthor($_SESSION['id']);

        echo json_encode($data);
    }

    public function add(){

        // User
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = validateInputs($_POST, false);
            $picture = validatePicture($_FILES);

            if (!$data['errorCheck'] && !$picture['errorCheck']){

                $this->model->setTitle($_POST['title']);
                $this->model->setContent($_POST['content']);
                $this->model->setPicture($picture['picture']);
                $this->model->setDateCreated(date('Y-m-d H:i:s'));
                $this->model->setDateModified(date('Y-m-d H:i:s'));
                $this->model->setUserId($_SESSION['id']);
                $this->model->setCategoryId($_POST['category']);

                $this->service->insert($this->model);
                $wikiId = $this->service->last();

                foreach($_POST['tags'] as $tag){
                    $tagObj = new TagsOfWiki();
                    $tagObj->setTagId($tag);
                    $tagObj->setWikiId($wikiId->id);

                    $tagService = new TagsOfWikiService();
                    $tagService->insert($tagObj);
                }
            }

            echo json_encode($_POST);
            
        }
        // var_dump($this->model);


    }

    public function edit($id){

        // User
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = validateInputs($_POST, false);
            $picture = validatePicture($_FILES);

            if (!$data['errorCheck'] && !$picture['errorCheck']){

                $this->model->setId($id);
                $this->model->setTitle($_POST['title']);
                $this->model->setContent($_POST['content']);
                $this->model->setPicture($picture['picture']);
                $this->model->setDateModified(date('Y-m-d H:i:s'));
                $this->model->setCategoryId($_POST['category']);

                $this->service->edit($this->model);
                // echo json_encode($this->model);

                $tagService = new TagsOfWikiService();
                $tagService->delete($id);
                foreach($_POST['tags'] as $tag){
                    $tagObj = new TagsOfWiki();
                    $tagObj->setTagId($tag);
                    $tagObj->setWikiId($id);

                    $tagService->insert($tagObj);
                }
            }

            echo json_encode($data);
            
        } else {
            $data = $this->service->fetch($id);
            echo json_encode($data);
        }
        // var_dump($this->model);


    }

    public function remove($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->service->delete($id);
        }
    }

    public function archive($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->service->softDelete($id);
        }
    }

    public function restore($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->service->restore($id);
        }
    }

    public function getColumns()
    {
        $data = $this->service->getColumns();
        echo json_encode($data);
    }
}