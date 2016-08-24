<?php
session_start();
if(!isset($_SESSION["account"])){
	echo "-1";//无权限
	exit();	
}

if(!isset($_POST["text_id"])){
	echo 0;	//未传入参数
	exit();
}

$id = $_POST["text_id"];
include "sql_def.php";
$mysqli = new mysqli($host,$usr_name,$password,$sql_name);
$mysqli->query("SET NAMES UTF8");

if(!isset($_POST["opt"])){
	$table_name = "train";
	$img_table_name = "train_img";
}
else {
	$table_name = "news";	
	$img_table_name = "news_img";
}

$sql = "SELECT * FROM `$img_table_name` WHERE `img_family` = $id";
$ans = $mysqli->query($sql);

if($ans != null){
	while(($row = $ans->fetch_object()) != null){
		$url = $row->img_name;
		$img_id = $row->id;
		unlink("..".$url);
		$mysqli->query("DELETE FROM `$sql_name`.`$img_table_name` WHERE `$img_table_name`.`id` = $img_id");
	}
}

$ans = $mysqli->query("SELECT * FROM `$table_name` WHERE `id` = $id");
if($ans != null){
	if(($row = $ans->fetch_object()) != null){
		$abs_img = $row->abs_img;
		unlink("..".$abs_img);
	}
}

$sql = "DELETE FROM `$sql_name`.`$table_name` WHERE `$table_name`.`id` = $id";
$result = $mysqli->query($sql);
if($result == null){
	echo 2; //未找到文件
}
else echo 1; //删除成功
?>