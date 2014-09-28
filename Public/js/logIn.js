function logIn(){
   $("#submitPwd").val( $.md5( $("#inputPwd").val() ) );
  $('form').submit();
}