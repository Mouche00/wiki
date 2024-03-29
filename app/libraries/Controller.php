<?php
/**
 * Base Controller
 * Loads the models and views
 * 
 */

class Controller 
{

    public function model($model)
    {
        require_once "../app/models/{$model}.php";
        return new $model();
    }

    public function service($service)
    {
        require_once "../app/services/implementations/{$service}.php";
        return new $service();
    }

    public function view($view, $data = [])
    {
        if (file_exists("../app/views/{$view}.php")) {
            require_once "../app/views/{$view}.php";
        } else {
            die("View $view does not exist!");
        }
    }
}