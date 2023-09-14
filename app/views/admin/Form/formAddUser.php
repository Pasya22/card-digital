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
                    <a href="">data user</a>
                    <p>/</p>
                    <a href="">Tambah Data User</a>
                </div>
            </div>
            <div class="container-dashboard">
                <div class="container-user">
                    <div class="header">
                        <div class="title">
                            <h1>Tambah Data User</h1>
                        </div>
                    </div>
                    <div class="container-form">
                        <form action="<?= BASEURL ?>Admin/addUser" method="POST">
                            <div class="username">
                                <label for="username">Username</label>
                                <span>:</span>
                                <input name="username" id="username" type="text" placeholder="Masukan Username">
                            </div>
                            <div class="email">
                                <label for="email">email</label>
                                <span>:</span>
                                <input name="email" id="email" type="text" placeholder="Masukan Email">
                            </div>
                            <div class="telepon">
                                <label for="no_telepon">No telepon</label>
                                <span>:</span>
                                <input name="no_telepon" id="no_telepon" type="text" placeholder="Masukan No Telepon">
                            </div>
                            <div class="telepon">
                                <label for="role_id">Role</label>
                                <span>:</span>

                                <select name="role_id" id="role_id">
                                    <option value="">-- Pilih Role Nya --</option>
                                    <?php foreach ($data['user'] as $key) { ?>
                                        <option value="1" <?php if ($key['role_id'] == 1)
                                            echo 'selected="selected"'; ?>>
                                            Admin</option>
                                        <option value="2" <?php if ($key['role_id'] == 2)
                                            echo 'selected="selected"'; ?>>User
                                        </option>
                                    <?php } ?>
                                </select>

                                <!-- <input name="telepon" id="telepon" type="text" placeholder="Masukan No Telepon"> -->
                            </div>
                            <div class="telepon">
                                <label for="is_active">Status</label>
                                <span>:</span>
                                <select name="is_active" id="is_active">
                                    <option value="">-- Pilih Role Nya --</option>
                                    <?php foreach ($data['user'] as $key) { ?>
                                        <option value="1" <?php if ($key['is_active'] == 1)
                                            echo 'selected="selected"'; ?>>
                                            Active</option>
                                        <option value="2" <?php if ($key['is_active'] == 0)
                                            echo 'selected="selected"'; ?>>non Active
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="password">
                                <label for="password">password</label>
                                <span>:</span>
                                <input name="password" id="password" type="text" placeholder="Masukan Password">
                            </div>
                            <div class="konfirmasi-password">
                                <label for="password1">konfirmasi-password</label>
                                <span>:</span>
                                <input name="password1" id="password1" type="text"
                                    placeholder="Masukan Konfirmasi-Password">
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