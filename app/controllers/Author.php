<?php 

class Author extends Controller
{
    public function __construct()
    {
    }

    public function wikis()
    {
        if(isLogged() && isAuthor()){
            $this->view('author/index');
        } else {
            redirect('login');
        }
    }
}