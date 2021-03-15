<?php 
  $Order_id = ['ORDER_ID'];
  $D_Order = ['D_ORDER'];
  $Store_income = ['STORE_INCOME'];
  $P_Order = ['P_ORDER'];
?>
<html>
<h1>Delete</h1>
<form action = "Odeleted.php" method = "GET">
    รหัสพนักงาน: <input type = "text" name = "ORDER_ID" value = "<?php echo $Order_id; ?>"> <br>
    ชื่อพนักงาน: <input type = "text" name = "D_ORDER" value = "<?php echo $D_Order; ?>"> <br>
    BK : <input type = "text" name = "STORE_INCOME" value = "<?php echo $Store_income; ?>"> <br>
    DS : <input type = "text" name = "P_ORDER" value = "<?php echo $P_Order; ?>"> <br>
    <input type = "submit" value = "Enter">
</form> 
</html>