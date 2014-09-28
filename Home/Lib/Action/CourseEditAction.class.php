<?php
  import("@.ORG.Uedtitor");
  class CourseEditAction extends CommonAction{
    public function index(){
      if( $this->doAuth() == true ){
        $this->assign('activeTab', 1);
        $this->display();
      }
      else{
        $this->display( 'Admin:index');
      }
    }
    
    public function edit(){
      if( $this->doAuth() == true ){
        if( isset( $_GET['c_id'] ) ){
          $map['c_id'] = $_GET['c_id'];
          $sqlModel = M('course');
          $data = $sqlModel->where( $map )->select();
          if( $data != false ){
            $this->assign('content', $data[0]['content']);
            $this->assign('c_id', $data[0]['c_id'] );
          }
        }
        $this->assign('activeTab', 1);
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
    public function submit(){
      if( $this->doAuth() == true ){
        $data['content'] = $_POST['content'];
        
        $sqlModel = M('course');
        if( isset( $_POST['c_id'] ) && $_POST['c_id'] > 0 ) {
          $map['c_id'] = $_POST['c_id'];
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
    
    public function del(){
      if( $this->doAuth() == true ){
        $map['c_id'] = $_GET['c_id'] ;
        $data['active'] = 0;
        $sqlModel = M('course');
        $sqlModel->where($map)->save($data );
        $this->success( '删除成功','__APP__/CourseEdit/index');
      }
      else{
        $this->display( 'Admin:index');
      }
    }
    
  }
?>