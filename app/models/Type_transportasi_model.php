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

    public function getTipeTransportationById($id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id_type_transportasi=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function getTipeTransportasiData($data)
    {
        $query = "SELECT * FROM {$this->table} WHERE id_type_transportasi=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);

        return $this->db->single();
    }

    public function updateTipeTransportasiById($data)
    {
        $query = "UPDATE {$this->table} SET nama_type=:nama, keterangan=:keterangan WHERE id_type_transportasi=:id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}