<!DOCTYPE html>
<?php include ('php/config.php'); ?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" method='POST'>
        <title>Chat app</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/login.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    </head>
	<body>
	<div class="wrapper">
        <section class="form login">
            <header>LecWetu</header>
            <form action="#" method ='POST'>
                <div class="error-txt"></div>
                <div class="name-details">
            
                    <div class="field input">
                        <lable>Username: </lable>
                        <input type="text" name= 'username' placeholder="Email Address">
                    </div> 
                    <div class="field input">
                        <lable>Password </lable>
                        <input type="password" name='password' placeholder="Enter your password ">
                        <i class="fas fa-eye"> </i>
                    </div> 
                    <div class="field button">
                        <input type="submit" name=submit value="Continue to Ratings">
                    </div>
                </div>
            </form> 
            
			<?php

if(isset($_POST['submit'])){
                     
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

            
    ?>
    
    <div class="link"> No Account, No Problem? <a href='signup.php' >Sign Up now</a></div>
    


        </section>
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