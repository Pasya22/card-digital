<?php
if (!$_SESSION["user_session"]) {
    header("Location:" . BASEURL . "auth/login");
}

?>
<!-- <a href="<?= BASEURL ?>auth/Logout">Logout</a> -->

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
                    <a href="">Ubah Data User</a>
                </div>
            </div>
            <div class="container-dashboard">
                <div class="container-user">
                    <div class="header">
                        <div class="title">
                            <h1>Ubah Data User</h1>
                        </div>
                    </div>
                    <div class="container-form">
                        <form action="<?= BASEURL . 'Admin/editUser' ?>" method="POST">
                            <input id="id_user" name="id_user" type="hidden" value="<?= $data['user']['id_user'] ?>">
                            <input id="password" name="password" type="hidden" value="<?= $data['user']['password'] ?>">
                            <input id="password1" name="password1" type="hidden"
                                value="<?= $data['user']['password'] ?>">
                            <div class="username">
                                <label for="username">Username</label>
                                <span>:</span>
                                <input id="username" name="username" type="text"
                                    value="<?= $data['user']['username'] ?>" placeholder="Masukan Username">
                            </div>
                            <div class="email">
                                <label for="email">email</label>
                                <span>:</span>
                                <input id="email" name="email" type="text" value="<?= $data['user']['email'] ?>"
                                    placeholder="Masukan Email">
                            </div>
                            <div class="telepon">
                                <label for="telepon">No telepon</label>
                                <span>:</span>
                                <input id="telepon" name="no_telepon" type="text"
                                    value="<?= $data['user']['no_telepon'] ?>" placeholder="Masukan No Telepon">
                            </div>
                            <div class="role_id">
                                <label for="role_id">Role User</label>
                                <span>:</span>
                                <select name="role_id" id="role_id">
                                    <option value="<?= $data['user']['role_id'] ?>">-- Pilih Role Nya --</option>
                                    <option value="1" <?php if ($data['user']['role_id'] == 1)
                                        echo 'selected="selected"'; ?>>
                                        Admin</option>
                                    <option value="2" <?php if ($data['user']['role_id'] == 2)
                                        echo 'selected="selected"'; ?>>User
                                    </option>
                                </select>
                            </div>
                            <div class="is_active">
                                <label for="is_active">Status User</label>
                                <span>:</span>
                                <select name="is_active" id="is_active">
                                    <option value="<?= $data['user']['is_active'] ?>">-- Pilih Status Nya --</option>
                                    <option value="1" <?php if ($data['user']['is_active'] == 1)
                                        echo 'selected="selected"'; ?>>
                                        Active</option>
                                    <option value="2" <?php if ($data['user']['is_active'] == 2)
                                        echo 'selected="selected"'; ?>>Non Active
                                    </option>
                                </select>
                            </div>
                            <div class="password">
                                <label for="password">password</label>
                                <span>:</span>
                                <input id="password" name="password" type="text" placeholder="Masukan Password">
                            </div>
                            <div class="konfirmasi-password">
                                <label for="konfirmasi-password">konfirmasi-password</label>
                                <span>:</span>
                                <input id="konfirmasi-password" name="password1" type="text"
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