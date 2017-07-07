<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <title><?php echo bloginfo('name'); ?></title>
    <?php wp_head(); ?>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/ffc2c94a85.js"></script>

    
	<nav class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle"  
				data-toggle="collapse" data-target="#example-navbar-collapse">
				 <span class="sr-only">Toggle Navigation</span>
				 <span class="icon-bar"></span>
				 <span class="icon-bar"></span>
				 <span class="icon-bar"></span>
			</button>
		
			<a class="navbar-brand" href="https://coloredcow.com" id="home_button">ColoredCow</a>	
			<ul class="nav navbar-nav navbar-left">
				<li id="home"><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
			</ul>
		</div>
		
		<!-- <div class="collapse navbar-collapse" id="example-navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li id="show_new_event"><a href="index.php"><span class="glyphicon glyphicon-user"></span> Guests</a></li>
				<li id="show_new_event"><a href="event.php"><span class="glyphicon glyphicon-glass"></span> Events</a></li>
			</ul>				
		</div> -->
		
	</nav> 
</head>

<body>
    