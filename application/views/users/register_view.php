<div class="form">
<h2>Register</h2>

<?php $attributes = array('id' =>'register_form', 'class'=>'form_horizontal')?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('users/register', $attributes); ?>

<div class="form-group">
	
	<?php echo form_label('First Name'); ?>

	<?php 

		$data = array(

			'class' => 'form-control',
			'name' => 'first_name',
			'placeholder' => 'Enter First Name'
			
			);

	 ?>
	 <?php echo form_input($data);?>
</div>

<div class="form-group">
	
	<?php echo form_label('Last Name'); ?>

	<?php 

		$data = array(

			'class' => 'form-control',
			'name' => 'last_name',
			'placeholder' => 'Enter Last Name'
			
			);

	 ?>
	 <?php echo form_input($data);?>
</div>

<div class="form-group">
	
	<?php echo form_label('E-mail'); ?>

	<?php 

		$data = array(

			'class' => 'form-control',
			'name' => 'email',
			'placeholder' => 'Enter your E-mail'
			
			);

	 ?>
	 <?php echo form_input($data);?>
</div>

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
	
	<?php echo form_label('Confrim Password'); ?>

	<?php 

		$data = array(

			'class' => 'form-control',
			'name' => 'con_password',
			'placeholder' => 'Confrim Password'
			
			);

	 ?>
	 <?php echo form_input($data);?>
</div>

<div class="form-group">
	
	<?php 

		$data = array(

			'class' => 'btn btn-primary',
			'name' => 'sumbit',
			'value' => 'Register'
			
			);

	 ?>

	<?php echo form_submit($data);?>


</div>



<?php echo form_close(); ?>

</div>
