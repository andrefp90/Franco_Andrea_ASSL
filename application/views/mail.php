


<div class="form">

<?php echo form_open('email/send');?>

<p>Would you like to recive this weeks Newsletter with tarining, behavior and feeding tips!</p> 

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
	
	<?php 

		$data = array(

			'class' => 'btn btn-primary',
			'name' => 'sumbit',
			'value' => 'Sumbit'
			
			);

	 ?>

	<?php echo form_submit($data);?>


</div>





<?php echo form_close(); ?>
</div>

</div>