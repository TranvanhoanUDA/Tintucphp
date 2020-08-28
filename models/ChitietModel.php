<?php 
	/**
	 * 
	 */
	include 'DatabaseModel.php';

	//model vungmien ke thua databasemodel
	class ChitietModel extends DatabaseModel
	{
		//khai bao cac fields trong database - thuoc tinh
		
		private $ngaydang;
		private $tacgia;
		private $matintuc;
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
		
		// public function thietlap_chitiet($cpua, $ngaydanga, $videocarda, $hdda, $modela, $baohanha, $trongluonga, $tacgiaa, $matintuca)
		public function thietlap_chitiet( $ngaydanga,$tacgiaa, $matintuca)
		{
			# code...
			$this->ngaydang=$ngaydanga;
			$this->tacgia=$tacgiaa;
			$this->matintuc = $matintuca;
		}
		//Ham them du lieu vao table vung mien
		public function them_chitiet()
		{
			$sql = "INSERT INTO chitiettintuc(ngaydang,tacgia,matintuc) VALUES ('$this->ngaydang','$this->tacgia','$this->matintuc')";
			//goi ham thiet lap truy van SQL
			parent::setSQL($sql);
			//goi ham insert vao db
			$trangthai_truyvan = parent::insertQuery();
			//tra ve trang thai 
			return $trangthai_truyvan;
		}
			public function danhsach_chitiet()
		{
			# code...cau lenh truy lenh
			$sql = "SELECT * FROM chitiettintuc";
			// echo 'SQL:'.$sql;
			//thiet lap SQL
			parent::setSQL($sql);
			//goi ham hien thi - select
			$status = parent::SelectQuery();
			//tra ve ket qua 
			return $status;	
		}
		//Ham lay du lieu theo ID nao do
		public function laychitiettintuc_id($id)
		{
			//cau lenh truy van
			$sql = "SELECT * FROM chitiettintuc WHERE machitiet = ".$id;
			// echo "SQL Query:".$sql;
			//thiet lap SQL
			parent::setSQL($sql);
			//goi ham hien thi 
			$ketqua = parent::SelectOneRecord();
			//tra ve ket qua
			return $ketqua;
		}
		public function capnhap_chitiet($id)
		{
			# code...
			$sql = "UPDATE chitiettintuc SET ngaydang='$this->ngaydang', tacgia='$this->tacgia', matintuc='$this->matintuc' WHERE machitiet = $id";
			
			//thiet lap SQL
			parent::setSQL($sql);
			//goi ham hien thi 
			$status = parent::UpdateQuery();
			//tra ve ket qua
			return $status;
		}
		//ham hien thi danh sach vung mien
		public function xoa_chitiet($id)
		{
			# code...
			$sql = "DELETE FROM chitiettintuc WHERE machitiet =".$id;
			echo "delete ".$sql;
			//set SQL
			parent::setSQL($sql);
			//goi delete trong DB Model
			$status = parent::DeleteQuery();
			//trả
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
	}
 ?>
