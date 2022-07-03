
  <?php include ('php/config.php'); ?>
  

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Chat app</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/login.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    </head>
	<body>
    <body>
        
    <div class="wrapper">
        <section class="form signup">
            <header> LecWetu </header>
            <form action="#" enctype="multipart/form-data" method ='POST'>
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <lable>First name </lable>
                        <input type="text" name=name placeholder="first name" required>
                    </div>
                    <div class="field input">
                        <lable>Username</lable>
                        <input type="text" name=username placeholder="Last name" required>
                    </div> 
                    <div class="field input">
                        <lable>Password </lable>
                        <input type="password" name = password placeholder="Enter your password " required>
                        <i class="fas fa-eye"> </i>
                    </div> 
                    <div class="field button">
                        <input type="submit" name=submit value="Continue to Ratings">
                    </div>
                </div>
            </form> 
            <div class="link"> Already signed up? <a href='login.php' >Login now</a></div>
    
    <?php
if(isset($_POST['submit'])){

	$name = $_POST['name']; 
	$password = $_POST['password'];
	$username = $_POST['username'];
	$sql_check = "select * from users where username = '$username'"; 
	$sql_check = mysqli_query($conn,$sql_check);
	$count = mysqli_num_rows($sql_check);
	if ($count >= 1) {
		echo "Username already exists";
	}
	elseif ($name == "" || $password == "" || $username == "") {
		echo "Please fill in all the fields";
	}
	else{
		$sql = "INSERT INTO users (name, username, password) VALUES ('$name', '$username', '$password')";
		$result = mysqli_query($conn, $sql);
		$sql_get_id = "SELECT id FROM users WHERE username = '$username'";
		$result_id= mysqli_query($conn, $sql_get_id);
		$row_id = mysqli_fetch_array($result_id);
		$id = $row_id['id'];
		$_SESSION['id'] = $id;
		header("location: index.php");

	}
	
}

?>
    
    


        </section>
    </div>
        
        <script src="assets/javascript/show-pass.js" async defer></script>
        <script src="assets/javascript/signup.js" async defer></script>

    </body>

</html>