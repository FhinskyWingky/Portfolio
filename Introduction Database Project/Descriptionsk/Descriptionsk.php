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

    $search = 'select * from "6106021610162".Descriptionsk';
    $objParse = oci_parse($connect,$search); #แปลงคำสั่งให้ sql เข้าใจได้
    oci_execute($objParse,OCI_DEFAULT);

    

?>
<html>
<title> index </title>
<head> รายชื่อพนักงาน </head>
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
    <td> รหัสรายละเอียดการเบิก </td>
    <td> รหัสรายละเอียดสินค้า </td>
    <td> รหัสสินค้า </td>
    <td> แก้ไขข้อมูล </td>
    <td> ลบข้อมูล </td>
 </tr>
  <?php
    while($objResult = oci_fetch_array($objParse,OCI_BOTH))
    {
  ?>
  <tr>
    <td><?php echo $objResult['RO']; ?></td>
    <td><?php echo $objResult['BK']; ?></td>
    <td><?php echo $objResult['PRODUCT_ID']; ?></td>
    <td> <button>  <a href = 'Dsupdate.php?EMP_ID=<?php echo $objResult['RO']; ?>&NAME=<?php echo $objResult['BK']; ?>&BK=<?php echo $objResult['PRODUCT_ID']; ?>'>แก้ไขข้อมูล</a> </button> </td>
    <td> <button> <a href = 'Dsdelete.php?EMP_ID=<?php echo $objResult['RO']; ?>&NAME=<?php echo $objResult['BK']; ?>&BK=<?php echo $objResult['PRODUCT_ID']; ?>'>ลบข้อมูล</a> </button> </td>
  </tr> 
 <?php
    }
 ?>
 </table>
 <br>
 <br>
<h3> <button> <a href = "Dsinsert.php"> INSERT </a> </button> </h3>
</body>

</html>