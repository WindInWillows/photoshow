<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>
管理界面
</title>
<meta charset="utf-8" />
<script type="text/javascript"
	src="../templates/hytpl/js/lib/jquery-1.8.2.min.js" charset="utf-8"></script>

<style>

.imgTable
{
	max-width:300px;
	max-height:400px;	
	padding : 20px 20px 20px 10px;	
}

table 
{
	alignment-adjust:middle;
	boder:2;
}

a{
	padding:20px 15px 15px 20px;	
}

image{
	padding:20px 20px 20px 20px;	
}


</style>
<link href="../templates/hytpl/css/reset.css" rel="stylesheet">


</head>
<?php 
session_start();
if(!isset($_SESSION["account"])){
	exit();
}
if(!isset($_GET["table"])){
	header("location: /");
}
$table_name = $_GET["table"];

	include "upload_form4.php";
?>

<p style="font-size : large"> <a href="/"> 返回首页</a> </p>
<table width="200" border="2" align="center">
  <tr>
<?php
	
		
	    include "../admin/sql_def.php";
    $mysqli = new mysqli($host,$usr_name,$password,$sql_name);
    $mysqli->query("SET NAMES UTF8");

	$result = $mysqli->query("SELECT * FROM $table_name");
	if($result == null) {
        echo "Mysql error!";
        exit();
    }

  $i = 0;
	while(($row = $result->fetch_object()) != null)
	{
		++$i;
		$image = ($row->path).($row->name);
		echo '<td class="imgTable" align="center" ><img id="'.$row->id.'"class="imgTable" src=../'.$image.' alt="哎呀，图像丢失了！"/><a class="del" >删除</a><input type="hidden" value="'.$row->id.'"></td>';

		if($i%3==0){
			echo '</tr><tr>';
		}
	}

?>
</tr>
</table>


<script>
		$(document).ready(function(){
			$("a.del").click(
				function(){
					var _id = $(this).siblings("img").attr("id");
					$.post("del.php",{
						table:<?php echo "'".$table_name."'";?>,
						id:_id
					},function(response){
						alert(response);
						location.reload();
					}
					)
				})
				}
			);
	</script>
</html>