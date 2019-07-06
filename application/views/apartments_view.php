<?php include_once('header.php'); ?>

	<!-- Table -->
	<div class="container">
		<h3>View all Apartments</h3>
		<?php if($msg = $this->session->flashdata('msg')): ?>
		<?php echo $msg; ?>
	<?php endif; ?>
		<?php echo anchor('apartments/create', 'Add Apartment', array('class' => 'btn btn-primary')); ?>
		<table class="table table-striped table-hover ">
			<thead>
				<tr>
				<th>Apartment Name</th>
				<th>Apartment Address</th>
				<th>Number of Storis</th>
				<th>Number of Rooms</th>
				<th>Number of Bathrooms</th>
				<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php if(count($posts)): ?>
				<?php foreach($posts as $post): ?>
				<tr>
				<td><?php echo $post->Apartment_Name; ?></td>
				<td><?php echo $post->Apartment_Address; ?></td>
				<td><?php echo $post->Number_of_Stories; ?></td>
				<td><?php echo $post->Number_of_Rooms; ?></td>
				<td><?php echo $post->Number_of_Bathrooms; ?></td>
				<td>
				<?php echo anchor("apartments/view/{$post->Apartment_ID}", 'View', array('class' => 'label label-primary')); ?>
				<?php echo anchor("apartments/update/{$post->Apartment_ID}", 'Update', array('class' => 'label label-success')); ?>
				<?php echo anchor("apartments/delete/{$post->Apartment_ID}", 'Delete', array('class' => 'label label-danger')); ?>
				</td>
				</tr>
<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td>No Records Found</td>
				</tr>
			<?php endif; ?>
			</tbody> 
		</table> 
	</div>	

<?php include_once('footer.php'); ?>