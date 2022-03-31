<?= $this->extend('admin/v_template_admin'); ?>


<?= $this->section('content_admin'); ?>
<div class="main-content">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
  <!-- main content -->
  <section class="section">
    <div class="section-header">
      <h1>Dashboard Admin</h1>
    </div>

    <form action="/Cblog/save" method="POST" enctype="multipart/form-data">
      <!-- cara agar formnya aman tidak bisa dibajak -->
      <?= csrf_field(); ?>

      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Tambah Data Blog</h4>
          </div>
          <div class="card-body">
            <div class="alert alert-info">
              <b>Note!</b> Pastikan Mengisi Form Blog dengan Lengkap
            </div>
            <div class="form-group">
              <label for="judul">Judul</label>
              <input type="text" class="form-control" id="judul" name="judul">
            </div>
            <div class="form-group">
              <label for="cover">Cover</label>
              <div class="alert alert-info">
                <b>Note!</b> Pastikan format nama file tanpa spasi!!
              </div>
              <input type="file" class="form-control" id="cover" name="cover">
            </div>
            <div class="form-group">
              <label for="deskripsi">Deskripsi</label>
              <textarea class="form-control" id="deskripsi" style="height: 200px;" name="deskripsi"></textarea>
            </div>
            <div class="form-group">
              <label>Status</label>
              <select class="form-control" id="status" name="status">
                <option>Arsip</option>
                <option>Publish</option>
              </select>
            </div>
            <div class="buttons">
              <button type="submit" class="submit btn btn-primary">Submit</button>
              <a class="submit btn btn-danger">Cancel</a>
            </div>

          </div>
        </div>
    </form>
  </section>
</div>

<?= $this->endSection(); ?>