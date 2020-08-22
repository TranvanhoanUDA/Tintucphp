<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('portalcp_block');
0
|| checktplrefresh('./template/default/portal/portalcp_block.htm', './template/default/portal/portalcp_block_setting.htm', 1366387824, '1', './data/template/1_1_portal_portalcp_block.tpl.php', './template/default', 'portal/portalcp_block')
|| checktplrefresh('./template/default/portal/portalcp_block.htm', './template/default/portal/portalcp_block_thumbsetting.htm', 1366387824, '1', './data/template/1_1_portal_portalcp_block.tpl.php', './template/default', 'portal/portalcp_block')
|| checktplrefresh('./template/default/portal/portalcp_block.htm', './template/default/portal/portalcp_block_setting.htm', 1366387824, '1', './data/template/1_1_portal_portalcp_block.tpl.php', './template/default', 'portal/portalcp_block')
|| checktplrefresh('./template/default/portal/portalcp_block.htm', './template/default/portal/portalcp_block_thumbsetting.htm', 1366387824, '1', './data/template/1_1_portal_portalcp_block.tpl.php', './template/default', 'portal/portalcp_block')
|| checktplrefresh('./template/default/portal/portalcp_block.htm', './template/default/portal/portalcp_nav.htm', 1366387824, '1', './data/template/1_1_portal_portalcp_block.tpl.php', './template/default', 'portal/portalcp_block')
;?><?php include template('common/header'); if(!$_G['inajax'] && in_array($op, array('block', 'data', 'itemdata'))) { ?>
<div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="Trang chủ"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="<?php echo $_G['setting']['navs']['1']['filename'];?>"><?php echo $_G['setting']['navs']['1']['navname'];?></a> <em>&rsaquo;</em>
<a href="portal.php?mod=portalcp"><?php if($_G['setting']['portalstatus'] ) { ?>PortalCP<?php } else { ?>Module<?php } ?></a> <em>&rsaquo;</em>
<a href="portal.php?mod=portalcp&amp;ac=portalblock">Module Quản lý</a>
<?php if($bid) { ?> <em>&rsaquo;</em><a href="portal.php?mod=portalcp&amp;ac=block&amp;op=block&amp;bid=<?php echo $bid;?>"><?php if($block['name']) { ?><?php echo $block['name'];?><?php } else { ?># <?php echo $block['bid'];?><?php } ?></a><?php } ?>
</div>
</div>

<div id="ct" class="ct2_a wp cl">
<div class="mn">
<div class="bm bw0">
<div id="block_selection">

<ul class="tb cl">
<?php if($allowmanage) { ?>
<li id="li_setting"<?php if($op=="block") { ?> class="a"<?php } ?>><a href="portal.php?mod=portalcp&amp;ac=block&amp;bid=<?php echo $bid;?>&amp;op=block<?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>">Module tài sản</a></li>
<?php } if($bid && !$is_htmlblock) { if($allowmanage || $allowdata) { ?>
<li id="li_data"<?php if($op=="data") { ?> class="a"<?php } ?>><a href="portal.php?mod=portalcp&amp;ac=block&amp;bid=<?php echo $bid;?>&amp;op=data<?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>">Module dữ liệu</a></li>
<?php } } if($is_recommendable) { ?>
<li id="li_itemdata"<?php if($op=="itemdata") { ?> class="a"<?php } ?>><a href="portal.php?mod=portalcp&amp;ac=block&amp;bid=<?php echo $bid;?>&amp;op=itemdata<?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>">Thư viện</a></li>
<?php } if($op == 'data' && ($allowmanage || $allowdata)) { ?>
<button class="pn pnc y" title="Thêm dữ liệu" onclick="showWindow('<?php echo $_GET['handlekey'];?>', 'portal.php?mod=portalcp&ac=block&bid=<?php echo $bid;?>&op=additem<?php if($_G['inajax']) { ?>&itemfrom=ajax<?php } if($_GET['from']) { ?>&from=<?php echo $_GET['from'];?><?php } ?>')"><em>Thêm</em></button>
<?php } ?>
</ul>
<?php } if($_G['inajax'] && in_array($op, array('block', 'data', 'style', 'moreurl'))) { ?>
<script type="text/javascript" reload="1">
function succeedhandle_<?php echo $_GET['handlekey'];?> (url, message, values) {
<?php if($_GET['from']=='cp') { ?>
location.reload();
<?php } else { ?>
var bid = values['bid'];
var eleid = typeof values['eleid'] == 'undefined' ? 0 : values['eleid'];
var x = new Ajax();
var openTitle = 0;
drag.setClose();
x.get('portal.php?mod=portalcp&ac=block&op=getblock&forceupdate=1&bid='+bid+'&tpl=<?php echo $_GET['tpl'];?>&inajax=1<?php if($_GET['from']) { ?>&from=<?php echo $_GET['from'];?><?php } ?>', function(s) {
var obj = document.createElement('div');
bid = 'portal_block_'+bid;
obj.innerHTML = s;
if ($(bid) != null) {
drag.stopSlide(bid);
if($(bid+'_content')) $(bid+'_content').parentNode.removeChild($(bid+'_content'));
$(bid).innerHTML = obj.childNodes[0].innerHTML;
if(s.indexOf('runslideshow();') > 0) {
runslideshow();
}
} else {
$(eleid).parentNode.replaceChild(obj.childNodes[0],$(eleid));
openTitle = 1;
}
drag.initPosition();
evalscript(s);
if (openTitle == 1)	drag.openTitleEdit(bid);
});
<?php } ?>
hideWindow('<?php echo $_GET['handlekey'];?>');
}
</script><?php
$blocknav = <<<EOF


EOF;
 if($allowmanage) { 
$blocknav .= <<<EOF

<li id="li_setting"
EOF;
 if($op=="block") { 
$blocknav .= <<<EOF
 class="a"
EOF;
 } 
$blocknav .= <<<EOF
><a href="portal.php?mod=portalcp&amp;ac=block&amp;bid={$bid}&amp;op=block
EOF;
 if($_GET['from']) { 
$blocknav .= <<<EOF
&amp;from={$_GET['from']}
EOF;
 } 
$blocknav .= <<<EOF
" onclick="showWindow('{$_GET['handlekey']}', this.getAttribute('href'));">Module tài sản</a></li>

EOF;
 } if($bid && !$is_htmlblock) { if($allowmanage || $allowdata) { 
$blocknav .= <<<EOF

<li id="li_data"
EOF;
 if($op=="data") { 
$blocknav .= <<<EOF
 class="a"
EOF;
 } 
$blocknav .= <<<EOF
><a href="portal.php?mod=portalcp&amp;ac=block&amp;bid={$bid}&amp;op=data
EOF;
 if($_GET['from']) { 
$blocknav .= <<<EOF
&amp;from={$_GET['from']}
EOF;
 } 
$blocknav .= <<<EOF
" onclick="showWindow('{$_GET['handlekey']}', this.getAttribute('href'));">Module dữ liệu</a></li>

EOF;
 } if($allowmanage) { 
$blocknav .= <<<EOF

<li id="li_style"
EOF;
 if($op=="style") { 
$blocknav .= <<<EOF
 class="a"
EOF;
 } 
$blocknav .= <<<EOF
><a href="portal.php?mod=portalcp&amp;ac=block&amp;bid={$bid}&amp;op=style
EOF;
 if($_GET['from']) { 
$blocknav .= <<<EOF
&amp;from={$_GET['from']}
EOF;
 } 
$blocknav .= <<<EOF
" onclick="showWindow('{$_GET['handlekey']}', this.getAttribute('href'));">Module mẫu</a></li>

EOF;
 if($block['moreurl']) { 
$blocknav .= <<<EOF

<li id="li_moreurl"
EOF;
 if($op=="moreurl") { 
$blocknav .= <<<EOF
 class="a"
EOF;
 } 
$blocknav .= <<<EOF
><a href="portal.php?mod=portalcp&amp;ac=block&amp;bid={$bid}&amp;op=moreurl
EOF;
 if($_GET['from']) { 
$blocknav .= <<<EOF
&amp;from={$_GET['from']}
EOF;
 } 
$blocknav .= <<<EOF
" onclick="showWindow('{$_GET['handlekey']}', this.getAttribute('href'));">Thiết đặt thêm nhiều trang</a></li>

EOF;
 } } } 
$blocknav .= <<<EOF


EOF;
?>
<?php } if($op == 'block') { if($_G['inajax']) { ?>
<h3 class="flb">
<em id="return_<?php echo $_GET['handlekey'];?>">Sửa Module</em>
<span><a href="javascript:;" class="flbc" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');<?php if(empty($bid) && $_GET['from']!='cp') { ?>drag.removeBlock('<?php echo $_GET['eleid'];?>',true);<?php } ?>return false;" title="Đóng">Đóng</a></span>
</h3>
<ul class="tb cl">
<?php echo $blocknav;?>
</ul>
<?php } ?>
<form id="blockformsetting" name="blockformsetting" method="post" enctype="multipart/form-data" autocomplete="off" action="portal.php?mod=portalcp&amp;ac=block&amp;op=block&amp;classname=<?php echo $_GET['classname'];?>&amp;bid=<?php echo $block['bid'];?>&amp;blocktype=<?php echo $blocktype;?>&amp;eleid=<?php echo $_GET['eleid'];?>&amp;tpl=<?php echo $_GET['tpl'];?>"<?php if($_G['inajax']) { ?> onsubmit="if(checkblockname(this)){ajaxpost('blockformsetting','return_<?php echo $_GET['handlekey'];?>','return_<?php echo $_GET['handlekey'];?>','onerror');} else {return false;}"<?php } else { ?> onsubmit="return checkblockname(this);"<?php } ?> class="fdiy">
<div class="c diywin"<?php if($_G['inajax']) { ?> style="width: 490px; <?php if($_GET['from']=='cp') { ?>max-height:260px;<?php } else { ?>max-height:380px;<?php } ?>height:auto !important; <?php if($_GET['from']=='cp') { ?>height:260px;<?php } else { ?>height:380px;<?php } ?> _padding-right: 17px; overflow-x: hidden; overflow-y: auto;"<?php } ?>>
<div id="block_setting">
<table class="tfm mbm">
<?php if($showhtmltip) { ?>
<tr>
<td colspan="2" style="color: red">
Xác định bởi các thuộc tính của dữ liệu mô-đun</td>
</tr>
<?php } ?>
<tr>
<th width="80">Module ID</th>
<td>
<input type="text" id="name" name="name" value="<?php echo $block['name'];?>" class="px" />
<script type="text/javascript">document.forms['blockformsetting']['name'].focus();</script>
</td>
</tr>
<tr>
<th width="80">Loại Module</th>
<td><?php list($bigclass) = explode('_',$block['blockclass']);?><?php if(!empty($_G['cache']['blockconvert']) && !empty($_G['cache']['blockconvert'][$bigclass][$block['blockclass']])) { ?>
<select name="toblockclass" onchange="blockconver(this, '<?php echo $block['bid'];?>');" class="ps">
<option value="<?php echo $block['blockclass'];?>"><?php echo $blockclassname;?></option><?php if(is_array($_G['cache']['blockconvert'][$bigclass][$block['blockclass']])) foreach($_G['cache']['blockconvert'][$bigclass][$block['blockclass']] as $bblockclass => $convertarr) { ?><option value="<?php echo $bblockclass;?>"><?php echo $convertarr['name'];?></option>
<?php } ?>
</select>
<img src="<?php echo IMGDIR;?>/faq.gif" alt="Tip" class="vm" onmouseover="showTip(this)" tip="<font color='red'>Lưu ý:</font>Chọn danh sách loại module thả xuống ngay lập tức sau khi sự thay đổi trong mô-đun phân loại." />
<?php } else { ?>
<?php echo $blockclassname;?>
<?php } ?>
</td>
</tr>
<tr>
<th width="80">Nguồn dữ liệu</th>
<td>
<select name="script" onchange="block_get_setting('<?php echo $_GET['classname'];?>', this.value, '<?php echo $block['bid'];?>');" class="ps"><?php if(is_array($theclass['script'])) foreach($theclass['script'] as $bkey => $bname) { ?><option value="<?php echo $bkey;?>"<?php echo $scriptarr[$bkey];?>><?php echo $bname;?></option>
<?php } ?>
</select>
<?php if($is_recommendable) { ?>
&nbsp;<label><input type="checkbox" name="isblank" id="isblank" class="pc" value="1" <?php if($block['isblank']) { ?> checked<?php } ?> onclick="switchSetting();" />Chấp nhận đẩy dữ liệu</label>
<img src="<?php echo IMGDIR;?>/faq.gif" alt="Tip" class="vm" onmouseover="showTip(this)" tip="Check ô này sau đó ấn đẩy Module dữ liệu hiển thị, tập hợp dữ liệu không tự động" />
<?php } ?>
</td>
</tr>
<tr class="l">
<th></th>
<td>
<a id="a_setting_show" href="javascript:;" onclick="toggleSettingShow();"class="xi2">Thiết lập các mục ẩn</a>
</td>
</tr>
<tbody id="tbody_setting"<?php if($block['isblank']) { ?> style="display:none;"<?php } ?>><?php if(is_array($settings)) foreach($settings as $key => $value) { ?><tr class="vt">
<th><?php echo $value['title'];?><?php if($value['comment']) { ?> <img src="<?php echo IMGDIR;?>/faq.gif" alt="Tip" class="vm" style="margin: 0;" onmouseover="showTip(this)" tip="<?php echo $value['comment'];?>" /><?php } ?></th>
<td><?php echo $value['html'];?></td>
</tr>
<?php } ?></tbody>
<?php if(!$is_htmlblock) { ?>
<tr>
<th>Hiển thị số bài</th>
<td><input type="text" name="shownum" value="<?php echo $block['shownum'];?>" class="px" /></td>
</tr>
<?php } if(!$nocachetime) { ?>
<tr>
<th width="80">Cập nhật cache</th>
<td>
<span><input type="text" name="cachetime" id="txt_cachetime" class="px" size="4" maxlength="6" value="<?php echo $block['cachetime_min'];?>" />  Phút</span>
<span id="tbody_range"<?php if($block['punctualupdate']) { ?> style="visibility:hidden;"<?php } ?>>
&nbsp; Thời gian cập nhật
<select name="cachetimerangestart" class="ps vm" ><?php if(is_array($cachetimerange)) foreach($cachetimerange as $value) { ?><option value="<?php echo $value;?>" <?php if($value == $block['cachetimerange']['0']) { ?> selected="selected"<?php } ?>><?php echo $value;?>Điểm</option>
<?php } ?>
</select> -
<select name="cachetimerangeend" class="ps vm" ><?php if(is_array($cachetimerange)) foreach($cachetimerange as $value) { ?><option value="<?php echo $value;?>" <?php if($value == $block['cachetimerange']['1']) { ?> selected="selected"<?php } ?>><?php echo $value;?>Điểm</option>
<?php } ?>
</select>
</span>
</p>
<p class="ptn xi2">
<a href="javascript:;" onclick="blockSetCacheTime(10);this.blur();">10 Phút</a>&nbsp;
<a href="javascript:;" onclick="blockSetCacheTime('60');this.blur();">1 Giờ</a>&nbsp;
<a href="javascript:;" onclick="blockSetCacheTime('1440');this.blur();">1 ngày</a>&nbsp;
<label for="ckpunctualupdate"><input type="checkbox" name="punctualupdate" id="ckpunctualupdate" class="pc" onclick="$('tbody_range').style.visibility = (this.checked ? 'hidden' : 'visible');" value="1"<?php if($block['punctualupdate']) { ?> checked="checked"<?php } ?> />Cập nhật lúc </label>
<img src="<?php echo IMGDIR;?>/faq.gif" alt="Tip" class="vm" onmouseover="showTip(this)" tip="Để giảm tải hệ thống, hệ thống này được thiết lập để cập nhật chỉ một lần một mô-đun; Check đây để bỏ qua tối ưu hóa, để đảm bảo rằng các module vào thời gian quy định cập nhật bộ nhớ cache(Cảnh báo: Điều này sẽ làm tăng tải trọng trên hệ thống, Đừng đặt cùng một trang rất nhiều module "thời gian cập nhật"!!)" />
<span class="pipe">|</span>
<a href="javascript:;" onclick="blockSetCacheTime('0');this.blur();">Không tự động cập nhật</a>&nbsp;
<a href="javascript:;" onclick="blockSetCacheTime('-1');this.blur();">Không bao giờ cập nhật</a>
</p>
</td>
</tr>
<?php } if(!$is_htmlblock) { ?>
<tr>
<th width="80">Hiển thị Style</th>
<td>
<select name="styleid" onchange="block_show_thumbsetting('<?php echo $_GET['classname'];?>', this.value, '<?php echo $block['bid'];?>')" class="ps">
<?php if($bid && $block['styleid']==0) { ?>
<option value="0" selected>Tùy chỉnh mẫu</option>
<?php } if(is_array($theclass['style'])) foreach($theclass['style'] as $key => $value) { ?><?php $thestyle = count($thestyle) > 1 ? $thestyle : $theclass['style'][$key];?><option value="<?php echo $key;?>"<?php echo $stylearr[$key];?>><?php echo $value['name'];?></option>
<?php } ?>
</select>
<?php if($blocktype) { ?>
&nbsp;&nbsp;
<label for="ck_hidedisplay"><input type="checkbox" name="hidedisplay" id="ck_hidedisplay" class="pc" value="1"<?php if($block['hidedisplay']) { ?> checked="checked"<?php } ?> />Kết quả</label>
<img src="<?php echo IMGDIR;?>/faq.gif" alt="Tip" class="vm" onmouseover="showTip(this)" tip="Không hiện nội dung module, nhưng để cung cấp dữ liệu cho các cuộc gọi mẫu." />
<?php } ?>
</td>
</tr>

<?php } ?>
<tbody id="tbody_thumbsetting"><?php if($thestyle['makethumb']) { ?>
<tr>
<th width="80">Chiều rộng hình nhỏ</th>
<td><input type="text" name="picwidth" value="<?php echo $block['picwidth'];?>" class="px" /></td>
</tr>
<tr>
<th width="80">Chiều cao hình nhỏ</th>
<td><input type="text" name="picheight" value="<?php echo $block['picheight'];?>" class="px" /></td>
</tr>
<?php } if($thestyle['settarget']) { ?>
<tr>
<th width="80">Mở liên kết</th>
<td>
<select name="a_target">
<option value="blank" <?php echo $targetarr['blank'];?>>Mở một liên kết mới</option>
<option value="self" <?php echo $targetarr['self'];?>>Được mở</option>
<option value="top" <?php echo $targetarr['top'];?>>Mở (trong khung)</option>
</select>
</td>
</tr>
<?php } if(!$is_htmlblock) { ?>
<tr>
<th width="80">Kiểu ngày</th>
<td>
<select name="dateformat"><?php if(is_array($dateformats)) foreach($dateformats as $value) { ?><option value="<?php echo $value['format'];?>"<?php echo $value['selected'];?>><?php echo $value['time'];?></option>
<?php } ?>
</select>
&nbsp;
<label for="ckdateuformat"><input type="checkbox" name="dateuformat" id="ckdateuformat" class="pc" value="1"<?php if($block['dateuformat']) { ?> checked="checked"<?php } ?> />Định dạng tùy chỉnh</label>
<img src="<?php echo IMGDIR;?>/faq.gif" alt="Tip" class="vm" style="margin: 0;" onmouseover="showTip(this)" tip="Các hiển thị thời gian gần đây nhất "một vài ngày trước" trong những hình thức" />
</td>
</tr>
<?php } ?></tbody>
<?php if(!$is_htmlblock) { ?>
<tr>
<th width="80">Tuỳ chỉnh nội dung</th>
<td>
<textarea name="summary" id="block_sumamry_content" cols="40" rows="3" class="pt mbn" style="display:none"><?php echo $block['summary'];?></textarea>
<p class="pns">
<button type="button" id="a_summary_show" class="pn" onclick="showBlockSummary();"><em>Chỉnh sửa nội dung</em></button>
<button type="button" id="a_summary_hide" class="pn" onclick="hideBlockSummary();" style="display:none;"><span>Ẩn</span></a>
</p>
</td>
</tr>
<?php } ?>
</table>
</div>
</div>
<div class="o pns">
<input type="hidden" name="blocksubmit" value="true" />
<input type="hidden" name="handlekey" value="<?php echo $_GET['handlekey'];?>" />
<input type="hidden" name="eleid" value="<?php echo $_GET['eleid'];?>" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<button type="submit" class="pn pnc"><strong>Xác nhận</strong></button>
<?php if($_G['inajax']) { ?><button type="button" class="pn" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');<?php if(empty($bid) && $_GET['from']!='cp') { ?>drag.removeBlock('<?php echo $_GET['eleid'];?>',true);<?php } ?>return false;"><strong>Hủy</strong></button><?php } ?>
</div>
</form>
<?php } elseif($op == 'data') { if($_G['inajax']) { ?>
<h3 class="flb">
<em id="return_<?php echo $_GET['handlekey'];?>">Module dữ liệu</em>
<span><a href="javascript:;" class="flbc" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');<?php if(empty($bid)) { ?>drag.removeBlock('<?php echo $_GET['eleid'];?>',true);<?php } ?>return false;" title="Đóng">Đóng</a></span>
</h3>
<ul class="tb cl">
<?php echo $blocknav;?>
<button class="pn pnc y" title="Thêm dữ liệu" onclick="showWindow('<?php echo $_GET['handlekey'];?>', 'portal.php?mod=portalcp&ac=block&bid=<?php echo $bid;?>&op=additem<?php if($_G['inajax']) { ?>&itemfrom=ajax<?php } if($_GET['from']) { ?>&from=<?php echo $_GET['from'];?><?php } ?>')"><em>Thêm</em></button>
</ul>
<?php } ?>
<form id="blockformdata" name="blockformdata" method="post" autocomplete="off" action="portal.php?mod=portalcp&amp;ac=block&amp;op=data&amp;classname=<?php echo $_GET['classname'];?>&amp;bid=<?php echo $block['bid'];?>&amp;eleid=<?php echo $_GET['eleid'];?>&amp;tpl=<?php echo $_GET['tpl'];?>"<?php if($_G['inajax']) { ?> onsubmit="ajaxpost('blockformdata','return_<?php echo $_GET['handlekey'];?>','return_<?php echo $_GET['handlekey'];?>','onerror');"<?php } ?>>
<div class="c"<?php if($_G['inajax']) { ?> style="width:490px; <?php if($_GET['from']=='cp') { ?>max-height:260px;<?php } else { ?>max-height:380px;<?php } ?>height:auto !important;<?php if($_GET['from']=='cp') { ?>height:260px;<?php } else { ?>height:380px;<?php } ?> _padding-right: 17px; overflow-x: hidden; overflow-y: auto;"<?php } ?>>
<div id="block_data">
<table class="dt mtm mbm" style="table-layout:fixed">
<tr>
<th width="34">Khóa</th>
<th width="50">Địa điểm</th>
<th>Tiêu đề</th>
<th width="80">Hoạt động</th>
</tr>
<?php if($itemlist) { if(is_array($itemlist)) foreach($itemlist as $item) { ?><tr>
<?php if($item['ispreorder']) { ?>
<td>Đặt hàng</td>
<td><?php echo $item['displayorder'];?></td>
<?php } else { ?>
<td><input type="checkbox" name="locked[<?php echo $item['itemid'];?>]" value="1"<?php if($item['itemtype']=='1') { ?> checked="checked"<?php } ?> /></td>
<td><input type="text" name="displayorder[<?php echo $item['itemid'];?>]" class="px" size="2" maxlength="2" value="<?php echo $item['displayorder'];?>" /></td>
<?php } ?>
<td>[<?php echo $item['itemtypename'];?>] <?php echo $item['title'];?></td>
<td>
<a href="portal.php?mod=portalcp&amp;ac=block&amp;op=item&amp;bid=<?php echo $block['bid'];?>&amp;itemid=<?php echo $item['itemid'];?><?php if($_G['inajax']) { ?>&amp;itemfrom=ajax<?php } if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>" onclick="showWindow('showblock', this.getAttribute('href'));">Chỉnh sửa</a><span class="pipe">|</span>
<?php if($item['itemtype']=='1') { ?>
<a href="javascript:;" onclick="block_delete_item('<?php echo $block['bid'];?>', '<?php echo $item['itemid'];?>', 1, '<?php if($_G['inajax']) { ?>ajax<?php } ?>', '<?php if($_GET['from']) { ?><?php echo $_GET['from'];?><?php } ?>'); return false;">Xóa</a>
<?php } else { ?>
<a href="javascript:;" onclick="block_delete_item('<?php echo $block['bid'];?>', '<?php echo $item['itemid'];?>', 0, '<?php if($_G['inajax']) { ?>ajax<?php } ?>', '<?php if($_GET['from']) { ?><?php echo $_GET['from'];?><?php } ?>'); return false;">Ẩn</a>
<?php } ?>
</td>
</tr>
<?php } } else { ?>
<tr>
<td colspan="4"><p class="emp">Không có dữ liệu</p></td>
</tr>
<?php } ?>
</table>
<?php if($block['param']['bannedids']) { ?>
<h4><a href="javascript:;" onclick="display('p_bannedids');return false;">Xem dữ liệu ẩn</a></h4>
<p id="p_bannedids" style="display:none;">
<label>Bảo vệ dữ liệu</label>
<input type="text" name="bannedids" id="bannedids" class="px" value="<?php echo $block['param']['bannedids'];?>" />
<button type="button" class="pn pnc" id="bannedidssubmit" onclick="blockbanids('<?php echo $block['bid'];?>');" ><strong>Lưu</strong></button>
</p>
<?php } ?>
</div>
</div>
<?php if($_G['inajax'] || $itemlist) { ?>
<div class="o pns">
<input type="hidden" name="eleid" value="<?php echo $_GET['eleid'];?>" />
<input type="hidden" name="handlekey" value="<?php echo $_GET['handlekey'];?>" />
<input type="hidden" name="updatesubmit" value="true" />
<input type="hidden" name="modifiedids" value="" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<button type="submit" class="pn xg1" id="blockformdatasubmit" disabled="disabled"><strong>Lưu</strong></button>
<?php if($_G['inajax']) { ?><button type="button" class="pn" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');return false;"><strong>Hủy</strong></button><?php } ?>
</div>
<?php } ?>
</form>
<script type="text/javascript" reload="1">
var formoldvalue = {'checkbox':[], 'text':[]};
var inputs = $('blockformdata').getElementsByTagName('table')[0].getElementsByTagName('input');
for(var i = 0; i < inputs.length; i++){
if(inputs[i]['type'].toLowerCase() == 'checkbox') {
formoldvalue['checkbox'][inputs[i]['name']] = inputs[i].checked;
_attachEvent(inputs[i], 'click', formcheckvalue);
} else if(inputs[i]['type'].toLowerCase() == 'text') {
formoldvalue['text'][inputs[i]['name']] = inputs[i].value;
_attachEvent(inputs[i], 'keyup', formcheckvalue);
_attachEvent(inputs[i], 'blur', formcheckvalue);
}
}

function formcheckvalue(){
var modifiedids = [];
var enabled = false;
for(i = 0; i < inputs.length; i++){
if(inputs[i]['type'].toLowerCase() == 'checkbox') {
if(formoldvalue['checkbox'][inputs[i]['name']] != inputs[i].checked){
enabled = true;
}
} else if(inputs[i]['type'].toLowerCase() == 'text') {
if(formoldvalue['text'][inputs[i]['name']] != inputs[i].value){
enabled = true;
var itemid = inputs[i]['name'].match(/\d+/);
if(itemid && itemid[0]) {
modifiedids.push(itemid[0]);
}
}
}
}
if(enabled) {
$('blockformdatasubmit').disabled = '';
$('blockformdatasubmit').className = $('blockformdatasubmit').className.replace(' xg1', ' pnc');
} else{
$('blockformdatasubmit').disabled = 'disabled';
$('blockformdatasubmit').className = $('blockformdatasubmit').className.replace(' pnc', ' xg1');
}
$('blockformdata')['modifiedids'].value = modifiedids+'';
}

function blockbanids(bid) {
var x = new Ajax();
x.get('portal.php?mod=portalcp&ac=block&op=banids&inajax=1&bid='+bid+'&bannedids='+$('bannedids').value, function(s){
<?php if($_G['inajax']) { ?>
succeedhandle_<?php echo $_GET['handlekey'];?> ('', '', {'bid':bid});
showWindow('showblock', 'portal.php?mod=portalcp&ac=block&op=data&bid='+bid+'&tpl='+document.diyform.template.value, 'get', -1);
<?php } else { ?>
location.reload();
<?php } ?>
});
}
</script>

<?php } elseif($op == 'style') { if($_G['inajax']) { ?>
<h3 class="flb">
<em id="return_<?php echo $_GET['handlekey'];?>">Module mẫu</em>
<span><a href="javascript:;" class="flbc" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');<?php if(empty($bid)) { ?>drag.removeBlock('<?php echo $_GET['eleid'];?>',true);<?php } ?>return false;" title="Đóng">Đóng</a></span>
</h3>
<ul class="tb cl">
<?php echo $blocknav;?>
</ul>
<?php } ?>
<form id="blockstyleform" name="blockformdata" method="post" autocomplete="off" action="portal.php?mod=portalcp&amp;ac=block&amp;op=style&amp;classname=<?php echo $_GET['classname'];?>&amp;bid=<?php echo $block['bid'];?>&amp;eleid=<?php echo $_GET['eleid'];?>&amp;tpl=<?php echo $_GET['tpl'];?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>"<?php if($_G['inajax']) { ?> onsubmit="ajaxpost('blockstyleform','return_<?php echo $_GET['handlekey'];?>','return_<?php echo $_GET['handlekey'];?>','onerror');"<?php } ?>>
<div class="c"<?php if($_G['inajax']) { ?> style="width:490px; <?php if($_GET['from']=='cp') { ?>max-height:260px;<?php } else { ?>max-height:380px;<?php } ?>height:auto !important; <?php if($_GET['from']=='cp') { ?>height:260px;<?php } else { ?>height:380px;<?php } ?> _padding-right: 17px; overflow-x: hidden; overflow-y: auto;"<?php } ?>>
<?php if($block['hidedisplay']) { ?>
<div>
<p style="color:red;">Nhắc nhở: Bạn đã chọn ẩn các đầu ra, các module sẽ không hiện ra, nhưng bạn có thể gọi các dữ liệu mẫu trong module.</p>
<p>	<b>Tham chiếu định dạng cuộc gọi:</b></p>
<p><?php echo $samplecode;?></p>
<p><b>Có thể gọi các lĩnh vực:</b></p>
<table width="100%"><?php if(is_array($theclass['fields'])) foreach($theclass['fields'] as $key => $value) { ?> <tr>
 <td><?php echo $value['name'];?></td>
 <td><?php echo '$'; ?><?php echo $key;?></td>
 </tr>
 <?php } ?>
</table>
</div>
<?php } else { ?>
 <div id="block_style">
<p class="pns mtn mbn"><button type="button" id="a_summary_show" onclick="$('stylename').style.display='';" class="pn"><em>Lưu thành mẫu ...</em></button></p>
<p class="mtn mbm" id="stylename" style="display:none;">
Tên  mẫu Module: <input type="text" name="name" class="px" />
<br />
Nhập tên của phong cách này để lưu mẫu module (để sử dụng trong các module khác)
</p>
<textarea name="template" rows="8" class="pt" style="width: 98%;"><?php echo $template;?></textarea>
</div>
<table class="dt mtm mbm">
<tr>
 <th>Cú pháp</th>
 <th>Báo cáo</th>
</tr><?php if(is_array($theclass['fields'])) foreach($theclass['fields'] as $key => $value) { ?><tr>
<td><?php echo $value['name'];?></td>
<td>{<?php echo $key;?>}</td>
</tr>
<?php } if(in_array($block['blockclass'], array('forum_thread', 'portal_article', 'group_thread'), true)) { ?>
<tr>
<td>Thêm liên kết</td>
<td>{<?php echo moreurl;?>}</td>
</tr>
<?php } ?>
<tr>
<td>Các trình tự dữ liệu hiện tại</td>
<td>{<?php echo currentorder;?>}</td>
</tr>
<tr>
<td>Cho dù các dữ liệu hiện tại trong hàng lẻ</td>
<td>{<?php echo parity;?>}</td>
 </tr>
 <tr>
<td>Màn hình hiển thị mặc định chu kỳ</td>
<td>[loop]...[/loop]</td>
 </tr>
 <tr>
<td>Thay thế các phần tử dữ liệu được quy định trong vòng tương ứng</td>
<td>[order=N]...[/order]</td>
 </tr>
 <tr>
<td>Xác định nội dung của dữ liệu đặc biệt</td>
<td>[index=N]...[/index]</td>
 </tr>
 <tr>
<td>Liên kết có thể được thiết lập để mở</td>
<td>&lt;a href="{<?php echo url;?>}"{<?php echo target;?>}&gt;{<?php echo title;?>}&lt;/a&gt;</td>
 </tr>
 <tr>
<td>Hình thu nhỏ kích thước có thể được thiết lập</td>
<td>&lt;img src="{<?php echo pic;?>}" width="{<?php echo picwidth;?>}" height="{<?php echo picheight;?>}" /&gt;</td>
 </tr>
 <tr>
<td>Trợ giúp hơn nữa ...</td>
<td>Hãy tham khảo: Bối cảnh - Portal - Module Template - Edit/Thêm mẫu</td>
 </tr>
</table>
<?php } ?>
</div>
<div class="o pns">
<input type="hidden" name="eleid" value="<?php echo $_GET['eleid'];?>" />
<input type="hidden" name="handlekey" value="<?php echo $_GET['handlekey'];?>" />
<input type="hidden" name="stylesubmit" value="true" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<button type="submit" class="pn pnc"><strong>Cập nhật</strong></button>
<?php if($_G['inajax']) { ?><button type="button" class="pn" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');return false;"><strong>Hủy</strong></button><?php } ?>
</div>
</form>
<?php } elseif($op == 'itemdata') { if($datalist) { ?>
<form id="blockformitemdata" name="blockformitemdata" method="post" autocomplete="off" action="portal.php?mod=portalcp&amp;ac=block&amp;op=itemdata&amp;bid=<?php echo $block['bid'];?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>">
<table class="dt mtm mbm">
<tr>
<th width="40">Chọn</th>
<th>Tiêu đề</th>
<th>Thời gian phê duyệt</th>
<th>Đính</th>
<th width="80">Hoạt động</th>
</tr><?php if(is_array($datalist)) foreach($datalist as $item) { ?><tr>
<td><input type="checkbox" class="pc" name="ids[]" value="<?php echo $item['dataid'];?>" /></td>
<td><a href="<?php echo $item['url'];?>" target="_blank"><?php echo $item['title'];?></a></td>
<td><?php echo $item['verifiedtime'];?></td>
<td><?php if($item['stickgrade']) { ?>Top <?php echo $item['stickgrade'];?><?php } else { ?>Không<?php } ?></td>
<td>
<a href="portal.php?mod=portalcp&amp;ac=block&amp;op=managedata&amp;bid=<?php echo $block['bid'];?>&amp;dataid=<?php echo $item['dataid'];?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>" onclick="showWindow('showblock', this.getAttribute('href'));">Chỉnh sửa</a>
</td>
</tr>
<?php } ?>
<tr>
<td colspan="5">
<label for="chkall" onclick="checkall(this.form, 'ids')"><input type="checkbox" name="chkall" id="chkall" class="pc" />Chọn tất</label>
<input type="hidden" name="handlekey" value="<?php echo $_GET['handlekey'];?>" />
<input type="hidden" name="deletesubmit" value="true" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<button type="submit" class="pn pnc"><strong>Xóa</strong></button>
</td>
</tr>
</table>
<?php if($multi) { ?><div class=""><?php echo $multi;?></div><?php } ?>
</form>
<?php } else { ?>
<p class="emp">Đẩy module không có dữ liệu</p>
<?php } } elseif($op == 'setting') { if(is_array($settings)) foreach($settings as $key => $value) { ?><tr class="vt">
<th><?php echo $value['title'];?><?php if($value['comment']) { ?> <img src="<?php echo IMGDIR;?>/faq.gif" alt="Tip" class="vm" style="margin: 0;" onmouseover="showTip(this)" tip="<?php echo $value['comment'];?>" /><?php } ?></th>
<td><?php echo $value['html'];?></td>
</tr>
<?php } } elseif($op == 'item' || $op == 'additem') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>calendar.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<h3 class="flb">
<em id="return_<?php echo $_GET['handlekey'];?>">Sửa Module</em>
<span>
<?php if($_GET['itemfrom']=='ajax') { ?><a href="portal.php?mod=portalcp&amp;ac=block&amp;op=data&amp;bid=<?php echo $bid;?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>" onclick="showWindow('showblock', this.href);closecalendar(e);return false;"> &lt;&lt;Trở lại </a><?php } if($_G['inajax']) { ?><a href="javascript:;" class="flbc" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');<?php if(empty($bid)) { ?>drag.removeBlock('<?php echo $_GET['eleid'];?>');<?php } ?>return false;" title="Đóng">Đóng</a><?php } ?>
</span>
</h3>
<form id="blockform" name="blockform" method="post" autocomplete="off" action="portal.php?mod=portalcp&amp;ac=block&amp;op=<?php echo $op;?>&amp;bid=<?php echo $block['bid'];?>&amp;itemid=<?php echo $itemid;?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>" onsubmit="if(check_itemdata_lentgh(this)) {ajaxpost('blockform','return_<?php echo $_GET['handlekey'];?>','return_<?php echo $_GET['handlekey'];?>','onerror');} else { return false;}" enctype="multipart/form-data">
<div class="c" style="height:<?php echo $height;?>; width: 490px; _padding-right: 17px; overflow-x: hidden; overflow-y: auto;">
<table class="tfm">
<tr>
<th>Thu được từ các nguồn dữ liệu</th>
<td>
<select id="push_idtype" class="ps vm">
<option value="tids" selected="selected">Threadid</option>
<option value="blogids">Blogid</option>
<option value="aids">Portalid</option>
<option value="picids">Hình ảnhid</option>
</select>
<input type="text" name="push_id" id="push_id" class="px p_fre vm" value="" />
<button type="button" class="pn" onclick="block_pushitem('<?php echo $block['bid'];?>', '<?php echo $itemid;?>')"><span>Hướng dẫn</span></button>
</td>
</tr>
<tr>
<th>Hiển thị vị trí</th>
<td>
<select name="displayorder" class="ps vm"><?php if(is_array($orders)) foreach($orders as $value) { ?><option value="<?php echo $value;?>"<?php echo $orderarr[$value];?>><?php echo $value;?></option>
<?php } ?>
</select>
&nbsp;
<?php if($itemid && $item['idtype'] != 'rand') { ?>
<label for="lock_item"><input type="checkbox" name="locked" id="lock_item" class="pc" onclick="$('tbody_orderitem').style.display=this.checked ? '' : 'none';" value="1"<?php if($item['itemtype']=='1') { ?>checked="checked"<?php } ?> />Khóa</label>
<?php } else { ?>
<input type="hidden" name="locked" value="1" />
<label for="lock_item"><input type="checkbox" class="pc" name="locked_disable" id="lock_item" value="1" checked="checked" disabled="disabled" />Khóa</label>
<?php } ?>
</td>
</tr>
<tbody id="tbody_orderitem"<?php if($itemid && $item['itemtype']!='1') { ?> style="display:none;"<?php } ?>>
<tr>
<th>Thời gian bắt đầu</th>
<td>
<input type="text" class="px p_fre" name="startdate"<?php if($item['startdate']) { ?> value="<?php echo $blockitem['startdate'];?>"<?php } ?> onclick="showcalendar(event, this, true)" />
<p class="d">Để trống là bắt đầu ngay</p>
</td>
</tr>
<tr>
<th>Thời hạn</th>
<td>
<input type="text" class="px p_fre" name="enddate"<?php if($item['enddate']) { ?> value="<?php echo $blockitem['enddate'];?>"<?php } ?> onclick="showcalendar(event, this, true)" />
<p class="d">Để trống mà không có hạn</p>
</td>
</tr>
</tbody>
<tbody id="tbody_pushcontent"><?php include template('portal/portalcp_block_itemfields'); ?></tbody>
</table>
</div>
<div class="o pns">
<input type="hidden" name="itemsubmit" value="true" />
<input type="hidden" name="handlekey" value="<?php echo $_GET['handlekey'];?>" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<button type="submit" class="pn pnc"><strong>Gửi</strong></button>
<?php if($_G['inajax']) { ?><button type="button" class="pn" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');return false;"><strong>Hủy</strong></button><?php } ?>
</div>
</form>
<script type="text/javascript" reload="1">
if (typeof ctitlepb_frame == 'object' && !BROWSER.ie) {delete ctitlepb_frame;}
if (typeof csummarypb_frame == 'object' && !BROWSER.ie) {delete csummarypb_frame;}
function succeedhandle_<?php echo $_GET['handlekey'];?> (url, message, values) {
<?php if($_GET['itemfrom']=='ajax') { ?>
showWindow('<?php echo $_GET['handlekey'];?>', 'portal.php?mod=portalcp&ac=block&op=data<?php if($_GET['from']) { ?>&from=<?php echo $_GET['from'];?><?php } ?>&bid='+values['bid'], 'get' ,0);
drag.blockForceUpdate('portal_block_'+values['bid']);
<?php } else { ?>
hideWindow('<?php echo $_GET['handlekey'];?>');
location.reload();
<?php } ?>
}
</script>

<?php } elseif($op == 'push') { include template('portal/portalcp_block_itemfields'); } elseif($op == 'recommend') { if($isrepeatrecommend) { ?>
<tr>
<th colspan="2"><div class="bm"><div class="ntc_l hm">Nhắc nhở: Thông tin này đã được đẩy các thư viện module trong.</div></div></th>
</tr>
<?php } if($perm['allowmanage'] || !$perm['needverify']) { ?>
<tr>
<th>Module cập nhật</th>
<td>
<label for="ck_updateblock"><input type="checkbox" name="updateblock" id="ck_updateblock" class="pc" value="1" checked="checked" />Thời gian thực cập nhật dữ liệu mô-đun</label>
</td>
</tr>
<tr>
<th>Cần được xem xét</th>
<td>
<label for="ck_needverify"><input type="checkbox" name="needverify" id="ck_needverify" class="pc" value="1"<?php if(isset($item['isverified']) && !$item['isverified']) { ?> checked="checked"<?php } ?> />Kiểm tra các cơ sở dữ liệu xét duyệt được thêm vào, hoặc đẩy trực tiếp vào thư viện module</label>
</td>
</tr>
<?php } include template('portal/portalcp_block_itemfields'); if(!$perm['allowmanage'] && $perm['needverify']) { ?>
<tr><td colspan="2">Thông tin của bạn sẽ được đẩy vào cơ sở dữ liệu</td></tr>
<?php } } elseif($op == 'verifydata') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>calendar.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<h3 class="flb">
<em id="return_<?php echo $_GET['handlekey'];?>">Kiểm duyệt dữ liệu</em>
<?php if($_G['inajax']) { ?><span><a href="javascript:;" class="flbc" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');return false;" title="Đóng">Đóng</a></span><?php } ?>
</h3>
<form id="dataform" name="dataform" method="post" autocomplete="off" action="portal.php?mod=portalcp&amp;ac=block&amp;op=verifydata&amp;bid=<?php echo $block['bid'];?>&amp;dataid=<?php echo $dataid;?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>" onsubmit="ajaxpost('dataform','return_<?php echo $_GET['handlekey'];?>','return_<?php echo $_GET['handlekey'];?>','onerror');" enctype="multipart/form-data">
<div class="c" style="height:<?php echo $height;?>; width: 490px; _padding-right: 17px; overflow-x: hidden; overflow-y: auto;">
<table class="tfm">
<tbody id="tbody_pushcontent"><?php include template('portal/portalcp_block_itemfields'); ?></tbody>
<tr>
<th>Thông tin Module</th>
<td>
<label for="ckupdateblock"><input type="checkbox" name="updateblock" id="ckupdateblock" value="1" />Cập nhật dữ liệu mô-đun</label>
</td>
</tr>
</table>
</div>
<div class="o pns">
<input type="hidden" name="verifydatasubmit" value="true" />
<input type="hidden" name="handlekey" value="<?php echo $_GET['handlekey'];?>" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<button type="submit" class="pn pnc"><strong>Bởi</strong></button>
</div>
</form>
<script type="text/javascript" reload="1">
function succeedhandle_<?php echo $_GET['handlekey'];?> (url, message, values) {
hideWindow('<?php echo $_GET['handlekey'];?>');
location.reload();
}
</script>
<?php } elseif($op == 'managedata') { ?>

<script src="<?php echo $_G['setting']['jspath'];?>calendar.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<h3 class="flb">
<em id="return_<?php echo $_GET['handlekey'];?>">Chỉnh sửa dữ liệu</em>
<?php if($_G['inajax']) { ?><span><a href="javascript:;" class="flbc" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');return false;" title="Đóng">Đóng</a></span><?php } ?>
</h3>
<form id="dataform" name="dataform" method="post" autocomplete="off" action="portal.php?mod=portalcp&amp;ac=block&amp;op=managedata&amp;bid=<?php echo $block['bid'];?>&amp;dataid=<?php echo $dataid;?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>" onsubmit="ajaxpost('dataform','return_<?php echo $_GET['handlekey'];?>','return_<?php echo $_GET['handlekey'];?>','onerror');" enctype="multipart/form-data">
<div class="c" style="height:<?php echo $height;?>; width: 490px; _padding-right: 17px; overflow-x: hidden; overflow-y: auto;">
<table class="tfm">
<tr>
<th>Top Level</th>
<td>
<select name="stickgrade" class="ps">
<option value="0"<?php if(empty($item['stickgrade'])) { ?> selected<?php } ?>>Không đính</option><?php if(is_array(range(1,10))) foreach(range(1,10) as $k) { ?><option value="<?php echo $k;?>"<?php if($item['stickgrade']=='$k') { ?> selected<?php } ?>>Top<?php echo $k;?></option>
<?php } ?>
</select>
</td>
</tr>
<tbody id="tbody_pushcontent"><?php include template('portal/portalcp_block_itemfields'); ?></tbody>
</table>
</div>
<div class="o pns">
<input type="hidden" name="managedatasubmit" value="true" />
<input type="hidden" name="handlekey" value="<?php echo $_GET['handlekey'];?>" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<button type="submit" class="pn pnc"><strong>Gửi</strong></button>
</div>
</form>
<script type="text/javascript" reload="1">
function succeedhandle_<?php echo $_GET['handlekey'];?> (url, message, values) {
hideWindow('<?php echo $_GET['handlekey'];?>');
location.reload();
}
</script>
<?php } elseif($op == 'thumbsetting') { if($thestyle['makethumb']) { ?>
<tr>
<th width="80">Chiều rộng hình nhỏ</th>
<td><input type="text" name="picwidth" value="<?php echo $block['picwidth'];?>" class="px" /></td>
</tr>
<tr>
<th width="80">Chiều cao hình nhỏ</th>
<td><input type="text" name="picheight" value="<?php echo $block['picheight'];?>" class="px" /></td>
</tr>
<?php } if($thestyle['settarget']) { ?>
<tr>
<th width="80">Mở liên kết</th>
<td>
<select name="a_target">
<option value="blank" <?php echo $targetarr['blank'];?>>Mở một liên kết mới</option>
<option value="self" <?php echo $targetarr['self'];?>>Được mở</option>
<option value="top" <?php echo $targetarr['top'];?>>Mở (trong khung)</option>
</select>
</td>
</tr>
<?php } if(!$is_htmlblock) { ?>
<tr>
<th width="80">Kiểu ngày</th>
<td>
<select name="dateformat"><?php if(is_array($dateformats)) foreach($dateformats as $value) { ?><option value="<?php echo $value['format'];?>"<?php echo $value['selected'];?>><?php echo $value['time'];?></option>
<?php } ?>
</select>
&nbsp;
<label for="ckdateuformat"><input type="checkbox" name="dateuformat" id="ckdateuformat" class="pc" value="1"<?php if($block['dateuformat']) { ?> checked="checked"<?php } ?> />Định dạng tùy chỉnh</label>
<img src="<?php echo IMGDIR;?>/faq.gif" alt="Tip" class="vm" style="margin: 0;" onmouseover="showTip(this)" tip="Các hiển thị thời gian gần đây nhất "một vài ngày trước" trong những hình thức" />
</td>
</tr>
<?php } } elseif($op == 'getblock') { if(!$_G['inajax']) { ?>
<div class="wp"><div class="area"><div class="frame move-span frame-1 cl">
<?php } ?>
<?php echo $html;?>
<?php if(!$_G['inajax']) { ?>
</div></div></div>
<?php } } elseif($op == 'convert') { ?>
<script type="text/javascript" reload="1">
showWindow('showblock', 'portal.php?mod=portalcp&ac=block&op=block<?php if($_GET['from']) { ?>&from=<?php echo $_GET['from'];?><?php } ?>&bid='+<?php echo $bid;?>+'&tpl='+document.diyform.template.value, 'get', -1);
drag.blockForceUpdate('portal_block_<?php echo $bid;?>');
</script>
<?php } elseif($op == 'favorite') { ?>
<script type="text/javascript">
$('bfav_<?php echo $bid;?>').parentNode.onmouseover = '';
$('bfav_<?php echo $bid;?>').parentNode.onmouseout = '';
</script>
<?php if($favoriteop == 'add') { ?>
<img src="<?php echo IMGDIR;?>/fav.gif" alt="fav" title="Hủy yêu thích" class="favmark" />
<?php } else { ?>
<img src="<?php echo IMGDIR;?>/fav_grey.gif" alt="normal" title="Yêu thích" class="favmark" />
<?php } } elseif($op == 'moreurl') { if($_G['inajax']) { ?>
<h3 class="flb">
<em id="return_<?php echo $_GET['handlekey'];?>">Thiết đặt thêm nhiều trang</em>
<span><a href="javascript:;" class="flbc" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');return false;" title="Đóng">Đóng</a></span>
</h3>
<ul class="tb cl">
<?php echo $blocknav;?>
</ul>
<?php } ?>
<form id="blockmoreurlform" name="blockformdata" method="post" autocomplete="off" action="portal.php?mod=portalcp&amp;ac=block&amp;op=moreurl&amp;classname=<?php echo $_GET['classname'];?>&amp;bid=<?php echo $block['bid'];?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>"<?php if($_G['inajax']) { ?> onsubmit="ajaxpost('blockmoreurlform','return_<?php echo $_GET['handlekey'];?>','return_<?php echo $_GET['handlekey'];?>','onerror');"<?php } ?>>
<div class="c"<?php if($_G['inajax']) { ?> style="width:490px; <?php if($_GET['from']=='cp') { ?>max-height:260px;<?php } else { ?>max-height:380px;<?php } ?>height:auto !important; height:320px; _padding-right: 17px; _margin-right: 0; overflow-x: hidden; overflow-y: auto;"<?php } ?>>

<table class="tfm">
<tr>
 <th>Hiển thị taskbar <img src="<?php echo IMGDIR;?>/faq.gif" alt="Tip" class="vm" onmouseover="showTip(this)" tip="Thiết lập số lượng thanh taskbar hiện thị ở các trang" /></th>
 <td>
 <input type="input" name="perpage" id="perpage" value="<?php echo $block['param']['moreurl']['perpage'];?>" />
 </td>
</tr>
<tr>
 <th>SEO Title <img src="<?php echo IMGDIR;?>/faq.gif" alt="Tip" class="vm" onmouseover="showTip(this)" tip="Thiết lập tiêu đề SEO" /></th>
 <td>
 <input type="input" class="pt" name="seotitle" id="seotitle" value="<?php echo $block['param']['moreurl']['seotitle'];?>" />
 </td>
</tr>
<tr>
 <th>Từ khóa seo <img src="<?php echo IMGDIR;?>/faq.gif" alt="Tip" class="vm" onmouseover="showTip(this)" tip="Thiết lập từ khóa cho SEO" /></th>
 <td>
 <textarea class="pt" name="seokeywords" id="seokeywords" ><?php echo $block['param']['moreurl']['seokeywords'];?></textarea>
 </td>
</tr>
<tr>
 <th>SEO Description <img src="<?php echo IMGDIR;?>/faq.gif" alt="Tip" class="vm" onmouseover="showTip(this)" tip="Thiết lập SEO Description" /></th>
 <td>
 <textarea class="pt" name="seodescription" rows="4" id="seodescription"><?php echo $block['param']['moreurl']['seodescription'];?></textarea>
 </td>
</tr>
</table>
</div>
<div class="o pns">
<input type="hidden" name="handlekey" value="<?php echo $_GET['handlekey'];?>" />
<input type="hidden" name="moreurlsubmit" value="true" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<button type="submit" class="pn pnc"><strong>Cập nhật</strong></button>
<?php if($_G['inajax']) { ?><button type="button" class="pn" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');return false;"><strong>Hủy</strong></button><?php } ?>
</div>
</form>
<?php } if(!$_G['inajax'] && in_array($op, array('block', 'data', 'itemdata'))) { ?>
</div>
</div>
</div>
<div class="appl"><div class="tbn">
<h2 class="mt bbda"><?php if($_G['setting']['portalstatus'] ) { ?>PortalCP<?php } else { ?>Module<?php } ?></h2>
<ul>
<?php if($_G['setting']['portalstatus'] ) { if($admincp2 || $_G['group']['allowmanagearticle']) { ?><li<?php if($ac == 'index') { ?> class="a"<?php } ?>><a href="portal.php?mod=portalcp&amp;ac=index">Chuyên mục</a></li><?php } if($admincp2 || $admincp3 || $_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle']) { ?><li<?php if($ac == 'category') { ?> class="a"<?php } ?>><a href="portal.php?mod=portalcp&amp;ac=category">Quản lý bài</a></li><?php } } if($admincp4 || $admincp6 || $_G['group']['allowdiy']) { ?>
<li<?php if($ac == 'portalblock' || $ac=='block') { ?> class="a"<?php } ?>><a href="portal.php?mod=portalcp&amp;ac=portalblock">Module Quản lý</a></li>
<?php } if(!$_G['inajax'] && !empty($_G['setting']['plugins']['portalcp'])) { if(is_array($_G['setting']['plugins']['portalcp'])) foreach($_G['setting']['plugins']['portalcp'] as $id => $module) { if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?><li<?php if($_GET['id'] == $id) { ?> class="a"<?php } ?>><a href="portal.php?mod=portalcp&amp;ac=plugin&amp;id=<?php echo $id;?>"><?php echo $module['name'];?></a></li><?php } } } if(!empty($modsession->islogin)) { ?>
<li><a href="portal.php?mod=portalcp&amp;ac=logout">Thoát</a></li>
<?php } ?>
</ul>
</div></div>
</div>
<?php } include template('common/footer'); ?>