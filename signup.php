<?php include_once 'header.php' ?>

<?php
if(isset($_GET["msg"]))
{
	if($_GET["msg"] === "some_empty_fields")
	{
		echo"<div style='  color: red;
				background: rgba(0, 0, 0, 0.6); font-size: 15px; text-align: center; border-radius: 5px; margin-bottom: 40px;'>
			You must Fill all Fields...<br>Signup Again!
		</div>";
	}
	if($_GET["msg"] === "two_passwords_not_matches")
	{
		echo"<div style='  color: red;
				background: rgba(0, 0, 0, 0.6); font-size: 16px; text-align: center; border-radius: 5px; margin-bottom: 40px;'>
			Two provided Passwords doesn't matches...<br>Signup Again!
		</div>";
	}
	if($_GET["msg"] === "invalid_email")
	{
		echo"<div style='  color: red;
				background: rgba(0, 0, 0, 0.6); font-size: 15px; text-align: center; border-radius: 5px; margin-bottom: 40px;'>
			Invalid Email (Email should contain @ )...<br>Signup Again!
		</div>";
	}

}
?>


	<div class="form">
 		<form action="files/signup-process.php" method="POST">


 			<span>
 				<input type="text" placeholder="Enter Your Full Name here..." name="signup_name">
 			</span><br>
      <span>
 				<input type="text" placeholder="Enter Your Email here..." name="signup_email">
 			</span><br>


 			<span>
                <i class="fa-solid fa-lock"></i>
 				<input type="password" placeholder="Enter Password here..." name="signup_password">
 			</span><br>
      <span>
                <i class="fa-solid fa-lock"></i>
 				<input type="password" placeholder="Repeat Password here..." name="signup_password_repeat">
 			</span><br>

 				<button type="submit" name="submit">SIGN-UP</button>
		</form>
    <p class="login_or_signup">Already have an account? &nbsp;&nbsp;&nbsp;&nbsp;<a href="login.php">LOGIN</a> instead</p>
	</div>
<?php include_once 'footer.php' ?>
