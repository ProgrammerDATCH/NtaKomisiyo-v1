<?php
require_once 'dbconnect.php';


$signup_name = $_POST["signup_name"];
$signup_email = $_POST["signup_email"];
$signup_password = $_POST["signup_password"];
$signup_password_repeat = $_POST["signup_password_repeat"];

if(empty($signup_name) || empty($signup_email) || empty($signup_password) || empty($signup_password_repeat))
{
  header("location: ../signup.php?msg=some_empty_fields");
  exit();
}

if($signup_password !== $signup_password_repeat)
{
  header("location: ../signup.php?msg=two_passwords_not_matches");
  exit();
}
if(!filter_var($signup_email, FILTER_VALIDATE_EMAIL))
{
  header("location: ../signup.php?msg=invalid_email");
  exit();
}


$sql = "INSERT INTO ntakomisiyo_users (user_names, user_email, user_password) VALUES (?, ?, ?);";
$stmt = mysqli_stmt_init($conn);
if( mysqli_stmt_prepare($stmt, $sql))
{
  mysqli_stmt_bind_param($stmt, "sss", $signup_name, $signup_email, $signup_password);
  mysqli_stmt_execute($stmt);
    header("location: ../login.php?msg=signup_success");
    exit();
  }

else{
  header("location: ../signup.php?msg=db_error");
  exit();
}
