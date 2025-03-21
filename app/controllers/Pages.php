<?php
class Pages extends Controller{
    

    
    public function __construct(){

    }

    public function index(){
        
        $data = [
            'accountid' => '',
            'password' => '',
            'accountid_err' => '',
            'password_err' => '',
          ];
    
          // Load View
          $this->view('home', $data);

    }
    public function faq(){
      
          // Load View
          $this->view('faq');

    }

}