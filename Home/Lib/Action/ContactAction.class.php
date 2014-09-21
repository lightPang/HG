<?php
  class ContactAction extends Action{
    public function index(){
      $this->assign("activeTab",3);
      $this->display();
    }
  }
?>