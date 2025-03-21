<?php
class Polls extends Controller{
    

    
    public function __construct(){

    }

    public function index(){
        
     
          // Load View
          $this->view('polls/index');

    }

}