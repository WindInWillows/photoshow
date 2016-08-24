<?php
    function con_db(){
        $name = "con_db".func_num_args();
        return call_user_func_array(array($this,$name), func_get_args());   
    }

    function con_db0(){
		include "../admin/sql_def.php";
		$mysqli = new mysqli($host,$usr_name,$password,$sql_name);
        if (mysqli_connect_errno()) {
            echo '连接数据库失败！';
            exit();
        }
        $mysqli->query("SET NAMES UTF8");
        return $mysqli;
    }
    
    function con_db4($host,$user,$pass,$db){
        $this->mysqli = new mysqli($host,$user,$pass,$db);
        if (mysqli_connect_errno()) {
            echo '连接数据库失败！';
            exit();
        }
        $this->result = null;
        $this->mysqli->query("SET NAMES UTF8");
    }
    
    function db_query($sql){
        $mysqli = con_db();
        return $mysqli->query($sql);
    }
    
    function db_query_all($table){
        $sql = "SELECT * FROM ".$table;
        return db_query($sql) or die("查询失败");
    }
    
    function splitPages(){
        
    }
?>