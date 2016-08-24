<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta charset="utf-8" />
<script type="text/javascript"
	src="../templates/hytpl/js/lib/jquery-1.8.2.min.js" charset="utf-8"></script>

<style>

.imgTable
{
	max-width:300px;
	max-height:400px;	
}

table 
{
	alignment-adjust:middle;
	boder:2;
	padding:5px 5px 5px 5px;
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
if(!isset($_GET["table"]) || !isset($_GET["family"])){
	header("location: /");
}
$table_name = $_GET["table"];
$group = $_GET["family"];
  
$url =  "http://".$_SERVER ['HTTP_HOST'].$_SERVER['PHP_SELF'];
echo '<input type="hidden" name="url" value="'.$url.'" />';
	include "upload_form.php";
?>
    
   
<table width="200" border="2" align="center">
  <tr>
<?php
	

	$thisURL = "box.php?table=".$table_name."&family=".$group;
		
	include "../admin/sql_def.php";
    $mysqli = new mysqli($host,$usr_name,$password,$sql_name);
    $mysqli->query("SET NAMES UTF8");

	$result = $mysqli->query("SELECT * FROM $table_name WHERE family = $group");
	if($result == null) {
        echo "Mysql error!";
        exit();
    }

	echo '';
  $i = 0;
	while(($row = $result->fetch_object()) != null)
	{
		++$i;
		$image = ($row->path).($row->name);
		echo '<td class="imgTable" align="center" ><img id="'.$row->id.'"class="imgTable" src=../'.$image.' alt="哎呀，图像丢失了！"/><a class="del" >删除</a><a class="setmain">设为封面</a><input type="hidden" value="'.$row->id.'"></td>';

		if($i%4==0){
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
					var id = $(this).siblings("img").attr("id");
					var img = $(this).siblings("img").attr("src");
					var arr = img.split("/");
					var len = arr.length;
					var p="";
					var n = arr[len-1];
					for(var i=0;i<len-1;i++){

						p+=arr[i]+"/";
					}
					$.post("del.php",{
						path:p,
						name:n,
						group:<?php echo $group;?>,
						table:<?php echo "'".$table_name."'";?>
					},function(response){
						alert(response);
						location.reload();
					}
					)
				}
			);
			$("a.setmain").click(
				function(){
					var id = $(this).siblings("img").attr("id");
					
					$.post("setmain.php",{
						id:id,
						group:<?php echo $group;?>,
						table:<?php echo "'".$table_name."'";?>
					},function(response){
						alert(response);
					}
					)	
				}
			);
		});
		
	</script>
</html>