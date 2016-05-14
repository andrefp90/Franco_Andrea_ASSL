<?php if($this->session->userdata('logged_in')): ?>
<div class="container">
<h2>Welcome to PetTrack</h2>


<p class="home">

<?php

if($this->session->userdata('username')):

echo "Hello " . $this->session->userdata('username');
?>	
	<?php endif; ?>

with petTrack, you will be able to keep up to date all your pets information and add a to-do list so you won't forget when you need to buy food or when is the next vaccination. We all love our pets they are part of our family, but we have so much going on with our lives that it is easy to forget, so we are here to help you make tour life easier!

</p>

<div align="center">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo base_url();?>//assets/images/photos/IMG_0445.jpg" alt="wolfdog and samoyed">
    </div>
    <div class="item">
      <img src="<?php echo base_url();?>//assets/images/photos/IMG_0476.jpg" alt="samoyed">
    </div>
	<div class="item">
      <img src="<?php echo base_url();?>//assets/images/photos/IMG_0489.jpg" alt="wolfdog">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
</div>



<?php else: ?>


<div class="form">
<h2>Login </h2>

<?php $attributes = array('id' =>'login_form', 'class'=>'form_horizontal')?>

<?php if($this->session->flashdata('errors')): ?>

<?php echo $this->session->flashdata('errors'); ?>

<?php endif; ?>

<?php echo form_open('users/login', $attributes); ?>

<div class="form-group">
	
	<?php echo form_label('Username'); ?>

	<?php 

		$data = array(

			'class' => 'form-control',
			'name' => 'username',
			'placeholder' => 'Enter Username'
			
			);

	 ?>
	 <?php echo form_input($data);?>
</div>


<div class="form-group">
	
	<?php echo form_label('Password'); ?>

	<?php 

		$data = array(

			'class' => 'form-control',
			'name' => 'password',
			'placeholder' => 'Enter Password'
			
			);

	 ?>

	<?php echo form_password($data);?>


</div>

<div class="form-group">
	
	<?php 

		$data = array(

			'class' => 'btn btn-primary',
			'name' => 'sumbit',
			'value' => 'Login'
			
			);

	 ?>

	<?php echo form_submit($data);?>


</div>



<?php echo form_close(); ?>

<?php endif; ?>
</div>
