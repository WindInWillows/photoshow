<?php
	session_start();
    include "admin/sql_def.php";
    $mysqli = new mysqli($host,$usr_name,$password,$sql_name);
	$mysqli->query("SET NAMES UTF8");
$table_name = "news";
	if(!isset($_GET["id"])){
		header("location: news.php");
		exit();
	}
	$text_id = $_GET["id"];
	
	$result = $mysqli->query("SELECT * FROM `$table_name` WHERE `id` = $text_id ORDER BY `id` ASC");
	if(($row = $result->fetch_object()) == null){
		echo "not found";
		exit();
	}
	else {
		$title = $row->title;
		$main = $row->main;
		$last_date = $row->last_date;	
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="ctl00_Head1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="<?=$title?>" />
<meta name="copyright" content="<?=$title?>" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
<meta id="viewport" name="viewport" content="width=1500">
<meta name="viewport" content="width=1500,target-densitydpi=high-dpi,initial-scale=0.2, minimum-scale=0.2, maximum-scale=1.0"/>
<title><?=$title ?></title>
<?php include 'include/link.php';?>
</head>

<body>
<div id="wrapper">
	<div class="container clearfix">
		<?php include 'include/left.php';?>
	<div class="pageright">

       <div class="news">
			<div class="detail">
				<article class="clearfix" ciadsid="1">
                    <p style="font-size:28px;"><?=$title?></p>
					
					<p style="float:left; line-height:30px; padding-right:50px;">Release time：<?=$last_date?></p>
                    <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a><a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a><a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq"></a><a title="分享到人人网" href="#" class="bds_renren" data-cmd="renren"></a><a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin"></a></div>

					<p><br></p>
					<pre></pre>
					<p><br></p>
					<div class="main">
                    	<?=$main?>
                    </div>				
                </article>
			</div>
		</div>

<?php include 'include/footer.php';?>	
	
</div>

	</div>

</div>

<script src="/templates/hytpl/js/lib/jquery.flexslider-min.js"></script>

<script src="/templates/hytpl/js/lib/jquery.colorbox-min.js"></script>

<script src="/templates/hytpl/js/base.js"></script>

<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>                                   
</body>
</html>