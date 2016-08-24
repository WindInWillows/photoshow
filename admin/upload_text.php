<?php
	session_start();
	if(!isset($_SESSION["account"])) exit();
	error_reporting(-9);
	if(isset($_POST["title"]) && isset($_POST["main"]) && isset($_POST["opt"]) && isset($_POST["text_id"]))	{
		$opt = $_POST["opt"];
		
		$title = addslashes($_POST["title"]);
		$main = addslashes($_POST["main"]);
		$abstract = isset($_POST["abstract"]) ? addslashes($_POST["abstract"]) : null;
		$text_id = isset($_POST["text_id"]) ? $_POST["text_id"] : null;
		$abs_img = isset($_POST["abs_img"]) ? $_POST["abs_img"] : null;
		
		include "../admin/sql_def.php";
		$mysqli = new mysqli($host,$usr_name,$password,$sql_name);
		$mysqli->query("SET NAMES UTF8");	
		$ans = null;
		switch($opt){
			case 1:
			case 2:
				$img_table = "train_img";
				$ans = $mysqli->query("SELECT * FROM `$img_table` WHERE `img_family` = $text_id ORDER BY `img_name` ASC;");
				break;
			case 3:
				$img_table = "about_img";
				$ans = 	$mysqli->query("SELECT * FROM `$img_table`");		
				break;
			case 4:
				$img_table = "team_img";
				$ans = 	$mysqli->query("SELECT * FROM `$img_table`");		
				break;
			case 5:
			case 6:
				$img_table = "news_img";
				$ans = $mysqli->query("SELECT * FROM `$img_table` WHERE `img_family` = $text_id ORDER BY `img_name` ASC;");		
				break;
				
		}
		
		if($ans != null){
			while(($row=$ans->fetch_object()) != null)	{
				$url = $row->img_name;
				$img_id = $row->id;
				if(!strpos($main, $url)){
					unlink("..".$url);
					$res = $mysqli->query("DELETE FROM `$img_table` WHERE `id` = ".$img_id."");
				}
			}
		}
		
		switch($opt){
		case 1: //新建
			$table_name = "train";
			$sql = "INSERT INTO  `$sql_name`.`$table_name` (`id` ,	`title` , `abstract` , `last_date` ,	`main` ) VALUES (	$text_id ,  '$title',  '$abstract', CURDATE( ) ,  '$main' );";
			break;
		case 2://edit train
			$table_name = "train";
			$sql = "UPDATE `$sql_name`.`$table_name` SET `title` = '$title', `main` = '$main', `last_date` = CURDATE(), `abstract` = '$abstract' WHERE `$table_name`.`id` = $text_id";
			break;
		case 3://edit about
			$table_name = "about";
			$sql = "UPDATE `$sql_name`.`$table_name` SET `title` = '$title', `main` = '$main', `last_date` = CURDATE() WHERE `$table_name`.`id` = $text_id";
			break;
		case 4:	//edit team
			$table_name = "team";
			$sql = "UPDATE `$sql_name`.`$table_name` SET `title` = '$title', `main` = '$main', `last_date` = CURDATE() WHERE `$table_name`.`id` = $text_id";
			break;
		case 5: //new news
			$table_name = "news";
			$sql = "INSERT INTO  `$sql_name`.`$table_name` (`id` ,	`title` , `abstract` , `last_date` ,	`main` ,`abs_img` ) VALUES (	$text_id ,  '$title',  '', CURDATE( ) ,  '$main', '$abs_img' );";			
			break;	
		case 6: //edit news
			$table_name = "news";
			$sql = "UPDATE `$table_name` SET `title` = '$title', `main` = '$main', `last_date` = CURDATE(),`abs_img` = '$abs_img' WHERE `id` = $text_id;";
			break;
		
		}

		$result = $mysqli->query($sql);
		if($result != null) echo 1;
		else echo 0;
	}
?>
