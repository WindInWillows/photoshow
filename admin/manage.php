<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta charset="utf-8" />
<script type="text/javascript"
	src="../templates/hytpl/js/lib/jquery-1.8.2.min.js" charset="utf-8"></script>

<link href="../templates/hytpl/css/reset.css" rel="stylesheet">
<style>
div#head {
	margin-top:20px;
	margin-right:10px;	
}

hr{
	margin-bottom:10px;	
}

table{
	font-size:20px;
	margin-left:20px;	
}

</style>

</head>

<?php 
session_start();
if(!isset($_SESSION["account"])){
	exit();
}
 
function is_session_started()
{
    if ( php_sapi_name() !== 'cli' ) {
        if ( version_compare(phpversion(), '5.4.0', '>=') ) {
            return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
        } else {
            return session_id() === '' ? FALSE : TRUE;
        }
    }
    return FALSE;
}
	if(! is_session_started()){
		session_start();
	}
	if (isset($_SESSION["account"])){
		echo '<div id= "head" style="text-align:right; font-size:15px" style=" margin-top: 20px;"><a href="/" style="text-align:right">返回首页</a>&nbsp;&nbsp;
		    <a href="../admin/logout.php" style="text-align:right">注销</a></div>
		    <hr style="height:5px;border:none;border-top:3px ridge grey;" />';       
	}

?>
 <table width="200" border="0">
  <tr>
    <td><?php 
		$table_name = "index_head";
		$buttonText = '修改主页图像';
	
	include "upload_form3.php";?></td>
  </tr>
  <tr>
    <td><a class="" target="_blank" href="index_box.php?table=slider" style="display: inline">增删轮播图片</a></td>
  </tr>
  <tr>
    <td><a class="" target="_blank" href="index_box.php?table=index_gallery" style="display: inline">增删婚纱跟拍主页</a></td>                                                                                                             
  </tr>
  <tr>
    <td><a class="" target="_blank" href="index_box.php?table=index_works" style="display: inline">增删婚纱客照主页图片</a></td>
  </tr>
    <tr>
    <td><a class="" target="_blank" href="index_box.php?table=index_visual" style="display: inline">增删写真定制主页图片</a></td>
  </tr>
   
</table>
</html>