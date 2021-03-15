<?php 

?>
<html>
<h1>Update</h1>
<form action = "updating.php" method = "GET">
    รหัสพนักงาน: <input type = "text" name = "STOCK_ID" value = "<?php echo $STOCK_ID; ?>"> <br>
    ชื่อพนักงาน: <input type = "text" name = "PRODUCT_NAME" value = "<?php echo $PRODUCT_NAME; ?>"> <br>
    BK : <input type = "text" name = "DATE_DEPOSIT" value = "<?php echo $DATE_DEPOSIT; ?>"> <br>
    DS : <input type = "text" name = "AMOUNT" value = "<?php echo $AMOUNT; ?>"> <br>
    <input type = "submit" value = "Enter">
</form>  
</html>