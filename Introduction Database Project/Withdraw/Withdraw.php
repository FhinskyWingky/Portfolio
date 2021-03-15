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

    $search = 'select * from "6106021610162".Withdraw';
    $objParse = oci_parse($connect,$search); #แปลงคำสั่งให้ sql เข้าใจได้
    oci_execute($objParse,OCI_DEFAULT);


?>
<html>
<title> Withdraw </title>
<head> รายชื่อการเบิกสินค้า </head>
<hr>
<br>
<form>
Seach <input type = "text" name = "Search"> <input type = "submit" value = "search  ">
</form>
<br>
<hr>
<body style="background-color:powderblue;">
<table border = 1>
  <tr>
    <td> รหัสเบิกสินค้า </td>
    <td> Numbersk </td>
    <td> วันที่เบิกออกมา </td>
    <td> รหัสพนักงานที่เบิก </td>
    <td> รหัสรายละเอียดการเบิก </td>
    <td> แก้ไขข้อมูล </td>
    <td> ลบข้อมูล </td>
 </tr>
  <?php
    while($objResult = oci_fetch_array($objParse,OCI_BOTH))
    {
  ?>
  <tr>
    <td><?php echo $objResult['BK']; ?></td>
    <td><?php echo $objResult['NUMBERSK']; ?></td>
    <td><?php echo $objResult['WITHDRAWAL']; ?></td>
    <td><?php echo $objResult['EMP_ID']; ?></td>
    <td><?php echo $objResult['RO']; ?></td>
    <td><button> <a href = 'Wupdate.php?BK=<?php echo $objResult['BK']; ?>&NUMBERSK=<?php echo $objResult['NUMBERSK']; ?>&WITHDRAWAL=<?php echo $objResult['WITHDRAWAL']; ?>&EMP_ID=<?php echo $objResult['EMP_ID']; ?>&RO=<?php echo $objResult['RO']; ?>'>แก้ไขข้อมูล</a> </button> </td>
    <td> <button> <a href = 'Wdelete.php?BK=<?php echo $objResult['BK']; ?>&NUMBERSK=<?php echo $objResult['NUMBERSK']; ?>&WITHDRAWAL=<?php echo $objResult['WITHDRAWAL']; ?>&EMP_ID=<?php echo $objResult['EMP_ID']; ?>&RO=<?php echo $objResult['RO']; ?>'>ลบข้อมูล</a> </button> </td>
  </tr> 
 <?php
    }
 ?>
 </table>
 <br>
 <br>
 <button>  <h3><a href = "Winsert.php"> INSERT </a></h3> </button> 
</body>

</html>