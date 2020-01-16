<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/new/css/bootstrap.min.css">  
    <script src="/static/new/js/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<!-- @if ($errors->any())
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
@endif -->
<form class="form-horizontal" role="form" action="{{url('/new/store')}}" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">管理员名称</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="user_name" id="firstname" placeholder="请输入名称">
    </div>
  </div>
  <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">管理员性别</label>
    <div class="col-sm-10">
      <input type="radio" name="user_sex" id="firstname" value="1">男
      <input type="radio" name="user_sex" id="firstname" value="2">女
    </div>
  </div>
  <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">管理员头像</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="user_logo" id="firstname" placeholder="请输入图片">
    </div>
  </div>
  <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">管理员电话</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="firstname" name="user_phone" placeholder="请输入电话">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="button" class="btn btn-default">管理员添加</button>
    </div>
  </div>
</form>
<!-- <script>
 $('input[name="brand_name"]').blur(function(){
  $(this).next().text('');
    var brand_name=$(this).val();
    //alert(brand_name);
    checkname(brand_name);
}); 

$('input[name="brand_url"]').blur(function(){
  $(this).next().text('');
  var brand_url=$(this).val();
  checkurl(brand_url);
});

function checkname(brand_name){
   var reg=/^[\u4e00-\u9fa5\w.\-\@]{1,16}$/;
  if(!reg.test(brand_name)){
    $('input[name="brand_name"]').next().text('品牌名称由数字，字母，@符，-组成,长度为1-16位');
    return false;
  };
  //ajax唯一性验证
  $.get('/brand/checkOnly',{brand_name:brand_name},function(res){
    if(res!=0){
      $('input[name="brand_name"]').next().text('品牌名称已存在');
    }
  });
  return true;

}

function checkurl(brand_url){
  //alert(123);
 var reg= /^http:\/\/*/;
   //alert(reg.test(brand_url));
  if(!reg.test(brand_url)){
    $('input[name="brand_url"]').next().text('网址要以http开头');
    return false;
  }
  return true;
}
$('[type=button]').click(function(){
  //alert(1234);
  $('input[name="brand_name"]').next().text('');
    var brand_name=$('input[name="brand_name"]').val();
    var nameflag=checkname(brand_name);

  $('input[name="brand_url"]').next().text('');
    var brand_url=$('input[name="brand_url"]').val();
    var urlflag=checkurl(brand_url);
        alert(urlflag);
  if(nameflag==true && urlflag==true){
    $('form').submit();
  }
}); -->
</script>
</body>
</html>