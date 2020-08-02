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
		<h3>Add Article</h3><hr>

		<?php echo form_open_multipart('admin/store_article');?>	
		<?php echo form_hidden('user_id',$this->session->userdata('user_id'));?>
		<?= form_hidden('created_at', date('Y-m-d H:i:s')); ?>
		  <div class="form-group">
		    <label>Title</label>
		    <?php echo form_input(['type'=>'text','name'=>'title','class'=>'form-control','placeholder'=>'Article Title', 'required'=>'true','value'=>set_value('title')]);?>
		  </div>
		  
		  <div class="form-group">
		    <label>Body</label>
		    <?php echo form_textarea(['name'=>'body','class'=>'form-control','placeholder'=>'Article Body', 'required'=>'true', 'value'=>set_value('body')]);?>
		    
		  </div>
			
		<div class="form-group">
		    <label>Select Image</label><br>
		    <?php echo form_upload(['name'=>'userfile']);?> 		    
		 </div><?php if(isset($upload_error))echo $upload_error; ?>
		
		 
		 <?php echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']); ?> 
		 <?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-light']); ?>
		</form>	

	</div>	
</div>

<?php include 'admin_footer.php'; ?>