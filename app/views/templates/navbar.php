<header>
    <div class="container-navbar-box">
        <div class="container-logo p2">
            <div class="logo-box">
                <figure>
                    <img src="<?= BASEURL ?>assets/img/logo/logo.png" alt="">
                </figure>
            </div>
            <div class="info-box pt1 pb1">
                <div class="info">
                    <button onclick="menuProfile()" class="menu-profile">
                        <span class="material-symbols-outlined">account_box</span>
                    </button>
                    <div id="menu-profile-box" class="menu-profile-box p1">
                        <?php
                        if ($_SESSION["user_session"]["role"] == 'admin') {
                            echo '<div class="item mb1">
                            <a href="' . BASEURL . 'Petugas/index">
                                <span class="material-symbols-outlined">person_apron</span>
                                <p>Petugas Page</p>
                            </a>
                        </div>
                        <div class="item mb1">
                            <a href="' . BASEURL . 'Admin/index">
                                <span class="material-symbols-outlined">shield_person</span>
                                <p>Admin Page</p>
                            </a>
                        </div>';
                        } else if ($_SESSION["user_session"]["role"] == 'petugas') {
                            echo '  <div class="item mb1">
                            <a href="' . BASEURL . 'Petugas/index">
                                <span class="material-symbols-outlined">person_apron</span>
                                <p>Petugas Page</p>
                            </a>
                        </div>';
                        }
                        ?>
                        <div class="item mb1">
                            <a href="<?= BASEURL; ?>Menu/profile">
                                <span class="material-symbols-outlined">person</span>
                                <p>profile</p>
                            </a>
                        </div>
                        <div class="item mb1">
                            <a href="<?= BASEURL; ?>TokoTani/tambahToko">
                                <span class="material-symbols-outlined">notifications</span>
                                <p>Toko</p>
                            </a>
                        </div>
                        <div class="item ">
                            <a href="<?= BASEURL ?>Auth/logout">
                                <span class="material-symbols-outlined">logout</span>
                                <p>Keluar</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-navbar mt2">
            <div class="container p2">
                <div class="item ">
                    <a href="<?= BASEURL; ?>TokoTani/index/profile" class="p2">
                        <figure>
                            <img src="<?= BASEURL; ?>assets/img/data-tani/icon_toko_tani.svg" alt="">
                        </figure>
                        <h3 class="mt1">Toko Tani</h3>
                    </a>
                </div>
                <div class="item ">
                    <a href="<?= BASEURL; ?>DataTani/index" class="p2">
                        <figure>
                            <img src="<?= BASEURL; ?>assets/img/data-tani/icon_data_tani.svg" alt="">
                        </figure>
                        <h3 class="mt1">Data Tani</h3>
                    </a>
                </div>
                <div class="item ">
                    <a href="<?= BASEURL; ?>InfoTani/index" class="p2">
                        <figure>
                            <img src="<?= BASEURL; ?>assets/img/data-tani/icon_info_tani.svg" alt="">
                        </figure>
                        <h3 class="mt1">Info Tani</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>