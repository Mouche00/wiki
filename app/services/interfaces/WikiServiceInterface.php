<?php

interface WikiServiceInterface {
    public function readTruncated();
    public function read();
    public function readArchived();
    public function wikisOfAuthor($id);
    public function insert(Wiki $wiki);
    public function edit(Wiki $wiki);
    public function delete($id);
    public function softDelete($id);
    public function restore($id);
    public function fetch($id);
    public function getColumns();
}