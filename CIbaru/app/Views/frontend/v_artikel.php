<?= $this->extend('template/v_template_front'); ?>
<?= $this->section('content'); ?>

<head>
    <link rel="stylesheet" href="frontend2/style/program.css">
</head>

<div class="container py-5">
    <!-- <h1 class="title text-center">MILENIAL MENGABDI #1</h1>
    <h1 class="title text-center">LOMBOK</h1> -->
    <div class="box-search">
        <div class="search-text">
            <input type="text" name="" id="" placeholder="Search..." title="Cari Artikel Di Sini">
            <i class="fas fa-search"></i>
        </div>
    </div>
    <?php foreach ($blog as $b) :
        $judul = $b['judul'];
        $cover = $b['cover'];
        $deskripsi = $b['deskripsi'];
        $updated_at = $b['updated_at']; ?>
        
    



    <div class="row">
        <div class="posisi-section" style="height: 500px;">
            <div class="col-lg-6 col-md-12">
                <center>
                  
                 <div class="ppp" style="background-image: url(/image/<?php echo $cover; ?>);"  >
                 </div>
                </center>
            </div>
            <div class="col-lg-6 col-md-12 mt-sm-4 mt-lg-0 text-justify">
                <h2>
                    <?php echo $judul; ?>
                </h2>
                <p class="card-text"><small class="text-muted"><?php echo $updated_at; ?></small></p>
                <p>
                <?= substr($deskripsi, 0, 500); ?>
                </p>
                <a href="Cdetailartikel" class="btn btn-primary" img src="frontend2/images/READ.svg" style="background: #184D47; font-size:x-small;">Read More</a>
            </div>
        </div>        
    </div>

    <?php endforeach; ?>
</div>
<?= $this->endSection(); ?>

