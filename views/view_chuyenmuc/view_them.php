   <!--input-->
  <form method="post">
    <div class="form-group">
      <label for="usr">Tên Chuyên Mục:</label>
      <input type="text" class="form-control" id="ten_chuyenmuc" name="tenchuyenmuc"required>
    </div>
    <div class="form-group">
      <label for="usr">User ID</label>
      <textarea type="text" class="form-control" id="user" name="user_id"required></textarea>
    </div>
   <input type="submit" class="btn btn-primary" name="luu_chuyenmuc" value="Thêm chuyên mục"></input>
  </form>
   </div>
    <?php include 'views/shares/footer.php'; ?>