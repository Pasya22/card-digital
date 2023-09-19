<?php
$users = [
    ["1", "Andra Muhamad", "andram2505@gmail.com", "082438734234", "Admin"],
    ["2", "Andra Muhamad", "andram2505@gmail.com", "082438734234", "Admin"],
    ["3", "Andra Muhamad", "andram2505@gmail.com", "082438734234", "Admin"],
    ["4", "Andra Muhamad", "andram2505@gmail.com", "082438734234", "Admin"],
    ["5", "Andra Muhamad", "andram2505@gmail.com", "082438734234", "Admin"]
];
?>
<div class="container-admin">
    <?php
    $this->view('admin/templates/sidebar', $data);
    ?>
    <div id="contentAdmin" class="container-content-admin">
        <header>
            <?php
            $this->view('admin/templates/navbar', $data);
            ?>
        </header>
        <main>
            <div class="breadcrumbs">
                <div class="icon-box">
                    <a href="">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                </div>
                <div class="breadcrumb-box">
                    <a href="">Dashboard</a>
                    <p>/</p>
                    <a href="">data Katalog</a>
                    <p>/</p>
                    <a href="">Ubah Data Katalog</a>
                </div>
            </div>
            <div class="container-dashboard">
                <div class="container-katalog">
                    <div class="header">
                        <div class="title">
                            <h1>Ubah Data Katalog</h1>
                        </div>
                    </div>
                    <div class="container-form">
                        <form action="">
                            <div class="gambar">
                                <label for="">gambar</label>
                                <span>:</span>
                                <div class="gambar-box">
                                    <figure>
                                        <img id="gambarLama" src="" alt="">
                                        <img id="preview-selected-image">
                                        <label for="gambar" class="lbl-img">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            <input name="gambar" type="file" id="gambar" accept="image/*" onchange="previewImage(event);">
                                        </label>
                                    </figure>
                                    <figure>
                                        <img id="gambarLama2" src="" alt="">
                                        <img id="preview-selected-image2">
                                        <label for="gambar2" class="lbl-img">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            <input name="gambar" type="file" id="gambar2" accept="image/*" onchange="previewImage2(event);">
                                        </label>
                                    </figure>
                                    <figure>
                                        <img id="gambarLama3" src="" alt="">
                                        <img id="preview-selected-image3">
                                        <label for="gambar3" class="lbl-img">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            <input name="gambar3" type="file" id="gambar3" accept="image/*" onchange="previewImage3(event);">
                                        </label>
                                    </figure>
                                    <figure>
                                        <img id="gambarLama4" src="" alt="">
                                        <img id="preview-selected-image4">
                                        <label for="gambar4" class="lbl-img">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            <input name="gambar" type="file" id="gambar4" accept="image/*" onchange="previewImage4(event);">
                                        </label>
                                    </figure>
                                    <figure>
                                        <img id="gambarLama5" src="" alt="">
                                        <img id="preview-selected-image5">
                                        <label for="gambar5" class="lbl-img">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            <input name="gambar" type="file" id="gambar5" accept="image/*" onchange="previewImage5(event);">
                                        </label>
                                    </figure>
                                </div>
                            </div>
                            <div class="nama katalog">
                                <label for="nama katalog">nama katalog</label>
                                <span>:</span>
                                <input id="nama katalog" type="text" placeholder="Masukan nama katalog">
                            </div>
                            <div class="harga">
                                <label for="harga">harga</label>
                                <span>:</span>
                                <input id="harga" type="text" placeholder="Masukan harga">
                            </div>
                            <div class="stok">
                                <label for="stok">stok</label>
                                <span>:</span>
                                <input id="stok" type="text" placeholder="Masukan stok">
                            </div>
                            <div class="terjual">
                                <label for="terjual">terjual</label>
                                <span>:</span>
                                <input id="terjual" type="text" placeholder="Masukan terjual">
                            </div>
                            <div class="Kategori">
                                <label for="Kategori">Kategori</label>
                                <span>:</span>
                                <select name="" id="">
                                    <option value="">Kartu Nama</option>
                                    <option value="">web Profile</option>
                                </select>
                            </div>
                            <div class="deskripsi">
                                <label for="deskripsi">deskripsi</label>
                                <span>:</span>
                                <textarea name="deskripsi" id="deskripsi" cols="30" rows="20"></textarea>
                            </div>
                            <div class="button-box">
                                <button>Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer></footer>
    </div>
</div>