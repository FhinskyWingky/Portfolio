<?php 
  $STORE_ID = $_GET['STORE_ID'];
  $PNAME = $_GET['PNAME'];
  $AVA_AMOUNT = $_GET['AVA_AMOUNT'];
?>
<html>
<h1>Delete</h1>
<form action = "DSDdeleted.php" method = "GET">
รหัสคลังสินค้า: <input type = "text" name = "STORE_ID" value = "<?php echo $STORE_ID; ?>"> <br>
ชื่อสินค้า: <input type = "text" name = "PNAME" value = "<?php echo $PNAME; ?>"> <br>
จำนวนสินค้าที่มี : <input type = "text" name = "AVA_AMOUNT" value = "<?php echo $AVA_AMOUNT; ?>"> <br>
    <input type = "submit" value = "Enter">
</form> 
</html>