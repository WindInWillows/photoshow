<?php require_once './admin/logon_head.php';?>
<div class="pageleft l"><nav id="nav">
<?php 
	$name = $_SERVER['PHP_SELF'];
	$tags = array("/index.php","/about.php","/gallery.php","/works.php","/visual.php","/news.php","/train.php");
//	echo $name;
?>

<ul>
	<li <?php if($name == $tags[0]){echo 'class="selected"';}?>><a href="/" style="left: 0px; opacity: 1;">&nbsp;&nbsp;&nbsp;首页&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;HOME</a></li>
	<li <?php if($name == $tags[1]){echo 'class="selected"';}?>><a href="/about.php" style="left: 0px; opacity: 1;">品牌故事&nbsp;/&nbsp;BRAND STORY</a></li>
	<li <?php if($name == $tags[2]){echo 'class="selected"';}?>><a href="/gallery.php" style="left: 0px; opacity: 1;">婚纱跟拍&nbsp;/&nbsp;WEDDING DRESS SHOOT</a></li>
	<li <?php if($name == $tags[3]){echo 'class="selected"';}?>><a href="/works.php" style="left: 0px; opacity: 1;">婚纱客照&nbsp;/&nbsp;GUEST PHOTO</a></li>
	<li <?php if($name == $tags[4]){echo 'class="selected"';}?>><a href="/visual.php" style="left: 0px; opacity: 1;">写真定制&nbsp;/&nbsp;PHOTO CUSTOMIZATION</a></li>
	<li <?php if($name == $tags[5]){echo 'class="selected"';}?>><a href="/news.php" style="left: 0px; opacity: 1;">环球旅拍&nbsp;/&nbsp;GLOBAL SHOOT</a></li>
	<li <?php if($name == $tags[6]){echo 'class="selected"';}?>><a href="/train.php" style="left: 0px; opacity: 1;">技术培训&nbsp;/&nbsp;TECHNICAL TRAINING</a></li>
</ul>

</nav>

<img src="/templates/hytpl/images/logo_min.jpg" style="width: 250px;">

<div class="iconlink clearfix"><a class="weixin"
	href="/images/weixin.jpg"><img
	src="/templates/hytpl/images/icon_weixin.png"></a> <a
	href="http://wpa.qq.com/msgrd?v=3&uin=2159992633&site=qq&menu=yes"
	target="_blank"><img src="/templates/hytpl/images/icon_qq.png"></a> <a
	href="http://weibo.com/209090034" target="_blank"><img
	src="/templates/hytpl/images/icon_weibo.png"></a></div>

<div class="address">
<p>中国·郑州 二七区 大学路航海路二七万达3号院10号楼2单元1104<br />
</p>
<p>不二公社</p>
<p>电话：15978828002</p>
<p>微博：@不二匠心</p>
<p>微信：不二公社小站</p>
<p>QQ: 2159992633</p>
</div>

</div>
