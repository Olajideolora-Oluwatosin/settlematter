<?php
class Articles extends Controller{
    

    
    public function __construct(){

    }

    public function index(){
        
     
          // Load View
          $this->view('articles/index');

    }

}