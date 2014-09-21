<?php
  class ApplyAction extends Action{
    public function index(){
      $this->assign("activeTab",2);
      $this->display();
    }
  }
?>