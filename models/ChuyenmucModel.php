<?php 
	/**
	 * 
	 */
	include 'DatabaseModel.php';

	//model vungmien ke thua databasemodel
	class ChuyenmucModel extends DatabaseModel
	{
		//khai bao cac fields trong database - thuoc tinh
		
		private $tenchuyenmuc;
		private $user_id;
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
		public function thietlap_chuyenmuc($ten, $user)
		{
			# code...
	
			$this->tenchuyenmuc = $ten;
			$this->user_id=$user;
		}
		//Ham them du lieu vao table vung mien
		public function them_chuyenmuc()
		{
			# code...cau lenh SQL
			$sql = "INSERT INTO chuyenmuc ( tenchuyenmuc, user_id) VALUES ('$this->tenchuyenmuc','$this->user_id')";

			// echo 'SQL:'.$sql;
			//goi ham thiet lap truy van SQL
			parent::setSQL($sql);
			//goi ham insert vao db
			$trangthai_truyvan = parent::insertQuery();
			//tra ve trang thai 
			return $trangthai_truyvan;
		}
			public function danhsach_chuyenmuc()
		{
			# code...cau lenh truy lenh
			$sql = "SELECT * FROM chuyenmuc";

			// echo 'SQL:'.$sql;
			//thiet lap SQL
			parent::setSQL($sql);
			//goi ham hien thi - select
			$status = parent::SelectQuery();
			//tra ve ket qua 
			return $status;	
		}
		//Ham lay du lieu theo ID nao do
		public function laychuyenmuc_id($id)
		{
			//cau lenh truy van
			$sql = "SELECT * FROM chuyenmuc WHERE machuyenmuc = ".$id;
			// echo "SQL Query:".$sql;
			//thiet lap SQL
			parent::setSQL($sql);
			//goi ham hien thi 
			$ketqua = parent::SelectOneRecord();
			//tra ve ket qua
			return $ketqua;
		}
		public function capnhat_chuyenmuc($id)
		{
			# code...
			$sql = "UPDATE chuyenmuc SET tenchuyenmuc='$this->tenchuyenmuc', user_id='$this->user_id' WHERE machuyenmuc = $id";
			// echo "Update SQL:".$sql;
			//thiet lap SQL
			parent::setSQL($sql);
			//goi ham hien thi 
			$status = parent::UpdateQuery();
			//tra ve ket qua
			return $status;
		}
		//ham hien thi danh sach vung mien
		public function xoa_chuyenmuc($id)
		{
			# code...
			$sql = "DELETE FROM chuyenmuc WHERE machuyenmuc =".$id;
			echo "delete ".$sql;
			//set SQL
			parent::setSQL($sql);
			//goi delete trong DB Model
			$status = parent::DeleteQuery();
			//trả
			return $status;
		}
		public	function get_ten_chuyenmuc($id) {
		    global $db;
		    $query = "SELECT * FROM chuyenmuc WHERE tenchuyenmuc =". $id;
		    $category = $db->query($query);
		    $category = $category->fetch();
		    $category_name = $category['tenchuyenmuc'];
		    return $category_name;
		}
		public	 function get_user_id($id) {
		    global $db;
		    $query = "SELECT * FROM chuyenmuc WHERE user_id =". $id;
		    $category = $db->query($query);
		    $category = $category->fetch();
		    $category_name = $category['user_id'];
		    return $category_name;
		}
	}
 ?>
