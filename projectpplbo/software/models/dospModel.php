<?php

class dospModel {
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

    public function getDosen($NIM) {
        $this->stmt = $this->dbh->prepare('SELECT * FROM dosen JOIN login ON dosen.nim_mhs = login.nim WHERE dosen.nim_mhs = ?');
        $this->stmt->execute([$NIM]);
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}