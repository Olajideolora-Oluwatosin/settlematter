<?php
use PHPMailer\PHPMailer\PHPMailer;
class Users extends Controller
{
  private $accountModel;
  private $userModel;
  public function __construct()
  {
    $this->accountModel = $this->model('Account');
    $this->userModel = $this->model('User');
  }
 
  public function index(){

    $data = [
      'accountid' => '',
      'password' => '',
      'accountid_err' => '',
      'password_err' => '',
    ];

    // Load View
    $this->view('users/login', $data);
      
  }

  public function update($id){

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $user = $this->userModel->getUserById($id);
        $data = [
            'id' => $user->id,
            'password' => trim($_POST['password']),
            'password_err' => ''
        ];

        if(!empty($data['password'])){
          $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
          if($this->userModel->updatePassword($data)){
            flash('register_success', 'Password changed successfully');
            redirect('pages/profile');
          }
        }
    
  } else {
    $userid = $_SESSION['user_id'];
    $data = [
      'user' => $this->accountModel->getUser($userid),
      'password' => '',
      'password_err' => ''
    ];
    $this->view('users/update-password', $data);
  }
}

  public function register()
  {
    // Check if logged in
    if ($this->isLoggedIn()) {
     // redirect('registrations/add');
    }

    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize POST
      $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'fullname' => trim($_POST['fullname']),
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'mobile' => trim($_POST['mobile']),
        'gender' => trim($_POST['gender']),
        'dob' => trim($_POST['dob']),
        'address' => trim($_POST['address']),
        'country' => trim($_POST['country']),
        'occupation' => trim($_POST['occupation']),
        'type' => trim($_POST['type']),
        'currency_type' => trim($_POST['currency_type']),
        'fullname_err' =>'',
        'email_err' =>'',
        'password_err' =>'',
        'mobile_err' =>'',
        'gender_err' =>'',
        'dob_err' =>'',
        'address_err' =>'',
        'country_err' =>'',
        'occupation_err' =>'',
        'type_err' =>'',
        'currency_type_err' =>'',
      ];

      $fileName = $_FILES['passport']['name'];
      $fileTmpName = $_FILES['passport']['tmp_name'];
      $fileExt = explode('.', $fileName);
      $fileActualExt = strtolower(end($fileExt));
      $fileNameNew = uniqid('', true) . "." . $fileActualExt;
      $fileDestination = '../public/passports/' . $fileNameNew;
      if (empty($fileActualExt)) {
          $data['passport_url'] = '';
      } else {
          $data['passport_url'] = $fileNameNew;
      }
/*
      if (file_exists($fileNameNew)) {
        echo "Sorry, file already exists.";
        }else{
          move_uploaded_file($fileTmpName,$fileDestination);
        }
*/
      $data['accountno'] = rand() . rand(10, 30);


      // Check if image file is a actual image or fake image


      // Check if file already exists


      // Validate email
      if (empty($data['fullname'])) {
        $data['fullname_err'] = 'Please enter Full Name';
      }
      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter an email';
        // Validate name
      } else {
        // Check Email
        if ($this->userModel->findUserByEmail($data['email'])) {
          $data['email_err'] = 'Email is already taken.';
        }
      }

      // Validate password
      if (empty($data['password'])) {
        $password_err = 'Please enter a password.';
      } elseif (strlen($data['password']) < 6) {
        $data['password_err'] = 'Password must have atleast 6 characters.';
      }

      // Validate confirm password
      if (empty($data['mobile'])) {
        $data['mobile_err'] = 'Please enter phone number.';
      }
      
      if ($data['gender'] == '-- Select Gender --') {
        $data['gender_err'] = 'Please Select your Gender.';
      }
      if (empty($data['dob'])) {
        $data['dob_err'] = 'Select Date of Birth';
      }
      if (empty($data['address'])) {
        $data['address_err'] = 'Please enter your address';
      }
      if (empty($data['occupation'])) {
        $data['occupation_err'] = 'Please enter your occupation';
      }
      if ($data['type'] == '-- Select Account Type --') {
        $data['type_err'] = 'Please Select Account type.';
      }

      // Make sure errors are empty
      if (empty($data['fullname_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['mobile_err']) && empty($data['gender_err']) && empty($data['dob_err']) && empty($data['address_err']) && empty($data['occupation_err']) && empty($data['type_err'])) {
        // SUCCESS - Proceed to insert

        // Hash Password
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        //Execute
        if ($this->userModel->register($data)) {
          flash('register_success', 'You are now registered, Check your email inbox or spam for your Account Number');
            move_uploaded_file($fileTmpName, $fileDestination);
            
       
            $email = $data['email'];
          $mail = new PHPMailer;
          $mail->isSMTP();
          $mail->SMTPDebug = 0;
          $mail->Host = 'smtp.hostinger.com';
          $mail->Port = 587;
          $mail->SMTPAuth = true;
          $mail->Username = 'info@eclipzainnovate.com';
          $mail->Password = 'Muyi@1994';
          $mail->setFrom('info@eclipzainnovate.com', 'eclipzainnovate.com');
          $mail->addReplyTo('info@eclipzainnovate.com', 'eclipzainnovate.com');
          $mail->addAddress("$email", "Successful Registration");
          $mail->Subject = 'Account Creation Successful';
          $mail->msgHTML(file_get_contents('tt.html'), __DIR__);
          $mail->Body = BANK_NAME. '<br><p> We are so happy to have you on board. <br><br> Account No: '. $data['accountno'] .'<br><br> Account Number: '. $data['accountno'] .'<br></p>';
          if (!$mail->send()) {
          }
    
          
          redirect('users/login');
          
        } else {
          die('Something went wrong');
        }
      } else {
        // Load View with errors
        flash('register_success', 'Please Fix Errors', 'alert alert-danger');
        $this->view('users/register', $data);
      }
    } else {
      // IF NOT A POST REQUEST

      // Init data
      $data = [
        'fullname' => '',
        'email' => '',
        'password' => '',
        'mobile' => '',
        'gender' => '',
        'dob' => '',
        'address' => '',
        'country' => '',
        'occupation' => '',
        'type' => '',
        'currency_type' => '',
        'fullname_err' => '',
        'email_err' => '',
        'password_err' => '',
        'passport_err' => '',
        'mobile_err' => '',
        'gender_err' => '',
        'dob_err' => '',
        'address_err' => '',
        'country_err' => '',
        'occupation_err' => '',
        'currency_type_err' => '',
        'type_err' => '',
      ];

      // Load View
      $this->view('users/register', $data);
    }
  }


  //Update profile picture
  public function update_profile(){
    if(isset($_FILES['customFile'])){
      $fileName = $_FILES['customFile']['name'];
      $fileTmpName = $_FILES['customFile']['tmp_name'];
      $fileExt = explode('.', $fileName);
      $fileActualExt = strtolower(end($fileExt));
      $fileNameNew = uniqid('', true) . "." . $fileActualExt;
      $fileDestination = '../public/passports/' . $fileNameNew;
      if (empty($fileActualExt)) {
          $data['file'] = '';
      } else {
          $data['file'] = $fileNameNew;
      }

      if ($this->userModel->updateProfileImage($data)) {
          move_uploaded_file($fileTmpName, $fileDestination);
          redirect('pages/dashboard');
      }
    }
  }

  
  
  public function login()
  {
    // Check if logged in
    if ($this->isLoggedIn()) {
      redirect('pages/dashboard');
    }

    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize POST
      $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'accountno' => trim($_POST['accountno']),
        'password' => trim($_POST['password']),
        'accountno_err' => '',
        'password_err' => '',
      ];

      // Check for email
      if (empty($data['accountno'])) {
        $data['accountno_err'] = 'Please enter account number.';
      }

      // Check for name
      if (empty($data['password'])) {
        $data['password_err'] = 'Please enter password.';
      }

      // Check for user
      if ($this->userModel->findUserByAccountNumber($data['accountno'])) {
        // User Found
      } else {
        // No User
        $data['accountno_err'] = 'This user is not registered.';
      }

      // Make sure errors are empty
      if (empty($data['accountno_err']) && empty($data['password_err'])) {

        // Check and set logged in user
        $loggedInUser = $this->userModel->login($data['accountno'], $data['password']);

        if ($loggedInUser) {
          // User Authenticated!
          $this->createUserSession($loggedInUser);
        } else {
          $data['password_err'] = 'Password incorrect.';
          // Load View
          $this->view('users/login', $data);
        }
      } else {
        // Load View
        $this->view('users/login', $data);
      }
    } else {
      // If NOT a POST

      // Init data
      $data = [
        'accountno' => '',
        'password' => '',
        'accountno_err' => '',
        'password_err' => '',
      ];

      // Load View
      $this->view('users/login', $data);
    }
  }
  public function pass_reset()
  {
    // Check if logged in
    if ($this->isLoggedIn()) {
      redirect('dashboard');
    }

    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize POST
      $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'email' => trim($_POST['email']),
        'email_err' => ''
      ];

      // Check for email
      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter a valid email.';
      }

      if ($this->userModel->findUserByEmail($data['email'])) {
        // User Found
      } else {
        // No User
        $data['email_err'] = 'This user is not registered.';
      }

      // Make sure errors are empty
      if (empty($data['email_err'])) {

        // Check and set logged in user
        $email = $data['email'];
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = 'smtp.hostinger.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = 'info@ykredifinance-offshoresystem.com';
        $mail->Password = 'Muyi@1994';
        $mail->setFrom('info@ykredifinance-offshoresystem.com', 'ykredifinance-offshoresystem.com');
        $mail->addReplyTo('info@ykredifinance-offshoresystem.com/', 'ykredifinance-offshoresystem.com');
        $mail->addAddress("$email", "Password Reset");
        $mail->Subject = 'ykredifinance-system.com Registration';
        $mail->msgHTML(file_get_contents('tt.html'), __DIR__);
        $mail->Body = '<h2>ykredifinance-system.com Password Reset</h2><p> <a href="'.URLROOT.'/">Click here to reset your password</a> </p>';
        if (!$mail->send()) {
        }
redirect('users/pass_reset');
    
      } else {
        // Load View
        $this->view('users/pass_reset', $data);
      }
    } else {
      // If NOT a POST

      // Init data
      $data = [
        'email' => '',
        'email_err' => ''
      ];

      // Load View
      $this->view('users/pass_reset', $data);
    }
  }
// Create Session With User Info
  public function createUserSession($user)
  {
    $_SESSION['user_id'] = $user->id;
    $_SESSION['accountno'] = $user->accounton;
    $_SESSION['fullname'] = $user->fullname;
    $_SESSION['mobile'] = $user->mobile;
    $_SESSION['passport'] = $user->passport;
   // session_start();
   // $_SESSION["email"] = $email;
   /*
    $nownow = date("l jS \of F Y h:i:s A");
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = 'smtp.hostinger.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'info@bitecript.com';
    $mail->Password = 'Muyi@1994';
    $mail->setFrom('info@bitecript.com', 'bitecript.com');
    $mail->addReplyTo('info@bitecript.com/', 'bitecript.com');
    $mail->addAddress("$user->email", "Login Alert");
    $mail->Subject = 'bitecript.com Login Notification';
    $mail->msgHTML(file_get_contents('tt.html'), __DIR__);
    $mail->Body = '<h2>bitecript.com</h2><p> Please be informed that your Whalewaver Account was accessed on <strong>' . $nownow . '</strong> </p>';
    if (!$mail->send()) {
    }*/
    redirect('pages/dashboard');
  }

  // Logout & Destroy Session
  public function logout()
  {
    unset($_SESSION['user_id']);
    unset($_SESSION['user_name']);
    unset($_SESSION['fullname']);
    unset($_SESSION['phone']);
    unset($_SESSION['image']);
    session_destroy();
    redirect('users/login');
  }

  // Check Logged In
  public function isLoggedIn()
  {
    if (isset($_SESSION['user_id'])) {
      return true;
    } else {
      return false;
    }
  }
}