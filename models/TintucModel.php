<?php 
	/**
	 * 
	 */
	include 'DatabaseModel.php';

	//model vungmien ke thua databasemodel
	class TintucModel extends DatabaseModel
	{
		//khai bao cac fields trong database - thuoc tinh
		
		private $title;
		private $mota;
		private $tag;
		private $image;
		private $machuyenmuc;
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
		public function thietlap_tintuc($tt, $motatt, $tg, $hinhanhtt, $macm)
		{
			# code...
	
			$this->title = $tt;
			$this->mota=$motatt;
			$this->tag=$tg;
			$this->image=$hinhanhtt;
			$this->machuyenmuc = $macm;

		}
		//Ham them du lieu vao table vung mien
		public function them_tintuc()
		{
			# code...cau lenh SQL
			$sql = "INSERT INTO tintuc( title, mota, tag,image, machuyenmuc) VALUES ('$this->title','$this->mota','$this->tag','$this->image','$this->machuyenmuc')";

			// echo 'SQL:'.$sql;
			//goi ham thiet lap truy van SQL
			parent::setSQL($sql);
			//goi ham insert vao db
			$trangthai_truyvan = parent::insertQuery();
			//tra ve trang thai 
			return $trangthai_truyvan;
		}
			public function danhsach_tintuc()
		{
			# code...cau lenh truy lenh
			$sql = "SELECT * FROM tintuc";

			// echo 'SQL:'.$sql;
			//thiet lap SQL
			parent::setSQL($sql);
			//goi ham hien thi - select
			$status = parent::SelectQuery();
			//tra ve ket qua 
			return $status;	
		}
		//Ham lay du lieu theo ID nao do
		public function laytintuc_id($id)
		{
			//cau lenh truy van
			$sql = "SELECT * FROM tintuc WHERE matintuc = ".$id;
			// echo "SQL Query:".$sql;
			//thiet lap SQL
			parent::setSQL($sql);
			//goi ham hien thi 
			$ketqua = parent::SelectOneRecord();
			//tra ve ket qua
			return $ketqua;
		}
		public function capnhap_tintuc($id)
		{
			# code...
			$sql = "UPDATE tintuc SET title='$this->title', mota='$this->mota', tag='$this->tag',image='$this->image',machuyenmuc='$this->machuyenmuc'  WHERE matintuc = $id";
			// echo "Update SQL:".$sql;
			//thiet lap SQL
			parent::setSQL($sql);
			//goi ham hien thi 
			$status = parent::UpdateQuery();
			//tra ve ket qua
			return $status;
		}
		//ham hien thi danh sach vung mien
		public function xoa_tintuc($id)
		{
			# code...
			$sql = "DELETE FROM tintuc WHERE matintuc =".$id;
			echo "delete ".$sql;
			//set SQL
			parent::setSQL($sql);
			//goi delete trong DB Model
			$status = parent::DeleteQuery();
			//trả
			return $status;
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
	}
 ?>
