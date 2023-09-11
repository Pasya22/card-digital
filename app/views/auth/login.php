<?php
if (isset($_SESSION["user_session"])) {
    header("Location:" . BASEURL . "home/index");

}

?>
<main>
    <div class="container-auth">
        <div class="card-auth">
            <div class="header">
                <div class="title">
                    <?= Flasher::flash() ?>
                    <h2>Login</h2>
                </div>
                <div class="keterangan">
                    <p>Masuk Kedalam Website Kami Dan Dapatkan Banyak Manfaatnya</p>
                </div>
            </div>
            <div class="form-box">
                <form action="<?= BASEURL ?>auth/loginUser" method="post">
                    <!-- <form action="#" method="post" id="form"> -->
                    <div class="form-group">
                        <label class="form-label" for="username">Username</label>
                        <input name="username" id="username" class="form-input" type="text" />
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password">Password</label>
                        <input id="password" class="form-input" name="password" type="password" />
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                    <div class="lupa">
                        <a href="">Lupa Password?</a>
                    </div>
                    <div class="button">
                        <button type="submit">Login</button>
                        <!-- <button type="button" class="btn-login">Login</button> -->
                    </div>
                </form>
            </div>
            <div class="footer">
                <div class="title">
                    <p>-- Or Login With --</p>
                </div>
                <div class="choice">
                    <div class="card">
                        <a href="<?= BASEURL . 'Google_auth/authenticate' ?>">
                            <i class="fa-brands fa-google fa-flip" style="color: red;"></i>
                        </a>
                    </div>

                </div>
                <div class="keterangan">
                    <p>Belum Mempunyai Akun ? <a href="<?= BASEURL ?>auth/register"> REGISTER</a></p>
                </div>
            </div>
        </div>
    </div>
</main>