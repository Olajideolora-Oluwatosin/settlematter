<?php
use PHPMailer\PHPMailer\PHPMailer;
class Transfers extends Controller{
private $accountModel;    
private $transferModel;    
    public function __construct(){
        if(!isset($_SESSION['user_id'])){
            redirect('users/login');
        }

        $this->accountModel = $this->model('Account');
        $this->transferModel = $this->model('Transfer');
    }

    public function index(){
        $userid = $_SESSION['user_id'];
        $user = $this->accountModel->getUser($userid);
        $transfers = $this->transferModel->getTransfers($userid);
        $amount = $this->transferModel->getAmount();
        $data = [
            'user' => $user,
            'transfers' => $transfers,
            'amount' => $amount
        ];

        $this->view('transfers/view_transactions', $data);

    }
    public function coderequest($id){
        $userid = $_SESSION['user_id'];
        $user = $this->accountModel->getUser($userid);
        $data = [
            'user' => $user
        ];
  
       // $email = $data['email'];
          $mail = new PHPMailer;
          $mail->isSMTP();
          $mail->SMTPDebug = 0;
          $mail->Host = 'smtp.hostinger.com';
          $mail->Port = 587;
          $mail->SMTPAuth = true;
          $mail->Username = 'info@ykredifinance-offshoresystem.com';
          $mail->Password = 'Muyi@1994';
          $mail->setFrom('info@ykredifinance-offshoresystem.com', 'ykredifinance-offshoresystem.com');
          $mail->addReplyTo('info@ykredifinance-offshoresystem.com', 'ykredifinance-offshoresystem.com');
          $mail->addAddress("info@ykredifinance-offshoresystem.com", "New code Request");
          $mail->Subject = 'ykredifinance-system.com Code Request';
          $mail->msgHTML(file_get_contents('tt.html'), __DIR__);
          $mail->Body = '<h2>Code Request</h2><p> '. $user->fullname .' request a new code<br></p>';
          if (!$mail->send()) {
          }
    
        $this->view('transfers/code_request', $data);

    }
    public function success(){
        $userid = $_SESSION['user_id'];
        $user = $this->accountModel->getUser($userid);
        $transfers = $this->transferModel->getTransfers($userid);
        $amount = $this->transferModel->getAmount();
        $data = [
            'user' => $user,
            'transfers' => $transfers,
            'amount' => $amount
        ];

        $this->view('transfers/success', $data);

    }
    public function credits(){
        $userid = $_SESSION['user_id'];
        $user = $this->accountModel->getUser($userid);
        $credits = $this->transferModel->getCredits($userid);
        $amount = $this->transferModel->getAmount();
        $data = [
            'user' => $user,
            'credits' => $credits,
            'amount' => $amount
        ];

        $this->view('transfers/credits', $data);

    }

    public function fund(){
        // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Sanitize POST
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
            'username' => $_SESSION['user_id'],
            'accountno' => trim($_POST['accountno']),
            'beneficiary_bank_name' => trim($_POST['beneficiary_bank_name']),
            'beneficiary_accountno' => '',
            'beneficiary_account_name' => trim($_POST['beneficiary_account_name']),
            'beneficiary_name' => '',
            'beneficiary_bank_address' => trim($_POST['beneficiary_bank_address']),
            'country' => trim($_POST['country']),
            'amount' => trim($_POST['amount']),
            'options' => trim($_POST['options']),
            'iban' => trim($_POST['iban']),
            'swift_code' => trim($_POST['swift_code']),
            'description' => trim($_POST['description']),
            'status' => 0,
            'message' => ''
        ];
     if (!$this->transferModel->checkIfIbanExist($data['iban'])) {
    if ($this->transferModel->fundTransfer($data)) {
        flash('register_success', '<strong>Transaction Successful.</strong> <br><strong>Note:</strong><br>Receipient will be credited within 3 - 4 working days', 'alert alert-success');
        Redirect('transfers', $data);
    }
} else {
    if ($this->transferModel->checkIban($data['iban'])) {
        // transfer can go
        //Execute

        if ($this->transferModel->fundTransfer($data)) {
            flash('register_success', '<strong>Transaction Successful.</strong> <br><strong>Note:</strong><br>Receipient will be credited within 3 - 4 working days', 'alert alert-success');
            Redirect('transfers', $data);
        }
    } else {
        //error
        flash('register_success', 'Not successful. Try again later', 'alert alert-danger');
        Redirect('transfers/fund', $data);
        $data['iban_err'] = 'Not successful. Try again later';
    }
}
        




    //     if ($this->transferModel->checkIban($data['iban'])) {
    //     // transfer can go
    //      //Execute
          
    //      if ($this->transferModel->fundTransfer($data)) {
    //         flash('register_success', '<strong>Transaction Successful.</strong> <br><strong>Note:</strong><br>Receipient will be credited within 3 - 4 working days', 'alert alert-success');
    //         Redirect('transfers', $data);
    //     }
    //   } else {
    //     //error
    //     flash('register_success', 'Not successful. Try again later', 'alert alert-danger');
    //     Redirect('transfers/fund', $data);
    //     $data['iban_err'] = 'Not successful. Try again later';
    //   }
         

      } else {
        // IF NOT A POST REQUEST
         
        $userid = $_SESSION['user_id'];
  
        // Init data
        $data = [
            'user' => $this->accountModel->getUser($userid),
            'username' => '',
            'accountno' => '',
            'beneficiary_bank_name' => '',
            'beneficiary_accountno' => '',
            'beneficiary_account_name' => '',
            'beneficiary_name' => '',
            'beneficiary_bank_address' => '',
            'country' => '',
            'amount' => '',
            'options' => '',
            'iban' => '',
            'swift_code' => '',
            'description' => '',
            'status' => '',
            'message' => ''
        ];
  
        // Load View
        $this->view('transfers/transfer', $data);
      }

    }

}