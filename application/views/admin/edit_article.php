<?php include 'admin_header.php'; ?>

<div class="container">
	<div class="col-md-12 m-auto">
		<!--<?php if($feedback = $this->session->flashdata('feedback')): ?>
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<?= $feedback ?>	
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		<?php endif;?>-->
		
		<h3>Edit Article</h3><hr>

		<?php echo form_open("admin/update_article/{$article->id}");?>	
		
		  <div class="form-group">
		    <label for="exampleInputEmail1">Title</label>
		    <?php echo form_input(['type'=>'text','name'=>'title','class'=>'form-control','placeholder'=>'Article Title','value'=>set_value('title',$article->title)]);?> 
		  </div><span><?php echo form_error('title'); ?></span>
		  
		  <div class="form-group">
		    <label for="exampleInputPassword1">Body</label>
		    <?php echo form_textarea(['name'=>'body','class'=>'form-control','placeholder'=>'Article Body','value'=>set_value('title',$article->body)]);?>		   
		  </div><span><?php echo form_error('body'); ?></span>
		  
		  
		  <?php echo form_submit(['name'=>'submit','value'=>'Update','class'=>'btn btn-primary']); ?> 
		  <?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-light']); ?> 
		  
		</form>	
	
	</div>	
</div>

<?php include 'admin_footer.php'; ?>