<?php
  class AdminAction extends Action{
    public function index(){
      if( isset($_SESSION['username']) and isset( $_SESSION['pwd'])  ){
                $this->show();      
      }
      else{
        $this->display();
      }
    }
    
    public function logIn(){
      $userName = $_POST['username'];
      $pwd = $_POST['pwd'];
      
      if( $userName == "admin" && $pwd == "passme" ){
        $_SESSION['username'] = 'admin';
        $_SESSION['pwd'] == 'passme';
        $this->show();
      }
      else{
        $this->index();
      }
    }
    protected function show(){
      $this->display('data');
    }
  }
?>