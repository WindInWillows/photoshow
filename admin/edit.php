<?php
	session_start();
	$main_text = "";
	$title = "";
	if(isset($_SESSION["account"])){
		if(isset($_GET["text_id"])){
			$id = $_GET["text_id"];
			include "sql_def.php";
			$mysqli = new mysqli($host,$usr_name,$password,$sql_name);
			$mysqli->query("SET NAMES UTF8");
			$table_name = "train";
			$sql = "SELECT * FROM `$table_name` WHERE `id`=$id";
			$ans = $mysqli->query($sql);
			if($ans != null){
				$obj = $ans->fetch_object();
				if($obj != null){
					$main_text = $obj->main;
					$title = $obj->title;
					$abstract = $obj->abstract;
				}
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
<title><?=$title?></title>
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
							{text_id : <?=$id?>,
							 img_name : url,
							 opt : 1,
							},
							function(res){
								if (res != 1) alert("图片上传失败");
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
				$("textarea#abstr").val("<?=addslashes($abstract)?>");
				$("input#save").click(
				function(ee){
					//editor.sync();
					$.post("upload_text.php",
					{
						title:$("input#title").val(),
						main : editor.html(),
						abstract : $("textarea#abstr").val(),
						opt : 2,//1 新建 2 编辑
						text_id : <?php echo $id; ?>,
					},
						function(response){
							if (response != 1)alert("保存失败,请重试");
							//if (response != 1)alert(response);
							else window.location.href = "../train.php";
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
            <p>文章简介</p>
            <textarea id="abstr" style="width:600px;height:40px;"></textarea>
            <p>正文内容</p>
			<textarea name="content" id="main_text" style="width:800px;height:400px;visibility:hidden;"><?php echo $main_text;?></textarea>
			<p>
                <input type="button" name="save" value="提交" id="save">
			</p>
            
		</form>
        
		<div name="gallery" id="gallery"></div>
	</body>
</html>