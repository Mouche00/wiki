<?php

interface CategoryServiceInterface {
    public function read();
    public function insert(Category $category);
}