<?php

class Transportasi_model {
    private $table = 'transportasi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllTransportasi()
    {
        $query = "SELECT * FROM {$this->table}";
        $this->db->query($query);

        return $this->db->resultSet();
    }
}