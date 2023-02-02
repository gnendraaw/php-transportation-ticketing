<?php

class Type_transportasi_model {
    private $table = 'type_transportasi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllTypeTransportasi()
    {
        $query = "SELECT * FROM {$this->table}";
        $this->db->query($query);

        return $this->db->resultSet();
    }
}