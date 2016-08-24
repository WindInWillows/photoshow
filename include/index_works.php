<!--works-->
<div class="works">
<div class="title01 clearfix">
<h2>婚纱客照</h2>
<span class="l">GUEST PHOTO</span> <a class="more l" href="works.php">SEE
MORE</a></div>

<div class="works-list">
<ul class="clearfix">

<?php 
    include "./admin/sql_def.php";
    $mysqli = new mysqli($host,$usr_name,$password,$sql_name);
    $mysqli->query("SET NAMES UTF8");
    $result = $mysqli->query("SELECT * FROM index_works");
    while(($row = $result->fetch_object())!= null)
	{
		$image = $row->path.$row->name;
	   echo '<li><a class="btn photo-buttons'.$row->id.'" href="works.php" title='.$row->inf.'>
	   <img src="'.$image.'" ><div class="desc">
	<div class="b">'.$row->inf.'</div></div></a></li>';
  	}
?>


</ul>
</div>
</div>


