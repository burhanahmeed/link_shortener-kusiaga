<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Get your business success and reach the peak by using our service link shortener KUSIAGA, an Indonesian link shortener. We're happy to help success your business and make fortune for you.">
<meta name="revisit-after" content="30 days">
<meta name="distribution" content="web">
<meta name="copyright" content="KUSIAGA" />
<meta name="keywords" content="business, link, shortener, link shortener">
<!--<meta http-equiv="refresh" content="x_seconds; url=http://kusia.ga">-->
<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#003399">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#003399">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#003399">
	<title>Secured Link Shortener</title>
	<link rel="icon" href="<?php echo base_url();?>assets/img/logo.png">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/urlsh.css">

	<!-- web fonts -->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Istok+Web" />

</head>
<body>
	<div class="construct">
	<div class="cont">
		<div class="header">
			<div class="separate">
				<a href="#" id="modal_stats"><span class="glyphicon glyphicon-stats"></span></a>
			</div>
			<div class="separate">
				<a href="#"><span class="glyphicon glyphicon-envelope"></span></a>
			</div>
			<div class="separate" style="background-color: red">
				<a href="#"><span class="glyphicon glyphicon-bell"></span></a>
			</div>
			<div class="separate right" style="background-color:#003399">
				<?php if (empty($this->session->userdata('userData'))) {
					echo '<a href="'.base_url('log').'">Sign In</a>';
				}else{
					echo '<a href="#">'.$this->session->userdata('userData')['email'].'</a>';
					}?>
			</div>
		</div>
		<div class="inner" align="center">
			<img src="<?php echo base_url()?>assets/img/log-1.png">
		</div>
		<div class="isi">
		<div id="notif"></div>
			<form id="frm" method="post" action="<?php echo base_url('shortener/short_ajax')?>">
				<input id="url" type="url" name="url_address" placeholder="http:// Enter Your Link Here" autofocus="" required="">
				<input style="display: none;" type="text" name="customUrl" class="custom" id="inpt-cstm" placeholder="Custom URL (Optional)" autofocus="">
				<button type="button" id="add-cstm" class="cstm-btn">Custom URL</button><button type="button" id="cancel-cstm" class="cstm-btn" style="display: none;">Cancel</button>
				<button id="submit" type="Submit">SHORTEN</button>
			</form>

			<!-- hasil -->
			<div id="hasil_short" style="display: none;">
				<label>Long Url</label>
				<p id="long_res">tes</p>
				<div class="form-short shrt">
				<p style="margin: 0 0 0 0;">Your Link Result : </p>
				<input id="short_res" type="text" readonly onfocus="javascript:select()"  value="" style="cursor: text; text-align:centre"><button class="tool" id="btn-shrt" data-clipboard-target="#short_res" title="Copy"><span class="glyphicon glyphicon-copy"></span><span class="tooltiptext">Copy Link</span></button>
				<button class="tool" id="newshrt" title="Shorten Again"><span class="glyphicon glyphicon-new-window"></span><span class="tooltiptext">Shorten New Link</span></button>
				</div>
			</div>
			
		</div>
		</div>
		<div class="foot">
			<p>&copy MEDFolio 2017</p>
		</div>
	</div>
</body>

<script type="text/javascript" src="<?php echo base_url()?>assets/js/jQuery.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/front.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.16/clipboard.min.js"></script>

<!-- custom -->
<script type="text/javascript">
	$(function() {
    new Clipboard('#btn-shrt');
	});	
</script>

</html>

<div id="modal" class="siaga-modal">
	<div class="modal-bdy" id="scrollable">
		<h3>Our Stats</h3>
		<span class="garis"></span>
		<div class="content row">
			
			
			<div class="col-md-6 col-sm-6">
				<h2><?= number_format($this->db->count_all_results('urls')); ?></h2>
				<p><h4 data="desc">Shorten Links</h4></p>
			</div>
			<div class="col-md-6 col-sm-6">
				<h2><?php $var = $this->db->query('SELECT SUM(clicks) AS click FROM stats')->result()[0]->click; echo number_format($var)?></h2>
				<p><h4 data="desc">Links Clicked</h4></p>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	// Get the modal
var modal = document.getElementById('modal');

// Get the button that opens the modal
var btn = document.getElementById("modal_stats");

// Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//     modal.style.display = "none";
// }

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
} 
</script>