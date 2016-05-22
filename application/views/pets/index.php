<p class="user">
<?php echo "Welcome " . $this->session->userdata('username')." !!!";?>
</p>

<h2>Pets Dashboard</h2>

<p class="bg-success" >
<?php if($this->session->flashdata('pet_created')): ?>

<?php echo $this->session->flashdata('pet_created'); ?>

<?php endif; ?>

<?php if($this->session->flashdata('pet_updated')): ?>

<?php echo $this->session->flashdata('pet_updated'); ?>

<?php endif; ?>

<?php if($this->session->flashdata('pet_deleted')): ?>

<?php echo $this->session->flashdata('pet_deleted'); ?>

<?php endif; ?>

<?php if($this->session->flashdata('task_updated')): ?>

<?php echo $this->session->flashdata('task_updated'); ?>

<?php endif; ?>



	<a class="btn btn-primary pull-right" href="<?php echo base_url();?>/pets/create">Add Pet</a>


<table class="table table-hover">
	<thead>
		<tr>
			<th>
				Pets Name
			</th>
			<th>
				Breed
			</th>
			
		</tr>

	</thead>
	<tbody>


		<?php foreach($pets as $pet):?>
<tr>

<?php echo "<td><a href='". base_url() . "pets/display/". $pet->id ."'>" . $pet->petName . "</td>"; ?>

<?php echo "<td>" . $pet->breed . "</td>"; ?>

<td><a class="btn btn-danger" href="<?php echo base_url();?>pets/delete/<?php echo $pet->id; ?>"><span class="glyphicon glyphicon-remove"></a></td>

</tr>


		<?php endforeach; ?>
	</tbody>
</table>
