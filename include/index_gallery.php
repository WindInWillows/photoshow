

<!--photo-->
<div class="photo">
<div class="title01 clearfix">
<h2>婚纱跟拍</h2>
<span class="l">WEDDING DRESS SHOOT</span> <a class="more l"
	href="gallery.php">SEE MORE</a></div>
<table width="100%">
	<tr>
		<td width="100%"><pre>
		<p>相片记录了我们最平实的时光，你一转头就能看到停留在那里的曾经，"我会在原地等你，转身就可</p>
		<p>以看到我"--照片是你留给自己内心的拥抱和温暖</p>
		<p>恰好我们是那群热爱拍照片的人，而你就是我们拍不尽的年华，而恰好你又喜欢我们记录时光的拍摄</p>
		<p>风格，于是我们为了你也喜欢的摄影，赴汤蹈火，在所不辞。</p></pre></td>
	</tr>
</table>
<div class="photo-list">
<ul class="clearfix">
<?php 
    include "./admin/sql_def.php";
    $mysqli = new mysqli($host,$usr_name,$password,$sql_name);
    $mysqli->query("SET NAMES UTF8");
    $result = $mysqli->query("SELECT * FROM index_gallery");
    while(($row = $result->fetch_object()) != null)
	{
		$image = ($row->path).($row->name);
	    echo '<li><a class="btn photo-buttons'.$row->id.'" href="gallery.php" title='.$row->inf.'><img src="'.$image.'" width="329" height="430" ></a></li>';
	}
?>


</ul>
</div>
</div>