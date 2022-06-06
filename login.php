<!DOCTYPE html>
<?php include ('php/config.php'); ?>
<?php
if(isset($_POST['login_btn'])){
                     
     $name = $_POST['username']; // getting the search inputs 
     $password = $_POST['password'];
     $sql = "SELECT * FROM users WHERE name = '$name' AND password = '$password'";
    
     $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    echo $count = mysqli_num_rows($result);
    
    if($count == 1){
        header("location: index.php");
    }
    else{
        echo "Invalid Username or Password";
    }

    #$_SESSION['add']= $search; // this moves the search data from the index page to load the search query in the redirected page 
    //header('location:ratings.php');
    }
    if(isset($_POST['sign_btn'])){
                     
        $name = $_POST['name']; // getting the search inputs 
        $password = $_POST['password'];
        $username = $_POST['username'];
        $sql = "INSERT INTO users (name, password, username) VALUES ('$name', '$password', '$username')";
        $result = mysqli_query($conn, $sql);
        header("location: login.php");

   
       #$_SESSION['add']= $search; // this moves the search data from the index page to load the search query in the redirected page 
       //header('location:ratings.php');
       }
            
    ?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/login.css">
	</head>
	<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#" method="post">
			<h1>Create Account</h1>
			
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" />
			<input type="text" name = username placeholder="Username"  />
			<input type="password" name = password placeholder="Password" />
			<button type = "submit" name = "sign_btn" >Sign In</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#" method="POST">
			<h1>Sign in</h1>
			<span>or use your account</span>
			<input type="text" name = username placeholder="Username"  />
			<input type="password" name = password placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button type = "submit" name = "login_btn" >Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<!--
<footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer>
-->

<script src="assets/javascript/login.js"></script>
</body>
</html>