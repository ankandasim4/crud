<html>
	<head>
		<title>CI Exersise</title>	
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.6.0/flatly/bootstrap.min.css" integrity="sha512-5bGVgbI2xuyCes5Q7colxgLChuX/2lidwyC6zFo0Fu7Nb46xf55YcMwojQel2JBxaJoa3w0d14dKek6TbGROfQ==" crossorigin="anonymous" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
	</head>

	<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-success">
		<div class="container">
		<a class="navbar-brand" href="<?php echo base_url(); ?>">CI Exersice</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarColor01">
		    <ul class="navbar-nav mr-auto">
		    	<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>pages/view/about">About</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a></li>
		    </ul>
		    
		  </div>
			<ul class="nav navbar-nav navbar-right">
				<li><a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
			</ul>
			</div>
	</nav>

	<div class="container">

