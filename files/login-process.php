<?php
require_once 'dbconnect.php';
$login_email = $_POST["login_email"];
$login_password = $_POST["login_password"];

if(empty($login_email) || empty($login_password))
{
  header("location: ../login.php?msg=empty_login");
  exit();
}

$sql ="SELECT * FROM ntakomisiyo_users WHERE user_email = ? AND user_password = ?;";
$stmt = mysqli_stmt_init($conn);
if( mysqli_stmt_prepare($stmt, $sql))
{
  mysqli_stmt_bind_param($stmt, "ss", $login_email, $login_password);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  if($row = mysqli_fetch_assoc($result))
  {
    session_start();
    $_SESSION["user_id"] = $row["user_id"];
    header("location: ../index.php?msg=login_success");
    exit();
  }
  else{
    header("location: ../login.php?msg=incorrect_login");
    exit();
  }
}
else{
  header("location: ../login.php?msg=db_error");
  exit();
}
