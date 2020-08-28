<?php 
	/**
	 * class database model
	 */
	class DatabaseModel
	{
		//khai bao cac thuoc tinh cua DB model
		private $hostname = 'localhost'; //ten host
		private $db_name = 'abc'; //ten database
		private $db_username = 'root'; //user cua database
		private $db_pass = ''; //pass datebase
		//khai bao chuoi truy van CSDL chung - dai dien
		private $sql;
		private $ketnoi;


		//kiem tra ket noi CSDL
		public function checkDBConnection()
		{
			//1.ket noi toi host voi user va pass
			# code...
			$this->ketnoi = mysqli_connect($this->hostname, $this->db_username, $this->db_pass, $this->db_name);
			//2. kiem tra ket qua ket noi
			if ($this->ketnoi) {//OK
				echo "";
				return true;
			} else {//erro
				# code...
				echo "Ket noi toi host bi loi - sai thong tin host";
				return false;
			}
			
		}//ket thuc han check database connection

		//ham set chuoi SQL moi
		public function setSQL($chuoi_sql)
		{
			# code...
			$this->sql = $chuoi_sql;
		}
		//ham lay chuoi SQL da set
		public function getSQL()
		{
			# code...
			return $this->sql;
		}
		//ham thuc hien Query - truy van
		public function SQLQuery()
		{
			# code...
			//Thiết lập kiểu utf8 để lưu vào database
			mysqli_query($this->ketnoi,"SET character_set_client=utf8");
			mysqli_query($this->ketnoi,"SET character_set_connection=utf8");

			$ketqua_truyvan = mysqli_query($this->ketnoi, $this->sql);
			return $ketqua_truyvan;//true or false
		}
		//ham thuc hien Select query - lay du lieu
		public function SelectQuery()
		{
			# code...
			//Thiết lập kiểu utf8 để lưu vào database
			mysqli_query($this->ketnoi,"SET character_set_results=utf8");
			$ketqua_select = array();
			if ($trangthai_truyvan=$this->SQLQuery()) {//cau lenh sql select laf ok
				# code...
				//tra ve du lieu theo SQl da xac dinh-> lay tung Row du lieu trong DB
				while ($row = mysqli_fetch_assoc($trangthai_truyvan)) {
					# code...
					$ketqua_select[] = $row;
					}
				//tra ve ket qua cho ham
				return $ketqua_select;

				} 
			else {//sql select bi loi  --  erro
				# code...
				return false;
			}
			
		}
		public function SelectOneRecord()
		{
			mysqli_query($this->ketnoi,"SET character_set_results=utf8");
			if ($trangthai_truyvan=$this->SQLQuery()) {//cau lenh sql select laf ok
				//tra ve 1 Record tu DB
				$row = mysqli_fetch_row($trangthai_truyvan);
				
				//tra ve ket qua cho ham
				return $row;
			}
			else {
				return false;
			}
			
		}
		//ham Insert du lieu
		public function InsertQuery()
		{
			# code...
			if ($this->SQLQuery()) {
				# code...
				return true;
			} else {
				# code...
				return false;
			}
		}
		//ham update du lieu
		public function UpdateQuery()
		{
			# code...
			if ($this->SQLQuery()) {
				# code...
				return true;
			} else {
				# code...
				return false;
			}
			
		}
		//han delete du lieu
		public function DeleteQuery()
		{
			# code...
			if ($this->SQLQuery()) {
				# code...
				return true;
			} else {
				# code...
				return false;
			}
			
		}


	}

?>