<script>
	$(function(){
		$(".gallery-buttons'.$group.'").fancybox({
			closeBtn:false,
			helpers:{
				title:{
					type:"inside"
				},
				buttons:{}
			},
			afterLoad:function() {
				this.title = "Image " + (this.index + 1) + " of " + this.group.length + (this.title ? " - " + this.title : "");
			}
		});
	});
</script>