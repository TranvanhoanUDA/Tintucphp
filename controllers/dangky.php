<?php 
	/**
	 * 
	 */
	include './models/dangky.php';

	class DangkyController
	{
		//thuoc tinh cua model
		
		private $username;
		private $matkhau;
		private $Email;
		private $dangky_model;

		function __construct()
		{
			# code...
			$this->dangky_model = new DangkycModel();
		}
		//them du lieu 
		public function dangky()
		{
			# code...
			//kiem tra co du lieu yeu cau tren URL khong de xu ly
			if (isset($_POST['username']) && isset($_POST['matkhau']) && isset($_POST['Email'])) {//co du lieu theo yeu cau
				# code...lay du lieu tu view --> model
				$username = $_POST['username'];
				$matkhau = $_POST['matkhau'];
				$Email = $_POST['Email'];
				// echo "Du lieu tu View:".$ten_vm." - Mo ta :".$m_ta;
				//dua du lieu vao model
				$this->dangky_model->thietlap_dangky($username, $matkhau, $Email);
				$status_save = $this->dangky_model->dang_ky();
				if ($status_save) {//ok
					# code...
					echo 'Dang ky thanh cong. . . ';
				} else {//false
					# code...
					echo "Không đăng ký được. . .";
				}
				
			} else {//khong co
				# code...
				echo "";
			}
			
		}
	}
 ?>


		