<?= $this->extend('template/v_template_front'); ?>
<?= $this->section('content'); ?>

<head>
    <link rel="stylesheet" href="frontend/style/home.css">
    <style>

    </style>
</head>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&family=Viga&display=swap" rel="stylesheet">

<div class="container-fluid py-5">
    <div class="container">
        <div class="row" style="margin-bottom:-10rem">
            <div class="col-lg-6 col-md-12 mt-md-5">
                <h1 class="about text-center">ABOUT US</h1>
                <p>Yayasan Karya Anak Milenial atau Karya Anak Milenial Indonesia
                    (KAMI) Foundation merupakan wadah bagi para pemuda Indonesia,
                    baik yang berada di dalam maupun di luar negeri untuk mengembangkan diri dan menuangkan ide,
                    inovasi serta karyanya dalam kehidupan bermasyarakat.
                    Pada Juli 2020, Karya Anak Milenial Indonesia (KAMI)
                    resmi legal membentuk sebuah yayasan dengan Bapak Sandiaga S. Uno sebagai Dewan Penasehat.</p>
                <button type="button" class="rounded-pill btn-warning">Info Lanjut</button>
            </div>
            <div class="col-lg-6 col-md-12">
                <img src="frontend2/images/aboutus1.svg" width="600" height="600">
            </div>
        </div>
    </div>

    <div class="container text-center">
        <h2>Projects</h2>
        <!-- <div class="row pt-2 md-3 ">
            <div class="col-sm-4 col-md-4">
                <div class="card justify-content-center align-items-center" style="background: #E3F6D7">
                    <h4 class="">Bakti Millenial #3</h4>
                    <img src="frontend2/images/satu.png" class="rounded-circle" width="85" height="85">
                    <div class="card-body">
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="card justify-content-center align-items-center" style="background: #E3F6D7">
                    <h4 class="">Bakti Millenial #3</h4>
                    <img src="frontend2/images/satu.png" class="rounded-circle" width="85" height="85">
                    <div class="card-body">
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="card justify-content-center align-items-center" style="background: #E3F6D7">
                    <h4 class="">Bakti Millenial #3</h4>
                    <img src="frontend2/images/satu.png" class="rounded-circle " width="85" height="85">
                    <div class="card-body">
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>
                    </div>
                </div>
            </div>
        </div> -->


        <div class="container-fluid pt-2 p-3 my-3 text-white" style="background: #FAD586">
            <div class="row">
                <div class="d-flex justify-content-center  align-items-center flex-column col-6">
                    <h1>BAKTI MILLENIAL</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut
                        labore
                        et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut
                        aliquip
                        ex
                        ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum
                        dolore
                        eu
                        fugiat
                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia
                        deserunt
                        mollit
                        anim id est laborum.</p>
                    <a href="#" class="btn btn-warning">Read more</a>
                </div>
                <div class="col-2">
                    <img src="frontend2/images/satu.png" width="400" height="400">
                </div>
            </div>
        </div>

        <div class="row pt-2">
            <div class="col-6 pt-0">
                <img src="frontend2/images/satu.png" style="width:50%">
            </div>
            <div class="col-6 pt-0">
                <div class="flex">
                    <div class="d-flex">
                        <i class="material-icons">&#xe314;</i>
                        <h4 class="card-title card-titles">Fully Funded</h4>
                    </div>
                    <p class="card-text">Dibiayai penuh oleh Yayasan Anak Millenial Indonesia</p>
                </div>
                <div class="">
                    <div class="d-flex">
                        <i class="material-icons">&#xe314;</i>
                        <h4 class="card-title card-titles">Partial Funded</h4>
                    </div>
                    <p class="card-text">Diberikan potongan biaya jalur beasiswa.</p>
                </div>
                <div class="">
                    <div class="d-flex">
                        <i class="material-icons">&#xe314;</i>
                        <h4 class="card-title card-titles">Self Funded</h4>
                    </div>
                    <p class="card-text">Keseluruhan biaya ditanggung pribadi.</p>
                </div>
            </div>
        </div>
        <div class="container-fluid p-5 text-center text-white" style="background: #FAD586">
            <p>Ikuti kami di sosial media untuk mendapatkan informasi mengenai event, volunteer, bakti
                millenial, dan
                perkembangan Bakti Millenial yang lainnya.</p>
            <div class="flex">
                <img src="frontend2/images/satu.png" class="rounded-circle" width="70" height="70">
                <img src="frontend2/images/satu.png" class="rounded-circle" width="70" height="70">
                <img src="frontend2/images/satu.png" class="rounded-circle" width="70" height="70">
            </div>
        </div>
    </div>

    <script>

    </script>

    <?= $this->endSection(); ?>