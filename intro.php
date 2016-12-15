
        
		<?php
require('db.php');
if (isset($_REQUEST['username'])){
      
	$username = $_REQUEST['username'];
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
    $query = "INSERT into `users` (username, password, email) VALUES ('$username', '".md5($password)."', '$email')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<!doctype html>
<html>

<head>

<meta charset="utf-8">
<title>Culture Ring - Signup</title>
<link href="style/reset.css" type="text/css" rel="stylesheet">
<link href="style/intro.css" type="text/css" rel="stylesheet">
<link href="style/main.css" type="text/css" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

<script src="document_ready.js"></script>

</head>

<body>

<header>
	<section id="intro">
		<h1 id="intro_header">culture Ring</h1>
		<h2 id="intro_subheader">A new way to experince danish nature</h2>
	</section>
</header>

<main>
	<article id="steps">
		<section id="step_one" class="step_wrapper">
			<div class="step_number">I</div>
			<h3>What is the Culture Ring</h3>
			<img class="step_icon">
			<p>Culture Ring is a way to experience danish nature and culture in a healthy way by biking on organised routes.<br><br>
			When participating and completing routes, you and your team will be able to gain achievements and win rewards.<br><br>
			The campaign will be launched at the xx.xx.xx and go on until xx.xx.xx.</p>
		</section>
		<section id="step_two" class="step_wrapper">
			<div class="step_number">II</div>
			<h3>What are the prices</h3>
			<img class="step_icon">
			<p>Not only do you get to spend time with your loved once in the open, we have also made sure that there is a wide arrange of prices that you can win doing the campaign.<br><br>
			These ranges from cinema to amument parks to concert tickets and more.<br><br>
			For each place you and your team succesfully visit and check in, you will get a ticket to win those prices.<br><br>
		 	This way, you and your team, will be able to have even more memorable times together.</p>
		</section>
		<section id="step_three" class="step_wrapper">
			<div class="step_number">III</div>
			<h3>How can i participate</h3>
			<p>To participate, all you need to do is create a profile by following the signup form below.<br><br>
			When your profile is created you will be able to invite your friends and family to group up with you for the prices.<br><br>
			Remember, the more time you spend together, the more tickets you will get.<br><br>
			For fairplay, we limited the groups to a maximum of 10 members.</p>
		</section>
<section id="signup">
  <form name="registration" action="" method="post">
     <input class="type_box" type="text" name="username" placeholder="Username" required>
     <input class="type_box" type="email" name="email" placeholder="Email Address" required>
     <input class="type_box" type="password" name="password" id="Password" placeholder="Desired Password" required>
     
     <input class="login_box" type="submit" name="submit" value="Sign Up" /> 
  </form>
  <a href="login.php"><p id="toggle">I have an account</p></a>
</section>

</main>
<footer>
</footer>

</body>

</html>
<?php } ?>



