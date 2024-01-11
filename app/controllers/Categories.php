<?php

class Categories extends Controller {
    private $model;
    private $service;

    public function __construct(){
        $this->model = $this->model("Category");
        $this->service = $this->service("CategoryService");
    }

    public function display(){
        $data = $this->service->read();

        echo json_encode($data);
    }

    public function add(){

        // User
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = validateInputs($_POST);
            $picture = validatePicture($_FILES);

            if (!$data['errorCheck'] && !$picture['errorCheck']){

                $this->model->setName($data['name']);
                $this->model->setDescription($data['description']);
                $this->model->setPicture($picture['picture']);

                $this->service->insert($this->model);
            }

            $data = array_merge($data, $picture);

            echo json_encode($data);
            
        }
        // var_dump($this->model);


    }
}