<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php echo $message; ?>

<script>
	if(window.top==window) {
    // you're not in a frame so you reload the site
		window.setTimeout('location.reload()', 3000); //reloads after 3 seconds
	} else {
		//you're inside a frame, so you stop reloading
	}
</script>
