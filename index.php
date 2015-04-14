<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>飞动乌龟 - 云储存</title>
    <link href="bootstrap-3.3.4/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  	<div class="container">
      <form action="upload_file.php" method="post" enctype="multipart/form-data" class="form-signin" >
        <h2 class="form-signin-heading">选择文件</h2>
        <div class="form-group">
		    <input type="file" name="file" id="exampleInputFile">
		    </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">上传</button>
      </form>
      <button class="btn btn-lg  btn-block" type="submit">由<a href="https://portal.qiniu.com/signup?code=3lcny0wg8l4k2" target="_blank">Qiniu</a>提供存储空间，由<a href="blog.wugui.info" target="_blank">飞动小乌龟</a>提供技术支持</button>
    </div>
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <script src="bootstrap-3.3.4/js/bootstrap.min.js"></script>
  </body>
</html>
