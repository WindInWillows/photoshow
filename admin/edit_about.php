<?php
	session_start();
	$main_text = "";
	$title = "";
	$opt = $_GET["opt"];
	if(isset($_SESSION["account"])){
		include "sql_def.php";
		$mysqli = new mysqli($host,$usr_name,$password,$sql_name);
		$mysqli->query("SET NAMES UTF8");
		$table_name = $opt == 1 ? "about" : "team";
		$back_url = $opt == 1 ? "../about.php" : "../team.php";
		$sql = "SELECT * FROM `$table_name`";
		$ans = $mysqli->query($sql);
		if($ans != null){
			$obj = $ans->fetch_object();
			if($obj != null){
				$main_text = $obj->main;
				$title = $obj->title;
			}
		}
	}
	else {
		echo "not found!";	
		exit();
	}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="../templates/hytpl/js/lib/jquery-1.8.3.min.js"></script>
<title>品牌故事</title>
		<style>
			form {
				margin: 0;
			}
			textarea {
				display: block;
			}
		</style>
		<script charset="utf-8" src="../kindeditor/kindeditor-min.js"></script>
		<script charset="utf-8" src="../kindeditor/lang/zh_CN.js"></script>
		<script>
			var editor;
			KindEditor.ready(function(K) {
				
				editor = K.create('textarea[name="content"]', {
					allowFileManager : true,
					afterUpload: function (url) {  
						$.post("add_img.php",
							{
							 img_name : url,
							 opt : <?php echo 1+$opt;?>,
							},
							function(res){
//								if (res != 1) alert("图片上传失败");
if (res != 1) alert(res);
							}
						);
					}, 				
					items : [
					'source', '|', 'undo', 'redo', '|', 'preview', 'cut', 'copy', 'paste',
					'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
					'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 
					 'clearhtml', 'quickformat', '|', 'fullscreen', '/',
					'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
					'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|', 'image',
					'table', 'hr', 'emoticons',  'pagebreak',
					'anchor', 'link', 'unlink', '|'
					],
					width : '600px'
				}	
				);
				
			});
			
			
        	$(document).ready(function(e) {
				$("input#title").val("<?=addslashes($title)?>");
				$("input#save").click(
				function(ee){
					//editor.sync();
					$.post("upload_text.php",
					{
						title:$("input#title").val(),
						main : editor.html(),
						opt : <?php echo 2+$opt;?>,//1 新建 2 编辑 3about 4team
						text_id : 1,
					},
						function(response){
							if (response != 1)alert("保存失败,请重试");

							else window.location.href = "<?=$back_url?>";
						}
					)
				}
				
				);
            });
	</script>
	</head>
	<body>
		<form>
            <p>文章标题</p>
            <input maxlength="20" name="title"	id="title" type="text"/>
            <p>正文内容</p>
			<textarea name="content" id="main_text" style="width:800px;height:400px;visibility:hidden;"><?php echo $main_text;?></textarea>
			<p>
                <input type="button" name="save" value="提交" id="save">
			</p>
            
		</form>
        
		<div name="gallery" id="gallery"></div>
	</body>
</html>