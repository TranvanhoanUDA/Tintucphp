<?php 
	/**
	 * 
	 */
	include './models/ChitietModel.php';

	class ChitietController
	{
		//thuoc tinh cua model
		private $id_chitiet;
		private $ngaydang;
		private $tacgia;
		private $matintuc;
		private $chitiet_model;

		function __construct()
		{
			# code... 
			$this->chitiet_model = new ChitietModel();
		}
		//them du lieu 
		public function luu_chitiet()
		{
			# code...
			//kiem tra co du lieu yeu cau tren URL khong de xu ly
			if (isset($_POST['ngaydang']) &&  isset($_POST['tacgia']) && isset($_POST['matintuc'])){//co du lieu theo yeu cau
				# code...lay du lieu tu view --> model
			// $cpua = $_POST['cpu'];
			$ngaydanga = $_POST['ngaydang'];
			$tacgiaa =$_POST['tacgia'];
			$matintuca = $_POST['matintuc'];
				// echo "Du lieu tu View:".$ten_vm." - Mo ta :".$m_ta;
				//dua du lieu vao model
				$this->chitiet_model->thietlap_chitiet($ngaydanga,$tacgiaa,$matintuca);
			$status_save = $this->chitiet_model->them_chitiet();
			if ($status_save ) {//ok
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
					
				
		public function Danhsach_chitiet()
		{
			# code...
			$ds_chitiet= $this->chitiet_model->danhsach_chitiet();
			return $ds_chitiet;
		}
		public function Thongtin_chitiet()
		{
			# code...
			$id_chitiet = $_GET['machitiet'];
			$chitiettintuc= $this->chitiet_model->laychitiettintuc_id($id_chitiet);
			return $chitiettintuc;
		}
		public function update_chitiet()
		{
			# code...
			$id_chitiet = $_POST['machitiet'];
			$ngaydanga = $_POST['ngaydang'];
			$tacgiaa =$_POST['tacgia'];
			$matintuca = $_POST['matintuc'];
			//thiet lap gia tri thuoc tinh cua model
			$this->chitiet_model->thietlap_chitiet($ngaydanga,$tacgiaa,$matintuca);
			$update_status = $this->chitiet_model->capnhap_chitiet($id_chitiet);
			return $update_status;
		}
		public function delete_chitiet($id)
		{
			# code...\
			// $id_vungmien = $_POST['vungmien_id'];
			$xoachitiet = $this->chitiet_model->xoa_chitiet($id);
			return $xoachitiet;
		}
	}
 ?>
