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
	<title>Dashboard | $name</title>
	<link rel="icon" href="<?php echo base_url();?>assets/img/logo.png">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/dashboard.css">
</head>
<body>
    <header class="header">
     
      <a href="#" class="header__logo"><img src="assets/img/log-1.png"></a>

      <div class="hamburger">
      	<a href="#">
      		<span class="glyphicon glyphicon-menu-hamburger"></span>
      	</a>
      	<input type="checkbox" name="">
      </div>

      <div class="user dropdown">
      	<a href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-option-vertical"></span> Email</a>	
      	<li class=" dropdown-menu">
      		<ul><a href="">Profile</a></ul>
      		<ul><a href="">Log Out</a></ul>
      	</li>
      </div>
      
      <nav id="collapse" class=" menu">
        <ul><a href="#">Dashboard</a></ul>
        <ul><a href="#">Your Links</a></ul>
      </nav>
      
    </header>
</body>

<script type="text/javascript" src="<?php echo base_url()?>assets/js/jQuery.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/front.js"></script>

<script type="text/javascript">
	$('.hamburger').click(function(){
		$('#collapse').css({'display':'block'});
	})
</script>

</html>