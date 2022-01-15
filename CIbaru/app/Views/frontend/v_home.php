<?= $this->extend('template/v_template_front'); ?>
<?= $this->section('content'); ?>

<head>
    <link rel="stylesheet" href="frontend/style/home.css">
<<<<<<< HEAD
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <style>
        .MultiCarousel {
            float: left;
            overflow: hidden;
            padding: 15px;
            width: 100%;
            position: relative;
            margin: auto;
        }

        .MultiCarousel {
            Height: 550px;

        }

        .MultiCarousel .MultiCarousel-inner {
            transition: 1s ease all;
            float: left;
        }

        .MultiCarousel .MultiCarousel-inner .item {
            float: left;
        }

        .MultiCarousel .MultiCarousel-inner .item>div {
            text-align: center;
            padding: 20px;
            margin: 20px;
            background: #E3F6D7;
            color: #666;
        }

        .MultiCarousel .leftLst,
        .MultiCarousel .rightLst {
            position: absolute;
            border-radius: 50%;
            top: calc(50% - 20px);
        }

        .MultiCarousel .leftLst {
            left: 0;
        }

        .MultiCarousel .rightLst {
            right: 0;
        }

        .MultiCarousel .leftLst.over,
        .MultiCarousel .rightLst.over {
            pointer-events: none;
            background: #ccc;
        }

        .lead {
            font-family: bold;
        }

        .border {
            text-align: center;
            padding: 20px;
            margin: 20px;
            background: #E3F6D7;
            color: #666;
        }
=======
    <style>
    .MultiCarousel {
        float: left;
        overflow: hidden;
        padding: 15px;
        width: 100%;
        position: relative;
        margin: auto;
    }

    .MultiCarousel {
        Height: 189px;
    }

    .MultiCarousel .MultiCarousel-inner {
        transition: 1s ease all;
        float: left;
    }

    .MultiCarousel .MultiCarousel-inner .item {
        float: left;
    }

    .MultiCarousel .MultiCarousel-inner .item>div {
        text-align: center;
        padding: 10px;
        margin: 10px;
        background: #f1f1f1;
        color: #666;
    }

    .MultiCarousel .leftLst,
    .MultiCarousel .rightLst {
        position: absolute;
        border-radius: 50%;
        top: calc(50% - 20px);
    }

    .MultiCarousel .leftLst {
        left: 0;
    }

    .MultiCarousel .rightLst {
        right: 0;
    }

    .MultiCarousel .leftLst.over,
    .MultiCarousel .rightLst.over {
        pointer-events: none;
        background: #ccc;
    }
>>>>>>> parent of 1e4db6b (update konten2)
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

    <div class="container">
<<<<<<< HEAD
        <center>
            <h2>Projects</h2>
        </center>
=======
        <h2>Projects</h2>
>>>>>>> parent of 1e4db6b (update konten2)
        <div class="row">
            <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel" data-interval="1000">
                <div class="MultiCarousel-inner">
                    <div class="item">
                        <div class="pad15">
<<<<<<< HEAD
                            <p class="lead">Pendidikan</p>
                            <img src="frontend2/images/satu.png" class="rounded-circle" width="70" height="70">
                            <p>Di bidang pendidikan, kurangnya motivasi belajar dan kesadaran akan pentingnya pendidikan
                                merupakan permasalahan yang sering di keluhkan masyarakat sedikitnya lulusan Sekolah
                                Menengah Atas di Lombok yang melanjutkan ke perguruan tinggi, serta sarana prasarana
                                yang kurang memadai dan hampir tidak ada koleksi buku panduan pendidik di perpustakaan
                                sekolah. </p>
=======
                            <p class="lead">Multi Item Carousel</p>
                            <p>₹ 1</p>
                            <p>₹ 6000</p>
                            <p>50% off</p>
>>>>>>> parent of 1e4db6b (update konten2)
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
<<<<<<< HEAD
                            <p class="lead">Lingkungan</p>
                            <img src="frontend2/images/satu.png" class="rounded-circle" width="70" height="70">
                            <p>Dalam bidang lingkungan, Lombok sebagai tempat tujuan destinasi wisata tentunya memiliki
                                permasalahan pada sampah, dimana kurang adanya kesadaran akan kebersihan lingkungan dan
                                juga pengelolaan sampah secara berkelanjutan. Selain sampah, limbah kotoran ternak juga
                                menjadi masalah yang belum terselesaikan karena belum adanya langkah dalam pengolahan
                                limbah tersebut. </p>
=======
                            <p class="lead">Multi Item Carousel</p>
                            <p>₹ 1</p>
                            <p>₹ 6000</p>
                            <p>50% off</p>
>>>>>>> parent of 1e4db6b (update konten2)
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
<<<<<<< HEAD
                            <p class="lead">Kesehatan</p>
                            <img src="frontend2/images/satu.png" class="rounded-circle" width="70" height="70">
                            <p>Di bidang kesehatan, minimnya fasilitas yang ada menyebabkan masyarakat mengalami
                                kesulitan untuk menjangkau puskesmas yang cukup jauh dari lokasi mereka. Minimnya
                                pemahaman masyarakat mengenai penerapan pola hidup bersih dan sehat, serta pengetahuan
                                tentang pendidikan menjadi keresahan tersendiri. Kesehatan psikologis juga menjadi
                                permasalahan terutama pada pernikahan anak usia dini yang banyak terjadi di Lombok.
                            <p>
=======
                            <p class="lead">Multi Item Carousel</p>
                            <p>₹ 1</p>
                            <p>₹ 6000</p>
                            <p>50% off</p>
>>>>>>> parent of 1e4db6b (update konten2)
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
<<<<<<< HEAD
                            <p class="lead">Ekonomi Kreatif</p>
                            <img src="frontend2/images/satu.png" class="rounded-circle" width="70" height="70">
                            <p>Sebagai tujuan destinasi wisata tentunya masyarakat harus memiliki skill yang inovatif
                                dan juga kreatif untuk dapat membuat karya sehingga menjadi nilai jual kepada para
                                wisatawan dan juga masyarakat yang berkunjung. Perlu adanya pelatihan atau pembinaan
                                dalam meningkatkannya sehingga bisa muncul ide kreatif dan juga mampu menjadi manusia
                                yang unggul. Proses pemasaran produk, terlalu berfokus pada satu komoditas, kurang bisa
                                memanfaatkan media sosial/digitalisasi dalam memasarkan produk, kurangnya kreativitas
                                dalam mengolah </p>
=======
                            <p class="lead">Multi Item Carousel</p>
                            <p>₹ 1</p>
                            <p>₹ 6000</p>
                            <p>50% off</p>
>>>>>>> parent of 1e4db6b (update konten2)
                        </div>
                    </div>
                    <!-- <div class="item">
                    <div class="pad15">
                        <p class="lead">Multi Item Carousel</p>
                        <p>₹ 1</p>
                        <p>₹ 6000</p>
                        <p>50% off</p>
                    </div>
                </div>-->
                </div>
                <button class="btn btn-primary leftLst">
                    << /button>
                        <button class="btn btn-primary rightLst">></button>
            </div>
<<<<<<< HEAD
            <button class="btn btn-primary leftLst">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                </svg>
            </button>
            <button class="btn btn-primary rightLst">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                </svg>
            </button>
        </div>
        <button class="btn btn-primary leftLst">
            << /button>
                <button class="btn btn-primary rightLst">></button>
    </div>
</div>

<div class="container-fluid pt-2 p-3 my-3 text-grey-700" style="background: #FAD586">
    <div class="row">
        <div class="d-flex justify-content-center align-items-center flex-column col-7">
            <h1>BAKTI MILLENIAL</h1>
            <p>Bakti Milenial merupakan sebuah program dibawah naungan Indonesia Milenial Connect (IMC).
                Indonesia Milenial Connect merupakan wadah pengembangan diri bagi pemuda/i Indonesia baik yang
                berada dalam negeri maupun luar negeri, berfokus kepada tiga bidang yang menjadi faktor
                kesejahteraan pemberdayaan masyarakat yaitu, pendidikan, sosial, dan ekonomi.
                Pada Juli 2020, IMC resmi legal membentuk sebuah yayasan bernama Karya Anak Milenial Indonesia
                dan Bapak Sandiaga Uno sebagai Dewan Penasehat.
                Bakti Milenial hadir sebagai kontribusi nyata bagi bangsa Indonesia dalam bidang pemberdayaan
                masyarakat khususnya dlam mengembangkan kesejahteraan dan kemajuan bangsa. Adapun tema yang
                diusung yaitu “Optimizing the Use of Local Potential to Organize Sustainable Community
                Development”.
                Lokasi pengabdian masyarakat ini berada di pulau Bintan, Provinsi Kepulauan Riau. </p>
            <a href="#" class="btn rounded-pill" style="background: #184D47">About IMC</a>
        </div>
        <div class="col-2">
            <img src="frontend2/images/lombok.png" width="400" height="400">
        </div>
    </div>
</div>
<div class="col-3 m-auto">
    <img src="frontend2/images/BINTAN.svg" width="400" height="400">
</div>
</div>
</div>
=======
        </div>
>>>>>>> parent of 1e4db6b (update konten2)


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
        <div class="container-fluid pt-2 m-9 my-3 text-grey-700" style="background: #FAD586">
            <div class="row">
                <div class="d-flex justify-content-center align-items-center flex-column col-7">
                    <h1>Lokasi</h1>
                    <p>Bakti Milenial merupakan sebuah program dibawah naungan Indonesia Milenial Connect (IMC).
                        Indonesia Milenial Connect merupakan wadah pengembangan diri bagi pemuda/i Indonesia baik yang
                        berada dalam negeri maupun luar negeri, berfokus kepada tiga bidang yang menjadi faktor
                        kesejahteraan pemberdayaan masyarakat yaitu, pendidikan, sosial, dan ekonomi.
                        Pada Juli 2020, IMC resmi legal membentuk sebuah yayasan bernama Karya Anak Milenial Indonesia
                        dan Bapak Sandiaga Uno sebagai Dewan Penasehat.
                        Bakti Milenial hadir sebagai kontribusi nyata bagi bangsa Indonesia dalam bidang pemberdayaan
                        masyarakat khususnya dlam mengembangkan kesejahteraan dan kemajuan bangsa. Adapun tema yang
                        diusung yaitu “Optimizing the Use of Local Potential to Organize Sustainable Community
                        Development”.
                        Lokasi pengabdian masyarakat ini berada di pulau Bintan, Provinsi Kepulauan Riau. </p>
                </div>
                <div class="col-2">
                    <img src="frontend2/images/lokasi.png" width="400" height="400">
                </div>
            </div>
        </div>


        <div class="container">
            <center>
                <h2>Persyaratan & Ketentuan</h2>
            </center>
            <div class="row">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="border col-lg-6 col-md-12 mt-md-5">
                        <p>Terbuka bagi pelajar, mahasiswa,atau masyarakat umum Indonesia dengan batasan usia
                            15-35 tahun.</p>
                        <p>Bersedia mengikuti kegiatan dari awal (pembekalan sampai akhir kegiatan</p>
                        <p>Bersungguh-sungguh dan memiliki niat yang ikhlas dalam kegiatan pengabdian
                            masyarakat.</p>
                        <p>Memiliki komitmen diri terhadap kegiatan pengabdian.</p>

                    </div>
                    <div class="border col-lg-6 col-md-12">
                        <p>Berjiwa sosial dan mampu bekerja dalam tim.</p>
                        <p>Aktif, kreatif, inovatif, baik dalam pra kegitan, proses kegiatan, maupun pasca
                            kegiatan.</p>
                        <p>Mengikuti seluruh alur tata cara pendaftaran</p>
                        <p>Mematuhi seluruh aturan selama pengabdian</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="container-fluid p-5 text-center text-white" style="background: #FAD586">
            <p>Ikuti kami di sosial media untuk mendapatkan informasi mengenai event, volunteer, bakti
                millenial, dan
                perkembangan Bakti Millenial yang lainnya.</p>
            <div class="flex">
                <img src="frontend2/images/satu.png" class="rounded-circle" width="70" height="70">
                <img src="frontend2/images/satu.png" class="rounded-circle" width="70" height="70">
                <img src="frontend2/images/satu.png" class="rounded-circle" width="70" height="70">
            </div>
        </div> -->
    </div>

    <script>
    $(document).ready(function() {
        var itemsMainDiv = ('.MultiCarousel');
        var itemsDiv = ('.MultiCarousel-inner');
        var itemWidth = "";

        $('.leftLst, .rightLst').click(function() {
            var condition = $(this).hasClass("leftLst");
            if (condition)
                click(0, this);
            else
                click(1, this)
        });

        ResCarouselSize();




        $(window).resize(function() {
            ResCarouselSize();
        });

        //this function define the size of the items
        function ResCarouselSize() {
            var incno = 0;
            var dataItems = ("data-items");
            var itemClass = ('.item');
            var id = 0;
            var btnParentSb = '';
            var itemsSplit = '';
            var sampwidth = $(itemsMainDiv).width();
            var bodyWidth = $('body').width();
            $(itemsDiv).each(function() {
                id = id + 1;
                var itemNumbers = $(this).find(itemClass).length;
                btnParentSb = $(this).parent().attr(dataItems);
                itemsSplit = btnParentSb.split(',');
                $(this).parent().attr("id", "MultiCarousel" + id);


                if (bodyWidth >= 1200) {
                    incno = itemsSplit[2] - 2;
                    itemWidth = sampwidth / incno;
                } else if (bodyWidth >= 992) {
                    incno = itemsSplit[2] - 2;
                    itemWidth = sampwidth / incno;
                } else if (bodyWidth >= 768) {
                    incno = itemsSplit[1];
                    itemWidth = sampwidth / incno;
                } else if (bodyWidth >= 480) {
                    incno = itemsSplit[1];
                    itemWidth = sampwidth / incno;
                } else {
                    incno = itemsSplit[0];
                    itemWidth = sampwidth / incno;
                }
                $(this).css({
                    'transform': 'translateX(0px)',
                    'width': itemWidth * itemNumbers
                });
                $(this).find(itemClass).each(function() {
                    $(this).outerWidth(itemWidth);
                });

                $(".leftLst").addClass("over");
                $(".rightLst").removeClass("over");

            });
        }


        //this function used to move the items
        function ResCarousel(e, el, s) {
            var leftBtn = ('.leftLst');
            var rightBtn = ('.rightLst');
            var translateXval = '';
            var divStyle = $(el + ' ' + itemsDiv).css('transform');
            var values = divStyle.match(/-?[\d\.]+/g);
            var xds = Math.abs(values[4]);
            if (e == 0) {
                translateXval = parseInt(xds) - parseInt(itemWidth * s);
                $(el + ' ' + rightBtn).removeClass("over");

                if (translateXval <= itemWidth / 2) {
                    translateXval = 0;
                    $(el + ' ' + leftBtn).addClass("over");
                }
            } else if (e == 1) {
                var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                translateXval = parseInt(xds) + parseInt(itemWidth * s);
                $(el + ' ' + leftBtn).removeClass("over");

                if (translateXval >= itemsCondition - itemWidth / 2) {
                    translateXval = itemsCondition;
                    $(el + ' ' + rightBtn).addClass("over");
                }
            }
            $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval +
                'px)');
        }

        //It is used to get some elements from btn
        function click(ell, ee) {
            var Parent = "#" + $(ee).parent().attr("id");
            var slide = $(Parent).attr("data-slide");
            ResCarousel(ell, Parent, slide);
        }

    });
    </script>

    <?= $this->endSection(); ?>