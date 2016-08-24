    <script type="text/javascript"
	src="../templates/hytpl/js/lib/jquery-1.8.2.min.js" charset="utf-8"></script>
<script src="jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="uploadify.css">
<style type="text/css">
body {
	font: 13px Arial, Helvetica, Sans-serif;
}
</style>
	<form>
		<div id="queue"></div>
		<input id="file_upload" name="file_upload" type="file" multiple>
	</form>

	<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadify({
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				},
				'swf'      : 'uploadify.swf',
				'uploader' : 'uploadify.php',
				'buttonText' : '选择图片',
				'fileTypeExts': '*.jpg;*.gif;*.png;*.pdf;*.JPEG',
				'fileTypeDesc': 'Image Files (.JPG, .GIF, .PNG, .PDF, .JPEG)',
				
			});
		});
	</script>
