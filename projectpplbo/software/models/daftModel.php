<?php

class daftModel {
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

    public function getDaftar($NIM) {
        $this->stmt = $this->dbh->prepare('SELECT * FROM tugas_akhir JOIN login ON tugas_akhir.nim = login.nim WHERE tugas_akhir.nim = ?');
        $this->stmt->execute([$NIM]);
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSubmit($nim, $nama, $jurusan, $judul_ta, $proposal, $khs_per_semester, $bukti_ukt) {
        $query = "INSERT INTO tugas_akhir (nim, nama, jurusan, judul_ta, proposal, khs_per_semester, bukti_ukt) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $statement = $this->dbh->prepare($query);
        $statement->execute([$nim, $nama, $jurusan, $judul_ta, $proposal, $khs_per_semester, $bukti_ukt]);
        return $statement->rowCount();
    }
}