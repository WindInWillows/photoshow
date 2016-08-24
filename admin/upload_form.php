 <div class="upload_div" >
 <script src="jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="uploadify.css">
	<form>
		<div id="queue"></div>
		<input id="file_upload" name="file_upload" type="file" multiple>
	</form>

	<script type="text/javascript">
		$(function() {
			$('#file_upload').uploadify({
				'formData'     : {
					'tablename' : <?php echo "'".$table_name."'";?>,
					'family' : <?php echo "'".$group."'";?>,
				 },
				'swf'      : 'uploadify.swf',
				'uploader' : 'upload.php',
				'buttonText' : '上传图片',
				'fileTypeExts': '*.jpg;*.gif;*.png;*.pdf;*.jpeg',
				'fileTypeDesc': 'Image Files (.JPG, .GIF, .PNG, .PDF, .JPEG)',
				
				'onQueueComplete' : function(queueData) {
					alert('已上传'+queueData.uploadsSuccessful + ' 个图片.');
					location.reload();
				}
					
			}); 
		});
	</script>
</div>