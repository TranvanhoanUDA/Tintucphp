<?php 
	if (isset($_POST['luu_chuyenmuc'])) {
		# code...
		include 'ChuyenmucControllers.php';
		$chuyenmuc_controller = new ChuyenmucController();
		$chuyenmuc_controller->luu_chuyenmuc();
	}
	if (isset($_GET['danhsach_chuyenmuc'])) {
		# code...
		//1. goi controler vung mien der lay du lieu
		require_once './controllers/ChuyenmucControllers.php';
		//2. khoi tao Controller
		$chuyenmuc_controller= new ChuyenmucController();
		//3. goi ham kay du lieu trong controller
		$ds_chuyenmuc = $chuyenmuc_controller->Danhsach_chuyenmuc();
		//4. do du lieu ra view
		require_once './views/view_chuyenmuc/danhsach.php';
		include 'views/view_chuyenmuc/view_them.php';

		
	}
	//kiem tra URL Request lay vung mien theo ID
	if (isset($_GET['machuyenmuc'])) {
		# code...
		$id_chuyenmuc = $_GET['machuyenmuc'];
		//1. goi controler vung mien der lay du lieu
		require_once './controllers/ChuyenmucControllers.php';
		//2. khoi tao Controller
		$chuyenmuc_controller= new ChuyenmucController();
		//3. goi ham kay du lieu trong controller
		$chuyenmuc = $chuyenmuc_controller->Thongtin_theoID($id_chuyenmuc);
		// var_dump($vungmien);
		require_once './views/view_chuyenmuc/edit_chuyenmuc.php';
	}
	if (isset($_GET['them_chuyenmuc'])) {
			# code...
			include 'views/view_chuyenmuc/view_them.php';
		}
		
	if (isset($_POST['capnhap_chuyenmuc'])) {
		# code...
		//1. goi controler vung mien de lay du lieu
		require_once './controllers/ChuyenmucControllers.php';
		//2. khoi tao Controller
		$chuyenmuc_controller= new ChuyenmucController();
		//3. goi ham kay du lieu trong controller
		$kiemtra_update = $chuyenmuc_controller->update_chuyenmuc();
		if ($kiemtra_update) {
			# code...
			echo "<br>Cap nhat thanh cong....";
		} else {
			# code...
			echo "<br>Loi";
		}
	}//ket thuc cap nhat


	//kiem tra POST - xoa
	if (isset($_POST['xoa_chuyenmuc'])) {
		# code...
		$id = $_POST['machuyenmuc']; 
		//echo "........".$id;
		//1. goi controler vung mien de lay du lieu
		$chuyenmuc_controller = new ChuyenmucController();
		//2. goi ham xoa vung miên theo id
		$trangthai = $chuyenmuc_controller->delete_chuyenmuc($id);
		if ($trangthai) {
			# code...
			echo "<p class='alert alert-success'>Xóa thành công....</p>";
		} else {
			echo "<p class='alert alert-danger'>Lỗi</p>";
		}
		
	}//ket thuc xoa


	//Sản Phẩm
	if (isset($_POST['luu_tintuc'])) {
		# code...
		include 'Tintuccontrollers.php';
		$Tintuc_controller = new TintucController();
		$Tintuc_controller->luu_tintuc();
	}
	if (isset($_GET['danhsach_tintuc'])) {
		# code...
		//1. goi controler vung mien der lay du lieu
		require_once './controllers/Tintuccontrollers.php';
		//2. khoi tao Controller
		$tintuc_controller= new TintucController();
		//3. goi ham kay du lieu trong controller
		$ds_tintuc = $tintuc_controller->Danhsach_tintuc();
		//4. do du lieu ra view
		require_once './views/view_tintuc/danhsach.php';
		include 'views/view_tintuc/them_tintuc.php';

		
	}
	//kiem tra URL Request lay vung mien theo ID
	
	//kiem tra URL Request lay vung mien theo ID
	if (isset($_GET['matintuc'])) {

		# code...
		$id_tintuc = $_GET['matintuc'];
		//1. goi controler vung mien der lay du lieu
		require_once './controllers/Tintuccontrollers.php';
		//2. khoi tao Controller
		$tintuc_controller= new TintucController();
		//3. goi ham kay du lieu trong controller
		$tintuc = $tintuc_controller->Thongtin_matintuc($id_tintuc);
		// var_dump($vungmien);
		require_once './views/view_tintuc/edit_tintuc.php';

	}
	if (isset($_GET['them_tintuc'])) {
			# code...
			include 'views/view_tintuc/them_tintuc.php';
			
        }
		
	if (isset($_POST['capnhap_tintuc'])) {
		# code...
		//1. goi controler vung mien de lay du lieu
		require_once './controllers/Tintuccontrollers.php';
		//2. khoi tao Controller
		$tintuc_controller= new TintucController();
		//3. goi ham kay du lieu trong controller
		$kiemtra_update = $tintuc_controller->update_tintuc();
		if ($kiemtra_update) {
			# code...
			echo "<br>Cap nhat thanh cong....";
		} else {
			# code...
			echo "<br>Loi";
		}
	}//ket thuc cap nhat


	//kiem tra POST - xoa
	if (isset($_POST['xoa_tintuc'])) {
		# code...
		$id = $_POST['matintuc']; 
		//echo "........".$id;
		//1. goi controler vung mien de lay du lieu
		$tintuc_controller = new TintucController();
		//2. goi ham xoa vung miên theo id
		$trangthai = $tintuc_controller->delete_tintuc($id);
		if ($trangthai) {
			# code...
			echo "<p class='alert alert-success'>Xóa thành công....</p>";
		} else {
			echo "<p class='alert alert-danger'>Lỗi</p>";
		}
		
	}//ket thuc xoa


	  //Chi Tiết Sản Phẩm
	if (isset($_POST['luu_chitiet'])) {
		# code...
		include 'ChitietControllers.php';
		$Chitiet_controller = new ChitietController();
		$Chitiet_controller->luu_chitiet();
	}
	if (isset($_GET['danhsach_chitiet'])) {
		# code...
		//1. goi controler vung mien der lay du lieu
		require_once './controllers/ChitietControllers.php';
		//2. khoi tao Controller
		$chitiet_controller= new ChitietController();
		//3. goi ham kay du lieu trong controller
		$ds_chitiet = $chitiet_controller->Danhsach_chitiet();
		//4. do du lieu ra view
		require_once './views/view_chitiet/danhsach.php';
		include 'views/view_chitiet/them_chitiet.php';

		
	}
	//kiem tra URL Request lay vung mien theo ID
	if (isset($_GET['machitiet'])) {
		# code...
		$id_chitiet = $_GET['machitiet'];
		//1. goi controler vung mien der lay du lieu
		require_once './controllers/ChitietControllers.php';
		//2. khoi tao Controller
		$chitiet_controller= new ChitietController();
		//3. goi ham kay du lieu trong controller
		$chitiettintuc = $chitiet_controller->Thongtin_chitiet($id_chitiet);
		// var_dump($vungmien);
		require_once './views/view_chitiet/edit_chitiet.php';
	}
	if (isset($_GET['them_chitiet'])) {
			# code...
			include 'views/view_chitiet/them_chitiet.php';
			if($_FILES['file']['type'] == "image/jpeg"
            || $_FILES['file']['type'] == "image/png"
            || $_FILES['file']['type'] == "image/gif"){
                      // là file ảnh
                     // Thực hiện upload
           }else{
                    // không phải file ảnh
                   echo "Kiểu file không hợp lệ";
                   }
	   	}
		
	if (isset($_POST['capnhap_chitiet'])) {
		# code...
		//1. goi controler vung mien de lay du lieu
		require_once './controllers/ChitietControllers.php';
		//2. khoi tao Controller
		$chitiet_controller= new ChitietController();
		//3. goi ham kay du lieu trong controller
		$kiemtra_update = $chitiet_controller->update_chitiet();
		if ($kiemtra_update) {
			# code...
			echo "<br>Cap nhat thanh cong....";
		} else {
			# code...
			echo "<br>Loi";
		}
	}//ket thuc cap nhat


	//kiem tra POST - xoa
	if (isset($_POST['xoa_chitiet'])) {
		# code...
		$id = $_POST['machitiet']; 
		//echo "........".$id;
		//1. goi controler vung mien de lay du lieu
		$chitiet_controller = new ChitietController();
		//2. goi ham xoa vung miên theo id
		$trangthai = $chitiet_controller->delete_chitiet($id);
		if ($trangthai) {
			# code...
			echo "<p class='alert alert-success'>Xóa thành công....</p>";
		} else {
			echo "<p class='alert alert-danger'>Lỗi</p>";
		}
		
	}//ket thuc xoa
	if (isset($_GET['trangchu'])) {
		require_once './controllers/Trangchinh.php';
		//3. goi ham kay du lieu trong controller
		$sp_controller= new TrangchinhController();
		$san_pham = $sp_controller->Tintuc();
		//3. goi ham kay du lieu trong controller
		$cm_controller= new TrangchinhController();
		$chuyen_muc = $cm_controller->Chuyenmuc();
		$ct_controller= new TrangchinhController();
		$chi_tiet = $ct_controller->Chitiet();	
	    require_once './views/view_trangchu/trangchu.php';
	}
		
	if (isset($_GET['chitiet'])) {
		# code...
		$id_chitiet = $_GET['chitiet'];
		//1. goi controler vung mien der lay du lieu
		require_once './controllers/Trangchinh.php';
		//2. khoi tao Controller
		$chitiet_controller= new TrangchinhController();
		//3. goi ham kay du lieu trong controller
		$chitiettintuc = $chitiet_controller->thongtin_chitiet($id_chitiet);
		$id_tintuc = $_GET['chitiet'];
		//1. goi controler vung mien der lay du lieu
		require_once './controllers/Trangchinh.php';
		//2. khoi tao Controller
		$tintuca_controller= new TrangchinhController();
		//3. goi ham kay du lieu trong controller
		$tintuca = $tintuca_controller->thongtin_sp($id_tintuc);
		require_once './controllers/Trangchinh.php';		
		$cm_controller= new TrangchinhController();
		$chuyen_muc = $cm_controller->Chuyenmuc();
		require_once './views/view_trangchu/chitiet.php';	
	}
	if (isset($_GET['tintuctheochuyenmuc'])) {
		

		$id_tintucb = $_GET['tintuctheochuyenmuc'];
		//1. goi controler vung mien der lay du lieu
		require_once './controllers/Trangchinh.php';
		//2. khoi tao Controller
		$tintucb_controller= new TrangchinhController();
		//3. goi ham kay du lieu trong controller san phamthoe id chuyen muc
		$tintucb = $tintucb_controller->thongtinchuyenmuc_sp($id_tintucb);
		



		$id_chuyenmucb = $_GET['tintuctheochuyenmuc'];
		//1. goi controler vung mien der lay du lieu
		require_once './controllers/Trangchinh.php';
		//2. khoi tao Controller
		$chuyenmucb_controller= new TrangchinhController();
		//3. goi ham kay du lieu trong controller
		$chuyenmucb = $chuyenmucb_controller->chuyenmuc_sp($id_chuyenmucb);
		require_once './controllers/Trangchinh.php';
		$cm_controller= new TrangchinhController();
		$chuyen_muc = $cm_controller->Chuyenmuc();
		require_once'./views/view_trangchu/tintuc.php';
		require_once'./views/view_trangchu/menu.php';	
	}
	if (isset($_GET['Login'])) {
	 	$controller = isset($_GET['controller'])? $_GET['controller'].'Controller' : 'UserController' ;
		$action = isset($_GET['action'])?$_GET['action']: 'getUser' ;

		require_once('controllers/dangnhap.php');
		$usercontroller = new $controller();
		$usercontroller-> $action();
		 require_once'./views/dangnhap/dangnhap.php';

	}
	if (isset($_GET['Dangky'])) {
	    include 'dangky.php';
		$dangky_controller = new DangkyController();
		$dangky_controller->dangky();
	 	
		 require_once'./views/dangnhap/dangky.php';

	}

	
		
?>