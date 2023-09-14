<?php

class Flasher
{
    public static function setFlash($pesan1, $aksi, $type)
    {
        $_SESSION['flash'] = [
            'pesan1' => $pesan1, 
            'aksi' => $aksi,
            'type' => $type
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '<div id="myAlert" class="alert alert-' . $_SESSION['flash']['type'] . ' alert-dismissible" role="alert">
            ' . $_SESSION['flash']['pesan1'] . '<strong> ' . $_SESSION['flash']['aksi'] . '</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }


    }
}