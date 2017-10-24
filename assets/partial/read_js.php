<script src="<?php echo $domain ; ?>assets/js/jquery.min.js"></script>
<script src="<?php echo $domain ; ?>assets/js/chart.js"></script>
<script src="<?php echo $domain ; ?>assets/js/toolkit.js"></script>
<script src="<?php echo $domain ; ?>assets/js/application.js"></script>
<script>
// execute/clear BS loaders for docs
$(function(){
	if (window.BS&&window.BS.loader&&window.BS.loader.length) {
		while(BS.loader.length){(BS.loader.pop())()}
	}
})
</script>

