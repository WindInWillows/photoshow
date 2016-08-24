<?php
	session_start();
	if(!isset($_SESSION["account"])){
		echo "not found!";
		exit;
	}	
	$table_name = "train";
	include "sql_def.php";
	$mysqli = new mysqli($host,$usr_name,$password,$sql_name);
	$mysqli->query("SET NAMES UTF8");	
	$sql = "SELECT MAX(id) FROM `$table_name` WHERE 1";
	$ans = $mysqli->query($sql);
	if($ans == null){
		$mysqli->query("truncate table $table_name;");
		$text_id = 1;
	}
	else {
		$row = $ans->fetch_row();
		$text_id = $row[0] + 1;
	}	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="../templates/hytpl/js/lib/jquery-1.8.3.min.js"></script>
<title>新建图文消息</title>
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
							{text_id : <?=$text_id?>,
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
				$("input#save").click(
				function(ee){
					//editor.sync();
					$.post("upload_text.php",
					{
						title:$("input#title").val(),
						main : editor.html(),
						abstract : $("textarea#abstr").val(),
						opt : 1,
						text_id : <?=$text_id?>,
					},
						function(response){
							if(response != 1)alert(response);					
							else location.href = "../train.php";
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
            <input value="20字以内" maxlength="20" name="title"	id="title"/>
            <p>文章简介</p>
            <textarea id="abstr" style="width:600px;height:40px;">不要超过40字 </textarea>            
            <p>正文内容</p>
			<textarea name="content" style="width:800px;height:400px;visibility:hidden;"></textarea>
			<p>
                <input type="button" name="save" value="提交" id="save">
			</p>
		</form>
        
		<div name="gallery" id="gallery"></div>
	</body>
</html>