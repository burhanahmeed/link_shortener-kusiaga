<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#003399">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#003399">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#003399">
	<title>Can't Find URL</title>
	<link rel="icon" href="<?php echo base_url();?>assets/img/logo.png">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/urlsh.css">
</head>
<body>
	<div class="construct">
	<div class="cont">
		<div class="header">
			<div class="separate">
				<a href="#"><span class="glyphicon glyphicon-stats"></span></a>
			</div>
			<div class="separate">
				<a href="#"><span class="glyphicon glyphicon-envelope"></span></a>
			</div>
			<div class="separate" style="background-color: red">
				<a href="#"><span class="glyphicon glyphicon-bell"></span></a>
			</div>
		</div>
		<div class="inner" align="center">
			<img src="<?php echo base_url()?>assets/img/log-1.png">
		</div>
		<div class="isi">
			<h2>Whoops! We can't find the URL you requested</h2>
			<form action="<?php echo base_url()?>">
				<button>BACK</button>
			</form>
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