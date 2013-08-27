<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Custom Login Form Styling</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/modernizr.custom.63321.js"></script>
        <!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    </head>
    <body>
        <div class="container">
		<header>
			
				<h1><strong>Registration Form</strong></h1>
				
				<nav class="codrops-demos">
					<a href="index.php">Login</a>
					<a class="current-demo" href="register.php">Register</a>
				</nav>
				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
		</header>
			
			<section class="main">
				<form class="form-2" action="registration.php" method="POST" >
					<h1><span class="sign-up">sign up</span></h1>
					<p class="float">
						<label for="new_user"><i class="icon-user"></i>Username</label>
						<input type="text" name="new_user" placeholder="Username or email">
						<!--<input type="radio" name="whoseRegistering" value="0" class="student">Student</input>-->						

					</p>
					<p class="float">
						<label for="new_password"><i class="icon-lock"></i>Password</label>
						<input type="password" name="new_password" placeholder="Password" >
						<!--<input type="radio" name="Identity" value="1" class="teacher">Teacher</input>-->						
					</p>
					<p class="clearfix"> 
						<input type="submit" name="submit" value="Log in">
					</p>
				</form>​​
			</section>
			
        </div>
		<!-- jQuery if needed -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    </body>
</html>
