<main>
    <div class="container-content">
        <div class="breadcrumbs-box p2 mt2">
            <div class="title">
                <h2>Data Penyuluhan</h2>
            </div>
            <div class="breadcrumbs mt1">
                <ul class="">
                    <li>
                        <a href="<?= BASEURL ?>Petugas/penyuluh">Data Penyuluhan</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-penyuluh mt2">
            <div onclick="menuPenyuluh()" class="menu-box">
                <button>
                    <span class="material-symbols-outlined">
                        menu
                    </span>
                </button>
            </div>
            <div id="menu-penyuluh" class="menu-penyuluh" style="display:none">
                <ul>
                    <li>
                        <a href="<?= BASEURL; ?>Petugas/tambahPenyuluh">
                            <span class="material-symbols-outlined">add_circle</span>
                            <p>Tambah Data Penyuluh</p>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="content-penyuluh p2">
                <div class="primary-box">
                    <div class="title-box mt2">
                        <h2>Data Penyuluh</h2>
                    </div>
                    <div class="content mt2">
                        <table>
                            <?php
                            if (empty($data['penyuluh'])) {
                                echo '  <div class="info-kosong-box">
                                <h2>Belum Ada ISi</h2>
                            </div>';
                            } else {
                                echo ' <tr>
                                <th class="no">NO.</th>
                                <th class="tanggal">Nama</th>
                                <th class="datang">Kecamatan</th>
                                <th class="pulang">Kehadiran</th>
                                <th class="aksi">Aksi</th>
                            </tr>';
                            }
                            ?>
                            <?php $i = 1 ?>
                            <?php foreach ($data['penyuluh'] as $penyuluh) : ?>
                                <?php
                                $data['kec_id'] = $this->model('Wilayah_model')->getALLKecamatanById($penyuluh['kecamatan_id']);
                                $data['des_id'] = $this->model('Wilayah_model')->getALLDesaById($penyuluh['desa_id']);
                                ?>
                                <tr>
                                    <td class="no"><?= $i ?></td>
                                    <td class="tanggal"><?= $data['user']['nama_lengkap'] ?></td>
                                    <td class="datang"><?= $data['kec_id']['nama'] ?></td>
                                    <td class="pulang">
                                        <div class="button-box">
                                            <a href="<?= BASEURL ?>Petugas/tambahKehadiran/<?= $penyuluh['penyuluh_id'] ?>" class="btn-green">Tambah</a>
                                        </div>
                                    </td>
                                    <td class="aksi">
                                        <div class="button-box">
                                            <a href="<?= BASEURL ?>Petugas/ubahPenyuluh/<?= $penyuluh['penyuluh_id'] ?>" class="edit"><span class="material-symbols-outlined">edit_square</span></a>
                                            <a href="<?= BASEURL ?>Petugas/hapusPenyuluh/<?= $penyuluh['penyuluh_id'] ?>" class="hapus"><span class="material-symbols-outlined">delete</span></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            <?php endforeach ?>
                        </table>
                    </div>
                </div>
                <div class="primary-box mt2">
                    <div class="title-box">
                        <h2>Data Kehadiran</h2>
                    </div>
                    <div class="content mt2">
                        <table>
                            <thead>
                                <tr>
                                    <th class="no">NO.</th>
                                    <th class="tanggal">Tanggal</th>
                                    <th class="jam-datang">Jam Datang</th>
                                    <th class="jam-pulang">Jam Pulang</th>
                                    <th class="aksi">Aksi</th>
                                </tr>
                            </thead>
                            <?php foreach ($data['penyuluh'] as $penyuluh) : ?>
                                <?php $data['kehadiran'] = $this->model('Penyuluh_model')->getALLKehadiranById($penyuluh['penyuluh_id']); ?>
                                <?php $i = 1 ?>
                                <?php foreach ($data['kehadiran'] as $kehadiran) : ?>
                                    <tr>
                                        <td class="no"><?= $i ?></td>
                                        <td class="tanggal"><?= date('d-m-Y', strtotime($kehadiran['tanggal'])) ?></td>
                                        <td class="nama-tanaman"><?= $kehadiran['jam_datang'] ?></td>
                                        <td class="kategori-tanaman"><?= $kehadiran['jam_pulang'] ?></td>
                                        <td class="aksi">
                                            <div class="button-box">
                                                <a href="<?= BASEURL ?>petugas/ubahKehadiran/<?= $kehadiran['kehadiran_id'] ?>" class="edit btn-orange"><span class="material-symbols-outlined">edit_square</span></a>
                                                <a href="<?= BASEURL ?>petugas/hapusKehadiran/<?= $kehadiran['kehadiran_id'] ?>" class="btn-red"><span class="material-symbols-outlined">delete</span></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $i++ ?>
                                <?php endforeach ?>
                            <?php endforeach ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>