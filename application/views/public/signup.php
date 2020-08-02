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
		<?php echo form_open('register/add_user');?>	

		 <div class="form-group">
		    <label>Full Name</label>
		    <?php echo form_input(['type'=>'text','name'=>'fullname','class'=>'form-control','placeholder'=>'Enter Fullname','value'=>set_value('fullname')]);?>		    
		       
		  </div><span><?php echo form_error('fullname'); ?></span>

		  <div class="form-group">
		    <label>Username</label>
		    <?php echo form_input(['type'=>'email','name'=>'username','class'=>'form-control','placeholder'=>'Enter Email','value'=>set_value('username')]);?>		    
		       
		  </div><span><?php echo form_error('username'); ?></span>
		  
		  <div class="form-group">
		    <label>Password</label>
		    <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Enter Password']);?>
		    
		  </div><span><?php echo form_error('password'); ?></span>		   
		  <?php echo form_submit(['name'=>'signup','value'=>'SignUp','class'=>'btn btn-sm btn-primary']); ?> 
		  <?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-light']); ?>
		  
		<?php echo form_close();?>	

	</div>	
</div>

<?php include 'public_footer.php'; ?>