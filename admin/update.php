<?php

if(!isset($_POST["tablename"])){
	echo '更新失败';
	exit();
}

$tablename = $_POST["tablename"];
    include "../admin/sql_def.php";
    $mysqli = new mysqli($host,$usr_name,$password,$sql_name);
    $mysqli->query("SET NAMES UTF8");

$sql = "select * from  `$tablename`";
$result = $mysqli->query($sql);
	
if($result != null) {

	while(($row = $result->fetch_object()) != null){
		$path = $row->path;
		$name = $row->name;
		$file_on_host = "../".$path.$name;
		unlink($file_on_host);
	}
	$sql = "delete from ".$tablename." ";
	$del_result = $mysqli->query($sql);
}

$fname = "Filedata";
$type = $_FILES[$fname]["type"];
$root = "../";
$path = "upload/image/" . date("Y") . "/" . date("m") . "/";
$new_name = time() . $_FILES[$fname]["size"] . '.jpeg';
if ($_FILES[$fname]["error"] > 0) {
	echo "Error: " . $_FILES[$fname]["error"] . "<br />";
	exit();
} 

	if (! file_exists($root . $path)) {
		mkdir($root . $path, 0700);
	}
	move_uploaded_file($_FILES[$fname]["tmp_name"], $root . $path . $new_name);

	$mysqli->query("SET NAMES UTF8");
	$query = "INSERT INTO  `photoshow`.`".$tablename."` (`id` ,	`path` , `name` , `date` ,	`inf` ,					`family`) VALUES (	NULL ,  '".$path."',  '".$new_name."', CURDATE( ) ,  '',  'index_head' );";
	
	$upload_result = $mysqli->query($query);
	
	
	if ($upload_result != null && $del_result == true) {
		echo '更新成功';
	}
	else if($upload_result == null) {
		echo '上传失败';	
	}
	else if($del_result == false) {
		echo '删除失败';	
	}
?>