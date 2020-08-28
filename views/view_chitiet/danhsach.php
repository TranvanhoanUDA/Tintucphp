<?php include 'views/shares/header.php';?>
<?php include 'views/shares/menu.php'; ?>
<div class="container-fluid">
<table class="table table-striped table-bordered table-hover">
 	<thead>
     <tr align="center">
 		<th>Mã Chi Tiết</th>
 		<th>Ngày đăng</th>
 		<th>Tác giả</th>
 		<th>Mã Tin tức</th>
 		<th>Edit</th>
 		<th>Delete</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php 
 			//do du lieu ra view
 			foreach ($ds_chitiet as $key => $chitiettintuc) {
 		?>
 			<tr align="center">
 				<td><?php echo $chitiettintuc['machitiet']; ?></td>
 			    <td><?php echo $chitiettintuc['ngaydang']; ?></td>
 			    <td><?php echo $chitiettintuc['tacgia']; ?></td>
 			    <td><?php echo $chitiettintuc['matintuc']; ?></td>
 				<td align="center">
 					<a href="?machitiet=<?php echo $chitiettintuc['machitiet']; ?>">
 						<span class="fa fa-edit"></span>
 					</a>
 				</td>
 			
 				<td align="center" >
 					<form method="post">
 						
 						<input type="hidden" name="machitiet" value="<?php echo $chitiettintuc['machitiet']; ?>">
 						<input type="submit" name="xoa_chitiet" value="xoa">
 						<!-- <a href="#">
 						<span class="fa fa-trash-o"></span>
 						</a> -->
 					</form>
 				</td>
			</tr>
		<?php
			}
 		?>

 	</tbody>
 </table>
 