<?php
	session_start();
	include "admin/sql_def.php";
	$mysqli = new mysqli($host,$usr_name,$password,$sql_name);
	$mysqli->query("SET NAMES UTF8");
	$table_name = "about";
	$sql = "SELECT * FROM `$table_name`;";
	$ans = $mysqli->query($sql);
	$title = "";	
	$main_text = "";
	$date = null;
	if($ans != null){
		if(($row=$ans->fetch_object()) != null)	{
			$title = $row->title;
			$main_text = $row->main;
			$date = $row->last_date;	
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head id="ctl00_Head1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="品牌故事_不二公社" />
<meta name="copyright" content="品牌故事_不二公社" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta id="viewport" name="viewport" content="width=1500">
<meta name="viewport"
	content="width=1500,target-densitydpi=high-dpi,initial-scale=0.2, minimum-scale=0.2, maximum-scale=1.0" />
<title>品牌故事_不二公社</title>
<?php include 'include/link.php';?>
</head>

<body>
<div id="wrapper">
<div class="container clearfix"><?php include '/include/left.php';?>
<div class="pageright"><!--
<div class="music">
    <audio id="audio" controls autoplay>
       <source src="/1.mp3" type="audio/mpeg">
       您的浏览器不支持audio
    </audio>
    <a id="musicBtn" href="/">ON</a>
</div>	
-->

<div class="subnav clearfix"><span class="l">ABOUT</span>
<ul class="l">
	<li class="selected"><a href="/about.php">私人定制</a>&nbsp;&nbsp;/&nbsp;&nbsp;</li>
	<li><a href="/team.php">技术团队</a>&nbsp;&nbsp;/&nbsp;&nbsp;</li>
	<!--<li><a href="/dress.php">婚纱礼服</a></li>-->
</ul>
</div>
<div class="about">
<article>

<p style="font-size: 28px;"><?=$title?></p>
<div align="right"> <?php if(isset($_SESSION["account"])) echo '<a href="admin/edit_about.php?opt=1">编辑</a>&nbsp;&nbsp;';?><?=$date==null ? "" : $date?></div>
<hr /><br /><br />

<?=$main_text?>

</article></div>

<?php include 'include/footer.php';?>


</div>

</div>

</div>

<script src="/templates/hytpl/js/lib/jquery.flexslider-min.js"></script>

<script src="/templates/hytpl/js/lib/jquery.colorbox-min.js"></script>

<script src="/templates/hytpl/js/base.js"></script>


<?php include 'include/share.php';?>
</body>
</html>
