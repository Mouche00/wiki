<?php 

class Pages extends Controller
{
    public function __construct()
    {
    }

    public function signup()
    {
        
        $this->view('signup');
    }

    public function login()
    {
        
        $this->view('login');
    }
}