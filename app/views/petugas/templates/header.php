<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/webgadgets/KwgVideoPlayer@master/kwg-video-player.css" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,600;1,700&family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/templates/navbar.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/templates/footer.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/templates/sidebar.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/templates/search.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/templates/breadcrumbs.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/home/home.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/menu/profile.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/toko-tani/toko-tani.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/data-tani/main-tani.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/data-tani/data-tani.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/data-tani/laporan-tanam.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/info-tani/main-tani.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/info-tani/tambah-info.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/penyuluh/penyuluh.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/penyuluh/tambah-penyuluh.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/penyuluh/tambah-kehadiran.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/templates/form.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/templates/table.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/style.css">
</head>

<body>
    <?php
    if ($_SESSION["user_session"]["role"] != 'admin' && $_SESSION["user_session"]["role"] != 'petugas') {
        header("Location: http://localhost/siketan/user/public/tokoTani/index");
    } else {
        $this->view('petugas/templates/navbar', $data);
    }
    ?>
    <div class="row">
        <div class="" id="alert">
            <?php Flasher::flash(); ?>
        </div>
    </div>