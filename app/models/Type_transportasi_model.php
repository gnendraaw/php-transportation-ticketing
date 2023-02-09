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

    public function addTipeTransportasi($data)
    {
        $query = "INSERT INTO {$this->table} VALUES(NULL, :nama, :keterangan)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('keterangan', $data['keterangan']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}