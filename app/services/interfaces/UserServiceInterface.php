<?php

interface UserServiceInterface {
    public function insert(User $user);
    public function last();
}