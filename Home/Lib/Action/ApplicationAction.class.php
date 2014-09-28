<?php
  class ApplicationAction extends CommonAction{
    public function index(){
      if( $this->doAuth() == true ){
        $this->display();
      }
      else{
        $this->display( 'Admin:index');
      }
    }
  }
?>