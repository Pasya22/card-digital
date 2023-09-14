<aside id="sidebarAdmin">
    <div class="container-sidebar-admin">
        <div class="header">
            <figure>
                <img src="<?= BASEURL ?>assets/img/logo/javagames.png" alt="">
            </figure>
        </div>
        <div class="content">
            <ul>
                <li <?php if ($data['judul'] == 'Data Dashboard' || $data['judul'] == 'Dashboard') {
                    echo "class='active'";
                } ?>>
                    <a href="<?= BASEURL ?>Admin/index">
                        <i class="fa-solid fa-house"></i>
                        <p>DASHBOARD</p>
                    </a>
                </li>
                <li <?php if ($data['judul'] == 'Data Semua User' || $data['judul'] == 'Tambah User' || $data['judul'] == 'Ubah User') {
                    echo "class='active'";
                } ?>>
                    <a href="<?= BASEURL ?>Admin/DataUser">
                        <i class="fa-solid fa-user"></i>
                        <p>DATA USER</p>
                    </a>
                </li>
                <li <?php if ($data['judul'] == 'Data Katalog' || $data['judul'] == 'Katalog') {
                    echo "class='active'";
                } ?>>
                    <a href="<?= BASEURL ?>Admin/DataKatalog">
                        <i class="fa-solid fa-bag-shopping"></i>
                        <p>KATALOG</p>
                    </a>
                </li>

                <li <?php if ($data['judul'] == 'Data Transaksi' || $data['judul'] == 'Transaksi') {
                    echo "class='active'";
                } ?>>
                    <a href="<?= BASEURL ?>Admin/DataTransaksi">
                        <i class="fa-solid fa-landmark"></i>
                        <p>TRANSAKSI</p>
                    </a>
                </li>
                <li <?php if ($data['judul'] == 'Data Report' || $data['judul'] == 'Report') {
                    echo "class='active'";
                } ?>>
                    <a href="<?= BASEURL ?>Admin/DataReport">
                        <i class="fa-solid fa-receipt"></i>
                        <p>REPORT <br>(Comming Soon)</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer-sidebar">
            <div class="sosial-media-box">
                <ul>
                    <li>
                        <a href="">
                            <i class="fa-brands fa-square-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-brands fa-square-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-brands fa-square-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="keterangan-box">
                <p>Kunjungi Semua Sosial Media Kami Untuk Mendapatkan Info tekini dari kami</p>
            </div>
        </div>
    </div>
</aside>