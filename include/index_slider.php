
<div class="slider">
<ul class="slides clearfix">
<?php 
    include "./admin/sql_def.php";
    $mysqli = new mysqli($host,$usr_name,$password,$sql_name);
    $result = $mysqli->query("SELECT * FROM slider");
    while(($rowObj = $result->fetch_object()) != false)
	{
		$image = $rowObj->path.$rowObj->name;
	    echo '<li><a href="" target="_blank"><img src="'.$image.'"></a></li>';
	}
?>
<!--	<li><a href="" target="_blank"><img src="upload/image/2016/03/1457680533-3800.jpg"></a></li>-->

<!--	<li><a href="" target="_blank"><img	src="upload/image/2016/03/1457680510-5926.jpg"></a></li>-->
<!---->
<!--	<li><a href="" target="_blank"><img	src="upload/image/2016/03/1457680372-7286.jpg"></a></li>-->

</ul>
</div>