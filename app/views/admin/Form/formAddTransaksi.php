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
                    <a href="">data transaksi</a>
                    <p>/</p>
                    <a href="">Tambah Data Transaksi</a>
                </div>
            </div>
            <div class="container-dashboard">
                <div class="container-user">
                    <div class="header">
                        <div class="title">
                            <h1>Tambah Data Transaksi</h1>
                        </div>
                    </div>
                    <div class="container-form">
                        <form action="<?= BASEURL ?>Admin/addTrx" method="POST">
                            <div class="id_user">
                                <label for="id_user">Customer</label>
                                <span>:</span>
                                <select name="id_user" id="id_user">
                                    <option value="">-- Choices Role User --</option>
                                    <?php foreach ($data['trx3'] as $key) { ?>
                                        <option value="<?= $key['id_user'] ?>">
                                            <?= $key['username'] ?></option>
                                    <?php } ?>

                                </select>
                                <!-- <input name="id_user" id="id_user" type="text" placeholder="Masukan Code Trx"> -->
                            </div>
                            <div class="kode_trx">
                                <label for="kode_trx">Code Trx</label>
                                <span>:</span>
                                <input name="kode_trx" id="kode_trx" type="text" placeholder="Masukan Code Trx">
                            </div>

                            <div class="katalog_id">
                                <label for="katalog_id">Code Catalog</label>
                                <span>:</span>

                                <select name="katalog_id" id="katalog_id">
                                    <option value="">-- Choices Name Catalog --</option>
                                    <?php foreach ($data['trx2'] as $key) { ?>
                                        <option value="<?= $key['katalog_id'] ?>">
                                            <?= $key['nama_katalog'] ?></option>
                                    <?php } ?>

                                </select>
                                <!-- <input name="katalog_id" id="katalog_id" type="text" placeholder="Masukan Code Catalog"> -->
                                <!-- <input name="telepon" id="telepon" type="text" placeholder="Masukan No Telepon"> -->
                            </div>
                            <div class="Metode Trx">
                                <label for="Metode_trx">Metode Trx</label>
                                <span>:</span>
                                <select name="metode_trx" id="metode_trx">
                                    <option value="">-- Choices Metode Trx --</option>
                                    <option value="MANDIRI">BANK MANDIRI</option>
                                    <option value="BRI">BANK BRI</option>
                                    <option value="BNI">BANK BNI</option>
                                    <option value="BSI">BANK BSI</option>
                                    <option value="BCA">BANK BCA</option>
                                    <option value="OVO">OVO</option>
                                    <option value="DANA">DANA</option>
                                    <option value="GOPAY">GOPAY</option>

                                </select>
                                <!-- <input name="telepon" id="telepon" type="text" placeholder="Masukan No Telepon"> -->
                            </div>

                            <div class="jumlah">
                                <label for="jumlah">Quantity</label>
                                <span>:</span>
                                <input name="jumlah" id="jumlah" type="text" placeholder="Masukan jumlah">
                            </div>
                            <div class="status_trx">
                                <label for="status_trx">Status Trx</label>
                                <span>:</span>
                                <input name="status_trx" id="status_trx" type="text" placeholder="Masukan status">
                                <!-- <select name="status_trx" id="status_trx">
                                    <option value="">-- Choices Status Trx --</option>
                                    <?php foreach ($data['trx'] as $key) { ?>
                                        <option value="1" <?php if ($key['status_trx'] == 1)
                                            echo 'selected="selected"'; ?>>
                                            Lunas</option>
                                        <option value="2" <?php if ($key['status_trx'] == 2)
                                            echo 'selected="selected"'; ?>>Belum Lunas
                                        </option>
                                    <?php } ?>
                                </select> -->
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