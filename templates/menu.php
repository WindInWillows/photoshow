<script type="text/javascript"
	src="templates/hytpl/js/lib/jquery-1.8.2.min.js" charset="utf-8"></script>
	
<style type="text/css" media="screen">

ul {
	list-style-type: none;
	list-style-position: inside;
	margin: 0;
	padding: 0;
}

/* all context menus have this class */
.context-menu {
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	background-color: #f2f2f2;
	border: 1px solid #999;
	list-style-type: none;
	margin: 0;
	padding: 0;
}

.context-menu a {
	display: block;
	padding: 3px;
	text-decoration: none;
	color: #333;
}

.context-menu a:hover {
	background-color: #666;
	color: white;
}

Input
{
BACKGROUND-COLOR: transparent;
BORDER-BOTTOM: #ffffff 1px solid;
BORDER-LEFT: #ffffff 1px solid;
BORDER-RIGHT: #ffffff 1px solid;
BORDER-TOP: #ffffff 1px solid;
COLOR: #ffffff;
HEIGHT: 18px;
border-color: #ffffff #ffffff #ffffff #ffffff; font-size: 9pt
}
</style>

<script type="text/javascript" charset="utf-8">
$(document).ready(
	function () {
		$('#head_img').contextMenu(
			'context-menu-1', {
// 			'用已有图片替换': {
// 			click: function () 
// 			{ 
// 				alert($('#head_img').attr("src"));
// 				$('#head_img').attr("src","");
// 			},
// 			klass: "menu-item-1" // a custom css class for this menu item (usable for styling)
// 			},	
			"上传新图片替换": {
			click: function (){
				if($("#submit").length > 0){}
				else{ 
					updateImageByOnload();
				}
			},
			kclass: "second-menu-item"
			}
		});
});

function updateImageWithExisted(tableName,imagePath,imageName){
	alert(tableName);
}

function updateImageByOnload(tableName){
	var form1 = '<form action="./admin/update.php" method="post" enctype="multipart/form-data" id="fileUpload" style=">';
	var form2 = '<input type="file" name="index_head">';
	var form3 = '<input type="submit" value="替换" id="submit"/></form>';
	$("#head_img").after(form1,form2,form3);
	$("#submit").click(function(){
// 		alert("hello");
		$("#fileUpload").submit();
	});
}
</script>


<script src="templates/hytpl/js/lib/jquery.contextMenu.js"
	type="text/javascript" charset="utf-8"></script>