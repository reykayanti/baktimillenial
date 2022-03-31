<?= $this->extend('admin/v_template_admin'); ?>


<?= $this->section('content_admin'); ?>
<div class="main-content">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <!-- main content -->
    <section class="section">
        <div class="section-header">
            <h1>Edit Blog</h1>
        </div>

        <form action="/Cblog/update/<?= $blog['id_program']; ?>" method="POST">
            <!-- cara agar formnya aman tidak bisa dibajak -->
            <?= csrf_field(); ?>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Data Blog</h4>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info">
                            <b>Note!</b> Pastikan Mengisi Form Blog dengan Lengkap
                        </div>
                        <input type="hidden" name="id_program" value="<?= $blog['id_program']; ?>">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="judul" name="judul" <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= $blog['judul']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('judul'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cover">Cover</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="cover" name="cover" value="<?= (old('cover')) ? old('cover') : $blog['cover'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="deskripsi" style="height: 200px;" name="deskripsi" value=" <?= (old('deskripsi')) ? old('deskripsi') : $blog['deskripsi'] ?>"></textarea>
                            </div>
                        </div>
                        <div class=" form-group">
                            <label>Status</label>
                            <select class="form-control" id="status" name="status">
                                <option>Arsip</option>
                                <option>Publish</option>
                            </select>
                        </div>
                        <div class="buttons">
                            <button type="submit" class="submit btn btn-primary">Ubah Data</button>
                            <a class="submit btn btn-danger">Cancel</a>
                        </div>

                    </div>
                </div>
        </form>
    </section>
</div>

<?= $this->endSection(); ?>