<?php include './views/shares/header.php';?>
<?php include './views/shares/menu.php'; ?>
<div class="container-fluid">
<table class="table table-striped table-bordered table-hover">
 	<thead>
 		<tr align="center">
 		<th style="width: 7%">Mã TT</th>
 		<th style="width: 13%">Title</th>
 		<th style="width: 30%">Content </th>
 		<th style="width: 12%">Tag</th>
 		<th style="width: 16%">Hình Ảnh</th>
 		<th style="width:12%">Mã Chuyên Mục</th>
 		<th style="width: 5%">Edit</th>
 		<th style="width: 5%">Delete</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php 
 			//do du lieu ra view
 			foreach ($ds_tintuc as $key => $tintuc) {
 		?>
            <tr>
 				<td align="center"><?php echo $tintuc['matintuc']; ?></td>
 				<td align="center"><?php echo $tintuc['title']; ?></td>
 				<td align="alignLeft"><?php echo $tintuc['mota']; ?></td>
 				<td align="center"><?php echo $tintuc['tag']; ?></td>
 				<td align="center"><?php echo '<image src="./img/' . $tintuc['image'] . '?time=' . time() . '" style="max-width:100px;" />'; ?></td>

 				<td align="center"><?php echo $tintuc['machuyenmuc']; ?></td>

 				<td align="center">
 					<a href="?matintuc=<?php echo $tintuc['matintuc']; ?>">
 						<span class="fa fa-edit"></span>
 					</a>
 				</td>
 			
 				<td align="center" >
 					<form method="post">
 						
 						<input type="hidden" name="matintuc" value="<?php echo $tintuc['matintuc']; ?>">
 						<input type="submit" name="xoa_tintuc" value="xoa">
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
