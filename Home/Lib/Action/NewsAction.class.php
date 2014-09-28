<?php
  class NewsAction extends Action{
    public function index(){
      $this->assign("activeTab",4);
      $this->display();
    }
    
    public function getNewsData(){
      $sqlModel = M('news');
      $page = $_POST['page'];
      $pageNum = ceil($sqlModel->count() / 5);
      $map['active'] = 1;
      if( isset( $page ) ){
        $data = $sqlModel->where($map)->order('n_id desc')->limit( ($page -1 ) * 5 , 5 )->select();
        $res['curPage'] = $page;
      }
      else{
        $data = $sqlModel->order('n_id desc')->limit( 0, 5 )->select();
        $res['curPage'] = 1;
      }
      $res['pageNum'] = $pageNum;
      $res['articles'] = $data;
      $this->ajaxReturn( $res, "query ok!" , 0);
    }
  }
?>