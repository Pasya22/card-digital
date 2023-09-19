<?php

class Admin extends Controller
{
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $this->view('admin/templates/header', $data);
        $this->view('admin/dashboard/index', $data);
        $this->view('admin/templates/footer');
    }
    // view data user==========================================---------------------------////
    public function DataUser()
    {
        $data['judul'] = 'Data Semua User';
        $data['user'] = $this->model('admin_model')->getALLUser();
        $this->view('admin/templates/header', $data);
        $this->view('admin/Data/DataUser', $data);
        $this->view('admin/templates/footer');
    }

    // view data Katalog==========================================---------------------------////
    public function DataKatalog()
    {
        $data['judul'] = 'Data Katalog';
        $data['katalog'] = $this->model('admin_model')->getALLKatalog();
        $data['katalog2'] = $this->model('admin_model')->getALLKategori();
        $this->view('admin/templates/header', $data);
        $this->view('admin/Data/Datakatalog', $data);
        $this->view('admin/templates/footer');
    }
    // view data Transaksi ==========================================---------------------------////
    public function DataTransaksi()
    {
        $data['judul'] = 'Data Transaksi';
        $data['trx'] = $this->model('admin_model')->getALLTransaksiJoin();
        // echo json_encode($data);
        $this->view('admin/templates/header', $data);
        $this->view('admin/Data/DataTransaksi', $data);
        $this->view('admin/templates/footer');
    }


    // validate Add,EDIT,DELETE User ===========================================================

    public function formAddUser()
    {
        $data['judul'] = 'Add-User';
        $data['user'] = $this->model('admin_model')->getALLUser();
        $this->view('admin/templates/header', $data);
        $this->view('admin/Form/formAddUser', $data);
        $this->view('admin/templates/footer');

    }
    public function addUser()
    {
        if ($this->model('admin_model')->userAdd($_POST) > 0) {
            Flasher::setFlash('', 'Add Data User', 'Berhasil ', 'success');
            header('Location: ' . BASEURL . 'Admin/DataUser');
            exit;
        } else {
            Flasher::setFlash('Add Data User', 'Gagal ', 'danger');
            header('Location: ' . BASEURL . 'Admin/formAddUser');
            exit;
        }

    }

    public function formEditUser($id)
    {
        $data['judul'] = 'EditUser';
        $data['user'] = $this->model('admin_model')->getALLUserById($id);
        $this->view('admin/templates/header', $data);
        $this->view('admin/Form/formEditUser', $data);
        $this->view('admin/templates/footer');

    }
    public function editUser()
    {
        if ($this->model('admin_model')->userEdit($_POST) > 0) {
            Flasher::setFlash('', 'Edit Data User', 'Berhasil ', 'success');
            header('Location: ' . BASEURL . 'Admin/DataUser');
            exit;
        } else {
            Flasher::setFlash('Meng-Edit Data User', 'Gagal ', 'danger');
            header('Location: ' . BASEURL . 'Admin/formEditUser/' . $_POST['id_user']);
            exit;
        }

    }

    public function deleteUser($id)
    {
        if ($this->model('admin_model')->userDelete($id) > 0) {
            Flasher::setFlash('', 'Delete Data User', 'Berhasil ', 'success');
            header('Location: ' . BASEURL . 'Admin/DataUser');
            exit;
        } else {
            Flasher::setFlash('Menghapus Data User', 'Gagal ', 'danger');
            header('Location: ' . BASEURL . 'Admin/DataUser');
            exit;
        }
    }


    // validate Add,Edit,Delete Katalog ===========================================================

    public function formAddKatalog()
    {
        $data['judul'] = 'AddKatalog';
        $data['kat_show'] = $this->model('admin_model')->getALLKategori();
        $this->view('admin/templates/header', $data);
        $this->view('admin/form/formAddKatalog', $data);
        $this->view('admin/templates/footer');

    }
    public function addkatalog()
    {
        if ($this->model('admin_model')->tambahDatakatalog($_POST) > 0) {
            Flasher::setFlash('', 'Add Data Katalog', 'Berhasil ', 'success');
            header('Location: ' . BASEURL . 'Admin/DataKatalog');
            exit;
        } else {
            Flasher::setFlash('Add Data Katalog', 'Gagal ', 'danger');
            header('Location: ' . BASEURL . 'Admin/formAddKatalog');
            exit;
        }

    }

    public function formEditKatalog($id)
    {
        $data['judul'] = 'EditKatalog';
        $data['catalog'] = $this->model('admin_model')->getALLKatalogById($id);
        $data['catalog2'] = $this->model('admin_model')->getALLKategori();
        $this->view('admin/templates/header', $data);
        $this->view('admin/form/formEditKatalog', $data);
        $this->view('admin/templates/footer');

    }
    public function editKatalog()
    {

        if ($this->model('admin_model')->editDatakatalog($_POST) > 0) {
            Flasher::setFlash('', 'Edit Data Katalog', 'Berhasil ', 'success');
            header('Location: ' . BASEURL . 'Admin/DataKatalog');
            exit;
        } else {
            Flasher::setFlash('Meng-Edit Data Katalog', 'Gagal ', 'danger');
            header('Location: ' . BASEURL . 'Admin/formEditKatalog/' . $_POST['katalog_id']);
            exit;
        }

    }

    public function deleteKatalog($id)
    {
        if ($this->model('admin_model')->deleteDatakatalog($id) > 0) {
            Flasher::setFlash('', 'Delete Data Katalog', 'Berhasil ', 'success');
            header('Location: ' . BASEURL . 'Admin/DataKatalog');
            exit;
        } else {
            Flasher::setFlash('Menghapus Data Katalog', 'Gagal ', 'danger');
            header('Location: ' . BASEURL . 'Admin/DataKatalog');
            exit;
        }
    }
    public function formAddTransaksi()
    {
        $data['judul'] = 'AddTransaksi';
        $data['trx'] = $this->model('admin_model')->getALLTransaksiJoin();
        $data['trx2'] = $this->model('admin_model')->getALLKatalog();
        $data['trx3'] = $this->model('admin_model')->getALLUser();
        $this->view('admin/templates/header', $data);
        $this->view('admin/form/formAddTransaksi', $data);
        $this->view('admin/templates/footer');

    }
    public function addTrx()
    {
        if ($this->model('admin_model')->tambahDataTrx($_POST) > 0) {
            Flasher::setFlash('', 'Add Data Trx', 'Berhasil ', 'success');
            header('Location: ' . BASEURL . 'Admin/DataTransaksi');
            exit;
        } else {
            Flasher::setFlash('Add Data Katalog', 'Gagal ', 'danger');
            header('Location: ' . BASEURL . 'Admin/formAddTransaksi');
            exit;
        }

    }

    public function formEditTrx($id)
    {
        $data['judul'] = 'EditTrx';
        $data['trx'] = $this->model('admin_model')->getALLTransaksiById($id);
        $this->view('admin/templates/header', $data);
        $this->view('admin/form/formEditTransaksi', $data);
        $this->view('admin/templates/footer');

    }
    public function editTrx()
    {

        if ($this->model('admin_model')->trxEdit($_POST) > 0) {
            Flasher::setFlash('', 'Edit Data Katalog', 'Berhasil ', 'success');
            header('Location: ' . BASEURL . 'Admin/DataTransaksi');
            exit;
        } else {
            Flasher::setFlash('Meng-Edit Data Katalog', 'Gagal ', 'danger');
            header('Location: ' . BASEURL . 'Admin/formEditTransaksi/' . $_POST['trx_id']);
            exit;
        }

    }

    public function deleteTrx($id)
    {

        if ($this->model('admin_model')->trxDelete($$id) > 0) {
            Flasher::setFlash('', 'hapus Data Transaksi', 'Berhasil ', 'success');
            header('Location: ' . BASEURL . 'Admin/DataTransaksi');
            exit;
        } else {
            Flasher::setFlash('Meng-Edit Data Transaksi', 'Gagal ', 'danger');
            header('Location: ' . BASEURL . 'Admin/DataTransaksi');
            exit;
        }

    }

}