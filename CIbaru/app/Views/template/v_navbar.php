<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="frontend2/style/nav-bar.css">
    <title>Bakti Millenial</title>
    <style>
        #navbarSupportedContent{
            display: none;
        }
        #navbarSupportedContent.active{
            display: block;
        }
    </style>
<body>
    <!-- Navbar content -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light shadow p-3 w-auto" style="background-color: #96bb7c; border-radius: 0px 0px 40px 40px; width: 100px; z-index: 2;">
        <div class="container-fluid">
            <button class="navbar-toggler" id="nav-icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="<?= base_url('/'); ?>">
                <img src="frontend2/images/logobm.svg">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 px-3 fs-5">
                    <li class="me-2">
                        <!-- <a id="home" class="nav-link active" id="nav-btn" aria-current="page" href="Chome">Home</a> -->
                        <a id="home" class="nav-link active" id="nav-btn" aria-current="page" href="<?= base_url('/'); ?>">Home</a>
                    </li>
                    <li class="me-2">
                        <a id="galery" class="nav-link" href="<?= base_url('gallery'); ?>">Galery</a>
                    </li>
                    <li class="me-2">
                        <a id="program" class="nav-link" href="<?= base_url('program'); ?>">Program</a>
                    </li class="me-2">
                    <li>
                        <!-- make href a jgn button href -->
                        <!-- <button type="button" class="btn btn-light h-1 mt-1 ms-auto ms-lg-5" href="#" style="background: #d6efc7; border-radius: 40px; width: 122px;">Sign</button> -->
                        <button type="button" class="btn btn-light h-1 mt-1 ms-auto ms-lg-5" href="#" style="background: #d6efc7; border-radius: 40px; width: 122px;"><a id="admin" class="nav-link" href="<?= base_url('admin'); ?>" style="width: 100%;height: 20px;display: flex;justify-content: center;align-items: center;">Sign</a></button>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar contect -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script>
            $(document).ready(function () {
                $('.navbar-toggler').click(function () {
                $('#navbarSupportedContent').toggleClass('active');
                });
            });

            
            var home = document.getElementById("home");
            home.classList.add('active');
            home.setAttribute("aria-current", "page");

            var galery = document.getElementById("galery");
            galery.classList.remove('active');
            galery.setAttribute("aria-current", "none");

            var program = document.getElementById("program");
            program.classList.remove('active');
            program.setAttribute("aria-current", "none");

            // Gak ada id berkaitan dengan daftar
            var daftar = document.getElementById("daftar");
            daftar.classList.remove('active');
            daftar.setAttribute("aria-current", "none");
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>