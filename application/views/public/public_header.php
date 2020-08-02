<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Articles | List</title>
  </head>
  <body>
  	<div class="contaimner">
  		
		<nav class="navbar navbar-expand-lg navbar-light bg-light">		
		  <a href="<?php echo base_url(); ?>" class="navbar-brand">Articles</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>	

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		  	<?php echo form_open('user/search');?>	
		    <ul class="navbar-nav mr-auto">		    	
			 <?php echo form_input(['type'=>'search','name'=>'search','class'=>'form-control mr-sm-2','placeholder'=>'Search']);?>
			 <?php echo form_submit(['name'=>'submit','value'=>'Search','class'=>'btn btn-outline-info my-2 my-sm-0']); ?>
		    </ul> 
		<?php echo form_close();?> 
		<?= form_error('search', "<p class='nav-text text-danger'>","</p>")?>
		  </div>
		  <form class="form-inline my-2 my-lg-0">
		  	<a href="<?php echo base_url().'register' ?>" class="btn btn-sm mr-sm-2 btn-outline-primary my-2 my-sm-0" type="submit">SignUp</a>
		      <a href="<?php echo base_url().'login' ?>" class="btn btn-sm btn-outline-success my-2 my-sm-0" type="submit">Login</a>
		  </form>
		</nav>
	</div>