<div class="col-xs-9">

<p class="bg-success">
	

<?php if($this->session->flashdata('mark_done')): ?>

<?php echo $this->session->flashdata('mark_done'); ?>

<?php endif; ?>


<?php if($this->session->flashdata('mark_undone')): ?>

<?php echo $this->session->flashdata('mark_undone'); ?>

<?php endif; ?>

</p>


<div class="panel panel-primary">
<div class="panel-heading"><h4>Pets Name: <?php echo $pet_data->petName; ?></h4></div>
<div class="panel-body">
<p><strong>Breed: </strong><?php echo $pet_data->breed;?></p>
<p><strong>Birthday: </strong><?php echo $pet_data->birth;?></p>
<p><strong>Weight: </strong><?php echo $pet_data->weight;?></p>
<p><strong>Height: </strong><?php echo $pet_data->height;?></p>
<p><strong>Gender: </strong><?php echo $pet_data->gender;?></p>
<p><strong>Description: </strong><?php echo $pet_data->description;?></p>


</div>
</div>

<div class="panel panel-warning">
	<div class="panel-heading"><h4>Active Tasks</h4></div>

	<div class="panel-body">

	<ul class="list-group">

	<?php if($completed_tasks): ?>

	<?php foreach($completed_tasks as $task): ?>

	<li class="list-group-item">
	<a href="<?php echo base_url();?>tasks/display/<?php echo $task->task_id; ?>">

	<?php echo $task->task_name; ?>

	</a>
	</li>
	<?php endforeach;?>

<?php else: ?>
<p>You have no pending tasks</p>

<?php endif; ?>

</ul>
</div>
</div>

<div class="panel panel-success">
	<div class="panel-heading"><h4>Completed Tasks</h4></div>

	<div class="panel-body">

	<ul class="list-group">


<?php if($not_completed_tasks): ?>


	<?php foreach($not_completed_tasks as $task): ?>

	<li class="list-group-item">
	<a href="<?php echo base_url();?>tasks/display/<?php echo $task->task_id; ?>">


		<?php echo $task->task_name; ?>

	</a>
	</li>

	<?php endforeach; ?>

	<?php else: ?>

	<p>You have no pending tasks</p>




<?php endif; ?>

	</ul>
</div>

</div>


</div>




<div class="col-xs-3 pull-right">
<ul class="list-group">
		
		<h4>Pet Actions</h4>

		<li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/create/<?php echo $pet_data->id; ?>">Create Task</a></li> 
		<li class="list-group-item"><a href="<?php echo base_url();?>pets/edit/<?php echo $pet_data->id; ?>">Edit Pet</a></li> 
		<li class="list-group-item"><a href="<?php echo base_url();?>pets/delete/<?php echo $pet_data->id; ?>">Delete Pet</a></li> 

	</ul>

</div>


