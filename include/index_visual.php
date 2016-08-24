<!--visual-->
<div class="visual">
<div class="title02"><img src="templates/hytpl/images/visual.png"></div>

<div class="photo-list">
<ul class="clearfix">
<?php 
    include "./admin/sql_def.php";
    $mysqli = new mysqli($host,$usr_name,$password,$sql_name);
    $mysqli->query("SET NAMES UTF8");
    $result = $mysqli->query("SELECT * FROM index_visual");
    while(($row = $result->fetch_object())!= null)
	{
        $image = $row->path.$row->name;
        echo '<li><a class="btn photo-buttons" href="works.php" title='.$row->date.'>
        <img src="'.$image.'" width="329" height="430"></a></li>';
  	}
?>

<!-- 	<li><a class="btn visual-buttons" href="visual.php" title="6"><img -->
<!-- 		src="upload/image/2016/03/1457687667-42.jpg" width="329" height="430"></a></li> -->

<!-- 	<li><a class="btn visual-buttons" href="visual.php" title="5"><img -->
<!-- 		src="upload/image/2016/03/1457687610-6974.jpg" width="329" -->
<!-- 		height="430"></a></li> -->

<!-- 	<li><a class="btn visual-buttons" href="visual.php" title="4"><img -->
<!-- 		src="upload/image/2016/03/1457687549-2097.jpg" width="329" -->
<!-- 		height="430"></a></li> -->

<!-- 	<li><a class="btn visual-buttons" href="visual.php" title="3"><img -->
<!-- 		src="upload/image/2016/03/1457687363-3728.jpg" width="329" -->
<!-- 		height="430"></a></li> -->

<!-- 	<li><a class="btn visual-buttons" href="visual.php" title="2"><img -->
<!-- 		src="upload/image/2016/03/1457687147-4897.jpg" width="329" -->
<!-- 		height="430"></a></li> -->

<!-- 	<li><a class="btn visual-buttons" href="visual.php" title="1"><img -->
<!-- 		src="upload/image/2016/03/1457686961-8413.jpg" width="329" -->
<!-- 		height="430"></a></li> -->

</ul>
</div>
</div>