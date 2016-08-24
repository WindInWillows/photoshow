<?php
	    include "../admin/sql_def.php";
    $mysqli = new mysqli($host,$usr_name,$password,$sql_name);
    $mysqli->query("SET NAMES UTF8");
	
	$fname = "Filedata";
		if ($_FILES[$fname]["error"] > 0) {
		    echo "Error: " . $_FILES[$fname]["error"] . "<br />";
		} 
		else {

			$tablename = $_POST["tablename"];
		    $name = iconv("utf-8", "gbk", $_FILES[$fname]["name"]);
    		$type = $_FILES[$fname]["type"];
		    $root = "../";
		    $path = "upload/image/" . date("Y") . "/" . date("m") . "/";
		    $new_name = time() . $_FILES[$fname]["size"] . '.jpeg';
			
    			/*上传到带有family的*/
			if(isset($_POST["family"])){
				$family = $_POST["family"];
			}
			/*上传到不带family的，主页*/
			else {
				$result = $mysqli->query("SELECT MAX(family) from $tablename limit 0,1");
				$row = $result->fetch_row();
				$maxf = $row[0];
				$family = $maxf + 1;
			}
			
			
    		if (file_exists($path . $name)) {
    	    	echo $_FILES[$fname]["name"] . " already exists. ";
			} 
			else { 
				if (! file_exists($root . $path)) {
					mkdir($root . $path, 0700);
				}
				move_uploaded_file($_FILES[$fname]["tmp_name"], $root . $path . $new_name);
			}
    
			
			$mysqli->query("SET NAMES UTF8");
			$query = "INSERT INTO  `photoshow`.`".$tablename."` (`id` ,	`path` , `name` , `date` ,	`inf` ,	`family`) VALUES (	NULL ,  '".$path."',  '".$new_name."', CURDATE( ) ,  '',  '".$family."' );";
			$result = $mysqli->query($query);
			if ($result != null) {
				echo '上传成功';
			}
			else echo "上传失败";
		}
?>