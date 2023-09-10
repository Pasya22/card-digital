<?php

class Admin extends Controller
{
    public  function index()
    {
        $data['judul'] = 'TokoTani';
        $data['user'] = $_SESSION['user_session'];
        $data['info'] = $this->model('InfoTani_model')->getALLInfoById($_SESSION["user_session"]['user_id']);
        $data['alluser'] = $this->model('User_model')->getALLUser();
        $data['allkecamatan'] = $this->model('Wilayah_model')->getALLKecamatan();
        $this->view('admin/templates/header', $data);
        $this->view('admin/user/index', $data);
        $this->view('admin/templates/footer');
    }
}
