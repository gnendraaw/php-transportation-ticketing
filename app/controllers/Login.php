<?php

class Login extends Controller {
    public function index()
    {
        Middleware::onlyNotLoggedIn();

        $data = [
            'title' => 'Login',
        ];
        
        $this->view('templates/auth/header', $data);
        $this->view('login/index');
        $this->view('templates/auth/footer');
    }

    public function sign()
    {
        Middleware::onlyNotLoggedIn();

        $data = [
            'username' => $_POST['username'],
            'password' => $_POST['password'],
        ];

        $data['password'] = md5($data['password']);

        $petugas = $this->model('petugas_model')->getPetugasByUsernameAndPassword($data);
        $penumpang = $this->model('penumpang_model')->getPenumpangByUsernameAndPassword($data);

        if (!$petugas && !$penumpang)
        {
            Flasher::setFlash('Incorrect username or password');

            $this->directTo('/login');
        }
        if ($petugas)
        {
            $_SESSION['user'] = [
                'id_user' => $petugas['id_petugas'],
                'username' => $petugas['username'],
                'nama_user' => $petugas['nama_petugas'],
                'level' => $petugas['nama_level'],
            ];

            $this->directTo($_SESSION['user']['level']=='admin' ? '/admin' : '/petugas');
        }
        if ($penumpang) 
        {
            $_SESSION['user'] = [
                'id_user' => $penumpang['id_penumpang'],
                'username' => $penumpang['username'],
                'nama_penumpang' => $penumpang['nama_penumpang'],
                'level' => 'penumpang',
            ];

            $this->directTo();
        }
    }
}