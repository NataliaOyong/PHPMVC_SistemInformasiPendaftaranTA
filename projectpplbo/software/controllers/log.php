<?php

class log extends Controller {
    public function index() {
        $this->view('login/index');
    }

    public function login(){
        $NIM = $_POST['NIM'];
        $password = $_POST['Password'];
        $jurusan = $_POST['Jurusan'];
        $data['login'] = $this->model('logModel')->getUser($NIM, $password, $jurusan);

        if ($data['login'] == TRUE) {
            foreach ($data['login'] as $row):
                $_SESSION['nama'] = $row['nama'];
                $_SESSION['nim'] = $row['nim'];
                header("Location: ".BASEURL);
                exit();
            endforeach;
        } else {
            $_SESSION['error'] = "Login gagal. Silahkan cek NIM, jurusan, dan password Anda.";
            header("Location: ".BASEURL."/LoginGagal");
        }
    }
}