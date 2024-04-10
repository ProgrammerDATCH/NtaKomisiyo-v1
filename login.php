<?php include_once 'header.php' ?>
<?php
if(isset($_GET["msg"]))
{
	if($_GET["msg"] === "incorrect_login")
	{
		echo"<div style='  color: red;
				background: rgba(0, 0, 0, 0.6); font-size: 15px; text-align: center; border-radius: 5px; margin-bottom: 40px;'>
			Incorrect Email or Password...<br>Try again!
		</div>";
	}
	if($_GET["msg"] === "signup_success")
	{
		echo"<div style='  color: green;
				background: rgba(0, 0, 0, 0.6); font-size: 16px; text-align: center; border-radius: 5px; margin-bottom: 40px;'>
			You have been REGISTERED successfully...<br>Login Now!
		</div>";
	}
	if($_GET["msg"] === "empty_login")
	{
		echo"<div style='  color: red;
				background: rgba(0, 0, 0, 0.6); font-size: 15px; text-align: center; border-radius: 5px; margin-bottom: 40px;'>
			Fill in Email & Password...<br>Login Again!
		</div>";
	}

}
?><div class="form">
 		<form action="files/login-process.php" method="POST">

 			<span>
 				<i class="fa fa-user"></i>
 				<input type="text" placeholder="Enter Your Email here..." name="login_email">
 			</span><br>
 			<span>
                <i class="fa-solid fa-lock"></i>
 				<input type="password" placeholder="Enter Your Password here..." name="login_password">
 			</span><br>
 				<button type="submit" name="submit">LOGIN</button>
		</form>
    <p class="login_or_signup">Not yet have an account? &nbsp;&nbsp;&nbsp;&nbsp;<a href="signup.php">SIGN-UP</a> instead</p>
	</div>

<?php include_once 'footer.php' ?>
