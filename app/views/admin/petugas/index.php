<div class="container-fluid">
    <a href="<?=BASE_URL?>/admin/tambahPetugas" class="btn btn-primary btn-icon-split mb-4">
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data['petugas'] as $petugas): ?>
                            <tr>
                                <td>
                                    actions
                                </td>
                                <td><?= $petugas['nama_petugas'] ?></td>
                                <td><?= $petugas['username'] ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nama Petugas</th>
                            <th>Username</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>