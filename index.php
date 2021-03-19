<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" 
	content="width=device-width,initial-scale=1.0">
	<title>Donation Site</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="landing">
		<h1 ><strong><a  >Donation Portal - </strong>   Sparks Foundation</h1></a>
		</div>
	<header id="header" class="alt">
				
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="index.php">Log In</a></li>
					</ul>
				</nav>
	</header>

	<div class="hero">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
				<button type="button" class="toggle-btn" onclick="register()">Register</button>
			</div>
			<form action="validation.php" method="post" id="login" class="input-group">
				<input type="email" name='user' class="input-field" placeholder="Email" required>
				<input type="password" name='password'class="input-field" placeholder="Enter Password" required>
				<input type="checkbox" class="check-box"><span>Remember Password</span>
				<button type="submit" name= 'submit'class="submit-btn">Log In</button>
			</form>

			<form  action="registeration.php" method="post" id="register" class="input-group">
				<input type="email" name="user" class="input-field" placeholder="Email" required>
				<input type="password" name="password" class="input-field" placeholder="Enter Password" required>
				<input type="checkbox" name="check" onclick="thischeck()" class="check-box"><span>I agree to the terms & conditions</span>

				<button type="submit" name="submit" class="submit-btn">Register</button>
			</form>
	    </div>
	</div>

	<script>
		
		var x= document.getElementById("login");
		var y= document.getElementById("register");
		var z= document.getElementById("btn");

		function register(){
			x.style.left= "-400px";
			y.style.left= "50px";
			z.style.left= "110px";
		}

		function login(){
			x.style.left= "50px";
			y.style.left= "450px";
			z.style.left= "0px";
		}


	</script>





<!--<!DOCTYPE HTML>
<html>
	<head>
		<title>Donation Portal</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main1.css" />
	</head>
	<body class="landing">

			<header id="header" class="alt">
				<h1 ><strong><a href="home.php" >Donation Portal - </a></strong>   Sparks Foundation</h1>
				<nav id="nav">
					<ul>
						<li><a href="first.php">Home</a></li>
						<li><a href="first.php">Log In</a></li>
					</ul>
				</nav>
			</header>

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

			<section id="banner">
				<div class="hero">
					<div class="form-box">
					<div class="button-box">
							<div id="btn"></div>
							<button type="button" class="toggle-btn" onclick="login()">Log In</button>
							<button type="button" class="toggle-btn" onclick="register()">Register</button>
						</div>
						<form action="validation.php" method="post" id="login" class="input-group1">
							<input type="email" name='user' class="input-field-1" placeholder="Email" required>
							<input type="password" name='password'class="input-field-1" placeholder="Enter Password" required>
							<input type="checkbox" class="check-box"><span>Remember Password</span>
							<button type="submit" name= 'submit'class="submit-btn">Log In</button>
						</form>

						<form  action="registeration.php" method="post" id="register" class="input-group1">
							<input type="email" name="user" class="input-field-1" placeholder="Email" required>
							<input type="password" name="password" class="input-field-1" placeholder="Enter Password" required>
							<input type="checkbox" name="check" onclick="thischeck()" class="check-box"><span>I agree to the terms & conditions</span>

							<button type="submit" name="submit" class="submit-btn">Register</button>
						</form> 
	    			</div>
	    		</div>
				
			</section>	
		<script>
		
		var x= document.getElementById("login");
		var y= document.getElementById("register");
		var z= document.getElementById("btn");

		function register(){
			x.style.left= "-400px";
			y.style.left= "50px";
			z.style.left= "110px";
		}

		function login(){
			x.style.left= "50px";
			y.style.left= "450px";
			z.style.left= "0px";
		}


	</script>

	</body>
</html>-->
