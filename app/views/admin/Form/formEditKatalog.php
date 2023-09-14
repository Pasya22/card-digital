<?php
if (!$_SESSION["user_session"]) {
    header("Location:" . BASEURL . "auth/login");
}

?>
<!-- <a href="<?= BASEURL ?>auth/Logout">Logout</a> -->

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
                    <a href="">Data Catalog</a>
                    <p>/</p>
                    <a href="">Edit Data Catalog</a>
                </div>
            </div>
            <div class="container-dashboard">
                <div class="container-user">
                    <div class="header">
                        <div class="title">
                            <h1>Edit Data Catalog</h1>
                        </div>
                    </div>
                    <div class="container-form">

                        <form action="<?= BASEURL . 'Admin/editKatalog' ?>" enctype="multipart/form-data">
                            <input id="katalog_id" name="katalog_id" type="hidden"
                                value="<?= $data['catalog']['katalog_id'] ?>">
                            <div class="nama_katalog">
                                <label for="nama_katalog">Type Card Digital</label>
                                <span>:</span>
                                <input id="nama_katalog" name="nama_katalog" type="text"
                                    value="<?= $data['catalog']['nama_katalog'] ?>"
                                    placeholder="Masukan Type Card Catalog">
                            </div>
                            <div class="gambar">
                                <label for="gambar">Select Card Digital</label>
                                <span>:</span>
                                <input name="gambar" id="gambar" type="file" accept="image/*"
                                    value="<?= $data['catalog']['gambar'] ?>">
                            </div>
                            <!-- <img id="preview" src="<?= BASEURL . 'assets/img/user/' . $data['katalog']['gambar'] ?>" alt="Preview" style="max-width: 200px; max-height: 200px; margin-top: 10px;"> -->

                            <div class="deskripsi_katalog">
                                <label for="deskripsi_katalog">Description Card Digital</label>
                                <span>:</span>
                                <input id="deskripsi_katalog" name="deskripsi_katalog" type="text"
                                    value="<?= $data['catalog']['deskripsi_katalog'] ?>"
                                    placeholder="Input Description Card Digital">
                            </div>
                            <div class="harga">
                                <label for="harga">Price</label>
                                <span>:</span>
                                <input id="harga" name="harga" type="text" value="<?= $data['catalog']['harga'] ?>"
                                    placeholder="Input Price">
                            </div>
                            <div class="stock">
                                <label for="stock">Stock</label>
                                <span>:</span>
                                <input id="stock" name="stock" type="text" value="<?= $data['catalog']['stock'] ?>"
                                    placeholder="Input stock">
                            </div>
                            <div class="sold">
                                <label for="sold">sold</label>
                                <span>:</span>
                                <input id="sold" name="sold" type="text" value="<?= $data['catalog']['sold'] ?>"
                                    placeholder="Input sold">
                            </div>
                            <div class="button-box">
                                <button type="submit" name="submit">Simpan Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer></footer>
    </div>
</div>