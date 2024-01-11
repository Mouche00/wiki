<?php

interface UserServiceInterface {
    public function read();
    public function insert(User $user);
    public function last();
    public function fetchByEmail($email);
    public function getColumns();
}