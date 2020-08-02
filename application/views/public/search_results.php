<?php include 'public_header.php'; ?>
    
<div class="container">
	<h2 class="pt-3">Search Results</h2>
	<table class="table">
		<thead>
			<tr>
				<td>S/No.</td>
				<td>Image</td>
				<td>News Title</td>
				<td>Published</td>
			</tr>
		</thead>
		<tbody>			
			<?php if(count($articles)): ?>	
			<?php $count = $this->uri->segment(4,0)?>
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
	<!--div>
	  <ul class="pagination pagination-sm">
	    <li class="page-item disabled">
	      <a class="page-link" href="#">&laquo;</a>
	    </li>
	    <li class="page-item active">
	      <a class="page-link" href="#">1</a>
	    </li>
	    <li class="page-item">
	      <a class="page-link" href="#">2</a>
	    </li>
	    <li class="page-item">
	      <a class="page-link" href="#">3</a>
	    </li>
	    <li class="page-item">
	      <a class="page-link" href="#">4</a>
	    </li>
	    <li class="page-item">
	      <a class="page-link" href="#">5</a>
	    </li>
	    <li class="page-item">
	      <a class="page-link" href="#">&raquo;</a>
	    </li>
	  </ul>
</div-->
</div>

<?php include 'public_footer.php'; ?>

    




