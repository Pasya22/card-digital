<main>
    <div class="container-content">
        <div class="breadcrumbs-box p2 mt2">
            <div class="title">
                <h2>Tambah Kehadiran</h2>
            </div>
            <div class="breadcrumbs mt1">
                <ul class="">
                    <li>
                        <a href="<?= BASEURL ?>Petugas/penyuluh">Data Penyuluhan</a>
                    </li>
                    <li>
                        <p>*</p>
                    </li>
                    <li>
                        <a href="<?= BASEURL ?>Petugas/tambahKehadiran/<?= $data['penyuluh'][0]['penyuluh_id'] ?>">Tambah Kehadiran</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-kehadiran mt2">
            <div class="content-kehadiran p2">
                <div class="title-box">
                    <h2>Tambah Kehadiran</h2>
                </div>
                <form action="<?= BASEURL; ?>Petugas/tambahKehadiranPetugas" method="post" enctype="multipart/form-data">
                    <div class="content-box">
                        <input type="hidden" name="penyuluh_id" value="<?= $data['penyuluh']['penyuluh_id'] ?>">
                        <div class="item mt1 input">
                            <div class="label-box">
                                <label for="name">Nama</label>
                                <p>:</p>
                            </div>
                            <input type="text" id="name" value="<?= $data['user']['username'] ?>" disabled>
                        </div>
                        <div class="item mt1 input">
                            <div class="label-box">
                                <label for="name">Kecamatan</label>
                                <p>:</p>
                            </div>
                            <input type="text" id="name" value="<?= $data['kecamatan']['nama'] ?>" disabled>
                        </div>
                        <div class="item mt1 input">
                            <div class="label-box">
                                <label for="name">Desa</label>
                                <p>:</p>
                            </div>
                            <input type="text" id="name" value="<?= $data['desa']['nama'] ?>" disabled>
                        </div>
                        <div class="item mt1 input">
                            <div class="label-box">
                                <label for="name">Tanggal</label>
                                <p>:</p>
                            </div>
                            <input name="tanggal" type="date" id="name" value="">
                        </div>
                        <div class="item mt1 input">
                            <div class="label-box">
                                <label for="name">Jam Datang</label>
                                <p>:</p>
                            </div>
                            <input name="jam_datang" type="time" id="name" value="">
                        </div>
                        <div class="item mt1 input">
                            <div class="label-box">
                                <label for="name">Jam Pulang</label>
                                <p>:</p>
                            </div>
                            <input name="jam_pulang" type="time" id="name" value="">
                        </div>
                        <div class="button-box mt2">
                            <button class="save">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>