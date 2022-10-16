<!-- Modal -->
<div class="modal fade" id="exampleModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="<?= base_url('admin/tambah_data') ?>" autocomplete="off">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" onkeypress="return harusHuruf(event)" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>">
                        <div class="invalid-feedback text-left">
                            <?= $validation->getError('nama') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                        <input type="radio" name="jenis_kelamin" required value="Laki-laki"> Laki-laki<br>
                        <input type="radio" name="jenis_kelamin" required value="Perempuan"> Perempuan<br>
                    </div>
                    <div class="form-group">
                        <label>Dokumen</label>
                        <input type="file" name="userfile" required>
                        <span style="display: block; font-size: 12px; color: red; font-style: italic;">Dokumen max 5mb</span>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function harusHuruf(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if ((charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) && charCode > 32)
            return false;
        return true;
    }
</script>