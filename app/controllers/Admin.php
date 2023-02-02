<?php

class Admin extends Controller {
    public function index()
    {
        Middleware::onlyAdmin();

        $data = [
            'title' => 'Admin Dashboard',
            'heading' => 'dashboard',
            'subHeading' => 'dashboard',
            'options' => 'dashboard',
        ];

        $this->view('templates/header', $data);
        $this->view('admin/index');
        $this->view('templates/footer');
    }

    public function daftarPetugas()
    {
        Middleware::onlyAdmin();

        $petugas = $this->model('petugas_model')->getAllPetugas();

        $data = [
            'title' => 'Daftar Petugas',
            'heading' => 'admin',
            'subHeading' => 'petugas',
            'options' => 'daftarPetugas',
            'petugas' => $petugas,
        ];

        $this->view('templates/header', $data);
        $this->view('admin/petugas/index', $data);
        $this->view('templates/footer');
    }

    public function tambahPetugas()
    {
        Middleware::onlyAdmin();
        $level = $this->model('level_model')->getAllLevel();

        $data = [
            'title' => 'Tambah Petugas',
            'heading' => 'admin',
            'subHeading' => 'petugas',
            'options' => 'tambahPetugas',
            'level' => $level,
        ];

        $this->view('templates/header', $data);
        $this->view('admin/petugas/create', $data);
        $this->view('templates/footer');
    }

    public function storePetugas()
    {
        $data = [
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'nama_petugas' => $_POST['nama'],
            'id_level' => $_POST['level'],
        ];

        // encrypt password
        $data['password'] = md5($data['password']);

        if ($this->model('petugas_model')->addPetugas($data) > 0)
        {
            Flasher::setFlash('Account registered!');
            $this->directTo('/admin/tambahPetugas');
        }
        Flasher::setFlash('Failed to create account');
        $this->directTo('/admin/tambahPetugas');
    }
}