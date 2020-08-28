

	<?php 
	/**
	 * 
	 */
	include 'DatabaseModel.php';

	//model vungmien ke thua databasemodel
	class DangnhapModel extends DatabaseModel
	{
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
		public function login($username , $matkhau )
		{
			$sql = 'SELECT * FROM `user` WHERE username = "'.$username.'" and matkhau = "'.$matkhau.'" ' ;
			 parent::setSQL($sql);
			//goi ham insert vao db
			$trangthai_truyvan = parent::SelectOneRecord();
			//tra ve trang thai 
			return $trangthai_truyvan;
		}
		//khai bao cac fields trong database - thuoc tinh
		
		//ham thiet lap gia tri ban dau cho Model
		
	}
	
 ?>
