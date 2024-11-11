<?php

class dosp extends Controller {
    public function index() {
        $this->nim = isset($_SESSION['nim']) ? $_SESSION['nim'] : null;
        $data['dosen'] = $this->model('dospModel')->getDosen($this->nim);
        $this->view('dospem/index', $data);
    }
    
    public function kembali(){
        header("Location: ".BASEURL);
    }
}