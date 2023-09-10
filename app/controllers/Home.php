<?php

class Home extends Controller
{
    public  function index()
    {
        $data['judul'] = 'Home';
        // $data['user'] = $_SESSION['user_session'];
        // $data['info'] = $this->model('InfoTani_model')->getALLInfoById($_SESSION["user_session"]['user_id']);
        // $data['alluser'] = $this->model('User_model')->getALLUser();
        // $data['allkecamatan'] = $this->model('Wilayah_model')->getALLKecamatan();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
