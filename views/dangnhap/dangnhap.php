<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="views/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="views/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="views/css/log.css">
</head>
<body style="background: #F7F7F7; height: 100%">
	<div class="login" style="width:600px;margin:auto;position:relative;">
			<center><i class="fa fa-user-circle"" aria-hidden="true" style="font-size:100px;"></i></center>
			<form class="form-horizontal"  method="POST">
		
				
				<div class="form-group">
				    <label class="col-sm-3 control-label">USER NAME</label>
				    <div class="col-sm-8">
				    	<input type="username" name="username" class="form-control" placeholder="Username" required>
				    </div>
				</div>
				<div class="form-group">
				    <label for="inputPassword3" class="col-sm-3 control-label">PASSWORD</label>
				    <div class="col-sm-8">
				    	<input type="PASSWORD" class="form-control" name="matkhau" placeholder="Mật Khẩu" required>
				    </div>
				</div>
			
				<div class="form-group">
				    <div class="col-sm-offset-3 col-sm-8">
				    	<input type="submit" class="btn btn-primary" name="login" value="Đăng nhập" ></input>
				    	<a href="?Dangky" class="btn btn-primary">Đăng ký</a>
				    </div>
				</div>
			</form>
	</div>
	
 </body>
</html>
	