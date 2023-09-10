<main>
    <div class="container-content">
        <div class="breadcrumbs-box p2 mt2">
            <div class="title">
                <h2>Tambah Info Tani</h2>
            </div>
            <div class="breadcrumbs mt1">
                <ul class="">
                    <li>
                        <a href="<?= BASEURL ?>Petugas/index">infoTani</a>
                    </li>
                    <li>
                        <p>*</p>
                    </li>
                    <li>
                        <a href="<?= BASEURL ?>Petugas/tambahInfo">Tambah Info Tani</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-tambah-info mt2">
            <div class="content-tambah-info p2">
                <div class="content-box">
                    <form action="<?= BASEURL; ?>Petugas/tambahInfoTani" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="penulis_id" value="<?= $_SESSION["user_session"]['user_id'] ?>">
                        <div class="image-box mt2">
                            <figure>
                                <img id="preview-selected-image">
                                <label for="image">
                                    <span class="material-symbols-outlined">edit</span>
                                    <input name="gambar_info" type="file" id="image" accept="image/*" onchange="previewImage(event);">
                                </label>
                            </figure>
                        </div>
                        <div class="content">
                            <div class="item mt1 input">
                                <div class="label-box">
                                    <label for="judul">Judul</label>
                                    <p>:</p>
                                </div>
                                <input name="judul" type="text" id="judul" value="" placeholder="Masukan Judul" required>
                            </div>
                            <div class="item mt1 input">
                                <div class="label-box">
                                    <label for="article">Article</label>
                                    <p>:</p>
                                </div>
                                <textarea name="article" id="article"></textarea>
                            </div>
                        </div>
                        <div class="button-box mt2">
                            <button class="btn-green">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>