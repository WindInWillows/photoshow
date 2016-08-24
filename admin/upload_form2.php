
 <script src="admin/jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="admin/uploadify.css">
	<form>
		<div id="queue"></div>
		<input id="file_upload" name="file_upload" type="file" multiple style="margin-right:0px">
	</form>

	<script type="text/javascript">
		$(function() {
			$('#file_upload').uploadify({
				'formData'     : {
					'tablename' : <?php echo "'".$table_name."'";?>,
					'family' : <?php echo ($max + 1);?>
				 },
				'swf'      : 'admin/uploadify.swf',
				'uploader' : 'admin/upload.php',
				'buttonText' : '上传新图集',
				'fileTypeExts': '*.jpg;*.gif;*.png;*.pdf;*.JPEG',
				'fileTypeDesc': 'Image Files (.JPG, .GIF, .PNG, .PDF, .JPEG)',
				'onQueueComplete' : function(queueData) {
            alert('已上传 '+queueData.uploadsSuccessful + ' 个图片.');
			location.reload();
        }
				
			}); 
			
		});
	</script>
