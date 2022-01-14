<?= $this->extend('template/v_template_front'); ?>
<?= $this->section('content'); ?>

<head>
    <link rel="stylesheet" href="frontend2/style/detail-program.css">
</head>

<div class="container text-justify py-5">
    <h1 class="title">Jalur Pendaftaran</h1>
    <h1 class="title">Fully Funded</h1>
    <h1 class="text-center py-5">Timeline Kegiatan</h1>

    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kegiatan</th>
                <th scope="col">Pelaksanaan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Open Recruitment Volunteer jalur Fully Funded</td>
                <td>8 November - 8 Desember 2021</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Seleksi Berkas</td>
                <td>9 Desember - 18 Desember 2021</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Pengumuman Seleksi Administrasi</td>
                <td>20 Desember 2021</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Pembayaran Commitment Fee</td>
                <td>21 Desember - 24 Desember 2021</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Tes Asesmen</td>
                <td>24 Desember - 27 Desember 2021</td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>Pengumuman Tes Asesmen</td>
                <td>28 Desember 2021</td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td>LGD & Wawancara</td>
                <td>29 Desember 2021 - 1 Januari 2022</td>
            </tr>
            <tr>
                <th scope="row">8</th>
                <td>Pengumuman Volunteer Lolos Fully Funded</td>
                <td>2 Januari 2022</td>
            </tr>
            <tr>
                <th scope="row">9</th>
                <td>Welcoming Party Volunteer</td>
                <td>4 Januari 2022</td>
            </tr>
            <tr>
                <th scope="row">10</th>
                <td>Pembekalan dan Pelatihan Volunteer</td>
                <td>5 Januari - 8 Januari 2022</td>
            </tr>
            <tr>
                <th scope="row">11</th>
                <td>Persiapan dan Koordinasi setiap bidang</td>
                <td>5 Januari - 4 Februari 2022</td>
            </tr>
            <tr>
                <th scope="row">12</th>
                <td>Pelaksanaan Kegiatan</td>
                <td>6 Februari - 15 Februari 2022</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="contaner-fluid text-center py-5" style="background-color: #FAD586;">
    <h1>Skema Seleksi</h1>
    <p>Seleksi Berkas berdasarkan jawaban pertanyaan yang diisi dan kelengkapan dari berkas</p>
    <p>Setiap volunteer yang dinyatakan lulus seleksi berkas akan mengikuti
        assessment test tulis dengan membayar biaya commitment fee
        (termasuk donasi) sebesar Rp80.000</p>
    <p>Leaderless Group Discussion (LGD) & Interview online</p>
    <p>Pengumuman akhir </p>
    <p>Konfirmasi keberangkatan</p>
</div>

<?= $this->endSection(); ?>