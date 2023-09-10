<?php

class User_model extends Controller
{
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getALLUser()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getALLUserById($user_id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE user_id = :user_id ORDER BY user_id DESC');
        $this->db->bind('user_id', $user_id);
        return $this->db->single();
    }

    public function getDesaUser()
    {
        $desa_id = htmlspecialchars($_POST['desa_id']);
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE desa_id = :desa_id ORDER BY user_id DESC');
        $this->db->bind('desa_id', $desa_id);
        $query = $this->db->resultSet();

        echo json_encode($query);
    }

    public function getRoleUser()
    {
        $role = htmlspecialchars($_POST['role']);
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE role = :role ORDER BY user_id DESC');
        $this->db->bind('role', $role);
        $query = $this->db->resultSet();

        echo json_encode($query);
    }

    public function tambahDataUser($data)
    {
        $gambar = $this->model('Member_model')->upload();
        $data['image'] = $gambar;


        $query = "INSERT INTO user
                                VALUES
                                ('', :username, :email, :no_telepon, :password, :role, :image)
                                ";

        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('no_telepon', $data['no_telepon']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('role', $data['role']);
        $this->db->bind('image', $data['image']);


        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataUser($user_id)
    {
        $query = "DELETE FROM user WHERE user_id =:user_id";
        $this->db->query($query);
        $this->db->bind('user_id', $user_id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataUser($data)
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
                    alamat = :alamat,
                    role = :role
                    WHERE user_id = :user_id ";

        $this->db->query($query);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('nama_lengkap', $data['nama_lengkap']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $password);
        $this->db->bind('no_telepon', $nomor);
        $this->db->bind('desa_id', $data['desa_id']);
        $this->db->bind('kecamatan_id', $data['kecamatan_id']);
        $this->db->bind('gaptokan', $data['gaptokan']);
        $this->db->bind('kelompok', $data['kelompok']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('role', $data['role']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->bind('user_id', $data['user_id']);

        $this->db->execute();
        return $this->db->rowCount();
    }




    public function cariDataMember()
    {
        $keyword = $_POST['keyword'];

        $query = "SELECT * FROM user WHERE username LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");

        return $this->db->resultSet();
    }

    public function cariDataRole()
    {
        $keyword = $_POST['keyword'];

        $query = "SELECT * FROM user WHERE role LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");

        return $this->db->resultSet();
    }
}
