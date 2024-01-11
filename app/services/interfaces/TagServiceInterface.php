<?php

interface TagServiceInterface {
    public function read();
    public function insert(Tag $tag);
    public function edit(Tag $tag);
    public function delete($id);
    public function fetch($id);
    public function fetchByWiki($id);
    public function getColumns();
}