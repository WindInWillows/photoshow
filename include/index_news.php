<!--news-->
<div class="news">
<div class="title03"></div>

<div class="news-list">
<ul class="clearfix">

<?php 
    include "admin/sql_def.php";
    $mysqli = new mysqli($host,$usr_name,$password,$sql_name);
	$mysqli->query("SET NAMES UTF8");
$table_name = "news";
	$result = $mysqli->query("SELECT * FROM `$table_name` ORDER BY `id` DESC limit 3");
	if($result != null){
		while(($row = $result->fetch_object()) != null)	{
			$abs_img = $row->abs_img;
			$text_id = $row->id;
			$last_date = $row->last_date;
			$title =$row->title;
			$date = explode('-',$last_date);
			$mon = $date[1];
			$day = $date[2];
			
			echo '<li><div class="pic"><a href="newsdetail.php?id='.$text_id.'">
			<img src=".'.$abs_img.'" width="330" height="154"></a><time>
				<span>'.$day.'</span><em>'.$mon.'</em></time></div><div class="desc">
				<h2>'.$title.'</h2><p>&nbsp;...</p>';
			echo '<a class="more" href="newsdetail.php?id='.$text_id.'">SEE DETAILS</a>&nbsp;&nbsp;';
			echo '</div></li>';				
		}
	}
?>
</ul>
</div>
</div>








