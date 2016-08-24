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
					tablename: '<?php echo $table_name; ?>',
				 },
				'swf'      : 'uploadify.swf',
				'uploader' : 'update.php',
				'buttonText' : '<?php echo $buttonText; ?>',
				'fileTypeExts': '*.jpg;*.gif;*.png;*.pdf;*.JPEG',
				'fileTypeDesc': 'Image Files (.JPG, .GIF, .PNG, .PDF, .JPEG)',
				'onUploadSuccess' : function(file, data, response) {
					alert(data);
				},
					
			}); 
		});
	</script>
</div>