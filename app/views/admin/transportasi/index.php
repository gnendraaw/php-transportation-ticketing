<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tipe Tiket</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode</th>
                            <th>Jumlah Kursi</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data['transportasi'] as $tipe): ?>
                            <tr>
                                <td>#</td>
                                <td><?=$tipe['kode']?></td>
                                <td><?=$tipe['jumlah_kursi']?></td>
                                <td><?=$tipe['keterangan']?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Kode</th>
                            <th>Jumlah Kursi</th>
                            <th>Keterangan</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>