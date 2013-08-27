<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Blueprint: Responsive Multi-Column Form</title>
		<meta name="description" content="Blueprint: Blueprint: Responsive Multi-Column Form" />
		<meta name="keywords" content="responsive form, inputs, html5, responsive, multi-column, fluid, media query, template" />
		<meta name="author" content="Codrops" />
		<link rel="stylesheet" type="text/css" href="php/css/default.css" />
		<link rel="stylesheet" type="text/css" href="php/css/component.css" />
		<script src="php/js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<header class="clearfix">
				<h1>Thanks For Sharing!</h1>
			</header>	
			<div class="main">
				<form class="cbp-mc-form" method="POST" action="upload_file.php" enctype="multipart/form-data">
					<div class="cbp-mc-column">
						<label for="Name">Name</label>
	  					<input type="text" name="Name" placeholder="Jonathan" value="<?php echo $_SESSION['views']?>">
	  					<label for="subject">Subject</label>
	  					<input type="text" name="subject" placeholder="DBMS">
	  				</div>
	  				<div class="cbp-mc-column">
	  					<label for="topic">Topic</label>
	  					<textarea name="topic"></textarea>
	  				</div>
	  				<div class="cbp-mc-column">
	  					<label for="file">Additional Files</label>
	  					<input type="file" name="file">
	  				</div>
	  				<div class="cbp-mc-submit-wrap"><input class="cbp-mc-submit" type="submit" value="Share!" /></div>
				</form>
			</div>
		</div>
	</body>
</html>
