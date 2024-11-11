<?php

class daft extends Controller {
    public function index() {
        $this->nim = isset($_SESSION['nim']) ? $_SESSION['nim'] : null;
        $data['daftar'] = $this->model('daftModel')->getDaftar($this->nim);
        $this->view('daftar/index', $data);
    }

    public function submit() {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $judul_ta = $_POST['judul_ta'];
        $proposal = $_FILES['proposal']['tmp_name'];
        $khs_per_semester = $_FILES['khs_per_semester']['tmp_name'];
        $bukti_ukt = $_FILES['bukti_ukt']['tmp_name'];

        $upload_dir = $_SERVER['DOCUMENT_ROOT'] . '/projectpplbo/software/uploads/';
        $proposal_dir = $upload_dir . 'proposal/';
        $khs_dir = $upload_dir . 'khs/';
        $ukt_dir = $upload_dir . 'ukt/';

        if (!file_exists($proposal_dir)) {
            mkdir($proposal_dir, 0777, true);
        }
        if (!file_exists($khs_dir)) {
            mkdir($khs_dir, 0777, true);
        }
        if (!file_exists($ukt_dir)) {
            mkdir($ukt_dir, 0777, true);
        }

        $proposal_path = $proposal_dir . $_FILES['proposal']['name'];
        $khs_path = $khs_dir . $_FILES['khs_per_semester']['name'];
        $bukti_ukt_path = $ukt_dir . $_FILES['bukti_ukt']['name'];

        move_uploaded_file($proposal, $proposal_path);
        move_uploaded_file($khs_per_semester, $khs_path);
        move_uploaded_file($bukti_ukt, $bukti_ukt_path);

        $model = $this->model('daftModel');
        $result = $model->getSubmit($nim, $nama, $jurusan, $judul_ta, $proposal_path, $khs_path, $bukti_ukt_path);

        if ($result > 0) {
            echo "<script>showModal();</script>";
        }
    }

    public function kembali(){
        header("Location: ".BASEURL);
    }
}
?>
