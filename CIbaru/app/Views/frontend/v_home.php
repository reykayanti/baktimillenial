<?= $this->extend('template/v_template_front'); ?>
<?= $this->section('content'); ?>

<head>
    <link rel="stylesheet" href="frontend/style/home.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Viga&display=swap" rel="stylesheet">
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
    </style>
</head>

<div class="container-fluid py-5">
    <div class="container container-about" style="height: 70vh;">
        <div class="row box-about">
            <div class="col-lg-6 col-md-12 mt-md-5">
                <h1 class="about text-left">ABOUT US</h1>
                <p>Yayasan Karya Anak Milenial atau Karya Anak Milenial Indonesia
                    (KAMI) Foundation merupakan wadah bagi para pemuda Indonesia,
                    baik yang berada di dalam maupun di luar negeri untuk mengembangkan diri dan menuangkan ide,
                    inovasi serta karyanya dalam kehidupan bermasyarakat.
                    Pada Juli 2020, Karya Anak Milenial Indonesia (KAMI)
                    resmi legal membentuk sebuah yayasan dengan Bapak Sandiaga S. Uno sebagai Dewan Penasehat.</p>
                <button type="button" id="button-about" class="rounded-pill btn-warning d-flex">Selengkapnya</button>
            </div>
            <div class="col-lg-6 col-md-12" style="position:relative;top:-4rem;">
                <img src="frontend2/images/aboutus1.svg" width="650" height="650">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="text-program">
            <center>
                <h2>Program</h2>
            </center>
        </div>
        <div class="row">
            <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel" data-interval="1000"
                style="height: auto;">
                <div class="MultiCarousel-inner" style="height: auto;width:1024px; transform:translateX(0px);">
                    <div class="item" style="width:500px;">
                        <div class="pad15 ">
                            <p class="lead">Pendidikan</p>
                            <img src="frontend2/images/pendidikan.png" class="rounded-circle" width="70" height="70">
                            <p>Dalam bidang lingkungan, Lombok sebagai tempat tujuan destinasi wisata tentunya memiliki
                                permasalahan pada sampah, dimana kurang adanya kesadaran akan kebersihan lingkungan dan
                                juga pengelolaan sampah secara berkelanjutan. Selain sampah, limbah kotoran ternak juga
                                menjadi masalah yang belum terselesaikan karena belum adanya langkah dalam pengolahan
                                limbah tersebut. </p>
                            <div class="read-more-box">
                                <a href="Cprogram" class="read-more">
                                    <p><i class="fas fa-angle-double-right"></i> Read More</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="width:500px;">
                        <div class="pad15">
                            <p class="lead">Lingkungan</p>
                            <img src="frontend2/images/lingkungan.png" class="rounded-circle" width="70" height="70">
                            <p>Dalam bidang lingkungan, Lombok sebagai tempat tujuan destinasi wisata tentunya memiliki
                                permasalahan pada sampah, dimana kurang adanya kesadaran akan kebersihan lingkungan dan
                                juga pengelolaan sampah secara berkelanjutan. Selain sampah, limbah kotoran ternak juga
                                menjadi masalah yang belum terselesaikan karena belum adanya langkah dalam pengolahan
                                limbah tersebut. </p>
                            <div class="read-more-box">
                                <a href="Cprogram" class="read-more">
                                    <p><i class="fas fa-angle-double-right"></i> Read More</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="width:500px;">
                        <div class="pad15">
                            <p class="lead">Kesehatan</p>
                            <img src="frontend2/images/kesehatan.png" class="rounded-circle" width="70" height="70">
                            <p>Di bidang kesehatan, minimnya fasilitas yang ada menyebabkan masyarakat mengalami
                                kesulitan untuk menjangkau puskesmas yang cukup jauh dari lokasi mereka. Minimnya
                                pemahaman masyarakat mengenai penerapan pola hidup bersih dan sehat, serta pengetahuan
                                tentang pendidikan menjadi keresahan tersendiri. Kesehatan psikologis juga menjadi
                                permasalahan terutama pada pernikahan anak usia dini yang banyak terjadi di Lombok.
                            </p>
                            <div class="read-more-box">
                                <a href="Cprogram" class="read-more">
                                    <p><i class="fas fa-angle-double-right"></i> Read More</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="width:500px;">
                        <div class="pad15">
                            <p class="lead">Ekonomi Kreatif</p>
                            <img src="frontend2/images/ekonomi.png" class="rounded-circle" width="70" height="70">
                            <p>Sebagai tujuan destinasi wisata tentunya masyarakat harus memiliki skill yang inovatif
                                dan juga kreatif untuk dapat membuat karya sehingga menjadi nilai jual kepada para
                                wisatawan dan juga masyarakat yang berkunjung. Perlu adanya pelatihan atau pembinaan
                                dalam meningkatkannya sehingga bisa muncul ide kreatif dan juga mampu menjadi manusia
                                yang unggul. </p>
                            <div class="read-more-box">
                                <a href="Cprogram" class="read-more">
                                    <p><i class="fas fa-angle-double-right"></i> Read More</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <button id="button-program-left" class="btn btn-primary leftLst button-program">
                    <i class="fas fa-caret-left"></i>
                </button>
                <button id="button-program-right" class="btn btn-primary rightLst button-program">
                    <i class="fas fa-caret-right"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="background: #FAD586">
    <div class="row" id="orange-satu">
        <div class=" d-flex justify-content-center align-items-center flex-column col-lg-7 col-md-12">
            <h1>BAKTI MILLENIAL</h1>
            <p class="text-justify" id="orange-dua">Bakti Milenial merupakan sebuah program dibawah naungan
                Indonesia Milenial
                Connect (IMC).
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
            <div class="button-about-imc">
                <a href="#" class="btn rounded-pill" style="background: #184D47">About IMC</a>
            </div>
        </div>
        <div class="col-lg-2 col-md-12" style="position:relative;">
            <img src="frontend2/images/lombok.png" width="400" height="400">
        </div>
    </div>
</div>

<div class="row pt-5 pb-5">
    <div class="col-6 pt-0 justify-content-center align-items-center">
        <h1>Jalur Pendaftaran</h1>
        <img src="frontend2/images/ketentuan.png" class="pt-3" style="width:60%">
    </div>
    <div class="col-6 pt-0 py-5 p-lg-5 ">
        <div class="flex jalur-container">
            <div class="jalur-box"></div>
            <div class="d-flex" id="">
                <h4 class="">Fully Funded</h4>
            </div>
            <p class="jalur-text">Dibiayai penuh oleh Yayasan Anak Millenial Indonesia</p>
        </div>
        <div class="jalur-container">
            <div class="jalur-box"></div>
            <div class="d-flex" id="">
                <h4 class="">Partial Funded</h4>
            </div>
            <p class="jalur-text">Diberikan potongan biaya jalur beasiswa.</p>
        </div>
        <div class="jalur-container">
            <div class="jalur-box"></div>
            <div class="d-flex" id="">
                <h4 class="">Self Funded</h4>
            </div>
            <p class="jalur-text">Keseluruhan biaya ditanggung pribadi.</p>
        </div>
    </div>
</div>

<!-- Lokasi -->
<div class="container-fluid" style="background: #FAD586">
    <div class="row" id="orange-satu">
        <div class=" d-flex justify-content-center align-items-center flex-column col-lg-7 col-md-12">
            <h1>Lokasi</h1>
            <p class="text-justify" id="orange-dua">Bakti Milenial merupakan sebuah program dibawah naungan Indonesia
                Milenial
                Connect
                (IMC).
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
        <div class="col-2 py-5 ">
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
            <div class="border col-lg-6 col-md-12 " id="syarat-box">
                <div id="syarat-text">
                    <p>Terbuka bagi pelajar, mahasiswa,atau masyarakat umum Indonesia dengan batasan usia
                        15-35 tahun.</p>
                    <p>Bersedia mengikuti kegiatan dari awal (pembekalan sampai akhir kegiatan</p>
                    <p>Bersungguh-sungguh dan memiliki niat yang ikhlas dalam kegiatan pengabdian
                        masyarakat.</p>
                    <p>Memiliki komitmen diri terhadap kegiatan pengabdian.</p>
                </div>
            </div>
            <div class="border col-lg-6 col-md-12" id="syarat-box">
                <div id="syarat-text">
                    <p>Berjiwa sosial dan mampu bekerja dalam tim.</p>
                    <p>Aktif, kreatif, inovatif, baik dalam pra kegitan, proses kegiatan, maupun pasca
                        kegiatan.</p>
                    <p>Mengikuti seluruh alur tata cara pendaftaran</p>
                    <p>Mematuhi seluruh aturan selama pengabdian</p>
                </div>
            </div>
        </div>
    </div>
    <div class="button-about-selengkapnya">
        <a href="#" class="rounded btn-warning d-flex" id="selengkapnya"> Selengkapnya</a>
    </div>
</div>
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