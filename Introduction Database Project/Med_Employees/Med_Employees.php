<?php

$db = "(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.69) (PORT = 1521)))(CONNECT_DATA = (SID = introdb)))";
$user = "6106021620125";
$pass = "6106021620125";
$connect = oci_connect($user,$pass,$db,"AL32UTF8");

  if($connect){
      
  }else{

    $error = oci_error();
    trigger_error(htmlentitles($error['message'], E_QUOTES), E_USER_ERROR); 
}

    $search = "select * from Med_Employees";
    $objParse = oci_parse($connect,$search); #แปลงคำสั่งให้ sql เข้าใจได้
    oci_execute($objParse,OCI_DEFAULT);


?>
<html>
<title> Med_Employees_Table_Report </title>
<head> <h3> รายชื่อพนักงาน </h3></head>
<body style="background-color:powderblue;">
<table border = 1>
<hr>
<br>
<form>
Seach <input type = "text" name = "Search" > 
<input type = "submit" value = "search">
</form>
<br>
<hr>
<table border = 1>
  <tr>
    <td> รหัสพนักงาน </td>
    <td> ชื่อพนักงาน </td>
    <td> รหัสการเบิก </td>
    <td> รหัสรายละเอียดสินค้า </td>
    <td> แก้ไขข้อมูล </td>
    <td> ลบข้อมูล </td>
 </tr>
  <?php
    while($objResult = oci_fetch_array($objParse,OCI_BOTH))
    {
  ?>
  <tr>
    <td><?php echo $objResult['EMP_ID']; ?></td>
    <td><?php echo $objResult['NAME']; ?></td>
    <td><?php echo $objResult['BK']; ?></td>
    <td><?php echo $objResult['DS']; ?></td>
    <td> <button> <a href = 'MEupdate.php?EMP_ID=<?php echo $objResult['EMP_ID']; ?>&NAME=<?php echo $objResult['NAME']; ?>&BK=<?php echo $objResult['BK']; ?>&DS=<?php echo $objResult['DS']; ?>'>แก้ไขข้อมูล</a> </button> </td>
    <td> <button> <a href = 'MEdelete.php?EMP_ID=<?php echo $objResult['EMP_ID']; ?>&NAME=<?php echo $objResult['NAME']; ?>&BK=<?php echo $objResult['BK']; ?>&DS=<?php echo $objResult['DS']; ?>'>ลบข้อมูล</a> </button> </td>
  </tr> 
 <?php
    }
 ?>
 </table>
 <br>
 <button> <h3><a href = "MEinsert.php"> INSERT </a> </h3> </button> 
</body>

</html>