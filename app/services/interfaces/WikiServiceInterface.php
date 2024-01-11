<?php

interface WikiServiceInterface {
    public function read();
    public function insert(Wiki $wiki);
    public function edit(Wiki $wiki);
    public function delete($id);
    public function softDelete($id);
    public function fetch($id);
    public function getColumns();
}