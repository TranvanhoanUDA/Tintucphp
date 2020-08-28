<?php 
	/**
	* 
	*/
	include './models/dangnhap.php';
	class UserController
	{
		public function getUser(){
			$username = isset($_POST['username'])? $_POST['username']: '' ;
			$matkhau = isset($_POST['matkhau'])? $_POST['matkhau']: '' ;
			if ($matkhau != '' && $username != '' ) {
				$usermodel = new DangnhapModel();
				 $user = $usermodel->login($username , $matkhau );

				 if ($user  ) {
				 	$user["username"]=$username;
				 	$user ['matkhau']=$matkhau;
					header("location: ?danhsach_chuyenmuc");
					exit();
	
				 } else {
				 	
				 	echo "Tên đăng nhập mật khẩu không đúng ";
				 	require_once('views/dangnhap/dangnhap.php');
				 }
				 
			}else{
				require_once('views/dangnhap/dangnhap.php');
			}
		}
		
	}

 ?>
