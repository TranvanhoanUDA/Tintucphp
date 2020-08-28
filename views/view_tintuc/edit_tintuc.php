<?php include 'views/shares/header.php';?>
<?php include 'views/shares/menu.php'; ?>
  <form method="post">
    <div class="form-group">
      <!-- day id theo -->
      <input type="usr" name="matintuc" value="<?php  echo $tintuc[0]; ?>">
      <div>
        <label for="usr">Title</label>
        <input type="text" class="form-control" row="1" id="usr" name="title" value="<?php  echo $tintuc[1]; ?>">
      </div>
     
      
      <div class="form-group">
      <label for="comment">Nội dung:</label>
      <textarea class="form-control" rows="5"name ="mota"><?php  echo $tintuc[2]; ?></textarea>
      </div>

      <div>
        <label for="usr">Tag</label>
        <input type="text" class="form-control" row="1" id="usr" name="tag" value="<?php  echo $tintuc[3]; ?>">
      </div>
       <div class="form-group">
         <label for="comment">Ảnh Tin</label>
         <input type="file" class="form-control-file border" name="image"value="<?php   echo '<image src="./img/' . $tintuc[4]; ?>">
      </div>

      <div class="form-group" >
       <label for="comment">Ma Chuyen Muc</label>
        <input type="text" class="form-control" row="1" id="usr" name="machuyenmuc" value="<?php  echo $tintuc[5]; ?>">
      </div>
     
      
   <input type="submit" class="btn btn-primary" name="capnhap_tintuc" value="Cập nhật tin tức"></input>
  </form>
   <?php include 'views/shares/footer.php'; ?>
 