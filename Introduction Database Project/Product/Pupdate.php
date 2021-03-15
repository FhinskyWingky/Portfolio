<?php 
  $PRODUCT_ID = $_GET['PRODUCT_ID'];
  $PRODUCT_NAME = $_GET['PRODUCT_NAME'];
  $PRODUCE_DATE = $_GET['PRODUCE_DATE'];
  $PRODUCE_EXPIRED = $_GET['PRODUCE_EXPIRED'];
  $RO = $_GET['RO'];
  $CC = $_GET['CC'];
  $RC = $_GET['RC'];
?>
<html>
<h1>Update</h1>
<form action = "Pupdating.php" method = "GET">
รหัสสินค้า: <input type = "text" name = "PRODUCT_ID" value = "<?php echo $PRODUCT_ID; ?>"> <br>
ชื่อสินค้า: <input type = "text" name = "PRODUCT_NAME" value = "<?php echo $PRODUCT_NAME; ?>"> <br>
วันที่ผลิต : <input type = "text" name = "PRODUCE_DATE" value = "<?php echo $PRODUCE_DATE; ?>"> <br>
วันหมดอายุ : <input type = "text" name = "PRODUCE_EXPIRED" value = "<?php echo $PRODUCE_EXPIRED; ?>"> <br>
รหัสรายละเอียดการเบิก : <input type = "text" name = "RO" value = "<?php echo $RO; ?>"> <br>
รหัสประเภทสินค้า : <input type = "text" name = "CC" value = "<?php echo $CC; ?>"> <br>
ราคา : <input type = "text" name = "RC" value = "<?php echo $RC; ?>"> <br>
    <input type = "submit" value = "Enter">
</form>  
</html>