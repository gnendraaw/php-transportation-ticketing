<div class="container-fluid">
    <div class="col-lg-6 p-0">
        <?php Flasher::flash(); ?>
    </div>

    <a href="#" class="btn btn-primary btn-icon-split mb-4" data-toggle="modal" data-target="#adminPetugasModal" id="admin-tambah-petugas-btn">
        <span class="icon text-white-50">
            <i class="fas fa-edit"></i>
        </span>
        <span class="text">Tambah Data Petugas</span>
    </a>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="font-weight-bold text-primary m-0">Daftar Petugas</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Petugas</th>
                            <th>Username</th>
                            <th>Level</th>
                        </tr>
                    </thead>
                    <tbody id="admin-petugas-table">
                        <?php foreach($data['petugas'] as $petugas): ?>
                            <tr class="petugas-row" data-petugasid="<?=$petugas['id_petugas']?>">
                                <td>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Aksi</div>
                                            <button class="dropdown-item admin-edit-petugas-btn" data-toggle="modal" data-target="#adminPetugasModal">Edit</button>
                                            <div class="dropdown-divider"></div>
                                            <button class="dropdown-item admin-delete-petugas-btn" data-toggle="modal" data-target="#adminDeletePetugasModal">Hapus</button>
                                        </div>
                                    </div>
                                </td>
                                <td><?= $petugas['nama_petugas'] ?></td>
                                <td><?= $petugas['username'] ?></td>
                                <td><?= $petugas['nama_level'] ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nama Petugas</th>
                            <th>Username</th>
                            <th>Level</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

    <!-- Create Petugas Modal-->
    <div class="modal fade" id="adminPetugasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Petugas</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
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

    <!-- Delete Petugas Modal-->
    <div class="modal fade" id="adminDeletePetugasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin hapus data petugas?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik tombol "hapus" untuk melanjutkan aksi</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <form action="<?=BASE_URL?>/admin/deletePetugas" method="post">
                    <input type="hidden" value="" name="id">
                    <input type="submit" class="btn btn-danger" value="Hapus">
                    </form>
                </div>
            </div>
        </div>
    </div>