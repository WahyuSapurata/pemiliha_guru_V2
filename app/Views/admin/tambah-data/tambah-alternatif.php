<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Alternatif</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('admin/tambah_alternatif') ?>">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label>Nama</label>
                        <select name="id_data" id="id_data" class="form-control">
                            <option value="">--pilih nama calon--</option>
                            <?php foreach ($data as $dta) : ?>
                                <option value="<?= $dta['id_data'] ?>"><?= $dta['nama'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label><?= $kriteria[0]['nama_kriteria'] ?></label>
                        <input type="text" name="ipk" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label><?= $kriteria[1]['nama_kriteria'] ?></label>
                        <input type="text" name="pendidikan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label><?= $kriteria[2]['nama_kriteria'] ?></label>
                        <input type="text" name="tkd" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label><?= $kriteria[3]['nama_kriteria'] ?></label>
                        <input type="text" name="wawancara" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>