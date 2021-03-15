<?php 
  $RO = $_GET['NAME'];
  $BK = $_GET['BK'];
  $PRODUCT_ID = $_GET['DS'];
  
?>
<html>
<h1>Update</h1>
<form action = "Dsupdating.php" method = "GET">
รหัสรายละเอียดการเบิก: <input type = "text" name = "EMP_ID" value = "<?php echo $RO; ?>"> <br>
รหัสรายละเอียดสินค้า: <input type = "text" name = "NAME" value = "<?php echo $BK; ?>"> <br>
รหัสสินค้า : <input type = "text" name = "BK" value = "<?php echo $PRODUCT_ID; ?>"> <br>
    <input type = "submit" value = "Enter">
</form>  
</html>