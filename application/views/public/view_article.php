<?php include 'public_header.php'; ?>
			
	<?php foreach($article as $article):?>
		<div class="container">
			<h3 class="pt-5"><?= $article->title ?></h3><hr>
			<div class="row">		
				<div class="col-md-4">
					<img src="<?= $article->image_path ?>" alt="image" width="100%" class="img-fluid">
				</div>
				<div class="col-md-8">
					<p><span class="text-dark bg-light"><strong><?= date('dM y', strtotime($article->created_at))." : "; ?></strong></span><?= $article->body ?></p>
				</div>
			</div><hr>
		</div>
	<?php endforeach; ?>

<?php include 'public_footer.php'; ?>

    




