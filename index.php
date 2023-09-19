<?php
$users = [
    ["1", "business1.jpg", "Kartu Nama Digital Indonesia", "20.0000", "20", "1"],
    ["2", "business2.jpg", "Kartu Nama Digital Indonesia", "20.0000", "20", "2"],
    ["3", "personal1.jpg", "Kartu Nama Digital Indonesia", "20.0000", "20", "3"],
    ["4", "company1.jpg", "Kartu Nama Digital Indonesia", "20.0000", "20", "1"],
    ["5", "company2.jpg", "Kartu Nama Digital Indonesia", "20.0000", "20", "3"]
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
            <div class="container-dashboard">
                <div class="container-katalog">
                    <div class="header">
                        <div class="title">
                            <h1>Data Semua Katalog</h1>
                        </div>
                        <div class="tambah">
                            <a href="<?= BASEURL ?>Admin/katalogTambah">Tambah Katalog</a>
                        </div>
                    </div>
                    <table>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>harga</th>
                            <th>Stok</th>
                            <th>terjual</th>
                            <th>Aksi</th>
                        </tr>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <td><?= $user[0] ?></td>
                                <td class="image"><img src="<?= BASEURL ?>assets/img/produk/<?= $user[1] ?>" alt=""></td>
                                <td><?= $user[2] ?></td>
                                <td>Rp.<?= $user[3] ?></td>
                                <td><?= $user[4] ?></td>
                                <td><?= $user[5] ?></td>
                                <td>
                                    <a class="ubah" href="<?= BASEURL ?>Admin/katalogUbah">Ubah</a>
                                    <a class="hapus" href="">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </table>
                </div>
            </div>
        </main>
        <footer></footer>
    </div>
</div>