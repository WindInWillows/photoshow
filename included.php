<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head id="ctl00_Head1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="婚纱摄影网站" />
<meta name="keywords" content="婚纱摄影" />
<meta name="author" content="婚纱跟拍_不二摄影" />
<meta name="copyright" content="婚纱跟拍_不二摄影" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta id="viewport" name="viewport" content="width=1500">
<meta name="viewport"
	content="width=1500,target-densitydpi=high-dpi,initial-scale=0.2, minimum-scale=0.2, maximum-scale=1.0" />
<title>婚纱跟拍_不二摄影</title>

<?php include 'include/link.php';?>
	<script type="text/javascript" src="/templates/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="/templates/source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<link rel="stylesheet" type="text/css" href="/templates/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="/templates/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

</head>

<body>
<?php 
	
	$pagesize = 12;
	$page = 1;
	if(isset($_GET["page"])){
		$page = $_GET["page"];
	}
    include "./admin/sql_def.php";
    $mysqli = new mysqli($host,$usr_name,$password,$sql_name);
    $mysqli->query("SET NAMES UTF8");
    
	$sql = "SELECT  COUNT(*) FROM( SELECT  id  FROM  $table_name GROUP BY  family) $table_name;";
	$result = $mysqli->query($sql);
    $max_num = 0;
    if($result == null) {
        echo "Mysql error!";
        exit();
    }
	else {
		$row = $result->fetch_row();
		$max_num = $row[0];	
	}
	
	$sql = "SELECT MAX(family) from $table_name limit 0,1";
	$result = $mysqli->query($sql);
    $max = 0;
    if($result == null) {
        echo "Mysql error!";
        exit();
    }
    else{
        $row = $result->fetch_row();
        $max = $row[0];
    }

	$maxpage = ceil($max_num / $pagesize);

	if($page > $maxpage){
		$page = $maxpage;	
	}
	if(isset($_SESSION["account"])){
		include './admin/upload_form2.php';
	}
   ?>


<div id="wrapper">

<div class="container clearfix">
<?php include 'include/left.php';?>
<div class="pageright">

<div class="gallery-list">
<ul class="clearfix">
   
   <?php
   $page_num = ($page-1)*$pagesize;
   $sql = "SELECT family FROM (SELECT family FROM $table_name GROUP BY family )$table_name order by family desc LIMIT $page_num, $pagesize";
   $result_r = $mysqli->query($sql);
   
//    for ($i = $max-($page-1)*$pagesize;$i > 0 && $k_num<$pagesize;$i--,$k_num++){
	while($result_r != null && ($row_r = $result_r->fetch_object()) != null){
		$i = $row_r->family;
		
		$result = $mysqli->query("SELECT * FROM $table_name where family = $i and inf = 'main'");
       	
        if(($row = $result->fetch_object()) != null){
            $image = ($row->path).($row->name);
            echo '<li><a class="btn gallery-buttons'.$i.'" data-fancybox-group="gallery'.$i.'"
		      href="'.$image.'"><img src="'.$image.'"></a>';
        }
        else {
			$sql = "SELECT MAX(id) from $table_name where family = $i";
			$result = $mysqli->query($sql);

			$row = $result->fetch_row();
			if($row == null) continue;
			$maxid = $row[0];
			$sql = "UPDATE  `$sql_name`.`".$table_name."` SET  `inf` =  'main' WHERE  `".$table_name."`.`id` =$maxid LIMIT 1 ;";
            $result = $mysqli->query($sql);
	
			$result = $mysqli->query("SELECT * FROM $table_name where family = $i and inf = 'main'");
			if($result == null)continue;
			$row = $result->fetch_object();
			if($row == null) continue;
			$image = ($row->path).($row->name);
            echo '<li><a class="btn gallery-buttons'.$i.'" data-fancybox-group="gallery'.$i.'"
		      href="'.$image.'">
	       <img src="'.$image.'"></a>';
        }
        
        $result = $mysqli->query("SELECT * FROM $table_name WHERE family = $i and inf != 'main'");
        $group_length = 1;
        if($result == null ||$result == false) {
            continue;
        }
        while(($row = $result->fetch_object()) != null)
        {
            $group_length++;
            $image = ($row->path).($row->name);
            echo '<a class="gallery-buttons'.$i.'" data-fancybox-group="gallery'.$i.'"
		      href="'.$image.'"></a>';
        }
        echo '<script>
	$(function(){
		$(".gallery-buttons'.$i.'").fancybox({
			closeBtn:false,
			helpers:{
				title:{
					type:"inside"
				},
				buttons:{}
			},
			afterLoad:function() {
				this.title = "Image " + (this.index + 1) + " of " + '.$group_length.' + (this.title ? " - " + this.title : "");
			}
		});
	});

</script>';
            
        
        if(isset($_SESSION["account"])){
//             include 'templates/menu.php';
            echo '<div align="center" class="operator" style="padding:0px 10px 10px 15px"><p><a class="del" id="'.$i.'" style="display: inline;">删除</a>&nbsp;&nbsp;<a class="" target="_blank" href="admin/box.php?table='.$table_name.'&family='.$i.'" style="display: inline">修改</a></p></div>';
        }
        echo ' </li>';
    }
	
    $mysqli->close();
?>


</ul>

<?php
	$maxpage = ceil($max_num / $pagesize);
	$prepage = $page == 1? 0 : $page - 1;
	$nextpage = $page == $maxpage ? 0: $page + 1;
	$pagenav = '<div class="pagenav">';
	if($page > 1){
		$pagenav .= '<a title="上一页" href="?page='.$prepage.'"><img src="/images/btn_prev.png"></a>';
	}

	$half = 7;
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




</div>
<?php 
if(isset($_SESSION["account"])){
		echo '<script>
$(document).ready(function(e) {
    $("a.del").click(
		function(){
			if(window.confirm("确认要删除整个图集？不可恢复！！"))
			{
				var g = $(this).attr("id");
				var t = "'.$table_name.'"
				
				$.post("admin/del.php",{
						group:g,
						table:t,
					},function(response){
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
<?php include './include/footer.php';?>
</div>

</div>

</div>

<script src="/templates/hytpl/js/lib/jquery.flexslider-min.js"></script>

<script src="/templates/hytpl/js/lib/jquery.colorbox-min.js"></script>

<script src="/templates/hytpl/js/base.js"></script>

<?php include 'include/share.php';?>
</body>
</html>
