<?php
  import("@.ORG.Uedtitor");
  class NewsEditAction extends CommonAction{
    public function index(){
      if( $this->doAuth() == true ){
        $this->assign('activeTab', 2);
        $this->display();
      }
      else{
        $this->display( 'Admin:index');
      }
    }
    
    public function edit(){
      if( $this->doAuth() == true ){
        if( isset( $_GET['n_id'] ) ){
          $map['n_id'] = $_GET['n_id'];
          $sqlModel = M('news');
          $data = $sqlModel->where( $map )->select();
          if( $data != false ){
            $this->assign('content', $data[0]['content']);
            $this->assign('n_id', $data[0]['n_id'] );
          }
        }
        $this->assign('activeTab', 2);
        $this->display('edit');
      }
      else{
        $this->display( 'Admin:index');
      } 
    }
    public function preview(){
      if( $this->doAuth() == true ){
        $data['content'] = $_POST['content'];
        $this->assign('content', $_POST['content']);
        $this->display( 'preview');
      }
      else{
        $this->display( 'Admin:index');
      }
    }
    public function del(){
      if( $this->doAuth() == true ){
        $map['n_id'] = $_GET['n_id'] ;
        $data['active'] = 0;
        $sqlModel = M('news');
        $sqlModel->where($map)->save($data );
        $this->success( '删除成功','__APP__/NewsEdit/index');
      }
      else{
        $this->display( 'Admin:index');
      }
    }
    
    public function submit(){
      if( $this->doAuth() == true ){
        $data['content'] = $_POST['content'];
        
        $sqlModel = M('news');
        if( isset( $_POST['n_id'] ) && $_POST['n_id'] > 0 ) {
          $map['n_id'] = $_POST['n_id'];
          $sqlModel->where($map)->save( $data );
        }
        else{
          $data['create_time'] =  date('y-m-d h:i:s',time());
          $sqlModel->add( $data );
        }
        $this->success('发表成功！', 'index');
      }
      else{
        $this->display( 'Admin:index');
      }
    }
    
  }
?>