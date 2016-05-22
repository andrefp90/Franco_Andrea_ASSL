<div class="form">
<h2>Edit Pet</h2>

<?php $attributes = array('id' =>'create_form', 'class'=>'form_horizontal')?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('pets/edit/'. $pet_data->id .'', $attributes); ?>

<div class="form-group">
	
	<?php echo form_label('Pets Name'); ?>

	<?php 

		$data = array(

			'class' => 'form-control',
			'name' => 'petName',
			'value' => $pet_data->petName
			
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
			'value' => $pet_data->breed
			
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
			'value' => $pet_data->birth
			
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
			'value' => $pet_data->weight
			
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
			'value' => $pet_data->height
			
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
			'value' => $pet_data->gender
			
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
			'value' => $pet_data->description
			
			);

	 ?>
	 <?php echo form_textarea($data);?>
</div>

	
	<?php 

		$data = array(

			'class' => 'btn btn-primary',
			'name' => 'sumbit',
			'value' => 'Update Pet'
			
			);

	 ?>

	<?php echo form_submit($data);?>


</div>



<?php echo form_close(); ?>

</div>
