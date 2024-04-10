<?php include_once 'header.php' ?>

<div id="items">
     <table border="3">
       <th>IGICURUZWA</th>
       <th>AMAFOTO</th>
       <th>IGICIRO</th>
       <th>IBIRANGA IGICURUZWA</th>
       <th>UMWIRONDORO W'UGURISHA</th>
<?php

require_once 'files/dbconnect.php';
$sql2 = "SELECT * FROM ntakomisiyo_items;";
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

?></table> </div>


<?php include_once 'footer.php' ?>
