<?php
require_once '../vendor/autoload.php'; // Memuat pustaka Google API

class Google_auth extends Controller
{
    public function index()
    {
        // Jika pengguna sudah masuk, arahkan ke halaman utama
        if (isset($_SESSION["user_session"]['role_id']) == 2) {
            header("Location:" . BASEURL . "Google_auth/authenticate");
            exit;
        }

        // $data['title'] = 'gagal';
        // // $this->view('template/header', $data);
        // $this->view('auth/login', $data);
        // // $this->view('template/footer');
    }
    public function googleLogin()
    {
        $clientId = "379802224644-kqdpgm3lfhf9ok2cggbm3ftr7hh7stv3.apps.googleusercontent.com";
        $clientSecret = "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";
        $redirectUri = 'http://localhost/card-digital/Google_auth/authenticate/';

        $client = new Google_Client();
        $client->setClientId($clientId);
        $client->setClientSecret($clientSecret);
        $client->setRedirectUri($redirectUri);
        $client->addScope('email');
        $client->addScope('profile');


        $authUrl = $client->createAuthUrl();
        header("Location: " . $authUrl);
        exit;
    }

    public function authenticate()
    {
        $clientId = "28700030458-nq99qb8g4u9ndmc2d6gfad8u888j193h.apps.googleusercontent.com";
        $clientSecret = "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";
        $redirectUri = 'http://localhost/card-digital/Google_auth/authenticate/';

        $client = new Google_Client();
        $client->setClientId($clientId);
        $client->setClientSecret($clientSecret);
        $client->setRedirectUri($redirectUri);
        $client->addScope('email');
        $client->addScope('profile');

        $authUrl = $client->createAuthUrl();

        if (isset($_GET['code'])) {
            $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

            $client->setAccessToken($token['access_token']);
            $oauth = new Google_Service_Oauth2($client);
            $profile = $oauth->userinfo->get();

            // Cek apakah email pengguna sudah terdaftar di database
            $email = $profile['email'];
            // Tambahkan logika untuk memeriksa apakah email sudah terdaftar di database Anda
            $isEmailRegistered = $this->model('Auth_model')->checkEmailRegistered($email);

            if (!$isEmailRegistered) {
                // Jika email belum terdaftar, tambahkan pengguna ke database
                $query = "INSERT INTO login(username,no_telepon,password,email,role_id,is_active)
                                    VALUES (:username, :no_telepon, :password, :email,:role_id,:is_active)";
                $this->db->query($query);
                $this->db->bind('username', ''); // Sesuaikan dengan kebutuhan Anda
                $this->db->bind('no_telepon', ''); // Sesuaikan dengan kebutuhan Anda
                $this->db->bind('password', ''); // Sesuaikan dengan kebutuhan Anda
                $this->db->bind('email', $email);
                $this->db->bind('role_id', 2); // Sesuaikan dengan kebutuhan Anda
                $this->db->bind('is_active', 1); // Sesuaikan dengan kebutuhan Anda
                $this->db->execute();
            }

            // Set session
            $_SESSION["user_session"] = $profile;
            $_SESSION["user_session"]['role_id'] = 2;

            // Redirect ke halaman utama
            header('Location: ' . BASEURL . 'home/index');
            exit;
        }
        header("Location: " . $authUrl);

    }

}


// $data['judul'] = 'Login with Google';
// // $data['user'] = $_SESSION['user_session'];
// // $data['info'] = $this->model('InfoTani_model')->getALLInfoById($_SESSION["user_session"]['user_id']);
// // $data['alluser'] = $this->model('User_model')->getALLUser();
// // $data['allkecamatan'] = $this->model('Wilayah_model')->getALLKecamatan();
// $this->view('templates/header', $data);
// $this->view('home/index', $data);
// $this->view('templates/footer');


// if ($this->session->userdata('Login')) {
//     if ($this->session->userdata('role_id') == 2) {
//         redirect(site_url('google_login/authenticate'));
//     } else {
//         redirect(site_url('guest'));
//     }
// } else {
//     $data['title'] = 'Jw-Link - Login';
//     $this->load->view('temp/header_login', $data);
//     $this->load->view('Login/VLogin', $data);
//     $this->load->view('temp/footer_login', $data);
// }