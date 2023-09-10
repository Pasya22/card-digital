<?php

class Auth extends Controller
{
    public function index()
    {
        $data['judul'] = 'Toko Tani';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function logout()
    {
        $data['judul'] = 'Agency';
        $this->view('templates/header', $data);
        $this->view('auth/logout', $data);
        $this->view('templates/footer');
    }

    public function login()
    {
        $data['judul'] = 'Agency';
        $this->view('templates/header', $data);
        $this->view('auth/login', $data);
        $this->view('templates/footer');
    }

    public function register()
    {
        $data['judul'] = 'Register';
        $this->view('templates/header', $data);
        $this->view('auth/register', $data);
        $this->view('templates/footer');
    }

    public function registerUser()
    {
        if ($this->model('Auth_model')->register($_POST) > 0) {
            Flasher::setFlash('', 'Registrasi', 'Berhasil ', 'success');
            header('Location: ' . BASEURL . 'Auth/login');
            exit;
        } else {
            Flasher::setFlash('Username Atau No Telepon Telah Di Gunakan', 'Registrasi', 'Gagal ', 'danger');
            header('Location: ' . BASEURL . 'Auth/register');
            exit;
        }
    }

    public function loginUser()
    {
        if ($this->model('Auth_model')->login($_POST) > 0) {
            Flasher::setFlash('', 'Login', 'Berhasil', 'success');
            header('Location: ' . BASEURL . 'Home/index');
            exit;
        } else {
            Flasher::setFlash('Username / Password Salah', 'Login', 'Gagal', 'danger');
            header('Location: ' . BASEURL . 'auth/register');
            exit;
        }
    }
}
