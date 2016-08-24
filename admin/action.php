<?php 
//     header("Content-Type: text/xml;charset=utf-8");

	if (isset($_POST["account"])){
		include "../admin/sql_def.php";
		$mysqli = new mysqli($host,$usr_name,$password,$sql_name);
		$mysqli->query("SET NAMES UTF8");
		
		$acc = $_POST["account"];
		$pass = $_POST["pass"];
		$sql = "SELECT account, name FROM admin WHERE account = '$acc' AND password = '$pass' ";
		$result = $mysqli->query($sql);
		if ($result == null){
			echo "0";
		}
		
		else {
			session_start();
			$row = $result->fetch_object();
			$_SESSION["account"] = $row->account;
			$_SESSION["pass"] = $row->password;
			echo "1";
			header("location:../index.php");
		}
	}
	
?>