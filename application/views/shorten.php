<div class="short" >
	<div class="title-short">
		<h3>KuSia.ga</h3><span class="glyphicon glyphicon-eye-open"></span>
		<p>Beware of Link Spies</p>
	</div>
	<div id="notif"></div>
	<div class="form-short">
	<form id="frm" method="POST" action="<?php echo base_url('shortener')?>">
	<input type="text" name="url_address" placeholder="Safe Your Links Today!" required="" <?php if (isset($long_one)) { echo 'value="'.$long_one.'"';}?> ng-model="form.url"> 
		<button type="submit" id="sbmt" name="urlShorty"><span class="glyphicon glyphicon-link"></span></button>
		<?php echo form_error('url_address') ?>
		<p><input id="inpt-cstm" type="text" name="customUrl" placeholder="Get Custom Name Today!" style="opacity: 0; width: 0" ng-model="form.cstm" ng-minlength="4"><button type="button" id="add-cstm" class="cstm-btn">Custom URL</button><button type="button" id="cancel-cstm" class="cstm-btn" style="display: none;">Cancel</button></p><br>
		<div style="display: initial;margin-left: 20px;"><?php echo form_error('customUrl') ?></div>
	</form>
	</div>

	<div id="ajax_short_url"></div>
<!-- 	<?php if (validation_errors()) : ?>
        <?php echo '<div style="color:red">'.validation_errors().'</div>'; ?>
      <?php endif ; ?> -->

    <!-- <?php
	if(isset($error))
		{	 
			echo '<div class="errors" style="color:red">'.$error.'</div>';
		}
	?> -->
<?php if(isset($short_url))
{
	echo
	'<div class="form-short shrt">
	<p style="margin: 80px 0 0 0;">Your Link Result : </p>
		<p><input id="short_res" type="text" readonly onfocus="javascript:select()"  value="'.base_url().$short_url.'" style="cursor: text; text-align:centre"><button id="btn-shrt" data-clipboard-target="#short_res">Copy</button></p>
	</div>'
	;}?>

</div>

<!-- <script type="text/javascript" src="<?php echo base_url()?>assets/js/copycliboard.js"></script> -->
