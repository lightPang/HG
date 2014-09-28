function preview(){
  $('form').attr('target','a');
  $('form').attr('action', '/HG/index.php/CourseEdit/preview' );
  $('form').submit();
  $('form').removeAttr('target');
  $('form').attr('action', '/HG/index.php/CourseEdit/submit' );
}