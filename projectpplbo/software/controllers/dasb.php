<?php

class dasb extends Controller {
    public function index() {
        $this->view('dasboard/index');
    }

    public function logout(){
        session_start();
        unset($_SESSION['nama']);
        session_destroy();
        header('Location:'.BASEURL);
    }
}