<?php 

class Admin extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        if(isLogged() && isAdmin()){
            $this->view('admin/index');
        } else {
            redirect('login');
        }
    }

    public function categories()
    {
        
        if(isLogged() && isAdmin()){
            $this->view('admin/index');
        } else {
            redirect('login');
        }
    }

    public function tags()
    {
        
        if(isLogged() && isAdmin()){
            $this->view('admin/index');
        } else {
            redirect('login');
        }
    }

    public function users()
    {
        
        if(isLogged() && isAdmin()){
            $this->view('admin/users');
        } else {
            redirect('login');
        }
    }

    public function wikis()
    {
        
        if(isLogged() && isAdmin()){
            $this->view('admin/wikis');
        } else {
            redirect('login');
        }
    }

    public function archive()
    {
        
        if(isLogged() && isAdmin()){
            $this->view('admin/archive');
        } else {
            redirect('login');
        }
    }
}