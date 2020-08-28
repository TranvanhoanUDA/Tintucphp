
   <form method="post">
    <h4>Thông Tin tin tức - Thêm mới tin tức</h4>

    <!--input-->
    <div class="form-group">
      <label for="usr">Title : </label>
      <input type="text" class="form-control" id="title" name="title"required>
    </div>

    <div class="form-group">
      <label for="comment">Nội Dung : </label>
      <textarea class="form-control" rows="5" id="mota"name ="mota"required></textarea>
    </div>
    <div class="form-group">
      <label for="comment">Tag : </label>
      <textarea class="form-control" rows="1" id="tag"name ="tag"required></textarea>
    </div>

    <div class="form-group">
      <label for="comment">Ảnh tin tức</label>
      <input type="file" class="form-control-file border" name="image"required>
    </div>
     <div class="form-group">
      <label for="comment">Mã chuyên mục:</label>
      <textarea class="form-control" rows="1" id="machuyenmuc"name ="machuyenmuc"required></textarea>
    </div>
    <br>

   <input type="submit" class="btn btn-primary" name="luu_tintuc" value="Thêm tin tức"></input>
</form>
 </div>
  <?php include 'views/shares/footer.php'; ?>
 