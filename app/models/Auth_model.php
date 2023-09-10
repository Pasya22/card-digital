<?php

class Auth_model extends Controller
{
    private $table = 'user';
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function getALLUser()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY user_id DESC');
        return $this->db->resultSet();
    }

    public function getALLUserById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE user_id = :user_id ORDER BY user_id DESC');
        $this->db->bind('user_id', $id);
        return $this->db->single();
    }

    public function register($data)
    {
        // if ($data['password'] != $data['password1']) {
        //     return false;
        // }

        // cek apakah no hp mengandung karakter + dan 0-9
        if (!preg_match('/[^+0-9]/', trim($data['no_telepon']))) {
            // cek apakah no hp karakter 1-3 adalah +62
            if (substr(trim($data['no_telepon']), 0, 3) == '+62') {
                $hp = trim($data['no_telepon']);
            }
            // cek apakah no hp karakter 1 adalah 0
            elseif (substr(trim($data['no_telepon']), 0, 1) == '0') {
                $hp = '+62' . substr(trim($data['no_telepon']), 1);
            } else {
                return false;
            }
        }

        $username = $data['username'];
        $nomor = $hp;

        $cek = "SELECT username FROM user WHERE username =:username || no_telepon =:no_telepon ";
        $this->db->query($cek);
        $this->db->bind('username', $username);
        $this->db->bind('no_telepon', $nomor);
        $this->db->execute();
        $ceks = $this->db->rowCount();
        if ($ceks > 0) {
            return false;
        }

        $password = password_hash($data['password'], PASSWORD_DEFAULT);
        $query = "INSERT INTO user(nama_lengkap,username,no_telepon,password,nik,kecamatan_id,desa_id,gaptokan,kelompok,alamat)
                                    VALUES
                                    (:nama_lengkap, :username, :no_telepon, :password, :nik, :kecamatan_id, :desa_id, :gaptokan, :kelompok, :alamat)
                                    ";

        $this->db->query($query);
        $this->db->bind('nama_lengkap', $data['nama_lengkap']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('no_telepon', $nomor);
        $this->db->bind('password', $password);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('kecamatan_id', $data['kecamatan_id']);
        $this->db->bind('desa_id', $data['desa_id']);
        $this->db->bind('gaptokan', $data['gaptokan']);
        $this->db->bind('kelompok', $data['kelompok']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function login($login)
    {

        $username = $login['username'];
        // Ambil data dari database
        $query = "SELECT * FROM login WHERE username = :username || email = :email";
        $this->db->query($query);
        $this->db->bind('username', "$username");
        $this->db->bind('email', "$username");
        $data =   $this->db->single();
        if ($this->db->rowCount() > 0) {
            // jika password yang dimasukkan sesuai dengan yg ada di database
            if ($login['password'] == $data['password']) {
                $_SESSION['user_session'] = $data;
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
        return $this->db->rowCount();
        return $data;
    }

    public function ubahDataProfile($data)
    {

        // cek apakah no hp mengandung karakter + dan 0-9
        if (!preg_match('/[^+0-9]/', trim($data['no_telepon']))) {
            // cek apakah no hp karakter 1-3 adalah +62
            if (substr(trim($data['no_telepon']), 0, 3) == '+62') {
                $hp = trim($data['no_telepon']);
            }
            // cek apakah no hp karakter 1 adalah 0
            elseif (substr(trim($data['no_telepon']), 0, 1) == '0') {
                $hp = '+62' . substr(trim($data['no_telepon']), 1);
            }
        }

        $gambarLama = htmlspecialchars($data["gambarLama"]);

        if ($_FILES['gambar']['error'] === 4) {
            $gambar = $gambarLama;
        } else {
            $gambar = $this->model('auth_model')->upload();
        }
        $data['gambar'] = $gambar;
        if (empty($data["password"])) {
            $password = $data["passwordLama"];
        } else {
            $password = password_hash($data['password'], PASSWORD_DEFAULT);
        }
        $username = $data['username'];
        $nomor = $hp;

        $cek = "SELECT username,no_telepon FROM user WHERE (username = :username OR no_telepon = :no_telepon) AND NOT user_id =:user_id";
        $this->db->query($cek);
        $this->db->bind('username', $username);
        $this->db->bind('no_telepon', $nomor);
        $this->db->bind('user_id', $data['user_id']);
        $this->db->execute();
        $ceks = $this->db->rowCount();
        if ($ceks > 0) {
            return false;
        }

        $query = "UPDATE user SET
                    nik =  :nik,
                    gambar = :gambar,
                    nama_lengkap = :nama_lengkap,
                    username = :username,
                    password = :password,
                    no_telepon = :no_telepon,
                    desa_id = :desa_id,
                    kecamatan_id = :kecamatan_id,
                    gaptokan = :gaptokan,
                    kelompok = :kelompok,
                    alamat = :alamat
                    WHERE user_id = :user_id ";

        $this->db->query($query);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('nama_lengkap', $data['nama_lengkap']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $password);
        $this->db->bind('no_telepon', $data['no_telepon']);
        $this->db->bind('desa_id', $data['desa_id']);
        $this->db->bind('kecamatan_id', $data['kecamatan_id']);
        $this->db->bind('gaptokan', $data['gaptokan']);
        $this->db->bind('kelompok', $data['kelompok']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->bind('user_id', $data['user_id']);

        $this->db->execute();
        return $this->db->rowCount();
    }


    public function upload()
    {
        $namaFile = $_FILES['gambar']['name'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];
        $ektensiGambarValid = ['jpg', 'jpeg', 'png', 'webp'];
        $ektensiGambar = explode('.', $namaFile);
        $ektensiGambar = strtolower(end($ektensiGambar));
        $namaFileBaru = uniqid();
        $namaFileBaru  .= '.';
        $namaFileBaru  .= $ektensiGambar;
        if ($error === 4) {
            echo "
                <script>
                    alert('Pilih gambar terlebih dahulu!');
                </script>";
            return false;
        }

        if (!in_array($ektensiGambar, $ektensiGambarValid)) {
            echo "
                <script>
                    alert('yang anda upload bukan gambar');
                </script>";
            return false;
        }


        move_uploaded_file($tmpName, 'assets/img/user/' . $namaFileBaru);

        return $namaFileBaru;
    }
}
