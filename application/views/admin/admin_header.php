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
		  <a class="navbar-brand" href="<?php echo base_url('admin/dashboard'); ?>">Admin Panel</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto"> 
		       
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <!--button class="btn btn-outline-info my-2 my-sm-0" type="submit">Logout</button-->
		      <?= anchor('login/logout','Logout',['class'=>'btn btn-sm btn-outline-danger my-2 my-sm-0']); ?>
		    </form>
		  </div>
		</nav>
	</div>