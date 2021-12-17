<!doctype html>
<html lang="en">

<head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/galery.css">

    <title>Bakti Millenial</title>
    <?php
    include('nav-bar.php');
    ?>

    <!-- hero section -->
    <div>
        <div class="card bg-dark text-white" style="z-index: 1;">
            <img src="images/rinjani3.svg" class="card-img" alt="...">
            <div class="card-img-overlay">
                <h1 class="title">BAKTI MILENIAL #4</h1>
            </div>
        </div>
    </div>
    <!-- end hero section -->

    <!-- start card galery -->
    <div class="row">
        <div class="column">
            <div class="kotak"><img src="images/KOTAK2.svg" alt=""></div>
            <img src="images/BINTAN.svg" style="margin-top: -430px; margin-left: 3px" alt="">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        </div>
        <div class="column text-center">
            <div class="kotak"><img src="images/KOTAK2.svg" alt=""></div>
            <img src="images/BINTAN.svg" style="margin-top: -430px; margin-left: 3px" alt="">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        </div>
        <div class="column">
            <div class="kotak"><img src="images/KOTAK2.svg" alt=""></div>
            <img src="images/BINTAN.svg" style="margin-top: -430px; margin-left: 3px" alt="">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        </div>
    </div>
    <!-- end card galery -->

    <!-- start carousel -->
    <div class="container-fluid py-5">
        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/sample.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/sample.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/sample.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <!-- end carousel -->

    <script>
        var galery = document.getElementById("galery");
        galery.classList.add('active');
        galery.setAttribute("aria-current", "page");

        var home = document.getElementById("home");
        home.classList.remove('active');
        home.setAttribute("aria-current", "none");

        var program = document.getElementById("program");
        program.classList.remove('active');
        program.setAttribute("aria-current", "none");
    </script>

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

</html>