<!DOCTYPE html>
<html lang="en-us">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scaled=1.0">

<link rel="icon" href="<?php echo base_url();?>assets/img/logo.png">
  <title>Get Your Link Today</title>

<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css"/>
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/loadingbar.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/font-awesome.min.css">



</head>
<body>

 
<div class="wrapper">
  <div class="inner">
    <header class="header">
      <div class="head-nav left">
        <a href="medfolio.my.id/details#/feature" class=""><span class="glyphicon glyphicon-chevron-left"></span> Back</a>
      </div>
      <div class="head-nav right">
        <a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-question-sign"></span></a>
      </div>
      <div class="head-nav right">
        <a href="<?php echo base_url('details#/donate')?>"><span class="glyphicon glyphicon-usd"></span></a>
      </div>
</header>
<div id="loadingbar-frame"></div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">What is this</h4>
      </div>
      <div class="modal-body">
        <?php echo $desc ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- body utama -->
<div class="utama">