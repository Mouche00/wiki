<?php 

class Author extends Controller
{
    public function __construct()
    {
    }

    public function wikis()
    {
        
        $this->view('author/index');
    }
}