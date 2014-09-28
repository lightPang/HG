<?php
  class ContactAction extends Action{
    public function index(){
      $this->assign("activeTab",5);
      $this->display();
    }
  }
?>