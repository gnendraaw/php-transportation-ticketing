<div class="container-fluid">
    <div class="col-lg-6 p-0">
        <?php Flasher::flash(); ?>
    </div>

    <a href="#" class="btn btn-primary btn-icon-split mb-4" data-toggle="modal" data-target="#adminTipeTransportasiModal" id="admin-tambah-petugas-btn">
        <span class="icon text-white-50">
            <i class="fas fa-edit"></i>
        </span>
        <span class="text">Tambah Data Tipe Transportasi</span>
    </a>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="font-weight-bold text-primary m-0">Daftar Tipe Transportasi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Tipe</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody id="admin-petugas-table">
                        <?php foreach($data['tipeTransportasi'] as $tipe): ?>
                            <tr class="tipe-transportasi-row" data-tipetransportasiid="<?=$tipe['id_type_transportasi']?>">
                                <td>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Aksi</div>
                                            <button class="dropdown-item admin-edit-tipe-btn" data-toggle="modal" data-target="#adminTipeTransportasiModal">Edit</button>
                                            <div class="dropdown-divider"></div>
                                            <button class="dropdown-item admin-delete-tipe-btn" data-toggle="modal" data-target="#adminDeletePetugasModal">Hapus</button>
                                        </div>
                                    </div>
                                </td>
                                <td><?= $tipe['nama_type'] ?></td>
                                <td><?= $tipe['keterangan'] ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nama Tipe</th>
                            <th>Keterangan</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

    <!-- Create Tipe Transportasi Modal-->
    <div class="modal fade" id="adminTipeTransportasiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="adminTipeTransportasiTitle">Tambah Data Tipe Transportasi</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="<?=BASE_URL?>/admin/storeTipeTransportasi" method="POST">
                    <div class="form-group">
                        <label for="namaTipeInput">Nama Tipe</label>
                        <input type="hidden" name="id" value="">
                        <input type="text" name="namaTipe" id="namaTipeInput" class="form-control" maxlength="32" required autofocus>
                        <small class="text-small form-text">Masukkan tipe transportasi pada kolom ini</small>
                    </div>
                    <div class="form-group">
                        <label for="keteranganTipeInput">Keterangan</label>
                        <textarea class="form-control" name="keteranganTipe" id="keteranganTipeInput" cols="30" rows="10" required></textarea>
                        <small class="text-small form-text">Masukkan keterangan tipe transportasi pada kolom ini</small>
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