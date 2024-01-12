<?php

function isLogged()
{

    return (isset($_SESSION['id'])) ? true : false;
}

function isAdmin()
{
    // if(isset($_SESSION['id']) && $_SESSION['role'] == 'admin'){
    //     return true;
    // } else {
    //     return false
    // }

    return ($_SESSION['role'] == 'admin') ? true : false;
}

function isAuthor()
{
    return ($_SESSION['role'] == 'author') ? true : false;
}