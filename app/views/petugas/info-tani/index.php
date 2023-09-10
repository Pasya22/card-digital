<main>
    <div class="container-content">
        <div class="breadcrumbs-box p2 mt2">
            <div class="title">
                <h2> Info Tani</h2>
            </div>
            <div class="breadcrumbs mt1">
                <ul class="">
                    <li>
                        <a href="<?= BASEURL ?>Petugas/index">infoTani</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-main-info mt2">
            <div onclick="menuInfo()" class="menu-box">
                <button>
                    <span class="material-symbols-outlined">
                        menu
                    </span>
                </button>
            </div>
            <div id="menu-info" class="menu-info" style="display:none">
                <ul>
                    <li>
                        <a href="<?= BASEURL; ?>Petugas/tambahInfo">
                            <span class="material-symbols-outlined">add_circle</span>
                            <p>Tambah Info Tani</p>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="content-info p2">
                <div class="title">
                    <h2> Info Tani</h2>
                </div>
                <div class="content-box mt2">
                    <?php
                    if (empty($data['info'])) {
                        echo ' <div class="info-kosong-box">
                        <h2>Belum Ada ISi</h2>
                    </div>';
                    }
                    ?>
                    <?php foreach ($data['info'] as $info) : ?>
                        <div class="item">
                            <div class="image-box">
                                <figure>
                                    <img src="<?= BASEURL; ?>assets/img/content/<?= $info['gambar_info'] ?>" alt="">
                                </figure>
                            </div>
                            <div class="content">
                                <div class="title-box p1">
                                    <h5><?= $info['judul'] ?></h5>
                                    <p class="mt1"><?= $info['dibuat'] ?></p>
                                    <p class="mt1">Di Buat Oleh : <?= $_SESSION["user_session"]['username'] ?></p>
                                </div>
                                <div class="teks p1">
                                    <p><?= $info['article'] ?></p>
                                </div>
                                <div class="button-box mb1 p1">
                                    <a href="<?= BASEURL ?>Petugas/ubahInfo/<?= $info['infotani_id']; ?>" class="edit"><span class="material-symbols-outlined">edit_square</span></a>
                                    <a href="<?= BASEURL ?>Petugas/hapusInfo/<?= $info['infotani_id']; ?>" class="hapus"><span class="material-symbols-outlined">delete</span></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</main>