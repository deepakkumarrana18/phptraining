<?php include 'public_header.php'; ?>
    
<div class="container">
	<h2 class="pt-3">Sample News Articles</h2>
	<table class="table">
		<thead>
			<tr>
				<td>S/No.</td>
				<td>Image</td>
				<td>News Title</td>
				<td>Published</td>
				<!--td>Action</td-->
			</tr>
		</thead>
		<tbody>			
			<?php if(count($articles)): ?>	
			<?php $count = $this->uri->segment(3,0)?>
			<?php foreach($articles as $article):?>
				<tr>	
					<td><?= ++$count; ?></td>
					<td><a href="<?php echo base_url('user/view/').$article->id;?>"><img src="<?= $article->image_path ?>" alt="image" width="100px" class="img-fluid"></a></td>
					<td><a href="<?php echo base_url('user/view/').$article->id;?>" style="text-decoration: none;"><?= $article->title?></a></td>					
					<td style="width: 100px;"><?= date('dM Y', strtotime($article->created_at)); ?></td>	
					<!--td><?= anchor("user/view/$article->id", 'View', ['class'=>'btn btn-sm btn-primary'])?></td-->			
				</tr>
			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="3">No Records Found...</td>
				</tr>					
			<?php endif;?>	
		</tbody>
	</table>
	<?= $this->pagination->create_links() ?>	
</div>

<?php include 'public_footer.php'; ?>

    




