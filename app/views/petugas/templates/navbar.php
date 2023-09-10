<header>
    <div class="container-navbar-box">
        <div class="container-logo p2">
            <div class="logo-box">
                <figure>
                    <img src="<?= BASEURL; ?>assets/img/logo/logo.png" alt="">
                </figure>
            </div>
            <div class="info-box pt1 pb1">
                <div class="info">
                    <button class="menu-profile" onclick="menuProfile()">
                        <span class="material-symbols-outlined">account_box</span>
                    </button>
                    <div id="menu-profile-box" class="menu-profile-box p1" style="display:none">
                        <?php
                        if ($_SESSION["user_session"]["role"] == 'admin') {
                            echo '<div class="item mb1">
                            <a href="' . BASEURL . 'TokoTani/index">
                                <span class="material-symbols-outlined">home</span>
                                <p>Home Page</p>
                            </a>
                        </div>
                        <div class="item mb1">
                            <a href="' . BASEURL . 'Admin/index">
                                <span class="material-symbols-outlined">shield_person</span>
                                <p>Admin Page</p>
                            </a>
                        </div>';
                        } else {
                            echo ' <div class="item mb1">
                            <a href="' . BASEURL . 'TokoTani/index">
                                <span class="material-symbols-outlined">home</span>
                                <p>Home Page</p>
                            </a>
                        </div>';
                        }
                        ?>
                        <div class="item mb1">
                            <a href="<?= BASEURL ?>Menu/profile">
                                <span class="material-symbols-outlined">person</span>
                                <p>profile</p>
                            </a>
                        </div>
                        <div class="item mb1">
                            <a href="<?= BASEURL ?>TokoTani/toko">
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
                    <a href="<?= BASEURL; ?>Petugas/index" class="p2">
                        <figure>
                            <img src="<?= BASEURL; ?>assets/img/data-tani/icon_info_tani.svg" alt="">
                        </figure>
                        <h3 class="mt1">Info Tani</h3>
                    </a>
                </div>
                <div class="item ">
                    <a href="<?= BASEURL; ?>Petugas/penyuluh" class="p2">
                        <figure>
                            <img src="<?= BASEURL; ?>assets/img/data-tani/icon_rapor_penyuluh.svg" alt="">
                        </figure>
                        <h3 class="mt1">Rapor Penyuluh</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>