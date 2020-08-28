<?php 
    /**
     * 
     */
    include './models/TrangchinhModel.php';

    class TrangchinhController
    {
        //thuoc tinh cua model
        
        private $trangchinh_model;

        function __construct()
        {
            # code...
            $this->trangchinh_model = new TrangchinhModel();
        }
        //them du lieu 
         public function Tintuc()
        {
            # code...
            $san_pham= $this->trangchinh_model->tintuc();
            return $san_pham;
        }
          public function Chuyenmuc()
        {
            # code...
            $chuyen_muc= $this->trangchinh_model->chuyenmuc();
            return $chuyen_muc;
        }
        public function Chitiet()
         {
            # code...
            $chi_tiet= $this->trangchinh_model->chitiet();
            return $chi_tiet;
        }
        public function thongtin_chitiet()
        {
            # code...
            $id_chitiet = $_GET['chitiet'];
            $chitiettintuc= $this->trangchinh_model->chitiettintuc_id($id_chitiet);
            return $chitiettintuc;
        }
         public function thongtin_sp()
        {
            # code...
            $id_tintuc = $_GET['chitiet'];
            $tintuca= $this->trangchinh_model->tintuc_id($id_tintuc);
            return $tintuca;
        }
         public function thongtinchuyenmuc_sp($id_chuyenmuc)
        {
            # code...
            $tintucb= $this->trangchinh_model->tintuctheochuyenmuc_id($id_chuyenmuc);
            return $tintucb;
        }
         public function chuyenmuc_sp()
        {
            # code...
            $id_chuyenmucb = $_GET['tintuctheochuyenmuc'];
            $chuyenmucb= $this->trangchinh_model->chuyenmuc_id( $id_chuyenmucb);
            return $chuyenmucb;
        }
       
     
    }
 ?>
