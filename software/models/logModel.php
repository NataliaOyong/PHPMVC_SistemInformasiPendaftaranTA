<?php

class logModel {
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

    public function getUser($NIM, $password, $jurusan) {
        $this->stmt=$this->dbh->prepare('SELECT*FROM login WHERE nim=:NIM AND jurusan=:Jurusan AND password=:Password');
        $this->stmt->bindParam('NIM', $NIM);
        $this->stmt->bindParam('Jurusan', $jurusan);
        $this->stmt->bindParam('Password', $password);
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}