<?php 
  $EMP_ID = $_GET['EMP_ID'];
  $NAME = $_GET['NAME'];
  $BK = $_GET['BK'];
  $DS = $_GET['DS'];
?>
<html>
<h1>Delete</h1>
<form action = "MEdeleted.php" method = "GET">
    รหัสพนักงาน: <input type = "text" name = "EMP_ID" value = "<?php echo $EMP_ID; ?>"> <br>
    ชื่อพนักงาน: <input type = "text" name = "NAME" value = "<?php echo $Name; ?>"> <br>
    รหัสการเบิก : <input type = "text" name = "BK" value = "<?php echo $BK; ?>"> <br>
    รหัสรายละเอียดสินค้า : <input type = "text" name = "DS" value = "<?php echo $DS; ?>"> <br>
    <input type = "submit" value = "Enter">
</form> 
</html>