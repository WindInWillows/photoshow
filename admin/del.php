
<?php 

if(isset($_POST["id"]) && isset($_POST["table"])){
	$id = $_POST["id"];
	$table_name = $_POST["table"];
	    include "../admin/sql_def.php";
    $mysqli = new mysqli($host,$usr_name,$password,$sql_name);
    $mysqli->query("SET NAMES UTF8");
	$sql = "SELECT * FROM  `".$table_name."` WHERE  `id` =$id";
	$result = $mysqli->query($sql);
	if($result == null) {
		
        echo "删除失败";
    }
	
	if(($row = $result->fetch_object()) != null)
	{
		$name = $row->name;
		$path = $row->path;
	}
	$file_on_host = $path.$name;
	
	$sql = "delete from ".$table_name." where id='".$id."'";
	
    $result = $mysqli->query($sql);
	
    if($result == null) {
        echo "删除失败:".$file_on_host;
    }
    else{
        unlink("../".$file_on_host);
        echo "删除成功";
    }
}

else if(isset($_POST["table"]) && isset($_POST["group"]) && isset($_POST["path"]) && isset($_POST["name"])){
	$table_name = $_POST["table"];
	$group = $_POST["group"];
	$path  = $_POST["path"];
	$name  = $_POST["name"];
        include "../admin/sql_def.php";
    $mysqli = new mysqli($host,$usr_name,$password,$sql_name);
    $mysqli->query("SET NAMES UTF8");
	$sql = "delete from ".$table_name." where name='".$name."'";
	$file_on_host = $path.$name;
    $result = $mysqli->query($sql);
	
    if($result == null) {
        echo "删除失败:".$file_on_host;
    }
    else{
        unlink($file_on_host);
        echo "删除成功";
    }
}
else if(isset($_POST["table"]) && isset($_POST["group"])){
	$table_name = $_POST["table"];
	$group = $_POST["group"];	
	
	    include "../admin/sql_def.php";
    $mysqli = new mysqli($host,$usr_name,$password,$sql_name);
    $mysqli->query("SET NAMES UTF8");
	$sql = "select * from ".$table_name." where family='".$group."'";
	$result = $mysqli->query($sql);
	
	if($result != null) {
		while(($row = $result->fetch_object()) != null){
			$path = $row->path;
			$name = $row->name;
			$file_on_host = "../".$path.$name;
			unlink($file_on_host);
		}
		$sql = "delete from ".$table_name." where family='".$group."'";
		$mysqli->query($sql);
		echo "删除成功";	
	}
	else echo "删除失败";
}
else {
	echo '未知错误';	
}

// header("location: $url ");
?>