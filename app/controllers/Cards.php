<?php

class Cards extends Controller
{


private $accountModel;
private $cardModel;    
    public function __construct()
    {
        $this->accountModel = $this->model('Account');
        $this->cardModel = $this->model('Card');
    }
    
    public function index(){

        $userid = $_SESSION['user_id'];
        $user = $this->accountModel->getUser($userid);
        $cards = $this->cardModel->getCards($userid);
        $data = [
            'user' => $user,
            'cards' => $cards
        ];
        $this->view('cards/view', $data);
    }

    public function request(){

        // Check if POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST
            $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => $_SESSION['user_id'],
                'accountno' => trim($_POST['accountno']),
                'dob' => trim($_POST['dob']),
                'type' => trim($_POST['type']),
                'status' => 0,
                'message' => ''
            ];

            //Execute
            if ($this->cardModel->requestCard($data)) {
                flash('register_success', 'Request Pending for Approval');
                Redirect('cards', $data);
            }

        } else {
            // IF NOT A POST REQUEST
            $userid = $_SESSION['user_id'];
            // Init data
            $data = [
                'user' => $this->accountModel->getUser($userid),
                'username' => '',
                'accountno' => '',
                'dob' => '',
                'type' => '',
                'status' => '',
                'message' => ''
            ];

            // Load View
            $this->view('cards/request', $data);
        }

    }

}