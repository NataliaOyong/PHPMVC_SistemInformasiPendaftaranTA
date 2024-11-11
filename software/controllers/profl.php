<?php

class profl extends Controller {
    public function index() {
        $this->nim = isset($_SESSION['nim']) ? $_SESSION['nim'] : null;
        $data['profile'] = $this->model('proflModel')->getMahasiswa($this->nim);
        $this->view('profile/index', $data);
    }
    
    public function edit() {
        $nim = isset($_SESSION['nim']) ? $_SESSION['nim'] : null;
        $alamat = $_POST['alamat'];
        $tgl_kelahiran = $_POST['tgl_kelahiran'];
        $tmpt_kelahiran = $_POST['tmpt_kelahiran'];
        $telp = $_POST['telp'];
        $email = $_POST['email'];
        $kewarganegaraan = $_POST['kewarganegaraan'];
        $agama = $_POST['agama'];
        $status_perkawinan = $_POST['status_perkawinan'];
        $result = $this->model('proflModel')->getEdit($nim, $alamat, $tgl_kelahiran, $tmpt_kelahiran, $telp, $email, $kewarganegaraan, $agama, $status_perkawinan);

        if ($result > 0) {
            $this->index();
        }
    }

    public function kembali(){
        header("Location: ".BASEURL);
    }
}
