<?php 
  $RO = $_GET['RO'];
  $BK = $_GET['BK'];
  $PRODUCT_ID = $_GET['PRODUCT_ID'];
 
?>
<html>
<h1>Delete</h1>
<form action = "Dsdeleted.php" method = "GET">
รหัสรายละเอียดการเบิก : <input type = "text" name = "RO" value = "<?php echo $RO; ?>"> <br>
รหัสรายละเอียดสินค้า : <input type = "text" name = "BK" value = "<?php echo $BK; ?>"> <br>
รหัสสินค้า : <input type = "text" name = "PRODUCT_ID" value = "<?php echo $PRODUCT_ID; ?>"> <br>
<input type = "submit" value = "Enter">
</form> 
</html>