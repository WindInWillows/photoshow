<?php session_start();?>
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
<title>技术培训_不二公社</title>
<?php include 'include/link.php';?>
        
</head>

<body>
<div id="wrapper">
<div class="container clearfix">
<?php include 'include/left.php';?>
<div class="pageright">

<div class="news">
<?php
    include "./admin/sql_def.php";
    $mysqli = new mysqli($host,$usr_name,$password,$sql_name);
	$mysqli->query("SET NAMES UTF8");
$table_name = "train";
	
	
	if(isset($_SESSION["account"])){
		echo "<p align='center' style='font-size:20px;'><a href='admin/new_text.php' style='color:blue;'>新建图文消息</a></p>";
	}
	
	echo "<hr /><br />";
	
	$result = $mysqli->query("SELECT count(*) FROM `$table_name`");
	if($result != null){
		$row = $result->fetch_row();
		$max_num = $row[0];	
	}
	else $max_num = 0;
	
	$PAGE_SIZE = 7;
	$maxpage = ceil($max_num / $PAGE_SIZE);
	
	if(isset($_GET["page"]) && $_GET["page"]>0 && $_GET["page"]<=$maxpage){
		$page = $_GET["page"];
	} else $page = 1;
	
	$start_id = ($page-1) * $PAGE_SIZE;
	$result = $mysqli->query("SELECT * FROM `$table_name` ORDER BY `$table_name`.`id` DESC limit $start_id,$PAGE_SIZE;");
	
	while(($row = $result->fetch_object()) != null){
		$man_text = "";
		$id = $row->id;
		if(isset($_SESSION["account"])){
			$man_text = "<a class='del' id='$id' style='color:blue'>删除</a>&nbsp;&nbsp;
						<a class='edit' style='color:blue' href='admin/edit.php?text_id=$id'>编辑</a>";
		}
		echo "<ul><div>
				<a href='./text.php?id=$id'>
					<h2>$row->title</h2>
				</a>
				<span>简介：$row->abstract...<a href='./text.php?id=$id' style='color:blue'>更多</a></span>
				<p>$row->last_date &nbsp;&nbsp; $man_text</p>
			</div></ul>
			<hr /> <br />
			";	
	}
	
?>

</div>

<?php
	
	$prepage = $page == 2 ? 1 : $page - 1;
	$nextpage = $page == $maxpage ? 0: $page + 1;
	$pagenav = '<div class="pagenav">';
	if($page > 1){
		$pagenav .= '<a title="上一页" href="?page='.$prepage.'"><img src="../images/btn_prev.png"></a>';
	}

	$half = 3;
	$list_start = $page - $half > 0 ? $page - $half : 1;
	$list_end = $page + $half <= $maxpage ? $page + $half: $maxpage;
	
	for($j = $list_start; $j <= $list_end; $j++){
		if($j != $page){
			$pagenav .= '<a href="?page='.$j.'">'.$j.'</a>';
		}
		else {
			$pagenav .= '<a	class="current" style="background-color:#A5A5A5; color:#FDFDFD">'.$page.'</a>';			
		}
	}
	
	if($page < $maxpage){
		$pagenav .= '<a title="下一页" href="?page='.$nextpage.'"><img src="/images/btn_next.png" /></a>';	
	}
	
	$pagenav .= '</div>';
	echo $pagenav;
?>

<?php include 'include/footer.php';?>

</div>
</div>

</div>

</div>

</div>

<?php 
if(isset($_SESSION["account"])){
		echo '<script>
$(document).ready(function(e) {
    $("a.del").click(
		function(){
			if(window.confirm("确认要删除该图文？不可恢复！！"))
			{
				var t_id = $(this).attr("id");
				$.post("admin/del_text.php",{
						text_id:t_id,
					},function(response){
						if(response!=1)
							alert(response);
						location.reload();
					}
				)
			}
		}
	);
	
	$("a.set_top").click(
		function(){
			$.post(
				"admin/set_top.php",
				{text_id:$(this).attr("id")},
				function(res){
					location.reload();
				}
			)
		}
	);
	
});
</script>';
	}
?>

<?php include 'include/footer_script.php';?>

<?php include 'include/share.php';?>

</body>
</html>
