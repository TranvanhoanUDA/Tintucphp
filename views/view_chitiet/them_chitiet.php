
  <form method="post">
    <h4>Thông Tin Chi Tiết - Thêm mới Chi Tiết Tin Tức</h4>

    <!--input-->
    <div class="form-group">
    <div class="form-group">
      <label for="comment">Ngày Đăng : </label>
      <textarea class="form-control" rows="1" id="ngaydanga" name ="ngaydang" required></textarea>
    </div>
    <div class="form-group">
      <label for="comment">Tác giả : </label>
      <textarea class="form-control" rows="1" id="tacgiaa" name ="tacgia" required></textarea>
    </div>
     <div class="form-group">
      <label for="comment">Mã tin Tức:</label>
      <textarea class="form-control" rows="1" id="matintuca" name ="matintuc" required></textarea>
    </div>
    <br>

   <input type="submit" class="btn btn-primary" name="luu_chitiet" value="Thêm chi tiết tin tức" ></input>
 </form>
  </div>
  <?php include 'views/shares/footer.php'; ?>