<!DOCTYPE html>
<?php include ('php/config.php'); ?>

<?php
include('php/navbar_check.php');
if(isset($_POST['login_btn'])){
                     
     $name = $_POST['username']; // getting the search inputs 
     $password = $_POST['password'];
     $sql = "SELECT * FROM users WHERE name = '$name' AND password = '$password'";
    
     $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    echo $count = mysqli_num_rows($result);
    
    if($count > 0){
		$id = $row['id'];
		$_SESSION['id'] = $id;
        header("location: index.php");
    }
    else{
        echo "Invalid Username or Password";
    }
    }
if(isset($_POST['sign_btn'])){
					
	$email = $_POST['email']; 
	$password = $_POST['password'];
	$password = md5($password);
	$username = $_POST['username'];
	$sql_check = "select * from users where username = '$username'"; 
	$sql_check = mysqli_query($conn,$sql_check);
	$count = mysqli_num_rows($sql_check);
	if ($count >= 1) {
		echo "Username already exists";
	}
	elseif ($email == "" || $password == "" || $username == "") {
		echo "Please fill in all the fields";
	}
	else{
		$vkey = md5(time().$username);
		$sql = "INSERT INTO users (Email, username, password , vkey) VALUES ('$email', '$username', '$password', '$vkey')";
		$result = mysqli_query($conn, $sql);
		$sql_get_id = "SELECT id FROM users WHERE username = '$username'";
		$result_id= mysqli_query($conn, $sql_get_id);
		$row_id = mysqli_fetch_array($result_id);
		$id = $row_id['id'];
		$_SESSION['id'] = $id;
		if ($result) {
			//send email 
			$to = $email;
			$subject = "Verify your email";
			$message = "<a href='http://localhost/rmp/verify.php?vkey=$vkey'>Click here to verify your email</a>";
			$headers = "From: Joshua Oyugi ";
			$headers .= ('Content-Type: text/html; charset=utf-8');
		//header("location: index.php");

	}
	
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
			<input type="text"name=email placeholder="Email" />
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