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

            if (!$data['errorCheck']){

                $this->model->setName($data['name']);
                $this->model->setDescription($data['description']);

                $this->service->insert($this->model);
            }

            echo json_encode($data);
            
        }
        // var_dump($this->model);


    }

    public function edit($id){

        // User
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = validateInputs($_POST);

            if (!$data['errorCheck']){

                $this->model->setId($id);
                $this->model->setName($data['name']);
                $this->model->setDescription($data['description']);

                $this->service->edit($this->model);
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

    public function getColumns()
    {
        $data = $this->service->getColumns();
        echo json_encode($data);
    }

    public function search($string)
    {
        $data = $this->service->search($string);
        echo json_encode($data);
    }
}