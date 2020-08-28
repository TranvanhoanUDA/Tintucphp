<?php 
	/**
	 * 
	 */
	include './models/TintucModel.php';

	class TintucController
	{
		//thuoc tinh cua model
		
		private $title;
		private $mota;
		private $tag;
		private $image;
		private $machuyenmuc;
		private $tintuc_model;

		function __construct()
		{
			# code...
			$this->tintuc_model = new TintucModel();
		}
		//them du lieu 
		public function luu_tintuc()
		{
			# code...
			//kiem tra co du lieu yeu cau tren URL khong de xu ly
			if (isset($_POST['title']) && isset($_POST['mota'])&& isset($_POST['tag'])&& isset($_POST['image'])&& isset($_POST['machuyenmuc'])) {//co du lieu theo yeu cau
				# code...lay du lieu tu view --> model
				$ten_tintuc = $_POST['title'];
				$m_ta = $_POST['mota'];
				$gia_tintuc = $_POST['tag'];
				$hinh_anh = $_POST['image'];
				$macm=$_POST['machuyenmuc'];
				// echo "Du lieu tu View:".$ten_vm." - Mo ta :".$m_ta;
				//dua du lieu vao model
				$this->tintuc_model->thietlap_tintuc($ten_tintuc, $m_ta,$gia_tintuc,$hinh_anh,$macm);
				$status_save = $this->tintuc_model->them_tintuc();
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
		public function Danhsach_tintuc()
		{
			# code...
			$ds_tintuc= $this->tintuc_model->danhsach_tintuc();
			return $ds_tintuc;
		}
		public function Thongtin_matintuc()
		{
			# code...
			$id_tintuc = $_GET['matintuc'];
			$tintuc= $this->tintuc_model->laytintuc_id($id_tintuc);
			return $tintuc;
		}
		public function update_tintuc()
		{
			# code...
			$id_tintuc = $_POST['matintuc'];
			$ten_tintuc = $_POST['title'];
			$m_ta = $_POST['mota'];
			$gia_tintuc = $_POST['tag'];
			$hinh_anh = $_POST['image'];
			$macm=$_POST['machuyenmuc'];
			//thiet lap gia tri thuoc tinh cua model
			$this->tintuc_model->thietlap_tintuc($ten_tintuc,$m_ta,$gia_tintuc,$hinh_anh,$macm);
			$update_status = $this->tintuc_model->capnhap_tintuc($id_tintuc);
			return $update_status;
		}
		public function delete_tintuc($id)
		{
			# code...\
			// $id_vungmien = $_POST['vungmien_id'];
			$xoasp = $this->tintuc_model->xoa_tintuc($id);
			return $xoasp;
		}
		
	}
 ?>
