<?php
	session_start();
    include "./admin/sql_def.php";
    $mysqli = new mysqli($host,$usr_name,$password,$sql_name);
	$mysqli->query("SET NAMES UTF8");
$table_name = "train";
	if(!isset($_GET["id"])){
		header("location: train.php");	
		exit();
	}
	$text_id = $_GET["id"];
	
	$result = $mysqli->query("SELECT * FROM `$table_name` WHERE `id` = $text_id ORDER BY `id` ASC");
	if(($row = $result->fetch_object()) == null){
		echo "not found";
		exit();
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="ctl00_Head1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="技术培训_不二公社" />
<meta name="copyright" content="技术培训_不二公社" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta id="viewport" name="viewport" content="width=1500">
<meta name="viewport"
	content="width=1500,target-densitydpi=high-dpi,initial-scale=0.2, minimum-scale=0.2, maximum-scale=1.0" />
<title><?php $row->title;?></title>
<?php include 'include/link.php';?>
        
</head>

<body>
<div id="wrapper">
<div class="container clearfix">
<?php include 'include/left.php';?>
<div class="pageright">

<div class="news">
<h1 align="center"><?php echo $row->title;?> </h1>
<div>
<?php
if(isset($_SESSION["account"]))
echo '
<span align="left">
<a href="admin/edit.php?text_id='.$row->id.'">编辑</a>&nbsp;&nbsp;
<a id="del_text">删除</a>&nbsp;&nbsp;
</span>';
?>
<span><?php echo $row->last_date;?> </span> </div> 

<hr /><br />
<div>
<?php echo $row->main;?>
</div>

</div>

<?php include 'include/footer.php';?>

</div>
</div>



</div>

</div>

</div>


<?php include 'include/footer_script.php';?>

<?php include 'include/share.php';?>
<script>
$(document).ready(function(e) {
    $("a#del_text").click(
		function(){
			if(window.confirm("确实要删除此消息？不可恢复！")){
			$.post("admin/del_text.php",
			{
				text_id : <?php echo $row->id;?>,
			},
				function(response){
					location.href = "train.php";
				}
			)
		}
	}
	);
});
</script>
</body>
</html>
