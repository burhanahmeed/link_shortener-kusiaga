
<input type="text" id="jsparse" name="" value="<?php if (isset($short_url)) {
	echo 'url';
} else if (isset($error)) {
	echo 'err';
};?>" style="display: none;">

<script type="text/javascript" src="<?php echo base_url()?>assets/js/front.js"></script>