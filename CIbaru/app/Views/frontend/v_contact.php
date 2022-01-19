<?= $this->extend('template/v_template_front'); ?>
<?= $this->section('content'); ?>

<head>
    <link rel="stylesheet" href="frontend2/style/detail-program.css">
</head>

<!-- fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&family=Viga&display=swap" rel="stylesheet">

<div class="container text-justify py-5">
    <h1 class="title">Contact Us</h1>
</div>

<div class="form-contact w-50 m-auto pb-5">
    <form>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"></label>
            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"></label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"></label>
            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="0877777777">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Massage" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="background-color: #184D47;">Send</button>
    </form>
</div>

<?= $this->endSection(); ?>