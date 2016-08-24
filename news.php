<?php
	session_start();
    include "admin/sql_def.php";
    $mysqli = new mysqli($host,$usr_name,$password,$sql_name);
	$mysqli->query("SET NAMES UTF8");
$table_name = "news";
	$result = $mysqli->query("SELECT count(*) FROM `$table_name`");
	if($result != null){
		$row = $result->fetch_row();
		$max_num = $row[0];	
	}
	else $max_num = 0;
	
	$PAGE_SIZE = 6;
	$maxpage = ceil($max_num / $PAGE_SIZE);
	
	if(isset($_GET["page"]) && $_GET["page"]>0 && $_GET["page"]<=$maxpage){
		$page = $_GET["page"];
	} else $page = 1;
	
	$start_id = ($page-1) * $PAGE_SIZE;
	$result = $mysqli->query("SELECT * FROM `$table_name` ORDER BY `$table_name`.`id` DESC limit $start_id,$PAGE_SIZE;");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="ctl00_Head1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="最新活动_不二公社" />
<meta name="copyright" content="最新活动_不二公社" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta id="viewport" name="viewport" content="width=1500">
<meta name="viewport"
	content="width=1500,target-densitydpi=high-dpi,initial-scale=0.2, minimum-scale=0.2, maximum-scale=1.0" />
<title>最新活动_不二公社</title>
<?php include 'include/link.php';?>
 
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
						opt : 1,
					},function(response){
						if(response!=1)
							alert(response);
						location.reload();
					}
				)
			}
		}
	);
});
</script>';	
	}
?>


        
</head>

<body>
<div id="wrapper">
<div class="container clearfix">
<?php include 'include/left.php';?>
<div class="pageright">

<div class="news">
<div class="title03"><a href="admin/new_news.php" style="font-size:14px; ">新建</a></div>

<div class="news-list">
<ul class="clearfix">

<?php 
    while(($row = $result->fetch_object()) != null)
	{
		$abs_img = $row->abs_img;
		$text_id = $row->id;
		$last_date = $row->last_date;
		$title =$row->title;
		$date = explode('-',$last_date);
		$mon = $date[1];
		$day = $date[2];
		
	    echo '<li><div class="pic"><a href="newsdetail.php?id='.$text_id.'">
        <img src=".'.$abs_img.'" width="330" height="154"></a><time>
		    <span>'.$day.'</span><em>'.$mon.'</em></time></div><div class="desc">
		    <h2>'.$title.'</h2><p>&nbsp;...</p>';
		if(isset($_SESSION["account"])) echo '<a href="admin/edit_news.php?text_id='.$text_id.'">编辑 </a>&nbsp;&nbsp;';
		echo '<a class="more" href="newsdetail.php?id='.$text_id.'">SEE DETAILS</a>&nbsp;&nbsp;';
		if(isset($_SESSION["account"])) echo '<a class="del" id="'.$text_id.'">删除</a>';
		echo '</div></li>';
	}
?>

</ul>

</div>
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

<?php include 'include/footer_script.php';?>

<?php include 'include/share.php';?>

</body>
</html>
