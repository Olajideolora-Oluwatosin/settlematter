<?php

class Loans extends Controller
{
    private $accountModel;
    private $loanModel;
    public function __construct()
    {
        $this->accountModel = $this->model('Account');
        $this->loanModel = $this->model('Loan');
    }
    
    public function index(){

        $userid = $_SESSION['user_id'];
        $user = $this->accountModel->getUser($userid);
        $loans = $this->loanModel->getLoans($userid);
        $data = [
            'user' => $user,
            'loans' => $loans
        ];
        
        $this->view('loans/view', $data);
        
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
                'amount' => trim($_POST['amount']),
                'reason' => trim($_POST['reason']),
                'duration' => trim($_POST['duration']),
                'status' => 0,
                'message' => ''
            ];

            //Execute
            if ($this->loanModel->requestLoan($data)) {
                flash('register_success', 'Request Pending for Approval');
            
                // Init data


                Redirect('loans', $data);
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
                'amount' => '',
                'reason' => '',
                'duration' => '',
                'status' => '',
                'message' => ''
            ];

            // Load View
            $this->view('loans/request', $data);
        }

    }

}