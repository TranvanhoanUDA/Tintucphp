<?php
  include 'DatabaseModel.php';

	//model vungmien ke thua databasemodel
	class TrangchinhModel extends DatabaseModel
	{
		//khai bao cac fields trong database - thuoc tinh
		private $dbConnect;

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
		public function tintuc()
		{
			# code...cau lenh truy lenh
			$sql = "SELECT * FROM `tintuc`";

			// echo 'SQL:'.$sql;
			//thiet lap SQL
			parent::setSQL($sql);
			//goi ham hien thi - select
			$status = parent::SelectQuery();
			//tra ve ket qua 
			return $status;	
		}
		public function chuyenmuc()
		{
			# code...cau lenh truy lenh
			$sql = "SELECT * FROM `chuyenmuc`";

			// echo 'SQL:'.$sql;
			//thiet lap SQL
			parent::setSQL($sql);
			//goi ham hien thi - select
			$status = parent::SelectQuery();
			//tra ve ket qua 
			return $status;	
		}
		public function chitiet()
		{
			# code...cau lenh truy lenh
			$sql = "SELECT * FROM `chitiettintuc`";

			// echo 'SQL:'.$sql;
			//thiet lap SQL
			parent::setSQL($sql);
			//goi ham hien thi - select
			$status = parent::SelectQuery();
			//tra ve ket qua 
			return $status;	
		}
		public function chitiettintuc_id($id)
		{
			//cau lenh truy van
			$sql = "SELECT `machitiet`, `ngaydang`, `tacgia`, `matintuc` FROM `chitiettintuc` WHERE matintuc=".$id;
			// echo "SQL Query:".$sql;
			//thiet lap SQL
			parent::setSQL($sql);
			//goi ham hien thi 
			$ketqua = parent::SelectOneRecord();
			//tra ve ket qua
			return $ketqua;
		}
		public function tintuc_id($id)
		{
			//cau lenh truy van
			$sql = "SELECT `matintuc`, `title`, `mota`, `tag`, `image`, `machuyenmuc` FROM `tintuc` WHERE matintuc=".$id;
			// echo "SQL Query:".$sql;
			//thiet lap SQL
			parent::setSQL($sql);
			//goi ham hien thi 
			$ketqua = parent::SelectOneRecord();
			//tra ve ket qua
			return $ketqua;
		}
		public function tintuctheochuyenmuc_id($id)
		{
			//cau lenh truy van
			$sql = "SELECT `matintuc`, `title`, `mota`, `tag`, `image`, `machuyenmuc` FROM `tintuc` WHERE machuyenmuc=".$id;
			// echo "SQL Query:".$sql;
			//thiet lap SQL
			parent::setSQL($sql);
			//goi ham hien thi 
			$ketqua = parent::SelectQuery();
			//tra ve ket qua
			return $ketqua;
		}
		public function chuyenmuc_id($id)
		{
			//cau lenh truy van
			$sql = "SELECT `machuyenmuc`, `tenchuyenmuc`, `user_id` FROM `chuyenmuc` WHERE machuyenmuc=".$id;
			// echo "SQL Query:".$sql;
			//thiet lap SQL
			parent::setSQL($sql);
			//goi ham hien thi 
			$ketqua = parent::SelectOneRecord();
			//tra ve ket qua
			return $ketqua;
		}
		




}
?>