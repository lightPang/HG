$(document).ready(function(){
  alterPage(1);
});

function jumpToPage(){
  var page_num = $('#jump_page_txt').val();
  var total_page_num = $('#pageList').find('li').length - 2;
  console.log( total_page_num );
  if( isNaN( page_num )=== false && page_num >= 1 && page_num <= total_page_num ){
    alterPage( page_num );
  }
  else{
    alert("请输入页码范围内的数字，谢谢！");
  }
}

function alterPage(num){
  $.ajax({
    type: 'POST',
    data :{'page': num },
    url:"/HG/index.php/Course/getCourseData",
    success: function(data){
      console.log(data);
      var res = data['data'];
      var pageNum = res['pageNum'];
      var curPage = res['curPage'];
      var pageData = res['articles'];
      var articleContent = "";
      for ( var i = 0 ; i<pageData.length; ++ i ){
        articleContent += "<div class='article'>" +pageData[i].content + "<button style='margin-bottom:15px;' class=\"btn btn-default\" type=\"button\" onclick=\"edit(" + pageData[i].c_id + ")\">编辑</button>"+ "<button style='margin-bottom:15px; margin-left:15px;' class=\"btn btn-default\" type=\"button\" onclick=\"del(" + pageData[i].c_id + ")\">删除</button>"+"</div>";
      } 
      $('#article-list').empty() ;
      $('#article-list').append( articleContent) ;
      var ulContent = "";
      var prePage = 1;
      var lastPage = pageNum;
      if( curPage !== 1 ){
        var prePage = curPage - 1;
      }
      if( curPage !== pageNum ){
        lastPage = curPage + 1;
      }
      ulContent += "<li><a href=\"javascript:alterPage("+ prePage +"\">«</a></li>";
      for( var i = 1 ; i<=pageNum ; ++i){
        ulContent += "<li><a href=\"javascript:alterPage("+i+")\">"+i+"</a></li>";
      }
      ulContent +=  "<li><a href=\"javascript:alterPage("+lastPage+")\">»</a></li>";
      $('#pageList').empty() ;
      $('#pageList').append( ulContent);
      if( curPage === 1 )
        $($('#pageList').find('li').get(0)).addClass('disabled');
      if( curPage === pageNum )
        $($('#pageList').find('li').get(curPage+1)).addClass('disabled');
      $($('#pageList').find('li').get(curPage)).addClass('disabled');
      var hint = "共" + pageNum +"页";
      $('#jump_page_txt').attr('placeholder',hint );
    }
  });
}

function edit(id){
  window.location.href="/HG/index.php/CourseEdit/edit/c_id/" + id ;  
}

function del(id){
  var flag =confirm("确认要删除这篇文章吗？");
  if( flag == true ){
  window.location.href="/HG/index.php/CourseEdit/del/c_id/" + id ;  }
}