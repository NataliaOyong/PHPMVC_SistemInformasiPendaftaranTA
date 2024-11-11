<?php

class proflModel {
    private $dbh;
    private $stmt;

    public function __construct() {
        $dsn = 'mysql:host=localhost;dbname=pplboproject';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $error){
            die($error->getMessage());
        }
    }

    public function getMahasiswa($NIM) {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa JOIN login ON mahasiswa.nim = login.nim WHERE mahasiswa.nim = ?');
        $this->stmt->execute([$NIM]);
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getEdit($nim, $alamat, $tgl_kelahiran, $tmpt_kelahiran, $telp, $email, $kewarganegaraan, $agama, $status_perkawinan) {
        $this->stmt = $this->dbh->prepare('UPDATE mahasiswa SET alamat = ?, tgl_kelahiran = ?, tmpt_kelahiran = ?, telp = ?, email = ?, kewarganegaraan = ?, agama = ?, status_perkawinan = ? WHERE nim = ?');
        $this->stmt->execute([$alamat, $tgl_kelahiran, $tmpt_kelahiran, $telp, $email, $kewarganegaraan, $agama, $status_perkawinan, $nim]);
        return $this->stmt->rowCount();
    }
}