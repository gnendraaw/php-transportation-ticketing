<body>
    <div class="container-fluid col-sm-9 col-md-6 col-lg-5 col-xl-4">
        <?php Flasher::flash(); ?>

        <div class="card shadow">
            <div class="card-body">
                <form action="<?= BASE_URL ?>/register/sign" method="POST">
                <h4 class="font-weight-bold text-gray-800 text-center">Register</h4>
                    <div class="form-group">
                        <label for="login-name-input">Nama Lengkap</label>
                        <input class="form-control" type="text" name="name" id="login-name-input" required autofocus maxlength="32">
                    </div>
                    <div class="form-group">
                        <label for="login-username-input">Username</label>
                        <input class="form-control" type="text" name="username" id="login-username-input" required maxLength="32">
                    </div>
                    <div class="form-group">
                        <label for="alamat-input">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat-input" required maxLength="255">
                    </div>
                    <div class="form-group">
                        <label for="tgl-lahir-input">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" id="tgl-lahir-input" required>
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <select name="jk" id="jk" class="form-control" required>
                            <option selected></option>
                            <option value="pria">Pria</option>
                            <option value="wanita">Wanita</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="telp">Nomor Telefone</label>
                        <input type="number" class="form-control" id="telp" required>
                    </div>
                    <div class="form-group">
                        <label for="login-password-input">Password</label>
                        <input class="form-control" type="password" name="password" id="login-password-input" required maxLength="16">
                    </div>
                    <div class="form-group">
                        <label for="login-cpassword-input">Konfirmasi Password</label>
                        <input class="form-control" type="password" name="cpassword" id="login-cpassword-input" required maxLength="16">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="w-100 btn btn-primary">Register</button>
                    </div>
                    <div class="text-center">
                        <a  href="<?= BASE_URL ?>/login">Sudah punya akun?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>