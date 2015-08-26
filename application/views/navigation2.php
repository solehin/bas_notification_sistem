<!DOCTYPE html>
<html lang="it">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
	
		<title>Sidebar 2</title>
		
		<!--Bootstrap CSS v3.3.4-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	
		<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
    	body {
    		padding-top: 80px;
    	}
    </style>
	</head>

	<body>
		
		<nav id="nb2sb-nav" class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
				  <a class="navbar-brand" href="#">DcDeiv</a>
				  
				  <!-- icon/button -->
				  <button id="nb2sb-btn" type="button" class="navbar-toggle" data-toggle="collapse">
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span> 
				  </button>
				</div>
				
				<!-- content -->
				<div id="nb2sb-content">
				  <ul class="nav navbar-nav nav-pills navbar-right">
				    <li class="active"><a data-toggle="pill" href="#home">Home</a></li>
				    <li><a data-toggle="pill" class="close-sb" href="#about">DinarPal</a></li>
				    <li><a data-toggle="pill" href="#contact">Send</a></li>
				    <li><a data-toggle="pill" class="close-sb" href="#gallery">Keep</a></li>
				  </ul>
				</div>
			</div>
		</nav>
		
		<div class="container tab-content">
			<div id="home" class="container tab-pane fade in active">
		    <h3>HOME</h3>
		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		  </div>
		  
		  <div id="about" class="container tab-pane fade">
		    <h3>DinarPal</h3>
		    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		  </div>
		  
		  <div id="contact" class="container tab-pane fade">
		    <h3>Send</h3>
		    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		  </div>
		  
		  <div id="gallery" class="container tab-pane fade">
		    <h3>Keep</h3>
		    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		  </div>
		</div>

		<!--jQuery v1.11.2 & jQuery-UI v1.11.4-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	
		<!--Bootstrap Js v3.3.4-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		
		<!-- Nb2Sb - Navbar to Sidebar -->
		 <script src="<?php echo base_url('asset2/js/jquery.nb2sb.js'); ?>"></script>
		
		<script>
			$( document ).ready(function() {
				$( '#nb2sb-nav' ).nb2sb({
					selectors : {
					opener: '#nb2sb-btn',
					content: '#nb2sb-content',	
					closingLinks: '.close-sb'			
					},
					settings: {
						animation: {
							easing: 'easeOutQuint'
						}					
					}
				});
			});
		</script>
	</body>
</html>
