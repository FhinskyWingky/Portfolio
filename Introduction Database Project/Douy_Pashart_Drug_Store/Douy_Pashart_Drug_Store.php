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

    $search = "select * from Douy_Pasat_Drug_Store";
    $objParse = oci_parse($connect,$search); #แปลงคำสั่งให้ sql เข้าใจได้
    oci_execute($objParse,OCI_DEFAULT);

?>
<html>
<title> Douy_Pasat_Drug_Store  </title>
<head> จำนวนสินค้าที่มีในร้านค้าโดยเภสัช </head>
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
    <td> รหัสคลังสินค้า </td>
    <td> ชื่อสินค้า </td>
    <td> จำนวนสินค้าที่มี </td>
    <td> แก้ไขข้อมูล </td>
    <td> ลบข้อมูล </td>
    
 </tr>
  <?php
    while($objResult = oci_fetch_array($objParse,OCI_BOTH))
    {
  ?>
  <tr>
    <td><?php echo $objResult['STORE_ID']; ?></td>
    <td><?php echo $objResult['PNAME']; ?></td>
    <td><?php echo $objResult['AVA_AMOUNT']; ?></td> 
    <td> <button> <a href = 'DSDupdate.php?STORE_ID=<?php echo $objResult['STORE_ID']; ?>&PNAME=<?php echo $objResult['PNAME']; ?>&AVA_AMOUNT=<?php echo $objResult['AVA_AMOUNT']; ?>'>แก้ไขข้อมูล</a> </button> </td>
    <td> <button> <a href = 'DSDdelete.php?STORE_ID=<?php echo $objResult['STORE_ID']; ?>&PNAME=<?php echo $objResult['PNAME']; ?>&AVA_AMOUNT=<?php echo $objResult['AVA_AMOUNT']; ?>'>ลบออก</a> </button> </td>
  </tr> 
 <?php
    }
 ?>
 </table>
 <br>
 <br>
 <button> <h3><a href = "DSDinsert.php"> INSERT </a> </h3> </button> 
</body>

</html>