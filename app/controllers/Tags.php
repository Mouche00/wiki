<?php

class Tags extends Controller {
    private $model;
    private $service;

    public function __construct(){
        $this->model = $this->model("Tag");
        $this->service = $this->service("TagService");
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

    public function getByWiki($id)
    {
        $data = $this->service->fetchByWiki($id);
        echo json_encode($data);
    }

    public function getColumns()
    {
        $data = $this->service->getColumns();
        echo json_encode($data);
    }
}