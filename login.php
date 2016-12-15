<?php 
		    
    require('db.php');
    session_start();
    if (isset($_POST['username'])){
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
    $query = "SELECT * FROM `users` WHERE username='$username'and password='".md5($password)."'";
	$result = mysqli_query($con,$query) ;
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Culture Ring - Login</title>
<link href="style/reset.css" type="text/css" rel="stylesheet">
<link href="style/intro.css" type="text/css" rel="stylesheet">
<link href="style/main.css" type="text/css" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

<script src="document_ready.js"></script>

</head>

<body>

<main>
	<section id="step_three" class="step_wrapper">
		<h3>Login</h3>
		</section>
		<section id="login">
           <form action="" method="post" name="login">
           <input class="type_box" type="text" name="username" placeholder="Username" required /> <br>
           <input class="type_box" type="password" name="password" placeholder="Password" required /> <br>

           <input class="login_box" name="submit" type="submit" value="Login" />
           <a href="intro.php"><p>Don't have an account yet?</p></a>
           </form>
     </section>
</main>


</body>
</html>
<?php } ?>
		
		 
		




