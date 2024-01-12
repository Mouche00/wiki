<?php

class Users extends Controller {
    private $model;
    private $service;

    public function __construct(){
        $this->model = $this->model("User");
        $this->service = $this->service("UserService");
    }

    public function display(){
        $data = $this->service->read();

        echo json_encode($data);
    }

    public function register(){

        // User
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = validateInputs($_POST, false);
            $picture = validatePicture($_FILES);

            if (!$data['errorCheck'] && !$picture['errorCheck']){

                $this->model->setFullname($data['fullname']);
                $this->model->setUsername($data['username']);
                $this->model->setPicture($picture['picture']);
                $this->model->setEmail($data['email']);
                $this->model->setPassword(password_hash($data['password'], PASSWORD_BCRYPT));

                $this->service->insert($this->model);

                // Role

                $lastUser = $this->service->last();
                $id = $lastUser->id;

                $this->model = $this->model("Role");
                $this->service = $this->service("RoleService");

                $this->model->setId($id);
                $this->model->setName("author");

                $this->service->insert($this->model);
            }

            $data = array_merge($data, $picture);

            echo json_encode($data);
            
        }
        // var_dump($this->model);


    }

    public function login(){

        // User
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = validateInputs($_POST, true);

            if (!$data['errorCheck']){

                $user = $this->service->fetchByEmail($data['email']);
                $this->createSession($user);

                if(isLogged() && isAdmin()){
                    redirect('admin');
                } else if(isLogged() && isAdmin()) {
                    redirect('author/wikis');
                }
            } else {

                echo json_encode($data);

            }

            
        }
        // var_dump($this->model);


    }

    public function createSession($user)
    {
        $_SESSION['id'] = $user->id;
        $_SESSION['username'] = $user->username;
        $_SESSION['picture'] = $user->picture;
        $_SESSION['role'] = $user->role_name;
    }

    public function logout() 
    {
        session_unset();
        session_destroy();
        redirect('home');
    }

    public function getColumns()
    {
        $data = $this->service->getColumns();
        echo json_encode($data);
    }
}