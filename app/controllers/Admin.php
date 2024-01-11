<?php 

class Admin extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        
        $this->view('admin/index');
    }

    public function categories()
    {
        
        $this->view('admin/index');
    }

    public function tags()
    {
        
        $this->view('admin/index');
    }

    public function users()
    {
        
        $this->view('admin/index');
    }
}