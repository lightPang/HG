function addUser(){
   $("#submitPwd").val( $.md5( $("#pwd").val() ) );
  $('form').submit();
}