<?php 

if(isset($_POST["table"]) && isset($_POST["group"]) && isset($_POST["id"])){
	$table_name = $_POST["table"];
	$group = $_POST["group"];
	$id = $_POST["id"];
	
    include "../admin/sql_def.php";
    $mysqli = new mysqli($host,$usr_name,$password,$sql_name);
    $mysqli->query("SET NAMES UTF8");
	
	$sql = "UPDATE  `photoshow`.`".$table_name."` SET  `inf` =  'main' WHERE  `".$table_name."`.`id` =$id LIMIT 1 ;";	
    $result = $mysqli->query($sql);
	
    if($result == null) {
        echo "设置失败";
		exit();
    }
    else{
        $sql = "UPDATE  `photoshow`.`$table_name` SET  `inf` =  '' WHERE  `$table_name`.`inf` ='main' AND `$table_name`.`id` <> $id AND `$table_name`.family = $group;";
     
		$result = $mysqli->query($sql);
		if($result != null){
			echo "设置成功";
		}
		else {
			echo "设置失败";
		}
    }
}

?>