<?php
if (!$_SESSION["user_session"]) {
    header("Location:" . BASEURL . "auth/login");
}

?>
<!-- <a href="<?= BASEURL ?>auth/Logout">Logout</a> -->

<!-- <?= Flasher::flash() ?> -->

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
                <div class="container-user">
                    <div class="header">
                        <div class="title">
                            <h1>Data Semua User</h1>
                        </div>
                        <div class="tambah-user">
                            <a href="<?= BASEURL ?>Admin/formAddUser">Tambah user</a>
                        </div>
                    </div>
                    <table>
                        <tr>
                            <th>No</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Active</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        $i = 1;
                        foreach ($data['user'] as $item) {

                            ?>
                            <tr class="table-active">
                                <td><?= $i++; ?></td>
                                <td><?= $item['email'] ?></td>
                                <td><?= $item['username'] ?></td>
                                <?php
                                if ($item['role_id'] == 1) {
                                    echo '<td>Admin</td>';

                                } elseif ($item['role_id'] == 2) {

                                    echo '<td>user</td>';
                                }
                                ?>
                                <?php if ($item['is_active'] == 1) {
                                    echo '<td>Active</td>';
                                } elseif ($item['is_active'] == 2) {
                                    echo '<td>Non Active</td>';
                                }
                                ?>

                                <td>
                                    <a class="ubah"
                                        href="<?= BASEURL . 'Admin/formEditUser/' . $item['id_user'] ?>">Edit</a>
                                    <a class="hapus"
                                        href="<?= BASEURL . 'admin/deleteUser/' . $item['id_user'] ?>">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </main>
        <footer></footer>
    </div>
</div>