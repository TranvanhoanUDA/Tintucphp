<?php include 'views/shares/header.php';?>
<?php include 'views/shares/menu.php'; ?>
  <form method="post">
    <div class="form-group">
      <label for="usr">NHẬP DỮ LIỆU SỬA ĐỔI</label>
    </div>
    <input type="usr" name="machitiet" value="<?php  echo $chitiettintuc[0]; ?>">
    <div class="form-group">
      <label for="usr">Ngày Đăng :</label>
      <input type="text" class="form-control" id="ngaydanga" name="ngaydang"value="<?php  echo $chitiettintuc[1]; ?>">
    </div>
    <div class="form-group">
      <label for="usr">Tác giả :</label>
      <input type="text" class="form-control" id="tacgiaa" name="tacgia"value="<?php  echo $chitiettintuc[2]; ?>">
    </div>
    <div class="form-group">
      <label for="usr">Mã Tin Tức :</label>
      <input type="text" class="form-control" id="matintuca" name="matintuc"value="<?php  echo $chitiettintuc[3]; ?>">
    </div>

   <input type="submit" class="btn btn-primary" name="capnhap_chitiet" value="Cập nhật chi tiết"></input>
</form>
 <?php include 'views/shares/footer.php'; ?>