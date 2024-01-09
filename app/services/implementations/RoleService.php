<?php

class RoleService implements RoleServiceInterface {

    private $db;

    public function __construct(){
        $this->db = Database::getInstance();
    }

    public function insert(Role $role){

        $id = $role->getId();
        $name = $role->getName();

        $sql = "INSERT INTO rolesOfUser VALUES (:name, :id)";
        $this->db->query($sql);
        $this->db->bind(":id", $id);
        $this->db->bind(":name", $name);
        $this->db->execute();

    }
}