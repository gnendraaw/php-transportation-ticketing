<div class="container-fluid">
    <div class="col-lg-6 p-0">
        <?php Flasher::flash(); ?>
    </div>

    <div class="col-lg-6 p-0">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Petugas</h6>
            </div>
            <div class="card-body">
                <form action="<?=BASE_URL?>/admin/storePetugas" method="POST">
                    <div class="form-group">
                        <label for="namaInput">Nama Petugas</label>
                        <input type="text" class="form-control" name="nama" id="namaInput" required maxlength="32" autofocus>
                        <small class="text-small form-text">Masukkan nama petugas pada kolom ini</small>
                    </div>
                    <div class="form-group">
                        <label for="usernameInput">Username</label>
                        <input type="text" class="form-control" name="username" id="usernameInput" required maxlength="32">
                        <small class="text-small form-text">Masukkan username petugas pada kolom ini</small>
                    </div>
                    <div class="form-group">
                        <label for="levelInput">Level</label>
                        <select name="level" id="levelInput" class="form-control" required>
                            <?php foreach($data['level'] as $level): ?>
                                <option value="<?=$level['id_level']?>"><?=$level['nama_level']?></option>
                            <?php endforeach ?>
                        </select>
                        <small class="text-small form-text">Pilih hak akses untuk petugas</small>
                    </div>
                    <div class="form-group">
                        <label for="passwordInput">Password</label>
                        <input type="text" name="password" id="passwordInput" class="form-control" value="Petugas123" disabled>
                        <small class="form-text text-danger">Password ini adalah bawaan dari sistem. Pastikan petugas mengganti password setelah akun berhasil dibuat!</small>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>