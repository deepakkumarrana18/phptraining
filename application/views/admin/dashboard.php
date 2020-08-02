<?php include 'admin_header.php'; ?>
    
<div class="container">

	<div class="row">
		<div class="col-md-6 float-left">
			<?php if($feedback = $this->session->userdata('feedback')) :
					$feedback_class = $this->session->userdata('feedback_class');
			?>				
			<div class="alert <?=$feedback_class?> alert-dismissible" role="alert">
			  <?= $feedback ?>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		<?php endif;?>
		</div>
		<div class="col-md-6 pb-1 pt-1">
			<a href="<?php echo base_url().'admin/add_article';?>" class="btn btn-primary float-right">Add Article</a>
		</div>
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th>S/No.</th>	
						<th>Image</th>					
						<th>Title</th>
						<th>Publish Date</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				<?php if(count($articles)):
					$count = $this->uri->segment(3, 0);
					foreach($articles as $article): ?>
					<tr>
						<td><?= ++$count?></td>
						<td><a href="<?php echo base_url('admin/view/').$article->id;?>"><img src="<?= $article->image_path ?>" alt="image" width="100px" class="img-fluid"></a></td>
						<td><a href="<?php echo base_url('admin/view/').$article->id;?>" style="text-decoration: none;"><?= substr($article->title, 0,50)."..." ?></a></td>
						<td><?= date('dM Y - H:i:s', strtotime($article->created_at));?></td>						
						<td>
							<?= anchor("admin/view/{$article->id}",'View',['class'=>'btn btn-sm btn-primary mr-2'])?>
							<?= anchor("admin/edit_article/{$article->id}",'Edit',['class'=>'btn btn-sm btn-success mr-2'])?>
							<a class="btn btn-sm btn-danger" onclick="return confirm('Are you Sure!');" href="<?=base_url("admin/delete_article/$article->id");?>" >Delete</a>
							</div>	
						</td>
					</tr>
					<?php endforeach; ?>
					<?php else: ?>
						<tr>
							<td colspan="3">No Record Found..</td>
						</tr>
				<?php endif; ?>	

				</tbody>
			</table>
			
			<?= $this->pagination->create_links(); ?>

		</div>
	</div>
	
</div>    


<?php include 'admin_footer.php'; ?>

    




