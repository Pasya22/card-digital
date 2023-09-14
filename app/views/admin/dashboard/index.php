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
            <div class="container-dashboard">
                <ul>
                    <li>
                        <div class="item">
                            <div class="title">
                                <h2>Data Semua User</h2>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="jumlah">
                                <p>JUMLAH : 12</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="title">
                                <h2>Data Semua Katalog</h2>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-bag-shopping"></i>
                            </div>
                            <div class="jumlah">
                                <p>JUMLAH : 12</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="title">
                                <h2>Data Semua Transaksi</h2>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-landmark"></i>
                            </div>
                            <div class="jumlah">
                                <p>JUMLAH : 12</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </main>
        <footer></footer>
    </div>
</div>