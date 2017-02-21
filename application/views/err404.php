<?php if (isset($error)) {
	# code...
echo
	'<div class="err404"><img src="'.base_url().'assets/img/sorry.png">
	<div class="errors"><h1>'.$error.'</h1></div>
	<form action="'.base_url().'">
	<input type="submit" value="Back">
	</form>
	</div>';

	} ?>