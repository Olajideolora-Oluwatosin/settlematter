<?php
  class User {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // Add User / Register
    public function register($data){
      // Prepare Query
      $this->db->query('INSERT INTO users (fullname, type, accountno, email, password, country, mobile, address, occupation,dob,gender, passport, currency) 
      VALUES (:fullname, :type, :accountno, :email, :password, :country, :mobile, :address, :occupation,:dob,:gender, :passport, :currency)');

      // Bind Values
      $this->db->bind(':fullname', $data['fullname']);
      $this->db->bind(':type', $data['type']);
      $this->db->bind(':accountno', $data['accountno']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':password', $data['password']);
      $this->db->bind(':country', $data['country']);
      $this->db->bind(':mobile', $data['mobile']);
      $this->db->bind(':address', $data['address']);
      $this->db->bind(':occupation', $data['occupation']);
      $this->db->bind(':dob', $data['dob']);
      $this->db->bind(':gender', $data['gender']);
      $this->db->bind(':passport', $data['passport_url']);
      $this->db->bind(':currency', $data['currency_type']);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function updatePassword($data){
      // Prepare Query
      $this->db->query('UPDATE users SET password = :password WHERE id = :id');

      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':password', $data['password']);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function updateProfileImage($data){
      // Prepare Query
      $this->db->query('UPDATE users SET passport = :passport WHERE id = :id');

      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':passport', $data['file']);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    // Find USer BY Email
    public function findUserByEmail($email){
      $this->db->query("SELECT * FROM users WHERE email = :email");
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      //Check Rows
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }
    public function findUserByAccountNumber($accountno){
      $this->db->query("SELECT * FROM users WHERE accountno = :accountno");
      $this->db->bind(':accountno', $accountno);

      $row = $this->db->single();

      //Check Rows
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }

    // Login / Authenticate User
    public function login($accountno, $password){
      $this->db->query("SELECT * FROM users WHERE accountno = :accountno");
      $this->db->bind(':accountno', $accountno);

      $row = $this->db->single();
      
      $hashed_password = $row->password;
      if(password_verify($password, $hashed_password)){
        return $row;
      } else {
        return false;
      }
    }
    public function checkpassword($email, $password){
      $this->db->query("SELECT * FROM users WHERE email = :email");
      $this->db->bind(':email', $email);

      $row = $this->db->single();
      
      $hashed_password = $row->password;
      if(password_verify($password, $hashed_password)){
        return true;
      } else {
        return false;
      }
    }

    // Find User By ID
    public function getUserById($id){
      $this->db->query("SELECT * FROM users WHERE id = :id");
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }
  }