<?php include 'public_header.php'; ?>

<div class="container">
	<div class="col-md-6 m-auto">
		<?php if($error = $this->session->flashdata('error')): ?>
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<?= $error ?>	
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		<?php endif;?>
		<?php echo form_open('login/admin_login');?>	
		  <div class="form-group">
		    <label for="exampleInputEmail1">Username</label>
		    <?php echo form_input(['type'=>'text','name'=>'username','class'=>'form-control','placeholder'=>'Enter Username','value'=>set_value('username')]);?>		    
		       
		  </div><span><?php echo form_error('username'); ?></span>
		  
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Enter Password']);?>
		    
		  </div><span><?php echo form_error('password'); ?></span>		  
		  <?php echo form_submit(['name'=>'submit','value'=>'Login','class'=>'btn btn-sm btn-success']); ?> 
		  <?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-sm btn-light']); ?> 
		  
		<?php echo form_close();?>	

	</div>	
</div>

<?php include 'public_footer.php'; ?>