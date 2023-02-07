<?php

class Register extends Controller {
    public function index()
    {
        $data = [
            'title' => 'Register',
        ];

        $this->view('templates/auth/header', $data);
        $this->view('register/index');
        $this->view('templates/auth/footer');
    }

    public function sign()
    {
        // if password value not match with confirm password, direct user back to register page
        if ($_POST['password'] != $_POST['cpassword'])
        {
            Flasher::setFlash('Password not match');

            $this->directTo('/register');
        }

        $data = [
            'nama_penumpang' => $_POST['name'],
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'alamat_penumpang' => $_POST['alamat'],
            'tanggal_lahir' => $_POST['tgl_lahir'],
            'jenis_kelamin' => $_POST['jk'],
            'telefone' => '123456789',
        ];

        // if username value already registerd, direct user back to register page
        if (
                $this->model('penumpang_model')->getPenumpangByUsername($data['username']) > 0
                ||
                $this->model('petugas_model')->getPetugasByUsername($data['username']) > 0
            )
        {
            Flasher::setFlash('Username already registered');

            $this->directTo('/register');
        }

        $data['password'] = md5($data['password']);

        // if user account successfuly created, direct user to login page. Otherwise, direct back to register page
        if ($this->model('penumpang_model')->addPenumpang($data) > 0)
        {
            Flasher::setFlash('Account successfuly created');

            $this->directTo('/login');
        }

        Flasher::setFlash('Failed to create user account');

        $this->directTo('/register');
    }
}