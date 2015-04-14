<?php
include_once './class/Qiniu.php';
$qn = new Qiniu();
//配置文件
$scope = 'change-this';
//$qn->uploadFile($scope, $key, $url);
if ($_FILES["file"]["error"] > 0){
  $name = "文件错误，请重试";
}else{
	$name_arr = explode(".",$_FILES["file"]["name"]);
	$name = time()."/".md5($_FILES["file"]["name"]).".".$name_arr[count($name_arr)-1];
	//fetchUrl
	$qnreturn = $qn->uploadFile($scope, $name,$_FILES["file"]["tmp_name"]);
  $name = "http://change-this.qiniudn.com/".$name;
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="bootstrap-3.3.4/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  	<div class="container">
	<form>
	  <div class="form-group">
	    <label for="exampleInputEmail1">文件地址</label>
	    <input type="name" class="form-control" id="exampleInputEmail1" value="<?php echo $name; ?>">
	  </div>
	</form>
  <button class="btn btn-lg  btn-block" type="submit">由<a href="https://portal.qiniu.com" target="_blank">Qiniu</a>提供存储空间，由<a href="http://blog.wugui.info" target="_blank">飞动小乌龟</a>提供技术支持</button>
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.4/js/bootstrap.min.js"></script>
  </body>
</html>
