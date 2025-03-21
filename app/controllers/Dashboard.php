<?php
/*
use PHPMailer\PHPMailer\PHPMailer;
class Dashboard extends Controller{
    public function __construct(){
        if(!isset($_SESSION['user_id'])){
            redirect('users/login');
        }
        $this->accountModel = $this->model('Account');
    }

    public function index(){
        $userid = $_SESSION['user_id'];
        $data['user'] = $this->accountModel->getUser($userid);
        $this->view('pages/dashboard', $data);

    }

}

*/