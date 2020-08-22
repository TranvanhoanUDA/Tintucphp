<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('spacecp_profile');
0
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/common/header.htm', 1366391109, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/home/spacecp_header.htm', 1366391109, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/home/spacecp_footer.htm', 1366391109, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/common/seccheck.htm', 1366391109, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/home/spacecp_profile_nav.htm', 1366391109, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/common/seditor.htm', 1366391109, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/home/spacecp_footer.htm', 1366391109, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/common/footer.htm', 1366391109, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/common/header_common.htm', 1366391109, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/common/minisearchform.htm', 1366391109, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/home/spacecp_header_name.htm', 1366391109, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/home/spacecp_header_name.htm', 1366391109, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<?php if($_G['config']['output']['iecompatible']) { ?><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE<?php echo $_G['config']['output']['iecompatible'];?>" /><?php } ?>
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> <?php } if(empty($nobbname)) { ?> | <?php echo $_G['setting']['bbname'];?> <?php } ?></title>
<?php echo $_G['setting']['seohead'];?>

<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo dhtmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo dhtmlspecialchars($metadescription); ?> <?php } if(empty($nobbname)) { ?>,<?php echo $_G['setting']['bbname'];?><?php } ?>" />
<meta name="generator" content="Discuz! <?php echo $_G['setting']['version'];?>" />
<meta name="author" content="Discuz! Team and Comsenz UI Team" />
<meta name="copyright" content="2001-2012 Comsenz Inc." />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<base href="<?php echo $_G['siteurl'];?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_common.css?<?php echo VERHASH;?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_home_spacecp.css?<?php echo VERHASH;?>" /><?php if($_G['uid'] && isset($_G['cookie']['extstyle']) && strpos($_G['cookie']['extstyle'], TPLDIR) !== false) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['cookie']['extstyle'];?>/style.css" /><?php } elseif($_G['style']['defaultextstyle']) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['style']['defaultextstyle'];?>/style.css" /><?php } ?><script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>';</script>
<script src="<?php echo $_G['setting']['jspath'];?>common.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php if(empty($_GET['diy'])) { ?><?php $_GET['diy'] = '';?><?php } if(!isset($topic)) { ?><?php $topic = array();?><?php } ?>
<meta name="application-name" content="<?php echo $_G['setting']['bbname'];?>" />
<meta name="msapplication-tooltip" content="<?php echo $_G['setting']['bbname'];?>" />
<?php if($_G['setting']['portalstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['1']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['portal']) ? 'http://'.$_G['setting']['domain']['app']['portal'] : $_G['siteurl'].'portal.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/portal.ico" /><?php } ?>
<meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['2']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['forum']) ? 'http://'.$_G['setting']['domain']['app']['forum'] : $_G['siteurl'].'forum.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/bbs.ico" />
<?php if($_G['setting']['groupstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['3']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['group']) ? 'http://'.$_G['setting']['domain']['app']['group'] : $_G['siteurl'].'group.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/group.ico" /><?php } if(helper_access::check_module('feed')) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['4']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['home']) ? 'http://'.$_G['setting']['domain']['app']['home'] : $_G['siteurl'].'home.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/home.ico" /><?php } if($_G['basescript'] == 'forum' && $_G['setting']['archiver']) { ?>
<link rel="archives" title="<?php echo $_G['setting']['bbname'];?>" href="<?php echo $_G['siteurl'];?>archiver/" />
<?php } if(!empty($rsshead)) { ?><?php echo $rsshead;?><?php } if(widthauto()) { ?>
<link rel="stylesheet" id="css_widthauto" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_widthauto.css?<?php echo VERHASH;?>" />
<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
<?php } if($_G['basescript'] == 'forum' || $_G['basescript'] == 'group') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'home' || $_G['basescript'] == 'userapp') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>home.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'portal') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_G['basescript'] != 'portal' && $_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<link rel="stylesheet" type="text/css" id="diy_common" href="data/cache/style_<?php echo STYLEID;?>_css_diy.css?<?php echo VERHASH;?>" />
<?php } ?>
</head>

<body id="nv_<?php echo $_G['basescript'];?>" class="pg_<?php echo CURMODULE;?><?php if($_G['basescript'] === 'portal' && CURMODULE === 'list' && !empty($cat)) { ?> <?php echo $cat['bodycss'];?><?php } ?>" onkeydown="if(event.keyCode==27) return false;">
<div id="append_parent"></div><div id="ajaxwaitid"></div>
<?php if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { include template('common/header_diy'); } if(check_diy_perm($topic)) { ?><?php
$__STATICURL = STATICURL;$diynav = <<<EOF

<a id="diy-tg" href="javascript:openDiy();" title="Mở DIY" class="xi1 xw1" onmouseover="showMenu(this.id)"><img src="{$__STATICURL}image/diy/panel-toggle.png" alt="DIY" /></a>
<div id="diy-tg_menu" style="display: none;">
<ul>
<li><a href="javascript:saveUserdata('diy_advance_mode', '');openDiy();" class="xi2">Đơn giản</a></li>
<li><a href="javascript:saveUserdata('diy_advance_mode', '1');openDiy();" class="xi2">Nâng cao</a></li>
</ul>
</div>

EOF;
?>
<?php } if(CURMODULE == 'topic' && $topic && empty($topic['useheader']) && check_diy_perm($topic)) { ?>
<?php echo $diynav;?>
<?php } if(empty($topic) || $topic['useheader']) { if($_G['setting']['mobile']['allowmobile'] && (!$_G['setting']['cacheindexlife'] && !$_G['setting']['cachethreadon'] || $_G['uid']) && ($_GET['diy'] != 'yes' || !$_GET['inajax']) && ($_G['mobile'] != '' && $_G['cookie']['mobile'] == '' && $_GET['mobile'] != 'no')) { ?>
<div class="xi1 bm bm_c">
    Hãy chọn <a href="<?php echo $_G['siteurl'];?>forum.php?mobile=yes">Truy cập bằng mobile</a> <span class="xg1">|</span> <a href="<?php echo $_G['setting']['mobile']['nomobileurl'];?>">Tiếp tục</a>
</div>
<?php } ?>

<div id="toptb" class="cl wp">
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_top'])) echo $_G['setting']['pluginhooks']['global_cpnav_top'];?>
<div class="z"><?php if(is_array($_G['setting']['topnavs']['0'])) foreach($_G['setting']['topnavs']['0'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><?php echo $nav['code'];?><?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra1'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra1'];?>
</div>
<div class="y">
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra2'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra2'];?><?php if(is_array($_G['setting']['topnavs']['1'])) foreach($_G['setting']['topnavs']['1'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><?php echo $nav['code'];?><?php } } if($_G['uid'] && !empty($_G['style']['extstyle'])) { ?><a id="sslct" href="javascript:;" onmouseover="delayShow(this, function() {showMenu({'ctrlid':'sslct','pos':'34!'})});">Đổi giao diện</a><?php } if($_G['uid']) { ?><?php $upgradecredit = $_G['uid'] && $_G['group']['grouptype'] == 'member' && $_G['group']['groupcreditslower'] != 999999999 ? $_G['group']['groupcreditslower'] - $_G['member']['credits'] : false;?><a href="home.php?mod=spacecp&amp;ac=credit&amp;showcredit=1" id="extcreditmenu"<?php if(!$_G['setting']['bbclosed']) { ?> onmouseover="delayShow(this, showCreditmenu);" class="showmenu"<?php } ?>>Điểm: <?php echo $_G['member']['credits'];?></a>
<a href="home.php?mod=spacecp&amp;ac=usergroup"<?php if($upgradecredit !== 'false') { ?> id="g_upmine" class="xi2" onmouseover="delayShow(this, showUpgradeinfo)"<?php } ?>><?php echo $_G['group']['grouptitle'];?></a>
<a href="home.php?mod=space&amp;do=pm" id="pm_ntc"<?php if($_G['member']['newpm']) { ?> class="new"<?php } ?>>Tin nhắn</a>
<a href="home.php?mod=space&amp;do=notice" onclick="showWindow('getnotice','home.php?mod=space&do=notice','get',0)" id="myprompt"<?php if($_G['member']['newprompt']) { ?> class="new"<?php } ?>>Thông báo<?php if($_G['member']['newprompt']) { ?>(<?php echo $_G['member']['newprompt'];?>)<?php } ?></a><span id="myprompt_check"></span>
<a href="javascript:;" id="qmenu" onmouseover="showMenu({'ctrlid':'qmenu','pos':'34!','ctrlclass':'a','duration':2});">Quick Menu</a>					
<?php } else { ?>
<a onclick="showWindow('login', this.href)" href="member.php?mod=logging&amp;action=login" class="xi2 xw1">Đăng nhập</a>
<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="xi2 xw1"><?php echo $_G['setting']['reglinkname'];?></a>
<?php } if(check_diy_perm($topic)) { ?>
<?php echo $diynav;?>
<?php } ?>					
</div>

</div>
<?php if(!IS_ROBOT) { if($_G['uid'] && !empty($_G['style']['extstyle'])) { ?>
<div id="sslct_menu" class="cl p_pop" style="display: none;">
<?php if(!$_G['style']['defaultextstyle']) { ?><span class="sslct_btn" onclick="extstyle('')" title="Mặc định"><i></i></span><?php } if(is_array($_G['style']['extstyle'])) foreach($_G['style']['extstyle'] as $extstyle) { ?><span class="sslct_btn" onclick="extstyle('<?php echo $extstyle['0'];?>')" title="<?php echo $extstyle['1'];?>"><i style='background:<?php echo $extstyle['2'];?>'></i></span>
<?php } ?>
</div>
<?php } if($_G['uid']) { ?>
<div id="qmenu_menu" class="p_pop" style="display: none;">					
<ul><?php if(is_array($_G['setting']['mynavs'])) foreach($_G['setting']['mynavs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?>
<li><?php echo $nav['code'];?></li>
<?php } } ?>
</ul>
</div>

<div id="hanimenu_menu" class="p_pop" style="display: none;">
<ul>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra2'])) echo $_G['setting']['pluginhooks']['global_usernav_extra2'];?>
<li><a style="background-image:url(<?php echo STATICURL;?>image/feed/profile.gif)" href="home.php?mod=spacecp">Thông tin cá nhân</a></li>
<li><a style="background-image:url(<?php echo STATICURL;?>image/feed/activity.gif)" href="home.php?mod=space&amp;do=friend">Bạn bè</a></li>
<li><a style="background-image:url(<?php echo IMGDIR;?>/password.gif)" href="home.php?mod=spacecp&amp;ac=profile&amp;op=password">Đổi mật khẩu</a></li>
<li><a style="background-image:url(<?php echo STATICURL;?>image/feed/avatar.gif)" href="home.php?mod=spacecp&amp;ac=avatar">Đổi Avatar</a></li>
<li><a style="background-image:url(<?php echo STATICURL;?>image/feed/nts.gif)" href="home.php?mod=spacecp&amp;ac=privacy">Quyền riêng tư</a></li>
<?php if(($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))) { ?>
<li><a href="portal.php?mod=portalcp"><?php if($_G['setting']['portalstatus'] ) { ?>PortalCP<?php } else { ?>Module<?php } ?></a></li><?php } if($_G['uid'] && $_G['group']['radminid'] > 1) { ?><li><a href="forum.php?mod=modcp&amp;fid=<?php echo $_G['fid'];?>" target="_blank">&nbsp; Quản lý <?php echo $_G['setting']['navs']['2']['navname'];?></a></li><?php } if($_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)) { ?><li><a href="admin.php" target="_blank">AdminCP</a></li><?php } ?>						
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra4'])) echo $_G['setting']['pluginhooks']['global_usernav_extra4'];?>
<li><a class="bdtop" style="background-image:url(<?php echo IMGDIR;?>/logout.gif)" href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">Thoát</a></li>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra3'])) echo $_G['setting']['pluginhooks']['global_usernav_extra3'];?>
<li><?php if(empty($_G['disabledwidthauto']) && $_G['setting']['switchwidthauto']) { ?><a style="background-image:url(<?php echo IMGDIR;?>/widen.gif)" href="javascript:;" class="bdtop" onclick="widthauto(this)"><?php if(widthauto()) { ?>Thu hẹp<?php } else { ?>Mở rộng<?php } ?></a><?php } ?></li>
</ul>
</div>
<?php } ?>		
<?php } ?><?php echo adshow("headerbanner/wp a_h");?><div id="hd" class="wp">
<div class="hdc cl"><?php $mnid = getcurrentnav();?><h2><?php if(!isset($_G['setting']['navlogos'][$mnid])) { ?><a href="<?php if($_G['setting']['domain']['app']['default']) { ?>http://<?php echo $_G['setting']['domain']['app']['default'];?>/<?php } else { ?>./<?php } ?>" title="<?php echo $_G['setting']['bbname'];?>"><?php echo $_G['style']['boardlogo'];?></a><?php } else { ?><?php echo $_G['setting']['navlogos'][$mnid];?><?php } ?></h2>
<div id="um"><?php if($_G['setting']['search']) { ?><?php $slist = array();?><?php if($_G['fid'] && $_G['forum']['status'] != 3 && $mod != 'group') { ?><?php
$slist[forumfid] = <<<EOF
<li><a href="javascript:;" rel="curforum" fid="{$_G['fid']}" >Here</a></li>
EOF;
?><?php } if($_G['setting']['portalstatus'] && $_G['setting']['search']['portal']['status'] && ($_G['group']['allowsearch'] & 1 || $_G['adminid'] == 1)) { ?><?php
$slist[portal] = <<<EOF
<li><a href="javascript:;" rel="article">Portal</a></li>
EOF;
?><?php } if($_G['setting']['search']['forum']['status'] && ($_G['group']['allowsearch'] & 2 || $_G['adminid'] == 1)) { ?><?php
$slist[forum] = <<<EOF
<li><a href="javascript:;" rel="forum" class="curtype">Thread</a></li>
EOF;
?><?php } if(helper_access::check_module('blog') && $_G['setting']['search']['blog']['status'] && ($_G['group']['allowsearch'] & 4 || $_G['adminid'] == 1)) { ?><?php
$slist[blog] = <<<EOF
<li><a href="javascript:;" rel="blog">Blog</a></li>
EOF;
?><?php } if(helper_access::check_module('album') && $_G['setting']['search']['album']['status'] && ($_G['group']['allowsearch'] & 8 || $_G['adminid'] == 1)) { ?><?php
$slist[album] = <<<EOF
<li><a href="javascript:;" rel="album">Album</a></li>
EOF;
?><?php } if($_G['setting']['groupstatus'] && $_G['setting']['search']['group']['status'] && ($_G['group']['allowsearch'] & 16 || $_G['adminid'] == 1)) { ?><?php
$slist[group] = <<<EOF
<li><a href="javascript:;" rel="group">Nhóm</a></li>
EOF;
?><?php } ?><?php
$slist[user] = <<<EOF
<li><a href="javascript:;" rel="user">Member</a></li>
EOF;
?>
<?php } if($_G['setting']['search'] && $slist) { ?>
<div id="scbar" class="y <?php if($_G['setting']['srchhotkeywords'] && count($_G['setting']['srchhotkeywords']) > 5) { ?>scbar_narrow <?php } ?>cl">
<form id="scbar_form" method="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?>get<?php } else { ?>post<?php } ?>" autocomplete="off" onsubmit="searchFocus($('scbar_txt'))" action="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?><?php echo $searchparams['url'];?><?php } else { ?>search.php?searchsubmit=yes<?php } ?>" target="_blank">
<input type="hidden" name="mod" id="scbar_mod" value="search" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="srchtype" value="title" />
<input type="hidden" name="srhfid" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="srhlocality" value="<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>" />
<?php if(!empty($searchparams['params'])) { if(is_array($searchparams['params'])) foreach($searchparams['params'] as $key => $value) { ?><?php $srchotquery .= '&' . $key . '=' . rawurlencode($value);?><input type="hidden" name="<?php echo $key;?>" value="<?php echo $value;?>" />
<?php } ?>
<input type="hidden" name="source" value="discuz" />
<input type="hidden" name="fId" id="srchFId" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="q" id="cloudsearchquery" value="" />
            <div style="display: none; position: absolute; top:37px; left:44px;" id="sg">
                <div id="st_box" cellpadding="2" cellspacing="0"></div>
            </div>
<?php } ?>
<a href="javascript:;" id="scbar_type" class="showmenu xg1 xs2 z" onclick="showMenu(this.id)" hidefocus="true">Tìm kiếm</a>
<input type="text" name="srchtxt" id="scbar_txt" value="Nhập nội dung tìm kiếm" autocomplete="off" x-webkit-speech speech />

<button type="submit" name="searchsubmit" id="scbar_btn" sc="1" value="true" ><div class="scz">Tìm kiếm</div></button>
</form>
</div>
<ul id="scbar_type_menu" class="p_pop" style="display: none;"><?php echo implode('', $slist);; ?></ul>
<script type="text/javascript">
initSearchmenu('scbar', '<?php echo $searchparams['url'];?>');
</script>
<?php } ?></div>
</div>

<div id="nv">
<?php if($_G['uid']) { ?>
<div class="y umenav" id="hanimenu" onmouseover="showMenu({'ctrlid':'hanimenu','pos':'34!','ctrlclass':'a','duration':2});">
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?>
<div class="avtinav z"><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>"><?php echo avatar($_G[uid],small);?></a></div>			
<div class="usernav y">
<p class="boldnv"><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" title="Thăm nhà tôi"><?php echo $_G['member']['username'];?></a></p>
<?php if($_G['group']['allowinvisible']) { ?>
<p id="loginstatus">
<a id="loginstatusid" href="member.php?mod=switchstatus" title="Đổi trạng thái" onclick="ajaxget(this.href, 'loginstatus');return false;" class="xi2"></a>
</p>
<?php } ?>						
</div>

</div>
<?php } elseif(!empty($_G['cookie']['loginuser'])) { ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?>
<ul>
<li><a id="loginuser" class="noborder"><?php echo dhtmlspecialchars($_G['cookie']['loginuser']); ?></a></li>
<li><a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)">Kích hoạt</a></li>
<li><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">Thoát</a></li>
</ul>
<?php } ?>				
<ul><?php if(is_array($_G['setting']['navs'])) foreach($_G['setting']['navs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><li <?php if($mnid == $nav['navid']) { ?>class="a" <?php } ?><?php echo $nav['nav'];?>></li><?php } } ?>
</ul>
<?php if(!empty($_G['setting']['pluginhooks']['global_nav_extra'])) echo $_G['setting']['pluginhooks']['global_nav_extra'];?>
</div>
<?php if(!empty($_G['setting']['plugins']['jsmenu'])) { ?>
<ul class="p_pop h_pop" id="plugin_menu" style="display: none"><?php if(is_array($_G['setting']['plugins']['jsmenu'])) foreach($_G['setting']['plugins']['jsmenu'] as $module) { ?> <?php if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?>
 <li><?php echo $module['url'];?></li>
 <?php } } ?>
</ul>
<?php } ?>
<?php echo $_G['setting']['menunavs'];?>
<div id="mu" class="cl">
<?php if($_G['setting']['subnavs']) { if(is_array($_G['setting']['subnavs'])) foreach($_G['setting']['subnavs'] as $navid => $subnav) { if($_G['setting']['navsubhover'] || $mnid == $navid) { ?>
<ul class="cl <?php if($mnid == $navid) { ?>current<?php } ?>" id="snav_<?php echo $navid;?>" style="display:<?php if($mnid != $navid) { ?>none<?php } ?>">
<?php echo $subnav;?>
</ul>
<?php } } } ?>
</div><?php echo adshow("subnavbanner/a_mu");?></div>

<?php if(!empty($_G['setting']['pluginhooks']['global_header'])) echo $_G['setting']['pluginhooks']['global_header'];?>
<?php } ?>

<div id="wp" class="wp"><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="Trang chủ"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="home.php?mod=spacecp">Thiết đặt</a> <em>&rsaquo;</em><?php if($actives['profile']) { ?>
Hồ sơ
<?php } elseif($actives['verify']) { ?>
Xác nhận
<?php } elseif($actives['avatar']) { ?>
Đổi Avatar
<?php } elseif($actives['credit']) { ?>
Điểm/Tiền
<?php } elseif($actives['usergroup']) { ?>
Nhóm thành viên
<?php } elseif($actives['privacy']) { ?>
Riêng tư
<?php } elseif($actives['sendmail']) { ?>
Email nhắc nhở
<?php } elseif($actives['password']) { ?>
Mật khẩu an toàn
<?php } elseif($actives['promotion']) { ?>
Mã mời
<?php } elseif($actives['plugin']) { ?>
<?php echo $_G['setting']['plugins'][$pluginkey][$_GET['id']]['name'];?>
<?php } ?></div>
</div>
<div id="ct" class="ct2_a wp cl">
<div class="mn">
<div class="bm bw0">
<h1 class="mt"><?php if($actives['profile']) { ?>
Hồ sơ
<?php } elseif($actives['verify']) { ?>
Xác nhận
<?php } elseif($actives['avatar']) { ?>
Đổi Avatar
<?php } elseif($actives['credit']) { ?>
Điểm/Tiền
<?php } elseif($actives['usergroup']) { ?>
Nhóm thành viên
<?php } elseif($actives['privacy']) { ?>
Riêng tư
<?php } elseif($actives['sendmail']) { ?>
Email nhắc nhở
<?php } elseif($actives['password']) { ?>
Mật khẩu an toàn
<?php } elseif($actives['promotion']) { ?>
Mã mời
<?php } elseif($actives['plugin']) { ?>
<?php echo $_G['setting']['plugins'][$pluginkey][$_GET['id']]['name'];?>
<?php } ?></h1>
<!--don't close the div here--><?php if($validate) { ?>
<p class="tbmu mbm">Quản trị từ chối đơn xin đăng ký, hãy điền lý do đăng ký chính đáng.</p>
<form action="member.php?mod=regverify" method="post" autocomplete="off">
<input type="hidden" value="<?php echo FORMHASH;?>" name="formhash" />
<table summary="Hồ sơ" cellspacing="0" cellpadding="0" class="tfm">
<tr>
<th>Bị từ chối vì</th>
<td><?php echo $validate['remark'];?></td>
<td>&nbsp;</td>
</tr>
<tr>
<th>Lý do đăng ký</th>
<td><input type="text" class="px" name="regmessagenew" value="" /></td>
<td>&nbsp;</td>
</tr>
<tr>
<th>&nbsp;</th>
<td colspan="2">
<button type="submit" name="verifysubmit" value="true" class="pn pnc" /><strong>Đăng ký lại</strong></button>
</td>
</tr>
</table>
</div></div>
<div class="appl"><div class="tbn">
<h2 class="mt bbda">Thiết đặt</h2>
<ul>
<li<?php echo $actives['avatar'];?>><a href="home.php?mod=spacecp&amp;ac=avatar">Đổi Avatar</a></li>
<li<?php echo $actives['profile'];?>><a href="home.php?mod=spacecp&amp;ac=profile">Hồ sơ</a></li>
<?php if($_G['setting']['verify']['enabled'] && allowverify() || $_G['setting']['my_app_status'] && $_G['setting']['videophoto']) { ?>
<li<?php echo $actives['verify'];?>><a href="<?php if($_G['setting']['verify']['enabled']) { ?>home.php?mod=spacecp&ac=profile&op=verify<?php } else { ?>home.php?mod=spacecp&ac=videophoto<?php } ?>">Xác nhận</a></li>
<?php } ?>
<li<?php echo $actives['credit'];?>><a href="home.php?mod=spacecp&amp;ac=credit">Điểm/Tiền</a></li>
<li<?php echo $actives['usergroup'];?>><a href="home.php?mod=spacecp&amp;ac=usergroup">Nhóm thành viên</a></li>
<li<?php echo $actives['privacy'];?>><a href="home.php?mod=spacecp&amp;ac=privacy">Riêng tư</a></li>

<?php if($_G['setting']['sendmailday']) { ?><li<?php echo $actives['sendmail'];?>><a href="home.php?mod=spacecp&amp;ac=sendmail">Email nhắc nhở</a></li><?php } ?>
<li<?php echo $actives['password'];?>><a href="home.php?mod=spacecp&amp;ac=profile&amp;op=password">Mật khẩu an toàn</a></li>

<?php if($_G['setting']['creditspolicy']['promotion_visit'] || $_G['setting']['creditspolicy']['promotion_register']) { ?>
<li<?php echo $actives['promotion'];?>><a href="home.php?mod=spacecp&amp;ac=promotion">Mã mời</a></li>
<?php } if(!empty($_G['setting']['plugins']['spacecp'])) { if(is_array($_G['setting']['plugins']['spacecp'])) foreach($_G['setting']['plugins']['spacecp'] as $id => $module) { if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?><li<?php if($_GET['id'] == $id) { ?> class="a"<?php } ?>><a href="home.php?mod=spacecp&amp;ac=plugin&amp;id=<?php echo $id;?>"><?php echo $module['name'];?></a></li><?php } } } ?>
</ul>
</div></div>
<?php } else { if($operation == 'password') { ?>
<p class="bbda pbm mbm"><?php if(!$_G['setting']['connect']['allow'] || !$conisregister) { ?>Bạn phải điền mật khẩu gốc để sửa đổi các thông tin sau<?php } else { ?>Bạn hiện đang sử dụng QQ tài khoản trên trang web, bạn có thể thiết lập mật khẩu cá nhân để có thể sử dụng chức năng tương ứng<?php } ?></p>
<form action="home.php?mod=spacecp&amp;ac=profile" method="post" autocomplete="off">
<input type="hidden" value="<?php echo FORMHASH;?>" name="formhash" />
<table summary="Hồ sơ" cellspacing="0" cellpadding="0" class="tfm">
<?php if(!$_G['setting']['connect']['allow'] || !$conisregister) { ?>
<tr>
<th><span class="rq" title="Bắt buộc">*</span>Mật khẩu cũ</th>
<td><input type="password" name="oldpassword" id="oldpassword" class="px" /></td>
</tr>
<?php } ?>
<tr>
<th>Mật khẩu mới</th>
<td>
<input type="password" name="newpassword" id="newpassword" class="px" />
<p class="d">Nếu không cần phải thay đổi mật khẩu của bạn, xin vui lòng để trống.</p>
</td>
</tr>
<tr>
<th>Xác nhận mật khẩu mới</th>
<td>
<input type="password" name="newpassword2" id="newpassword2"class="px" />
<p class="d">Nếu không cần phải thay đổi mật khẩu của bạn, xin vui lòng để trống.</p>
</td>
</tr>
<tr id="contact"<?php if($_GET['from'] == 'contact') { ?> style="background-color: <?php echo $_G['style']['specialbg'];?>;"<?php } ?>>
<th>Email</th>
<td>
<input type="text" name="emailnew" id="emailnew" value="<?php echo $space['email'];?>" class="px" />
<p class="d">
<?php if(empty($space['newemail'])) { ?>
<img src="<?php echo IMGDIR;?>/mail_active.png" alt="Đã xác nhận" class="vm" /> <span class="xi1">Email đã xác nhận...</span>
<?php } else { ?>
<?php echo $acitvemessage;?>
<?php } ?>
</p>
<?php if($_G['setting']['regverify'] == 1 && (($_G['group']['grouptype'] == 'member' && $_G['adminid'] == 0) || $_G['groupid'] == 8)) { ?><p class="d">Nếu thay đổi địa chỉ, hệ thống sẽ thay đổi cả mật khẩu và phải cập nhập lại mới có hiệu lực.</p><?php } ?>
</td>
</tr>

<tr>
<th>Câu hỏi bảo mật</th>
<td>
<select name="questionidnew" id="questionidnew">
<option value="" selected>Giữ câu hỏi an toàn cũ</option>
<option value="0">Không có câu hỏi bảo mật</option>
<option value="1">Con cún nhà bạn tên gì</option>
<option value="2">Tên người yêu cũ của bạn</option>
<option value="3">Tên trường cấp 3 của bạn</option>
<option value="4">Biển số xe máy của bạn</option>
<option value="5">Bạn biết diễn đàn này qua đâu</option>
<option value="6">Bạn thích ca sĩ nào nhất</option>
<option value="7">Sinh nhật của bạn</option>
</select>
<p class="d">Nếu dùng câu hỏi bảo mật, vui lòng điền</p>
</td>
</tr>

<tr>
<th>Trả lời</th>
<td>
<input type="text" name="answernew" id="answernew" class="px" />
<p class="d">Nếu bạn chọn dùng câu hỏi bảo mật,hãy điền câu trả lời vào đây </p>
</td>
</tr>
<?php if(checkperm('seccode') && ($secqaacheck || $seccodecheck)) { ?><?php $sectpl = '<tr><th><sec></th><td><sec><p class="d"><sec></p></td>';?><?php $_G['sechashi'] = !empty($_G['cookie']['sechashi']) ? $_G['sechash'] + 1 : 0;
$sechash = 'S'.($_G['inajax'] ? 'A' : '').$_G['sid'].$_G['sechashi'];
$sectpl = !empty($sectpl) ? explode("<sec>", $sectpl) : array('<br />',': ','<br />','');
$sectpldefault = $sectpl;
$sectplqaa = str_replace('<hash>', 'qaa'.$sechash, $sectpldefault);
$sectplcode = str_replace('<hash>', 'code'.$sechash, $sectpldefault);
$secshow = !isset($secshow) ? 1 : $secshow;
$sectabindex = !isset($sectabindex) ? 1 : $sectabindex;?><?php
$__STATICURL = STATICURL;$seccheckhtml = <<<EOF

<input name="sechash" type="hidden" value="{$sechash}" />

EOF;
 if($sectpl) { if($secqaacheck) { 
$seccheckhtml .= <<<EOF

{$sectplqaa['0']}Câu hỏi an toàn{$sectplqaa['1']}<input name="secanswer" id="secqaaverify_{$sechash}" type="text" autocomplete="off" style="width:100px" class="txt px vm" onblur="checksec('qaa', '{$sechash}')" tabindex="{$sectabindex}" />
<a href="javascript:;" onclick="updatesecqaa('{$sechash}');doane(event);" class="xi2">Đổi mã khác</a>
<span id="checksecqaaverify_{$sechash}"><img src="{$__STATICURL}image/common/none.gif" width="16" height="16" class="vm" /></span>
{$sectplqaa['2']}<span id="secqaa_{$sechash}"></span>

EOF;
 if($secshow) { 
$seccheckhtml .= <<<EOF
<script type="text/javascript" reload="1">updatesecqaa('{$sechash}');</script>
EOF;
 } 
$seccheckhtml .= <<<EOF

{$sectplqaa['3']}

EOF;
 } if($seccodecheck) { 
$seccheckhtml .= <<<EOF

{$sectplcode['0']}Mã{$sectplcode['1']}<input name="seccodeverify" id="seccodeverify_{$sechash}" type="text" autocomplete="off" style="
EOF;
 if($_G['setting']['seccodedata']['type'] != 1) { 
$seccheckhtml .= <<<EOF
ime-mode:disabled;
EOF;
 } 
$seccheckhtml .= <<<EOF
width:100px" class="txt px vm" onblur="checksec('code', '{$sechash}')" tabindex="{$sectabindex}" />
<a href="javascript:;" onclick="updateseccode('{$sechash}');doane(event);" class="xi2">Đổi mã khác</a>
<span id="checkseccodeverify_{$sechash}"><img src="{$__STATICURL}image/common/none.gif" width="16" height="16" class="vm" /></span>
{$sectplcode['2']}<span id="seccode_{$sechash}"></span>

EOF;
 if($secshow) { 
$seccheckhtml .= <<<EOF
<script type="text/javascript" reload="1">updateseccode('{$sechash}');</script>
EOF;
 } 
$seccheckhtml .= <<<EOF

{$sectplcode['3']}

EOF;
 } } 
$seccheckhtml .= <<<EOF


EOF;
?><?php unset($secshow);?><?php if(empty($secreturn)) { ?><?php echo $seccheckhtml;?><?php } } ?>
<tr>
<th>&nbsp;</th>
<td><button type="submit" name="pwdsubmit" value="true" class="pn pnc" /><strong>Lưu</strong></button></td>
</tr>
</table>
<input type="hidden" name="passwordsubmit" value="true" />
</form>
<?php } else { ?>
<?php if(!empty($_G['setting']['pluginhooks']['spacecp_profile_top'])) echo $_G['setting']['pluginhooks']['spacecp_profile_top'];?><ul class="tb cl">
<?php if($operation != 'verify') { if(is_array($profilegroup)) foreach($profilegroup as $key => $value) { if($value['available']) { ?>
<li <?php echo $opactives[$key];?>><a href="home.php?mod=spacecp&amp;ac=profile&amp;op=<?php echo $key;?>"><?php echo $value['title'];?></a></li>
<?php } } if($_G['setting']['allowspacedomain'] && $_G['setting']['domain']['root']['home'] && checkperm('domainlength')) { ?>
<li <?php echo $opactives['domain'];?>><a href="home.php?mod=spacecp&amp;ac=domain">Không gian tên miền</a></li>
<?php } } else { if($_G['setting']['verify']) { if(is_array($_G['setting']['verify'])) foreach($_G['setting']['verify'] as $vid => $verify) { if($verify['available'] && (empty($verify['groupid']) || in_array($_G['groupid'], $verify['groupid']))) { if($vid != 7) { ?>
<li <?php echo $opactives['verify'.$vid];?>><a href="home.php?mod=spacecp&amp;ac=profile&amp;op=verify&amp;vid=<?php echo $vid;?>"><?php echo $verify['title'];?></a></li>
<?php } elseif($_G['setting']['my_app_status'] && $vid == 7) { ?>
<li <?php echo $opactives['videophoto'];?>><a href="home.php?mod=spacecp&amp;ac=videophoto">Xác minh Video</a></li>
<?php } } } } } if(!empty($_G['setting']['plugins']['spacecp_profile'])) { if(is_array($_G['setting']['plugins']['spacecp_profile'])) foreach($_G['setting']['plugins']['spacecp_profile'] as $id => $module) { if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?><li<?php if($_GET['id'] == $id) { ?> class="a"<?php } ?>><a href="home.php?mod=spacecp&amp;ac=plugin&amp;op=profile&amp;id=<?php echo $id;?>"><?php echo $module['name'];?></a></li><?php } } } ?>
</ul><?php if($vid) { ?>
<p class="tbms mtm <?php if(!$showbtn) { ?>tbms_r<?php } ?>"><?php if($showbtn) { ?>Những thông tin dưới đã duyệt không thể thay đổi.<?php } else { ?>Chúc mừng, bạn đã đăng ký xác nhận thành công, bạn không thể thay đổi những thông tin liên quan.<?php } ?></p>
<?php } ?>
<iframe id="frame_profile" name="frame_profile" style="display: none"></iframe>
<form action="<?php if($operation != 'plugin') { ?>home.php?mod=spacecp&ac=profile&op=<?php echo $operation;?><?php } else { ?>home.php?mod=spacecp&ac=plugin&op=profile&id=<?php echo $_GET['id'];?><?php } ?>" method="post" enctype="multipart/form-data" autocomplete="off"<?php if($operation != 'plugin') { ?> target="frame_profile"<?php } ?> onsubmit="clearErrorInfo();">
<input type="hidden" value="<?php echo FORMHASH;?>" name="formhash" />
<?php if($_GET['vid']) { ?>
<input type="hidden" value="<?php echo $_GET['vid'];?>" name="vid" />
<?php } ?>
<table cellspacing="0" cellpadding="0" class="tfm" id="profilelist">
<tr>
<th>Username</th>
<td><?php echo $_G['member']['username'];?></td>
<td>&nbsp;</td>
</tr><?php if(is_array($settings)) foreach($settings as $key => $value) { if($value['available']) { ?>
<tr id="tr_<?php echo $key;?>">
<th id="th_<?php echo $key;?>"><?php if($value['required']) { ?><span class="rq" title="Bắt buộc">*</span><?php } ?><?php echo $value['title'];?></th>
<td id="td_<?php echo $key;?>">
<?php echo $htmls[$key];?>
</td>
<td class="p">
<?php if($vid) { ?>
<input type="hidden" name="privacy[<?php echo $key;?>]" value="3" />
<?php } else { ?>
<select name="privacy[<?php echo $key;?>]">
<option value="0"<?php if($privacy[$key] == "0") { ?> selected="selected"<?php } ?>>Công khai</option>
<option value="1"<?php if($privacy[$key] == "1") { ?> selected="selected"<?php } ?>>Bạn bè được xem</option>
<option value="3"<?php if($privacy[$key] == "3") { ?> selected="selected"<?php } ?>>Bảo mật</option>
</select>
<?php } ?>
</td>
</tr>
<?php } } if($allowcstatus && in_array('customstatus', $allowitems)) { ?>
<tr>
<th id="th_customstatus">Danh hiệu</th>
<td id="td_customstatus">
<input type="text" value="<?php echo $space['customstatus'];?>" name="customstatus" id="customstatus" class="px" />
<div class="rq mtn" id="showerror_customstatus"></div>
</td>
<td>&nbsp;</td>
</tr>
<?php } if($_G['group']['maxsigsize'] && in_array('sightml', $allowitems)) { ?>
<tr>
<th id="th_sightml">Chữ ký</th>
<td id="td_sightml">
<div class="tedt">
<div class="bar">
<span class="y"><a href="javascript:;" onclick="$('signhtmlpreview').innerHTML = bbcode2html($('sightmlmessage').value)">Xem trước</a></span>
<?php if($_G['group']['allowsigbbcode']) { if($_G['group']['allowsigimgcode']) { ?><?php $seditor = array('sightml', array('bold', 'color', 'img', 'link', 'smilies'));?><?php } else { ?><?php $seditor = array('sightml', array('bold', 'color', 'link', 'smilies'));?><?php } ?><script src="<?php echo $_G['setting']['jspath'];?>seditor.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<div class="fpd">
<?php if(in_array('bold', $seditor['1'])) { ?>
<a href="javascript:;" title="Đậm" class="fbld"<?php if(empty($seditor['2'])) { ?> onclick="seditor_insertunit('<?php echo $seditor['0'];?>', '[b]', '[/b]');doane(event);"<?php } ?>>B</a>
<?php } if(in_array('color', $seditor['1'])) { ?>
<a href="javascript:;" title="Màu chữ" class="fclr" id="<?php echo $seditor['0'];?>forecolor"<?php if(empty($seditor['2'])) { ?> onclick="showColorBox(this.id, 2, '<?php echo $seditor['0'];?>');doane(event);"<?php } ?>>Color</a>
<?php } if(in_array('img', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>img" href="javascript:;" title="Hình ảnh" class="fmg"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'img');doane(event);"<?php } ?>>Image</a>
<?php } if(in_array('link', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>url" href="javascript:;" title="Thêm liên kết" class="flnk"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'url');doane(event);"<?php } ?>>Link</a>
<?php } if(in_array('quote', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>quote" href="javascript:;" title="Trích dẫn" class="fqt"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'quote');doane(event);"<?php } ?>>Quote</a>
<?php } if(in_array('code', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>code" href="javascript:;" title="Mã" class="fcd"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'code');doane(event);"<?php } ?>>Code</a>
<?php } if(in_array('smilies', $seditor['1'])) { ?>
<a href="javascript:;" class="fsml" id="<?php echo $seditor['0'];?>sml"<?php if(empty($seditor['2'])) { ?> onclick="showMenu({'ctrlid':this.id,'evt':'click','layer':2});return false;"<?php } ?>>Smilies</a>
<?php if(empty($seditor['2'])) { ?>
<script type="text/javascript" reload="1">smilies_show('<?php echo $seditor['0'];?>smiliesdiv', <?php echo $_G['setting']['smcols'];?>, '<?php echo $seditor['0'];?>');</script>
<?php } } if(in_array('at', $seditor['1']) && $_G['group']['allowat']) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>at.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<a id="<?php echo $seditor['0'];?>at" href="javascript:;" title="@bạn" class="fat"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'at');doane(event);"<?php } ?>>@bạn</a>
<?php } ?>
<?php echo $seditor['3'];?>
</div><?php } ?>
</div>
<div class="area">
<textarea rows="3" cols="80" name="sightml" id="sightmlmessage" class="pt" onkeydown="ctrlEnter(event, 'profilesubmitbtn');"><?php echo $space['sightml'];?></textarea>
</div>
</div>
<div id="signhtmlpreview"></div>
<div id="showerror_sightml" class="rq mtn"></div>
<script src="<?php echo $_G['setting']['jspath'];?>bbcode.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">var forumallowhtml = 0,allowhtml = 0,allowsmilies = 0,allowbbcode = parseInt('<?php echo $_G['group']['allowsigbbcode'];?>'),allowimgcode = parseInt('<?php echo $_G['group']['allowsigimgcode'];?>');var DISCUZCODE = [];DISCUZCODE['num'] = '-1';DISCUZCODE['html'] = [];</script>
</td>
<td>&nbsp;</td>
</tr>
<?php } if(in_array('timeoffset', $allowitems)) { ?>
<tr>
<th id="th_timeoffset">Múi giờ</th>
<td id="td_timeoffset"><?php $timeoffset = array(
		'9999' => 'Sử dụng giờ mặc định của hệ thống',
		'-12' => '(GMT -12:00) Enewetak Island, Kwajalein Atoll',
		'-11' => '(GMT -11:00) Midway Island, Samoa',
		'-10' => '(GMT -10:00) Hawaii',
		'-9' => '(GMT -09:00) Alaska',
		'-8' => '(GMT -08:00) Pacific Time (U.S. & Canada), Tijuana',
		'-7' => '(GMT -07:00) Mountain Time (U.S. & Canada), Arizona',
		'-6' => '(GMT -06:00) Central Time (U.S. & Canada), Mexico City',
		'-5' => '(GMT -05:00) Eastern Time (U.S. & Canada), Bogota, Lima, Quito',
		'-4' => '(GMT -04:00) Atlantic Time (Canada), Caracas, La Paz',
		'-3.5' => '(GMT -03:30) Newfoundland',
		'-3' => '(GMT -03:00) Brasilia, Buenos Aires, Georgetown, Falkland Islands',
		'-2' => '(GMT -02:00) Mid-Atlantic, Ascension Islands, St. Helena',
		'-1' => '(GMT -01:00) Azores, Cape Verde Islands [GMT] Dublin, London, Lisbon, Casablanca',
		'0' => '(GMT) Casablanca, Dublin, Edinburgh, London, Lisbon, Monrovia',
		'1' => '(GMT +01:00) Berlin, Brussels, Copenhagen, Madrid, Paris, Rome',
		'2' => '(GMT +02:00) Helsinki, Kaliningrad, South Africa, Warsaw',
		'3' => '(GMT +03:00) Baghdad, Riyadh, Moscow, Nairobi',
		'3.5' => '(GMT +03:30) Tehran',
		'4' => '(GMT +04:00) Abu Dhabi, Baku, Muscat, Tebilisi',
		'4.5' => '(GMT +04:30) Kan Buer',
		'5' => '(GMT +05:00) Ekaterinburg, Islamabad, Karachi, Tashkent',
		'5.5' => '(GMT +05:30) Bombay, Calcutta, Madras, New Delhi',
		'5.75' => '(GMT +05:45) Kathmandu',
		'6' => '(GMT +06:00) Almaty, Colombo, Dhaka, Novosibirsk',
		'6.5' => '(GMT +06:30) Yangon',
		'7' => '(GMT +07:00) Bangkok, Hanoi, Jakarta',
		'8' => '(GMT +08:00) Beijing, Hong Kong, Perth, Singapore, Taipei',
		'9' => '(GMT +09:00) Osaka, Sapporo, Seoul, Tokyo, Yakutsk',
		'9.5' => '(GMT +09:30) Adelaide, Darwin',
		'10' => '(GMT +10:00) Canberra, Guam, Melbourne, Sydney, Vladivostok',
		'11' => '(GMT +11:00) Magadan, New Caledonia, Solomon Islands',
		'12' => '(GMT +12:00) Auckland, Wellington, Fiji, Marshall Islands');?><select name="timeoffset"><?php if(is_array($timeoffset)) foreach($timeoffset as $key => $desc) { ?><option value="<?php echo $key;?>"<?php if($key==$space['timeoffset']) { ?> selected="selected"<?php } ?>><?php echo $desc;?></option>
<?php } ?>
</select>
<p class="mtn">Thời gian hiện tại : <?php echo dgmdate($_G[timestamp]);?></p>
<p class="d">Bạn có thể chỉnh múi giờ cho phù hợp với nơi ở. VN là GMT +7</p>
</td>
<td>&nbsp;</td>
</tr>
<?php } if($operation == 'contact') { ?>
<tr>
<th id="th_sightml">Email</th>
<td id="td_sightml"><?php echo $space['email'];?>&nbsp;(<a href="home.php?mod=spacecp&amp;ac=profile&amp;op=password&amp;from=contact#contact">Sửa đổi</a>)</td>
<td>&nbsp;</td>
</tr>
<?php } if($operation == 'plugin') { ?><?php include(template($_GET['id']));?><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['spacecp_profile_extra'])) echo $_G['setting']['pluginhooks']['spacecp_profile_extra'];?>
<?php if($showbtn) { ?>
<tr>
<th>&nbsp;</th>
<td colspan="2">
<input type="hidden" name="profilesubmit" value="true" />
<button type="submit" name="profilesubmitbtn" id="profilesubmitbtn" value="true" class="pn pnc" /><strong>Lưu</strong></button>
<span id="submit_result" class="rq"></span>
</td>
</tr>
<?php } ?>
</table>
<?php if(!empty($_G['setting']['pluginhooks']['spacecp_profile_bottom'])) echo $_G['setting']['pluginhooks']['spacecp_profile_bottom'];?>
</form>
<script type="text/javascript">
function show_error(fieldid, extrainfo) {
var elem = $('th_'+fieldid);
if(elem) {
elem.className = "rq";
fieldname = elem.innerHTML;
extrainfo = (typeof extrainfo == "string") ? extrainfo : "";
$('showerror_'+fieldid).innerHTML = "Hãy kiểm tra các mục dữ liệu " + extrainfo;
$(fieldid).focus();
}
}
function show_success(message) {
message = message == '' ? 'Cập nhập thành công!' : message;
showDialog(message, 'right', 'Nhắc nhở', function(){
top.window.location.href = top.window.location.href;
}, 0, null, '', '', '', '', 3);
}
function clearErrorInfo() {
var spanObj = $('profilelist').getElementsByTagName("div");
for(var i in spanObj) {
if(typeof spanObj[i].id != "undefined" && spanObj[i].id.indexOf("_")) {
var ids = explode('_', spanObj[i].id);
if(ids[0] == "showerror") {
spanObj[i].innerHTML = '';
$('th_'+ids[1]).className = '';
}
}
}
}
</script>
<?php } ?>
</div>
</div>
<div class="appl"><div class="tbn">
<h2 class="mt bbda">Thiết đặt</h2>
<ul>
<li<?php echo $actives['avatar'];?>><a href="home.php?mod=spacecp&amp;ac=avatar">Đổi Avatar</a></li>
<li<?php echo $actives['profile'];?>><a href="home.php?mod=spacecp&amp;ac=profile">Hồ sơ</a></li>
<?php if($_G['setting']['verify']['enabled'] && allowverify() || $_G['setting']['my_app_status'] && $_G['setting']['videophoto']) { ?>
<li<?php echo $actives['verify'];?>><a href="<?php if($_G['setting']['verify']['enabled']) { ?>home.php?mod=spacecp&ac=profile&op=verify<?php } else { ?>home.php?mod=spacecp&ac=videophoto<?php } ?>">Xác nhận</a></li>
<?php } ?>
<li<?php echo $actives['credit'];?>><a href="home.php?mod=spacecp&amp;ac=credit">Điểm/Tiền</a></li>
<li<?php echo $actives['usergroup'];?>><a href="home.php?mod=spacecp&amp;ac=usergroup">Nhóm thành viên</a></li>
<li<?php echo $actives['privacy'];?>><a href="home.php?mod=spacecp&amp;ac=privacy">Riêng tư</a></li>

<?php if($_G['setting']['sendmailday']) { ?><li<?php echo $actives['sendmail'];?>><a href="home.php?mod=spacecp&amp;ac=sendmail">Email nhắc nhở</a></li><?php } ?>
<li<?php echo $actives['password'];?>><a href="home.php?mod=spacecp&amp;ac=profile&amp;op=password">Mật khẩu an toàn</a></li>

<?php if($_G['setting']['creditspolicy']['promotion_visit'] || $_G['setting']['creditspolicy']['promotion_register']) { ?>
<li<?php echo $actives['promotion'];?>><a href="home.php?mod=spacecp&amp;ac=promotion">Mã mời</a></li>
<?php } if(!empty($_G['setting']['plugins']['spacecp'])) { if(is_array($_G['setting']['plugins']['spacecp'])) foreach($_G['setting']['plugins']['spacecp'] as $id => $module) { if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?><li<?php if($_GET['id'] == $id) { ?> class="a"<?php } ?>><a href="home.php?mod=spacecp&amp;ac=plugin&amp;id=<?php echo $id;?>"><?php echo $module['name'];?></a></li><?php } } } ?>
</ul>
</div></div>
<?php } ?>
</div>	</div>
<?php if(empty($topic) || ($topic['usefooter'])) { ?><?php $focusid = getfocus_rand($_G[basescript]);?><?php if($focusid !== null) { ?><?php $focus = $_G['cache']['focus']['data'][$focusid];?><?php $focusnum = count($_G['setting']['focus'][$_G[basescript]]);?><div class="focus" id="sitefocus">
<div class="bm">
<div class="bm_h cl">
<a href="javascript:;" onclick="setcookie('nofocus_<?php echo $_G['basescript'];?>', 1, <?php echo $_G['cache']['focus']['cookie'];?>*3600);$('sitefocus').style.display='none'" class="y" title="Đóng">Đóng</a>
<h2>
<?php if($_G['cache']['focus']['title']) { ?><?php echo $_G['cache']['focus']['title'];?><?php } else { ?>Thông tin<?php } ?>
<span id="focus_ctrl" class="fctrl"><img src="<?php echo IMGDIR;?>/pic_nv_prev.gif" alt="Trước" title="Trước" id="focusprev" class="cur1" onclick="showfocus('prev');" /> <em><span id="focuscur"></span>/<?php echo $focusnum;?></em> <img src="<?php echo IMGDIR;?>/pic_nv_next.gif" alt="Sau" title="Sau" id="focusnext" class="cur1" onclick="showfocus('next')" /></span>
</h2>
</div>
<div class="bm_c" id="focus_con">
</div>
</div>
</div><?php $focusi = 0;?><?php if(is_array($_G['setting']['focus'][$_G['basescript']])) foreach($_G['setting']['focus'][$_G['basescript']] as $id) { ?><div class="bm_c" style="display: none" id="focus_<?php echo $focusi;?>">
<dl class="xld cl bbda">
<dt><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" class="xi2" target="_blank"><?php echo $_G['cache']['focus']['data'][$id]['subject'];?></a></dt>
<?php if($_G['cache']['focus']['data'][$id]['image']) { ?>
<dd class="m"><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" target="_blank"><img src="<?php echo $_G['cache']['focus']['data'][$id]['image'];?>" alt="<?php echo $_G['cache']['focus']['data'][$id]['subject'];?>" /></a></dd>
<?php } ?>
<dd><?php echo $_G['cache']['focus']['data'][$id]['summary'];?></dd>
</dl>
<p class="ptn cl"><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" class="xi2 y" target="_blank">Xem &raquo;</a></p>
</div><?php $focusi ++;?><?php } ?>
<script type="text/javascript">
var focusnum = <?php echo $focusnum;?>;
if(focusnum < 2) {
$('focus_ctrl').style.display = 'none';
}
if(!$('focuscur').innerHTML) {
var randomnum = parseInt(Math.round(Math.random() * focusnum));
$('focuscur').innerHTML = Math.max(1, randomnum);
}
showfocus();
var focusautoshow = window.setInterval('showfocus(\'next\', 1);', 5000);
</script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1) { ?>
<div class="focus patch" id="patch_notice"></div>
<?php } ?><?php echo adshow("footerbanner/wp a_f/1");?><?php echo adshow("footerbanner/wp a_f/2");?><?php echo adshow("footerbanner/wp a_f/3");?><?php echo adshow("float/a_fl/1");?><?php echo adshow("float/a_fr/2");?><?php echo adshow("couplebanner/a_fl a_cb/1");?><?php echo adshow("couplebanner/a_fr a_cb/2");?><?php echo adshow("cornerbanner/a_cn");?><?php if(!empty($_G['setting']['pluginhooks']['global_footer'])) echo $_G['setting']['pluginhooks']['global_footer'];?>
<div id="ft" class="wp cl">
<div id="flk" class="y">
<p><?php if(is_array($_G['setting']['footernavs'])) foreach($_G['setting']['footernavs'] as $nav) { if($nav['available'] && ($nav['type'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1)) ||
!$nav['type'] && ($nav['id'] == 'stat' && $_G['group']['allowstatdata'] || $nav['id'] == 'report' && $_G['uid'] || $nav['id'] == 'archiver' || $nav['id'] == 'mobile'))) { ?><?php echo $nav['code'];?><span class="pipe">|</span><?php } } ?>
<strong><a href="<?php echo $_G['setting']['siteurl'];?>" target="_blank"><?php echo $_G['setting']['sitename'];?></a></strong>
<?php if(!empty($_G['setting']['pluginhooks']['global_footerlink'])) echo $_G['setting']['pluginhooks']['global_footerlink'];?>
<?php if($_G['setting']['statcode']) { ?><?php echo $_G['setting']['statcode'];?><?php } ?>
</p>
<p class="xs0">
GMT<?php echo $_G['timenow']['offset'];?>, <?php echo $_G['timenow']['time'];?>
<span id="debuginfo">
<?php if(debuginfo()) { ?>, Processed in <?php echo $_G['debuginfo']['time'];?> second(s), <?php echo $_G['debuginfo']['queries'];?> queries
<?php if($_G['gzipcompress']) { ?>, Gzip On<?php } if(C::memory()->type) { ?>, <?php echo ucwords(C::memory()->type); ?> On<?php } ?>.
<?php } ?>
</span>
</p>
</div>
<div id="frt">
<p>Powered by <strong><a href="http://www.discuz.net" target="_blank">Discuz!</a></strong> <em><?php echo $_G['setting']['version'];?></em><?php if(!empty($_G['setting']['boardlicensed'])) { ?> <a href="http://license.comsenz.com/?pid=1&amp;host=<?php echo $_SERVER['HTTP_HOST'];?>" target="_blank">Licensed</a><?php } ?></p>
<p class="xs0">&copy; 2012 <a href="<?php echo $_G['setting']['siteurl'];?>" target="_blank"><?php echo $_G['setting']['sitename'];?></a></p>
</div><?php updatesession();?><?php if($_G['uid'] && $_G['group']['allowinvisible']) { ?>
<script type="text/javascript">
var invisiblestatus = '<?php if($_G['session']['invisible']) { ?>Ẩn nick<?php } else { ?>Online<?php } ?>';
var loginstatusobj = $('loginstatusid');
if(loginstatusobj != undefined && loginstatusobj != null) loginstatusobj.innerHTML = invisiblestatus;
</script>
<?php } ?>
</div>

<?php if($upgradecredit !== false) { ?>
<div id="g_upmine_menu" class="tip tip_3" style="display:none;">
<div class="tip_c">
Điểm <?php echo $_G['member']['credits'];?>, Cần thiết để lên cấp <?php echo $upgradecredit;?> Điểm
</div>
<div class="tip_horn"></div>
</div>
<?php } } if(!$_G['setting']['bbclosed']) { if($_G['uid'] && !isset($_G['cookie']['checkpm'])) { ?>
<script src="home.php?mod=spacecp&ac=pm&op=checknewpm&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if($_G['uid'] && helper_access::check_module('follow') && !isset($_G['cookie']['checkfollow'])) { ?>
<script src="home.php?mod=spacecp&ac=follow&op=checkfeed&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if(!isset($_G['cookie']['sendmail'])) { ?>
<script src="home.php?mod=misc&ac=sendmail&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && !isset($_G['cookie']['checkpatch'])) { ?>
<script src="misc.php?mod=patch&action=checkpatch&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } } if($_GET['diy'] == 'yes') { if(check_diy_perm($topic) && (empty($do) || $do != 'index')) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>portal_diy<?php if(!check_diy_perm($topic, 'layout')) { ?>_data<?php } ?>.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($space['self'] && CURMODULE == 'space' && $do == 'index') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>space_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1) { ?>
<script type="text/javascript">patchNotice();</script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && empty($_G['cookie']['pluginnotice'])) { ?>
<div class="focus plugin" id="plugin_notice"></div>
<script type="text/javascript">pluginNotice();</script>
<?php } if($_G['member']['newprompt'] && (empty($_G['cookie']['promptstate_'.$_G['uid']]) || $_G['cookie']['promptstate_'.$_G['uid']] != $_G['member']['newprompt']) && $_GET['do'] != 'notice') { ?>
<script type="text/javascript">noticeTitle();</script>
<?php } ?><?php userappprompt();?><?php if($_G['basescript'] != 'userapp') { ?>
<span id="scrolltop" onclick="window.scrollTo('0','0')">Lên trên</span>
<script type="text/javascript">_attachEvent(window, 'scroll', function(){showTopLink();});checkBlind();</script>
<?php } ?><?php output();?></body>
</html>
