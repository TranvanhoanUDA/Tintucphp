<?php 
	/**
	 * 
	 */
	include 'DatabaseModel.php';

	//model vungmien ke thua databasemodel
	class DangkycModel extends DatabaseModel
	{
		//khai bao cac fields trong database - thuoc tinh
		
		private $username;
		private $matkhau;
		private $Email;
		//khai bao trang thai ket noi CSDL
		private $dbConnect;

		//ham khoi tao 

		function __construct()
		{
			# kiem tra ket noi Db thong qua DatabaseModel

			$this->dbConnect = parent::checkDBConnection();
			if ($this->dbConnect) {//ok
				# code...
				return true;
			} else {//Error
				# code...
				return false;
			}
		}
		//ham thiet lap gia tri ban dau cho Model
		public function thietlap_dangky($username, $matkhau, $Email)
		{
			# code...
	
			$this->username = $username;
			$this->matkhau=$matkhau;
			$this->Email=$Email;
		}
		//Ham them du lieu vao table vung mien
		public function dang_ky()
		{
			# code...cau lenh SQL
			$sql = "INSERT INTO user ( username, matkhau, Email) VALUES ('$this->username','$this->matkhau','$this->Email')";

			// echo 'SQL:'.$sql;
			//goi ham thiet lap truy van SQL
			parent::setSQL($sql);
			//goi ham insert vao db
			$trangthai_truyvan = parent::insertQuery();
			//tra ve trang thai 
			return $trangthai_truyvan;
		}
			
	}
 ?>
