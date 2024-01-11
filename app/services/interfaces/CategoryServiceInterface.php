<?php

interface CategoryServiceInterface {
    public function read();
    public function insert(Category $category);
    public function edit(Category $category);
    public function delete($id);
    public function fetch($id);
    public function getColumns();
}