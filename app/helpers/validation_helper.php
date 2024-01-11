<?php

function validateInputs($array, $loginFlag = false){

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
            if(!$loginFlag){
                $password_regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/"; 
                if (!preg_match($password_regex, $data['password'])) {
                    $errors['password_err'] = 'Password is invalid';
                }
            } else if($loginFlag) {
                $user = $service->fetchByEmail($data['email']);
                if (!password_verify($data['password'], $user->password)) {
                    $errors['password_err'] = 'Password is incorrect';
                }
            }
        } else if ($key == "confirm-password") {

            if ($data['confirm-password'] != $data['password']) {
                $errors['confirm-password_err'] = "Passwords do not match";
            }

        } else if ($key == "email") {
            
            if ($service->fetchByEmail($data['email'])) {
                if(!$loginFlag){
                    $errors['email_err'] = 'Email is already taken';
                }
            } else {
                if($loginFlag){
                    $errors['email_err'] = 'User not found';
                }
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

function validatePicture($array) {

    $errors = [];
    $data = [];

    $valid_extensions = array('jpeg', 'jpg', 'png');
    $path = APPROOT . "/../public/uploads/";

    $img = $array['picture']['name'];
    $tmp = $array['picture']['tmp_name'];

    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

    $picture = rand(1000,1000000).$img;

    $data = array_merge($data, ['picture' => $picture]);

    if(in_array($ext, $valid_extensions)) { 
        $path = $path.strtolower($picture); 
        if(!move_uploaded_file($tmp,$path)) {
            $errors['picture_err'] = 'Picture upload unsuccessful';
        }
    } else {
        $errors['picture_err'] = 'Unsupported extension';
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