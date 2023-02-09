            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?=BASE_URL?>/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Create Petugas Modal-->
    <div class="modal fade" id="createPetugasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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

    <!-- Bootstrap core JavaScript-->
    <script src="<?= BASE_URL ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= BASE_URL ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= BASE_URL ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= BASE_URL ?>/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= BASE_URL ?>/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= BASE_URL ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= BASE_URL ?>/js/demo/datatables-demo.js"></script>
    <script src="<?= BASE_URL ?>/js/admin-petugas.js"></script>
    <script src="<?= BASE_URL ?>/js/admin-tipe-transportasi.js"></script>
</body>

</html>