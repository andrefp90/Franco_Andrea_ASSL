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
			'placeholder' => 'Enter Pets Name',
			'value' =>set_value ('petName')
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
			'placeholder' => 'Enter Pets Breed',
			'value' =>set_value ('breed')
			
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
			'type' => 'date',
			'value' =>set_value ('birth')
			
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
			'placeholder' => 'Enter Weight ',
			'value' =>set_value ('weight')
			
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
			'placeholder' => 'Enter height',
			'value' =>set_value ('height')
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
			'placeholder' => 'Enter pets gender',
			'value' =>set_value ('gender')
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
			'placeholder' => 'Your pets story....',
			'value' =>set_value ('description')
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
