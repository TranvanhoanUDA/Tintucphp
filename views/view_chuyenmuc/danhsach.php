<?php include 'views/shares/header.php';?>
<?php include 'views/shares/menu.php'; ?>
<div class="container-fluid">
 <table class="table table-striped table-bordered table-hover">
 	<thead>
 		<tr align="center">
 		<th style="width: 20%">Mã Chuyên Mục</th>
 		<th style="width: 40%">Tên Chuyên Mục</th>
 		<th style="width: 20%">Use ID</th>
 		<th style="width: 10%">Edit</th>
 		<th style="width: 10%">Delete</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php 
 			//do du lieu ra view
 			foreach ($ds_chuyenmuc as $key => $chuyenmuc) {
 		?>
 			<tr align="center">
 				<td><?php echo $chuyenmuc['machuyenmuc']; ?></td>
 				<td><?php echo $chuyenmuc['tenchuyenmuc']; ?></td>
 				<td><?php echo $chuyenmuc['user_id']; ?></td>
 				<td align="center">
 					<a href="?machuyenmuc=<?php echo $chuyenmuc['machuyenmuc']; ?>">
 						<span class="fa fa-edit"></span>
 					</a>
 				</td>
 			
 				<td align="center" >
 					<form method="post">
 						
 						<input type="hidden" name="machuyenmuc" value="<?php echo $chuyenmuc['machuyenmuc']; ?>">
 						<input type="submit" name="xoa_chuyenmuc" value="xoa">
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
