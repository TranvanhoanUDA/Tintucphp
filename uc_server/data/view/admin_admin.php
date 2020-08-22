<?php if(!defined('UC_ROOT')) exit('Access Denied');?>
<?php include $this->gettpl('header');?>

<?php if($a == 'ls') { ?>

	<script src="js/common.js" type="text/javascript"></script>
	<script src="js/calendar.js" type="text/javascript"></script>
	<script type="text/javascript">
		function switchbtn(btn) {
			$('addadmindiv').className = btn == 'addadmin' ? 'tabcontentcur' : '' ;
			$('editpwdiv').className = btn == 'addadmin' ? '' : 'tabcontentcur';

			$('addadmin').className = btn == 'addadmin' ? 'tabcurrent' : '';
			$('editpw').className = btn == 'addadmin' ? '' : 'tabcurrent';

			$('addadmindiv').style.display = btn == 'addadmin' ? '' : 'none';
			$('editpwdiv').style.display = btn == 'addadmin' ? 'none' : '';
		}
		function chkeditpw(theform) {
			if(theform.oldpw.value == '') {
				alert('Xin vui lòng nhập pass cảu sáng lập viên');
				theform.oldpw.focus();
				return false;
			}
			if(theform.newpw.value == '') {
				alert('Xin vui lòng nhập một mật khẩu mới');
				theform.newpw.focus();
				return false;
			}
			if(theform.newpw2.value == '') {
				alert('Nhập lại mật khẩu');
				theform.newpw2.focus();
				return false;
			}
			if(theform.newpw.value != theform.newpw2.value) {
				alert('Hai lần nhập mật khẩu không giống');
				theform.newpw2.focus();
				return false;
			}
			if(theform.newpw.value.length < 6 && !confirm('Mật khẩu của bạn là quá ngắn, có thể là không an toàn, bạn chắc chắn bạn thiết lập mật khẩu?')) {
				theform.newpw.focus();
				return false;
			}
			return true;
		}
	</script>

	<div class="container">
		<?php if($status) { ?>
			<div class="<?php if($status > 0) { ?>correctmsg<?php } else { ?>errormsg<?php } ?>">
				<p>
				<?php if($status == 1) { ?> Thêm <?php echo $addname;?>  làm quản lý
				<?php } elseif($status == -1) { ?> Thêm <?php echo $addname;?>  làm quản lý
				<?php } elseif($status == -2) { ?> Thêm <?php echo $addname;?> làm quản lý thất bại
				<?php } elseif($status == -3) { ?><?php echo $addname;?> không tồn tại
				<?php } elseif($status == -4) { ?> /data/cache/config.inc.php không có quyền ghi đè
				<?php } elseif($status == -5) { ?> Người khởi tạo diễn đàn có mật khẩu sai sót
				<?php } elseif($status == -6) { ?> Hai lần nhập mật khẩu không giống
				<?php } elseif($status == 2) { ?> Sửa mật khẩu thành công
				<?php } ?>
				</p>
			</div>
		<?php } ?>
		<div class="hastabmenu" style="height:175px;">
			<ul class="tabmenu">
				<li id="addadmin" class="tabcurrent"><a href="#" onclick="switchbtn('addadmin');">Thêm quản lý</a></li>
				<?php if($user['isfounder']) { ?><li id="editpw"><a href="#" onclick="switchbtn('editpw');">Sửa mật khẩu</a></li><?php } ?>
			</ul>
			<div id="addadmindiv" class="tabcontentcur">
				<form action="admin.php?m=admin&a=ls" method="post">
				<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
				<table class="dbtb">
					<tr>
						<td class="tbtitle">Username:</td>
						<td><input type="text" name="addname" class="txt" /></td>
					</tr>
					<tr>
						<td valign="top" class="tbtitle">Quyền hạn:</td>
						<td>
							<ul class="dblist">
								<li><input type="checkbox" name="allowadminsetting" value="1" class="checkbox" checked="checked" />Thiết lập</li>
								<li><input type="checkbox" name="allowadminapp" value="1" class="checkbox" />Ứng dụng</li>
								<li><input type="checkbox" name="allowadminuser" value="1" class="checkbox" />Tên thành viên</li>
								<li><input type="checkbox" name="allowadminbadword" value="1" class="checkbox" checked="checked" />Từ cấm</li>
								<li><input type="checkbox" name="allowadmintag" value="1" class="checkbox" checked="checked" />TAG</li>
								<li><input type="checkbox" name="allowadminpm" value="1" class="checkbox" checked="checked" />Tin nhắn</li>
								<li><input type="checkbox" name="allowadmincredits" value="1" class="checkbox" checked="checked" />Điểm</li>
								<li><input type="checkbox" name="allowadmindomain" value="1" class="checkbox" checked="checked" />Phân tích tên miền</li>
								<li><input type="checkbox" name="allowadmindb" value="1" class="checkbox" />Database</li>
								<li><input type="checkbox" name="allowadminnote" value="1" class="checkbox" checked="checked" />Tin báo</li>
								<li><input type="checkbox" name="allowadmincache" value="1" class="checkbox" checked="checked" />Cache</li>
								<li><input type="checkbox" name="allowadminlog" value="1" class="checkbox" checked="checked" />Nhật ký</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="addadmin" value="Submit" class="btn" />
						</td>
					</tr>
				</table>
				</form>
			</div>
			<?php if($user['isfounder']) { ?>
			<div id="editpwdiv" class="tabcontent" style="display:none;">
				<form action="admin.php?m=admin&a=ls" onsubmit="return chkeditpw(this)" method="post">
				<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
				<table class="dbtb" style="height:123px;">
					<tr>
						<td class="tbtitle">Mật khẩu cũ:</td>
						<td><input type="password" name="oldpw" class="txt" /></td>
					</tr>
					<tr>
						<td class="tbtitle">Mật khẩu mới:</td>
						<td><input type="password" name="newpw" class="txt" /></td>
					</tr>
					<tr>
						<td class="tbtitle">Nhập lại:</td>
						<td><input type="password" name="newpw2" class="txt" /></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="editpwsubmit" value="Submit" class="btn" />
						</td>
					</tr>
				</table>
				</form>
			</div>
			<?php } ?>
		</div>
		<h3>Danh sách quản lý</h3>
		<div class="mainbox">
			<?php if($userlist) { ?>
				<form action="admin.php?m=admin&a=ls" onsubmit="return confirm('Bạn có chắc chắn xóa?');" method="post">
				<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
				<table class="datalist fixwidth" onmouseover="addMouseEvent(this);">
					<tr>
						<th><input type="checkbox" name="chkall" id="chkall" onclick="checkall('delete[]')" value="1" class="checkbox" /><label for="chkall">Xóa</label></th>
						<th>Username</th>
						<th>Email</th>
						<th>Đăng ký vào</th>
						<th>IP</th>
						<th>Profile</th>
						<th>Quyền hạn</th>
					</tr>
					<?php foreach((array)$userlist as $user) {?>
						<tr>
							<td class="option"><input type="checkbox" name="delete[]" value="<?php echo $user['uid'];?>" value="1" class="checkbox" /></td>
							<td class="username"><?php echo $user['username'];?></td>
							<td><?php echo $user['email'];?></td>
							<td class="date"><?php echo $user['regdate'];?></td>
							<td class="ip"><?php echo $user['regip'];?></td>
							<td class="ip"><a href="admin.php?m=user&a=edit&uid=<?php echo $user['uid'];?>&fromadmin=yes">Profile</a></td>
							<td class="ip"><a href="admin.php?m=admin&a=edit&uid=<?php echo $user['uid'];?>">Quyền hạn</a></td>
						</tr>
					<?php } ?>
					<tr class="nobg">
						<td><input type="submit" value="Submit" class="btn" /></td>
						<td class="tdpage" colspan="4"><?php echo $multipage;?></td>
					</tr>
				</table>
				</form>
			<?php } else { ?>
				<div class="note">
					<p class="i">Tạm thời chưa có danh sách ghi chép nào!</p>
				</div>
			<?php } ?>
		</div>
	</div>
	<?php if($_POST['editpwsubmit']) { ?>
		<script type="text/javascript">
		switchbtn('editpw');
		</script>
	<?php } else { ?>
		<script type="text/javascript">
		switchbtn('addadmin');
		</script>
	<?php } ?>

<?php } else { ?>
	<div class="container">
		<h3 class="marginbot">Sửa quyền hạn quản lý<a href="admin.php?m=admin&a=ls" class="sgbtn">Trở lại danh sách quản lý</a></h3>
		<?php if($status == 1) { ?>
			<div class="correctmsg"><p>Chỉnh sửa quyền hạn cho quản lý thành công</p></div>
		<?php } elseif($status == -1) { ?>
			<div class="correctmsg"><p>Chỉnh sửa quyền hạn cho quản lý thất bại</p></div>
		<?php } else { ?>
			<div class="note">Xin hãy thật thận trọng đối với những quyền: ứng dụng, thành viên, database</div>
		<?php } ?>
		<div class="mainbox">
			<form action="admin.php?m=admin&a=edit&uid=<?php echo $uid;?>" method="post">
			<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
				<table class="opt">
					<tr>
						<th>Quản lý viên <?php echo $admin['username'];?>:</th>
					</tr>
					<tr>
						<td>
							<ul>
								<li><input type="checkbox" name="allowadminsetting" value="1" class="checkbox" <?php if($admin['allowadminsetting']) { ?> checked="checked" <?php } ?>/>Thiết lập</li>
								<li><input type="checkbox" name="allowadminapp" value="1" class="checkbox" <?php if($admin['allowadminapp']) { ?> checked="checked" <?php } ?>/>Ứng dụng</li>
								<li><input type="checkbox" name="allowadminuser" value="1" class="checkbox" <?php if($admin['allowadminuser']) { ?> checked="checked" <?php } ?>/>Tên thành viên</li>
								<li><input type="checkbox" name="allowadminbadword" value="1" class="checkbox" <?php if($admin['allowadminbadword']) { ?> checked="checked" <?php } ?>/>Từ cấm</li>
								<li><input type="checkbox" name="allowadmintag" value="1" class="checkbox" <?php if($admin['allowadmintag']) { ?> checked="checked" <?php } ?>/>TAG</li>
								<li><input type="checkbox" name="allowadminpm" value="1" class="checkbox" <?php if($admin['allowadminpm']) { ?> checked="checked" <?php } ?>/>Tin nhắn</li>
								<li><input type="checkbox" name="allowadmincredits" value="1" class="checkbox" <?php if($admin['allowadmincredits']) { ?> checked="checked" <?php } ?>/>Điểm</li>
								<li><input type="checkbox" name="allowadmindomain" value="1" class="checkbox" <?php if($admin['allowadmindomain']) { ?> checked="checked" <?php } ?>/>Phân tích tên miền</li>
								<li><input type="checkbox" name="allowadmindb" value="1" class="checkbox" <?php if($admin['allowadmindb']) { ?> checked="checked" <?php } ?>/>Database</li>
								<li><input type="checkbox" name="allowadminnote" value="1" class="checkbox" <?php if($admin['allowadminnote']) { ?> checked="checked" <?php } ?>/>Tin báo</li>
								<li><input type="checkbox" name="allowadmincache" value="1" class="checkbox" <?php if($admin['allowadmincache']) { ?> checked="checked" <?php } ?>/>Cache</li>
								<li><input type="checkbox" name="allowadminlog" value="1" class="checkbox" <?php if($admin['allowadminlog']) { ?> checked="checked" <?php } ?>/>Nhật ký</li>
							</ul>
						</td>
					</tr>
				</table>
				<div class="opt"><input type="submit" name="submit" value=" Submit " class="btn" tabindex="3" /></div>
			</form>
		</div>
	</div>

<?php } ?>

<?php include $this->gettpl('footer');?>