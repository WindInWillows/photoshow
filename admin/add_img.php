<?php
$img_name = $_POST["img_name"];
include "sql_def.php";
$mysqli = new mysqli($host,$usr_name,$password,$sql_name);
$mysqli->query("SET NAMES UTF8");	
$opt = $_POST["opt"];
switch($opt){
	case 1: //train
	{
		$text_id = $_POST["text_id"];
		$table_name = "train_img";
		$sql = "INSERT INTO `$sql_name`.`$table_name` (`img_family`, `img_name`) VALUES ('$text_id', '$img_name');";
		break;
	}
	case 2: //about
	{
		$table_name = "about_img";
		$sql = "INSERT INTO `$sql_name`.`$table_name` (`img_name`) VALUES ('$img_name');";
		break;
	}
	case 3: //team
	{
		$table_name = "team_img";
		$sql = "INSERT INTO `$sql_name`.`$table_name` (`img_name`) VALUES ('$img_name');";		
		break;
	}
	case 4: //news
	{
		$text_id = $_POST["text_id"];
		$table_name = "news_img";
		$sql = "INSERT INTO `$sql_name`.`$table_name` (`img_family`, `img_name`) VALUES ('$text_id', '$img_name');";
		break;		
	}
}
$ans = $mysqli->query($sql);
if($ans != null) echo 1;
else echo 0;
?>