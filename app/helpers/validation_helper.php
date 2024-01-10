<?php

function validateInputs($array){

    $data = [];
    $errors = [];
    $service = new UserService();

    foreach($array as $key => $value){
        $data = array_merge($data, array($key => trim($value)));
        $errors = array_merge($errors, array($key . '_err' => ''));
    }

    foreach($data as $key => $value){

        if(empty($data[$key])) {
            $errors[$key . '_err'] = ucwords($key) . ' cannot be blank';
        }

        if($key == "password") {
            $password_regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/"; 
            if (!preg_match($password_regex, $data['password'])) {
                $errors['password_err'] = 'Password is invalid';
            }
        } else if ($key == "confirm-password") {

            if ($data['confirm-password'] != $data['password']) {
                $errors['confirm-password_err'] = "Passwords do not match";
            }

        } else if ($key == "email" && !$data['login']) {

            if ($service->fetchByEmail($data['email'])) {
                $errors['email_err'] = 'Email is already taken';
            }
        }
    }

    $data = array_merge($data, $errors);

    if (errorChecking($errors)){

        $data = array_merge($data, array('errorCheck' => true));
    } else {

        $data = array_merge($data, array('errorCheck' => false));
    }

    return $data;
            
}

function errorChecking($array){
    $errorCheck = false;
    foreach($array as $error){
        if (!empty($error)){
            $errorCheck = true;
        }
    }

    return $errorCheck;
}