
<!-- Detect what page is loaded so that it shows as active  -->
<?php

$home = "";
$pets = "";
$send = "";

if($this->uri->segment(1) == 'pets'){

  $pets = "active";

}else if ($this->uri->segment(2) == 'send'){

  $send = "active";

}else{

  $home = "active";
}




?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pet Track</title>
  <!-- Link google fonts API,
  -Bootstrap and stylesheet and
  -jQuery
   -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css">
	<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url();?>//assets/images/logo.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
    		
        <!-- Using codeigniter base_url to link the different viwes -->
	         <li class="<?php echo $home; ?>"><a href="<?php echo base_url();?>">HOME<span class="sr-only">(current)</span></a></li>
	          <?php if($this->session->userdata('logged_in')): ?>
	         <li class="<?php echo $pets; ?>"><a href="<?php echo base_url();?>pets">DASHBOARD<span class="sr-only">(current)</span></a></li>
	          <?php endif; ?>
	         
	         <li class="<?php echo $send; ?>"><a href="<?php echo base_url();?>email/send">NEWSLETTER<span class="sr-only">(current)</a></li>
	         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LOGIN/REGISTER <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('users/login'); ?>">LOGIN</a></li>
            <li ><a href="<?php echo base_url();?>users/register">REGISTER<span class="sr-only">(current)</span></a></li>
             <li role="separator" class="divider"></li>
             <?php if($this->session->userdata('logged_in')): ?>
            <li ><a href="<?php echo base_url();?>users/logout">LOGOUT</a></li>
            <?php endif; ?>
            
           </ul>
        </li>
       
     </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">

<!-- Load main_view -->
			<?php $this->load->view($main_view) ?>
	
	

	</div>













	
	





</body>
</html>