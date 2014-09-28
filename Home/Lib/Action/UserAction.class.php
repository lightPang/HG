<?php
  class UserAction extends CommonAction{
    public function index(){
      if( $this->isAdmin() == true ){
        $sqlModel = M('user');
        $data = $sqlModel->select();
        $this->assign( 'data', $data);
        $this->assign('activeTab', 3);
        $this->assign('isAdmin', 1 );
        $this->display();
      }
      else{
        $this->display( 'Admin:index');
      }
    }
    
    public function logIn(){
      $map['account'] = $_POST['account'];
      $sqlModel = M('user');
      $data = $sqlModel->where( $map )->select();
      if( $data[0]['pwd'] == $_POST['pwd'] ){
        $_SESSION['u_id'] = $data[0]['u_id'] ;
        if( $data[0]['u_id'] == 1 ){
          $this->assign('isAdmin', 1 );
        }
        $this->display("Application:index");
        return true;
      }
      else{
        var_dump($data);
        //$this->display( 'Admin:index');
        return false;
      }
    }
    
    public function logOut(){
      unset( $_SESSION['u_id'] );
      $this->display( 'Admin:index');
    }
    
    public function addUser(){
      if( $this->isAdmin() == true ){
        $data['name'] = $_POST['name'];
        $data['account'] = $_POST['account'];
        $data['pwd'] = $_POST['pwd'];
        $sqlModel = M('user');
        $res = $sqlModel->add( $data );
        if( $res > 0 )
          $this->success( "添加成功", "__APP__/User");
        else
          $this->error("添加失败", "__APP__/User" );
      }
      else{
        $this->display( "Admin:index");
      }
    }
    
    public function delUser(){
      if( $this->isAdmin() == true){
        if( $_GET['u_id'] == 1 ){
          $this->error("管理员不可删除！", "__APP__/User" );
        }
        else{
          $data['u_id'] = $_GET['u_id'];
          $sqlModel = M('user');
          $sqlModel->where($data)->delete();
          $this->success( "删除成功", '__APP__/User');
        }
      }
      else{
        $this->display( 'Admin:index');
      }
    }
    
  }
?>