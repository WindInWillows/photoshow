<?php 
	include "./admin/sql_def.php";
	//echo $host.$usr_name.$password;
    $mysqli = new mysqli($host,$usr_name,$password,$sql_name);
    $mysqli->query("SET NAMES UTF8");
    $result = $mysqli->query("SELECT * FROM index_head");
    $obj = $result->fetch_object();
    $image = $obj->path.$obj->name;
    echo '<ul><img width="100%" src="'.$image.'" id="head_img"/></ul>';

?>
