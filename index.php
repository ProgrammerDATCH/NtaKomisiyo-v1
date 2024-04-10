<?php include_once 'header.php' ?>
  <?php
  if(isset($_GET["msg"]) && isset($_SESSION["user_id"]))
  {
  	if($_GET["msg"] === "login_success")
  	{
  		echo"<div style='color: green;
  				background: rgba(0, 0, 0, 0.6); font-size: 15px; text-align: center; border-radius: 30px; margin-bottom: 40px;'>
  			<marquee>Logged in Successfully...</marquee><br>
        As: <font style='color: yellow'>" . strtoupper($row["user_names"]) . "</font></div>";
  	}
  }
  else if(isset($_GET["msg"]) && !isset($_SESSION["user_id"]))
  {
    echo"<div style='  color: red;
        background: rgba(0, 0, 0, 0.6); font-size: 15px; text-align: center; border-radius: 5px; margin-bottom: 40px;'>
      You must LOGIN First...<br><a href='login.php'>LOGIN NOW!</a></div>";
  }

  ?>






  <div id="items">
       <table border="3">
         <th>IGICURUZWA</th>
         <th>AMAFOTO</th>
         <th>IGICIRO</th>
         <th>IBIRANGA IGICURUZWA</th>
         <th>UMWIRONDORO W'UGURISHA</th>
<?php

require_once 'files/dbconnect.php';
$sql2 = "SELECT * FROM ntakomisiyo_items LIMIT 3;";
$stmt2 = mysqli_stmt_init($conn);
if(mysqli_stmt_prepare($stmt2, $sql2))
{
  mysqli_stmt_execute($stmt2);
  $result2 = mysqli_stmt_get_result($stmt2);

while($item = mysqli_fetch_assoc($result2)){
  echo" <tr>
     <td>" . $item['item_name'] . "</td>
     <td><img src='files/images/" . $item['item_image'] . "' height='300' width='250'></td>
     <td>" . $item['item_price'] . " RWF</td>
     <td>" . $item['item_specification'] . "</td>
     <td>" . $item['item_owner_address'] . "</td>
   </tr>";
}

}
else{
  header("location: login.php?msg=home_item_db_error");
  exit();
}

?>

       </table><br>
       <div class='buy_product_banner'><a href='buy_product.php'>SEE FULL LIST OF ITEMS ON MARKET</a></div><br><br><br><br>
 </div>




 		<h1>GURA NTA KOMISIYO</h1>
      <br>KUKO IMANA YAKUNZE ABARI MU SI CYANE BYATUMYE ITANGA UMWANA <br>
      WAYO WIKINEGE KUGIRANGO UMWIZERA WESE ATARIMBUKA<br>
       AHUBWO AHABWE UBUGINGO BUHORAHO<br>
       <br>KUKO IMANA YAKUNZE ABARI MU SI CYANE BYATUMYE ITANGA UMWANA <br>
       WAYO WIKINEGE KUGIRANGO UMWIZERA WESE ATARIMBUKA<br>
        AHUBWO AHABWE UBUGINGO BUHORAHO<br>
        <br>KUKO IMANA YAKUNZE ABARI MU SI CYANE BYATUMYE ITANGA UMWANA <br>
        WAYO WIKINEGE KUGIRANGO UMWIZERA WESE ATARIMBUKA<br>
         AHUBWO AHABWE UBUGINGO BUHORAHO<br>
         <br>KUKO IMANA YAKUNZE ABARI MU SI CYANE BYATUMYE ITANGA UMWANA <br>
         WAYO WIKINEGE KUGIRANGO UMWIZERA WESE ATARIMBUKA<br>
          AHUBWO AHABWE UBUGINGO BUHORAHO<br>



<?php include_once 'footer.php' ?>
