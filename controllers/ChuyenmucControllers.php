<?php 
	/**
	 * 
	 */
	include './models/ChuyenmucModel.php';

	class ChuyenmucController
	{
		//thuoc tinh cua model
		
		private $tenchuyenmuc;
		private $user_id;
		private $chuyenmuc_model;

		function __construct()
		{
			# code...
			$this->chuyenmuc_model = new ChuyenmucModel();
		}
		//them du lieu 
		public function luu_chuyenmuc()
		{
			# code...
			//kiem tra co du lieu yeu cau tren URL khong de xu ly
			if (isset($_POST['tenchuyenmuc']) && isset($_POST['user_id'])) {//co du lieu theo yeu cau
				# code...lay du lieu tu view --> model
				$ten_chuyenmuc = $_POST['tenchuyenmuc'];
				$user = $_POST['user_id'];
				// echo "Du lieu tu View:".$ten_vm." - Mo ta :".$m_ta;
				//dua du lieu vao model
				$this->chuyenmuc_model->thietlap_chuyenmuc($ten_chuyenmuc, $user);
				$status_save = $this->chuyenmuc_model->them_chuyenmuc();
				if ($status_save) {//ok
					# code...
					echo 'Du lieu da Save thanh cong. . . ';
				} else {//false
					# code...
					echo "Loi . . . Khong Luu duoc. . .";
				}
				
			} else {//khong co
				# code...
				echo "khong co du lieu . . . . .Dien thong tin truoc khi Save";
			}
			
		}
		public function Danhsach_chuyenmuc()
		{
			# code...
			$ds_chuyenmuc= $this->chuyenmuc_model->danhsach_chuyenmuc();
			return $ds_chuyenmuc;
		}
		public function Thongtin_theoID()
		{
			# code...
			$id_chuyenmuc = $_GET['machuyenmuc'];
			$chuyenmuc= $this->chuyenmuc_model->laychuyenmuc_id($id_chuyenmuc);
			return $chuyenmuc;
		}
		public function update_chuyenmuc()
		{
			# code...
			$id_chuyenmuc = $_POST['machuyenmuc'];
			$ten_chuyenmuc = $_POST['tenchuyenmuc'];
			$user_id = $_POST['user_id'];
			//thiet lap gia tri thuoc tinh cua model
			$this->chuyenmuc_model->thietlap_chuyenmuc($ten_chuyenmuc,$user_id);
			$update_status = $this->chuyenmuc_model->capnhat_chuyenmuc($id_chuyenmuc);
			return $update_status;
		}
		public function delete_chuyenmuc($id)
		{
			# code...\
			// $id_vungmien = $_POST['vungmien_id'];
			$xoacm = $this->chuyenmuc_model->xoa_chuyenmuc($id);
			return $xoacm;
		}
		
	}
 ?>


		