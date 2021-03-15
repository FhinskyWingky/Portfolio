<?php 
$BK = $_GET['BK'];
$NUMBERSK = $_GET['NUMBERSK'];
$WITHDRAWAL = $_GET['WITHDRAWAL'];
$EMP_ID = $_GET['EMP_ID'];
$RO = $_GET['RO'];
?>
<html>
<body style="background-color:powderblue;">
<h1>Delete</h1>
<form action = "Wdeleted.php" method = "GET">
รหัสเบิกสินค้า: <input type = "text" name = "BK" value = "<?php echo $BK; ?>"> <br>
Numbersk: <input type = "text" name = "NUMBERSK" value = "<?php echo $NUMBERSK; ?>"> <br>
วันที่เบิกออกมา : <input type = "text" name = "WITHDRAWAL" value = "<?php echo $WITHDRAWAL; ?>"> <br>
รหัสพนักงานที่เบิก : <input type = "text" name = "EMP_ID" value = "<?php echo $EMP_ID; ?>"> <br>
รหัสรายละเอียดการเบิก : <input type = "text" name = "RO" value = "<?php echo $RO; ?>"> <br>
    <input type = "submit" value = "Enter">
</form> 
</body>
</html>