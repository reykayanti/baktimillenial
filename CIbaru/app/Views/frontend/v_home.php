<?= $this->extend('template/v_template_front'); ?>
<?= $this->section('content'); ?>

<head>
    <link rel="stylesheet" href="frontend/style/home.css">
    <style>
       .MultiCarousel { 
           float: left; overflow: hidden; padding: 15px; width: 100%; position:relative; margin: auto;
        }
        .MultiCarousel{
             Height: 189px;
            }
        .MultiCarousel .MultiCarousel-inner { 
            transition: 1s ease all; float: left; 
        }
        .MultiCarousel .MultiCarousel-inner .item {
             float: left;
            }
        .MultiCarousel .MultiCarousel-inner .item > div {
             text-align: center; padding:10px; margin:10px; background:#f1f1f1; color:#666;
            }
        .MultiCarousel .leftLst, .MultiCarousel .rightLst {
             position:absolute; border-radius:50%;top:calc(50% - 20px); 
            }
        .MultiCarousel .leftLst {
             left:0; 
            }
        .MultiCarousel .rightLst {
             right:0; 
            }
        .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over { 
            pointer-events: none; background:#ccc;
         }

    </style>
</head>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&family=Viga&display=swap" rel="stylesheet">

<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
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

    <!-- <div class="container text-center">
        <h2>Projects</h2>
        <div class="row pt-2 md-3 ">
            <div class="col-sm-4 col-md-4">
                <div class="card" style="width:400px">
                    <h4 class="">Bakti Millenial #3</h4>
                    <img class="" src="frontend2/images/satu.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer
                        </p>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="card" style="width:400px" style="background: #E3F6D7">
                    <h4 class="">Bakti Millenial #3</h4>
                    <img class="" src="frontend2/images/satu.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer
                        </p>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="card" style="width:400px">
                    <h4 class="">Bakti Millenial #3</h4>
                    <img class="" src="frontend2/images/satu.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <p class="card-text">Some example text some example text. John Doe
                            is an architect and engineer
                        </p>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="container">
        <h2>Projects</h2>
	<div class="row">
		<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner">
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Multi Item Carousel</p>
                        <p>₹ 1</p>
                        <p>₹ 6000</p>
                        <p>50% off</p>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Multi Item Carousel</p>
                        <p>₹ 1</p>
                        <p>₹ 6000</p>
                        <p>50% off</p>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Multi Item Carousel</p>
                        <p>₹ 1</p>
                        <p>₹ 6000</p>
                        <p>50% off</p>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Multi Item Carousel</p>
                        <p>₹ 1</p>
                        <p>₹ 6000</p>
                        <p>50% off</p>
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
            <button class="btn btn-primary leftLst"><</button>
            <button class="btn btn-primary rightLst">></button>
        </div>
	</div>

    <div class="container-fluid pt-2 p-3 my-3 text-white" style="background: #FAD586">
        <div class="row">
            <div class="d-flex justify-content-center  align-items-center flex-column col-6">
                <h1>BAKTI MILLENIAL</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex
                    ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore
                    eu
                    fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
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
        <p>Ikuti kami di sosial media untuk mendapatkan informasi mengenai event, volunteer, bakti millenial, dan
            perkembangan Bakti Millenial yang lainnya.</p>
        <div class="flex">
            <img src="frontend2/images/satu.png" class="rounded-circle" width="70" height="70">
            <img src="frontend2/images/satu.png" class="rounded-circle" width="70" height="70">
            <img src="frontend2/images/satu.png" class="rounded-circle" width="70" height="70">
        </div>
    </div>
</div>

<script>
  $(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

   ResCarouselSize();




    $(window).resize(function () {
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
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[2]-2;
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2]-2;
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 480) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers});
            $(this).find(itemClass).each(function () {
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
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
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