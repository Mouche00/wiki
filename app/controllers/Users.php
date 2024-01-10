<?php

class Users extends Controller {
    private $model;
    private $service;

    public function __construct(){
        $this->model = $this->model("User");
        $this->service = $this->service("UserService");
    }

    public function signup(){
        $this->view('signup');
    }

    public function register(){

        // User
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // $data = [
            //     'fullname' => trim($_POST['fullname']),
            //     'username' => trim($_POST['username']),
            //     'email' => trim($_POST['email']),
            //     'password' => trim($_POST['password']),
            //     'confirm_password' => trim($_POST['confirm_password']),
            //     'fullname_err' => '',
            //     'username_err' => '',
            //     'picture_err' => '',
            //     'email_err' => '',
            //     'password_err' => '',
            //     'confirm_password_err' => ''
            // ];

            // if(empty($data['fullname'])) {
            //     $data['fullname_err'] = "Name cannot be blank";
            // }

            // if(empty($data['email'])) {
            //     $data['username_err'] = "Username cannot be blank";
            // }

            // if (empty($data['email'])) {
            //     $data['email_err'] = 'Email cannot be blank';
            // } else if ($this->service->fetchByEmail($data['email'])) {
            //     $data['email_err'] = 'Email is already taken';
            // }

            // $password_regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/"; 
            // if (empty($data['password'])) {
            //     $data['password_err'] = 'Password cannot be blank';
            // } else if (!preg_match($password_regex, $data['password'])) {
            //     $data['password_err'] = 'Password is invalid';
            // }

            // if (empty($data['confirm-password'])){
            //     $data['confirm_password_err'] = "Please confirm password";
            // } else if ($data['confirm-password'] != $data['password']) {
            //     $data['confirm_password_err'] = "Passwords do not match";
            // }

            $valid_extensions = array('jpeg', 'jpg', 'png');
            $path = APPROOT . "/../public/uploads/";

            $img = $_FILES['picture']['name'];
            $tmp = $_FILES['picture']['tmp_name'];

            $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

            $picture = rand(1000,1000000).$img;

            if(in_array($ext, $valid_extensions)) { 
                $path = $path.strtolower($picture); 
                if(!move_uploaded_file($tmp,$path)) {
                    $data['picture_err'] = 'Picture upload unsuccessful';
                }
            } else {
                $data['picture_err'] = 'Unsupported extension';
            }

            // if (empty($data['fullname_err']) && empty($data['username_err']) && empty($data['picture_err']) && empty($data['email_err']) && empty($data['password_err'])){

            //     $this->model->setFullname($data['fullname']);
            //     $this->model->setUsername($data['username']);
            //     $this->model->setPicture($picture);
            //     $this->model->setEmail($data['email']);
            //     $this->model->setPassword(password_hash($data['password'], PASSWORD_BCRYPT));

            //     $this->service->insert($this->model);

            //     // Role

            //     $lastUser = $this->service->last();
            //     $id = $lastUser->id;

            //     $this->model = $this->model("Role");
            //     $this->service = $this->service("RoleService");

            //     $this->model->setId($id);
            //     $this->model->setName("author");

            //     $this->service->insert($this->model);
            // }

            $data = validateInputs($_POST);

            if ($data['errorCheck']){

                $this->model->setFullname($data['fullname']);
                $this->model->setUsername($data['username']);
                $this->model->setPicture($picture);
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

            echo json_encode($data);
            
        }
        // var_dump($this->model);


    }
}