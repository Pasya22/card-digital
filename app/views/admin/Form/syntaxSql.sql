CREATE TABLE transaksi (
    trx_id INT AUTO_INCREMENT PRIMARY KEY,
    kode_trx VARCHAR(255) NOT NULL,
    id_user INT,
    katalog_id INT,
    metode_trx VARCHAR(255) NOT NULL,
    jumlah INT NOT NULL,
    status_trx VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_user) REFERENCES login(id_user),
    FOREIGN KEY (katalog_id) REFERENCES katalog(katalog_id)
);


-- catalog

CREATE TABLE katalog (
    katalog_id INT AUTO_INCREMENT PRIMARY KEY,
    id_kategori INT,
    nama_katalog VARCHAR(255) NOT NULL,
    deskripsi_katalog VARCHAR(255) NOT NULL,
    gambar VARCHAR(255) NOT NULL,
    harga INT(28) NOT NULL,
    sold INT(28) NOT NULL,
    stock INT(28) NOT NULL,
    KEY `fk_katalog_kategori` (`id_kategori`),
    CONSTRAINT `fk_katalog_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    KEY `fk_katalog_kategori` (`id_kategori`),
    CONSTRAINT `fk_katalog_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE NO ACTION ON UPDATE NO ACTION
);
CREATE TABLE kategori (
    id_kategori INT AUTO_INCREMENT PRIMARY KEY,
    nama_kategori VARCHAR(255) NOT NULL, 
    status_kategori VARCHAR(255) NOT NULL
);


 
