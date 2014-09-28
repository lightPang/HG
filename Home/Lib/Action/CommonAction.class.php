<?php
  class CommonAction extends Action{
    protected function index(){}
    
    protected function doAuth(){
      if( isset($_SESSION['u_id'] ) ){
        if( $_SESSION['u_id'] == 1 ){
          $this->assign('isAdmin',1);
        }
        return true;
      }
      return false;
    }
    
    protected function isAdmin(){
      return true;
      if( isset($_SESSION['u_id'] ) && $_SESSION['u_id'] == 1 ){
        return true;
      }
      return false;
    }
  }
?>