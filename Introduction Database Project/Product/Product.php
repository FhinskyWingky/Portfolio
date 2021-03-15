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

    $search = "select * from Product";
    $objParse = oci_parse($connect,$search); #แปลงคำสั่งให้ sql เข้าใจได้
    oci_execute($objParse,OCI_DEFAULT);

   

?>
<html>
<title> Product </title>
<head> สินค้า </head>
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
    <td> รหัสสินค้า </td>
    <td> ชื่อสินค้า </td>
    <td> วันที่ผลิต </td>
    <td> วันหมดอายุ </td>
    <td> รหัสรายละเอียดการเบิก </td>
    <td> รหัสประเภทสินค้า </td>
    <td> ราคา </td>
    <td> แก้ไขข้อมูล </td>
    <td> ลบข้อมูล </td>
 </tr>
  <?php
    while($objResult = oci_fetch_array($objParse,OCI_BOTH))
    {
  ?>
  <tr>
    <td><?php echo $objResult['PRODUCT_ID']; ?></td>
    <td><?php echo $objResult['PRODUCT_NAME']; ?></td>
    <td><?php echo $objResult['PRODUCE_DATE']; ?></td>
    <td><?php echo $objResult['EXPIRED_DATE']; ?></td>
    <td><?php echo $objResult['RO']; ?></td>
    <td><?php echo $objResult['CC']; ?></td>
    <td><?php echo $objResult['RC']; ?></td>
    <td> <button> <a href = 'Pupdate.php?PRODUCT_ID=<?php echo $objResult['PRODUCT_ID']; ?>&PRODUCT_NAME=<?php echo $objResult['PRODUCT_NAME']; ?>&PRODUCE_DATE=<?php echo $objResult['PRODUCE_DATE']; ?>&EXPRIED_DATE=<?php echo $objResult['EXPRIED_DATE'];?>&RO=<?php echo $objResult['RO']; ?>&CC=<?php echo $objResult['CC']; ?>&RC=<?php echo $objResult['RC']; ?>'>แก้ไขข้อมูล</a> </button></td>
    <td> <button> <a href = 'Pdelete.php?PRODUCT_ID=<?php echo $objResult['PRODUCT_ID']; ?>&PRODUCT_NAME=<?php echo $objResult['PRODUCT_NAME']; ?>&PRODUCE_DATE=<?php echo $objResult['PRODUCE_DATE']; ?>&EXPRIED_DATE=<?php echo $objResult['EXPRIED_DATE'];?>&RO=<?php echo $objResult['RO']; ?>&CC=<?php echo $objResult['CC']; ?>&RC=<?php echo $objResult['RC']; ?>'>ลบข้อมูล</a> </button></td>  </tr> 
 <?php
    }
 ?>
 </table>
 <br>
 <br>
 <button> <h3><a href = "Pinsert.php"> INSERT </a></h3> </button> 
</body>

</html>