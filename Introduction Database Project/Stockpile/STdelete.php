<?php 
  $STOCK_ID = $_GET['STOCK_ID'];
  $PRODUCT_NAME = $_GET['PRODUCT_NAME'];
  $DATE_DEPOSIT = $_GET['DATE_DEPOSIT'];
  $AMOUNT = $_GET['AMOUNT'];
?>
<html>
<h1>Delete</h1>
<form action = "STdeleted.php" method = "GET">
    รหัสพนักงาน: <input type = "text" name = "STOCK_ID" value = "<?php echo $STOCK_ID; ?>"> <br>
    ชื่อพนักงาน: <input type = "text" name = "PRODUCT_NAME" value = "<?php echo $PRODUCT_NAME; ?>"> <br>
    BK : <input type = "text" name = "DATE_DEPOSIT" value = "<?php echo $DATE_DEPOSIT; ?>"> <br>
    DS : <input type = "text" name = "AMOUNT" value = "<?php echo $AMOUNT; ?>"> <br>
    <input type = "submit" value = "Enter">
</form> 
</html>