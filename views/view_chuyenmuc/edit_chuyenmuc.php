<?php include 'views/shares/header.php';?>
<?php include 'views/shares/menu.php'; ?>
  <form method="post">
    <div class="form-group">
      <!-- day id theo -->
      <input type="usr" name="machuyenmuc" value="<?php  echo $chuyenmuc[0]; ?>">
      <div>
        <label for="usr">Ten chuyen muc</label>
        <input type="text" class="form-control" row="3" id="usr" name="tenchuyenmuc" value="<?php  echo $chuyenmuc[1]; ?>">
      </div>
      
  </div>

  <div class="form-group">
      <!-- day id theo -->
      <label for="usr">User ID</label>
      <input type="text" class="form-control" row="3" id="usr" name="user_id" value="<?php  echo $chuyenmuc[2]; ?>">
  </div>

   <input type="submit" class="btn btn-primary" name="capnhap_chuyenmuc" value="Cập nhật chuyên mục"></input>
  </form>
 <?php include 'views/shares/footer.php'; ?>