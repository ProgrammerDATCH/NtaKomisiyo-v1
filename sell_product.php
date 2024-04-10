<?php include_once 'header.php' ?>
<?php
if(isset($_SESSION['user_id'])){
  echo"<div class='form'>
    <form action='files/sell-process.php' method='POST'>


      <span>
        <input type='text' placeholder='Enter item Name here...' name='item_name'>
      </span><br>
      <span>
        <input type='text' placeholder='Enter item image here...' name='item_image'>
      </span><br>
      <span>
        <input type='number' placeholder='Enter item Price here in RWF...' name='item_price'>
      </span><br>
      <span>
        <textarea name='item_specification' placeholder='Enter item specifications here...' cols='40' rows='10'></textarea>
      </span><br>
      <span>
        <textarea name='item_owner_address' value='WhatsApp' placeholder='Enter your Address here...' cols='40' rows='10'></textarea>
      </span><br>
      <span>Seller Email (No one will see this... Don't worry):<br>
      <input type='text'  name='item_owner_email' value=" . $row['user_email'] .">
      </span><br>
      <span>Upload an image of item: <br>
        <input type='file' name='item_image'>
      </span><br>





        <button type='submit' name='submit'>UPLOAD Your ITEM</button>
    </form>";

}
else {
  echo "You must <a href='login.php'>LOGIN</a> to UPLOAD a PRODUCT";
}
?>
<?php include_once 'footer.php' ?>
