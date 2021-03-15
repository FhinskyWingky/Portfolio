<?php 
  $Emp_id = $_GET['EMP_ID'];
  $Name = $_GET['NAME'];
  $BK = $_GET['BK'];
  $DS = $_GET['DS'];
?>
<html>
<h1>Update</h1>
<form action = "MEupdating.php" method = "GET">
    รหัสพนักงาน: <input type = "text" name = "EMP_ID" value = "<?php echo $Emp_id; ?>"> <br>
    ชื่อพนักงาน: <input type = "text" name = "NAME" value = "<?php echo $Name; ?>"> <br>
    รหัสการเบิก : <input type = "text" name = "BK" value = "<?php echo $BK; ?>"> <br>
    รหัสรายละเอียดสินค้า : <input type = "text" name = "DS" value = "<?php echo $DS; ?>"> <br>
    <input type = "submit" value = "Enter">
</form>  
</html>