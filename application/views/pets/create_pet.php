<div class="form">
<h2>Add Pet</h2>

<?php $attributes = array('id' =>'create_form', 'class'=>'form_horizontal')?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('pets/create', $attributes); ?>

<div class="form-group">
	
	<?php echo form_label('Pets Name'); ?>

	<?php 

		$data = array(

			'class' => 'form-control',
			'name' => 'petName',
			'placeholder' => 'Enter Pets Name'
			
			);

	 ?>
	 <?php echo form_input($data);?>
</div>

<div class="form-group">
	
	<?php echo form_label('Breed'); ?>

	<?php 

		$data = array(

			'class' => 'form-control',
			'name' => 'breed',
			'placeholder' => 'Enter Pets Breed'
			
			);

	 ?>
	 <?php echo form_input($data);?>
</div>

<div class="form-group">
	
	<?php echo form_label('Date of Birth'); ?>

	<?php 

		$data = array(

			'class' => 'form-control',
			'name' => 'birth',
			'type' => 'date'
			
			);

	 ?>
	 <?php echo form_input($data);?>
</div>

<div class="form-group">
	
	<?php echo form_label('Weight'); ?>

	<?php 

		$data = array(

			'class' => 'form-control',
			'name' => 'weight',
			'placeholder' => 'Enter Weight '
			
			);

	 ?>
	 <?php echo form_input($data);?>
</div>


<div class="form-group">
	
	<?php echo form_label('Height'); ?>

	<?php 

		$data = array(

			'class' => 'form-control',
			'name' => 'height',
			'placeholder' => 'Enter height'
			
			);

	 ?>

	<?php echo form_input($data);?>


</div>

<div class="form-group">
	
	<?php echo form_label('Gender'); ?>

	<?php 

		$data = array(

			'class' => 'form-control',
			'name' => 'gender',
			'placeholder' => 'Enter pets gender'
			
			);

	 ?>
	 <?php echo form_input($data);?>
</div>
<div class="form-group">
	
	<?php echo form_label('Description'); ?>

	<?php 

		$data = array(

			'class' => 'form-control',
			'name' => 'description',
			'placeholder' => 'Your pets story....'
			
			);

	 ?>
	 <?php echo form_textarea($data);?>
</div>





	
	<?php 

		$data = array(

			'class' => 'btn btn-primary',
			'name' => 'sumbit',
			'value' => 'Add Pet'
			
			);

	 ?>

	<?php echo form_submit($data);?>


</div>



<?php echo form_close(); ?>

</div>
