<?php
	session_start();
	if(isset($_SESSION["account"])){
		if(isset($_POST["text_id"])){
			include "sql_def.php";
			$mysqli = new mysqli($host,$usr_name,$password,$sql_name);
			$mysqli->query("SET NAMES UTF8");
			$table_name = "train";
			$sql = "SELECT MAX(id) FROM `$table_name` WHERE 1";
			$ans = $mysqli->query($sql);
			if($ans==null){
				echo -1;//逻辑错误
			}
			else {
				$row = $ans->fetch_row();
				$new_id = $row[0] + 1;
				$old_id = $_POST["text_id"];
				$ans = $mysqli->query("UPDATE `$sql_name`.`$table_name` SET `id` = $new_id WHERE `$table_name`.`id` = $old_id;");
				if ($ans != null) echo 1;//成功
				else echo 0;//执行失败
				
				///////////////////////////
				///////////////////////
				/////////////////
				///////////
				///////train_img update
			}
			
		}
	}
?>