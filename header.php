<?php
session_start();
require_once 'files/dbconnect.php';
$sql = "SELECT * FROM ntakomisiyo_users WHERE user_id = ?;";
$stmt = mysqli_stmt_init($conn);
if(mysqli_stmt_prepare($stmt, $sql))
{
  mysqli_stmt_bind_param($stmt, "s", $_SESSION["user_id"]);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  $row = mysqli_fetch_assoc($result);
}
else{
  header("location: login.php?msg=home_db_error");
  exit();
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>NTAKOMISIYO</title>
	<link rel="stylesheet" type="text/css" href="files/style_home.css">
</head>
<body>
<center>
  <div class="menu-bar">
    <ul>
      <li class="active"><a href="index.php">HOME</a></li>
      <li><a href="buy_product.php">BUY A PRODUCTS</a>
        <div class="sub-menu-1">
          <ul>
            <li><a href="#">OKAZIYO</a></li>
            <li class="hover-me"><a href="#">ELECTRONICS</a>
              <div class="sub-menu-2">
                <ul>
                    <li><a href="#">PHONES</a></li>
                    <li><a href="#">COMPUTERS</a></li>
                    <li><a href="#">OTHER Electronics...</a></li>
                </ul>
              </div>
              </li>
            <li><a href="#">OTHERS</a></li>
            </ul>
          </div>

      </li>
      <li><a href="sell_product.php">SELL A PRODUCT</a></li>
      <li><a href="contact_us.php">CONTACT US</a></li>

<fieldset style="background: rgba(255,255,0,0.3);">
  <legend>ACCOUNT</legend>
      <?php
        if(isset($_SESSION["user_id"]))
        {
          echo "<li><a href='files/logout-process.php'>LOGOUT</a></li> User: " . strtoupper($row["user_names"]) . "&nbsp;&nbsp;&nbsp;";
        }
        else {
          echo "<li><a href='login.php'>LOGIN</a></li>";
          echo "<li><a href='signup.php'>SIGNUP</a></li>";
        }
        ?>

</fieldset>

    </ul></div>
    <div class="home_contents">
      <br>
      <br><hr><br><br>
