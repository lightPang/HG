<?php
  class ServiceAction extends Action{
    public function index(){
      $this->assign("activeTab",1);
      $this->display();
    }
  }
?>