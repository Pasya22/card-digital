<?php
if (!$_SESSION["user_session"]) {
    header("Location:" . BASEURL . "auth/login");
}

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
                    <a href="">Data Catalog</a>
                    <p>/</p>
                    <a href="">Add Data Catalog</a>
                </div>
            </div>
            <div class="container-dashboard">
                <div class="container-user">
                    <div class="header">
                        <div class="title">
                            <h1>Add Data Catalog</h1>
                        </div>
                    </div>
                    <div class="container-form">
                        <form action="<?= BASEURL ?>Admin/addkatalog" method="POST" enctype="multipart/form-data">
                            <div class="nama_katalog">
                                <label for="nama_katalog">Type Catalog</label>
                                <span>:</span>
                                <input name="nama_katalog" id="nama_katalog" type="text"
                                    placeholder="input Type Card Digital">
                            </div>
                            <div class="gambar">
                                <label for="gambar">Image catalog</label>
                                <span>:</span>
                                <input name="gambar" id="gambar" type="file" placeholder="input Type Card Digital">
                            </div>
                            <div class="deskripsi_katalog">
                                <label for="deskripsi_katalog">Description catalog</label>
                                <span>:</span>
                                <input name="deskripsi_katalog" id="deskripsi_katalog" type="text"
                                    placeholder="input Description Card Digital">
                            </div>
                            <div class="harga">
                                <label for="harga">Price</label>
                                <span>:</span>
                                <input name="harga" id="harga" type="text" placeholder="input price">
                            </div>
                            <div class="stock">
                                <label for="stock">stock</label>
                                <span>:</span>
                                <input name="stock" id="stock" type="text" placeholder="input stock">
                            </div>
                            <div class="sold">
                                <label for="sold">sold</label>
                                <span>:</span>
                                <input name="sold" id="sold" type="text" placeholder="input sold">
                            </div>
                            <div class="button-box">
                                <button type="submit" name="submit">Save Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer></footer>
    </div>
</div>