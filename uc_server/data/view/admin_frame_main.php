<?php if(!defined('UC_ROOT')) exit('Access Denied');?>
<?php include $this->gettpl('header');?>
<?php if($iframe) { ?>
<script type="text/javascript">
	var uc_menu_data = new Array();
	o = document.getElementById('header_menu_menu');
	elems = o.getElementsByTagName('A');
	for(i = 0; i<elems.length; i++) {
		uc_menu_data.push(elems[i].innerHTML);
		uc_menu_data.push(elems[i].href);
	}
	try {
		parent.uc_left_menu(uc_menu_data);
		parent.uc_modify_sid('<?php echo $sid;?>');
	} catch(e) {}
</script>
<?php } ?>
<div class="container">
	<h3>Thống kê</h3>
	<ul class="memlist fixwidth">
		<li><em><?php if($user['allowadminapp'] || $user['isfounder']) { ?><a href="admin.php?m=app&a=ls">Tổng ứng dụng</a><?php } else { ?>Tổng ứng dụng<?php } ?>:</em><?php echo $apps;?></li>
		<li><em><?php if($user['allowadminuser'] || $user['isfounder']) { ?><a href="admin.php?m=user&a=ls">Tổng thành viên</a><?php } else { ?>Tổng thành viên<?php } ?>:</em><?php echo $members;?></li>
		<li><em><?php if($user['allowadminpm'] || $user['isfounder']) { ?><a href="admin.php?m=pm&a=ls">Số tin nhắn</a><?php } else { ?>Số tin nhắn<?php } ?>:</em><?php echo $pms;?></li>
		<li><em>Số bằng hưu:</em><?php echo $friends;?></li>
	</ul>
	
	<h3>Thông báo trạng thái</h3>
	<ul class="memlist fixwidth">
		<li><em><?php if($user['allowadminnote'] || $user['isfounder']) { ?><a href="admin.php?m=note&a=ls">Chưa gửi thông báo</a><?php } else { ?>Chưa gửi thông báo<?php } ?>:</em><?php echo $notes;?></li>
		<?php if($errornotes) { ?>
			<li><em><?php if($user['allowadminnote'] || $user['isfounder']) { ?><a href="admin.php?m=note&a=ls">Áp dụng việc thông báo</a><?php } else { ?>Áp dụng việc thông báo<?php } ?>:</em>		
			<?php foreach((array)$errornotes as $appid => $error) {?>
				<?php echo $applist[$appid]['name'];?>&nbsp;
			<?php }?>
		<?php } ?>
	</ul>
	
	<h3>Hệ điều hành</h3>
	<ul class="memlist fixwidth">
		<li><em>Phiên bảnUCenter:</em>UCenter <?php echo UC_SERVER_VERSION;?> Release <?php echo UC_SERVER_RELEASE;?> <a href="http://www.discuz.net/forumdisplay.php?fid=151" target="_blank">Xem phiên bản mới nhất</a> 
		<li><em>Phiên bản PHP:</em><?php echo $serverinfo;?></li>
		<li><em>Phần mềm máy chủ:</em><?php echo $_SERVER['SERVER_SOFTWARE'];?></li>
		<li><em>MySQL:</em><?php echo $dbversion;?></li>
		<li><em>Có thể đưa dữ liệu:</em><?php echo $fileupload;?></li>
		<li><em>Dữ liệu của diễn đàn:</em><?php echo $dbsize;?></li>		
		<li><em>Host name (IP):</em><?php echo $_SERVER['SERVER_NAME'];?> (<?php echo $_SERVER['SERVER_ADDR'];?>:<?php echo $_SERVER['SERVER_PORT'];?>)</li>
		<li><em>magic_quote_gpc:</em><?php echo $magic_quote_gpc;?></li>
		<li><em>allow_url_fopen:</em><?php echo $allow_url_fopen;?></li>		
	</ul>
	<h3>Thông tin về mã nguồn</h3>
	<ul class="memlist fixwidth">
		<li>
			<em>Bản quyền thuộc về:</em>
			<em class="memcont"><a href="http://www.comsenz.com" target="_blank">&#x5317;&#x4EAC;&#x5EB7;&#x76DB;&#x65B0;&#x521B;&#x79D1;&#x6280;&#x6709;&#x9650;&#x8D23;&#x4EFB;&#x516C;&#x53F8;</a></em>
		</li>
		<li>
			<em>Tổng quản lý:</em>
			<em class="memcont"><a href="http://www.discuz.net/space.php?uid=1" target="_blank">&#x6234;&#x5FD7;&#x5EB7; (Kevin 'Crossday' Day)</a></em>
		</li>
		<li>
			<em>Nhóm phát triển:</em>
			<em class="memcont">
				<a href="http://www.discuz.net/space.php?uid=859" target="_blank">Hypo 'cnteacher' Wang</a>,
				<a href="http://www.discuz.net/space.php?uid=80629" target="_blank">Ning 'Monkey' Hou</a>,				
				<a href="http://www.discuz.net/space.php?uid=875919" target="_blank">Jie 'tom115701' Zhang</a>
			</em>
		</li>
		<li>
			<em>Nhóm bảo mật:</em>
			<em class="memcont">
				<a href="http://www.discuz.net/space.php?uid=859" target="_blank">Hypo 'cnteacher' Wang</a>,
				<a href="http://www.discuz.net/space.php?uid=492114" target="_blank">Liang 'Metthew' Xu</a>,
				<a href="http://www.discuz.net/space.php?uid=285706" target="_blank">Wei (Sniffer) Yu</a>
			</em>
		</li>
		<li>
			<em>Giao diện:</em>
			<em class="memcont">
				<a href="http://www.discuz.net/space.php?uid=294092" target="_blank">Fangming 'Lushnis' Li</a>,
				<a href="http://www.discuz.net/space.php?uid=717854" target="_blank">Ruitao 'Pony.M' Ma</a>
			</em>
		</li>
		<li>
			<em>Nhờ có đóng góp:</em>
			<em class="memcont">
				<a href="http://www.discuz.net/space.php?uid=122246" target="_blank">Heyond</a>
			</em>
		</li>
		<li>
			<em>Công ty phát hành:</em>
			<em class="memcont"><a href="http://www.comsenz.com" target="_blank">http://www.Comsenz.com</a></em>
		</li>
		<li>
			<em>Trang web:</em>
			<em class="memcont"><a href="http://www.discuz.com" target="_blank">http://www.Discuz.com</a></em>
		</li>
		<li>
			<em>Diễn đàn:</em>
			<em class="memcont"><a href="http://www.discuz.net" target="_blank">http://www.Discuz.net</a></em>
		</li>
	</ul>
</div>

<?php echo $ucinfo;?>

<?php include $this->gettpl('footer');?>