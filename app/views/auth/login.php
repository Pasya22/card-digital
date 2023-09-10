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
                    <h2>Login</h2>
                </div>
                <div class="keterangan">
                    <p>Masuk Kedalam Website Kami Dan Dapatkan Banyak Manfaatnya</p>
                </div>
            </div>
            <div class="form-box">
                <form action="<?= BASEURL ?>auth/loginUser" method="post">
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
                        <button>Login</button>
                    </div>
                </form>
            </div>
            <div class="footer">
                <div class="title">
                    <p>-- Or Login With --</p>
                </div>
                <div class="choice">
                    <div class="card">
                        <i class="fa-brands fa-google fa-flip" style="color: red;"></i>
                    </div>
                </div>
                <div class="keterangan">
                    <p>Belum Mempunyai Akun ? <a href=""> REGISTER</a></p>
                </div>
            </div>
        </div>
    </div>
</main>