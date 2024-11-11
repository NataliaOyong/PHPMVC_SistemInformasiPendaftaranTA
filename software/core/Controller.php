<?php

class Controller {
    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function view($view, $data=[]) {
        if(!isset($_SESSION['nama'])) {
            require_once '../software/views/login/index.php';
        } else {
            require_once '../software/views/'. $view .'.php';
        }
    }

    public function model($model, $data=[]) {
        require_once '../software/models/'. $model .'.php';
        return new $model;
    }
}

?>