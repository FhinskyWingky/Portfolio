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

    $search = "select * from Orders";
    $objParse = oci_parse($connect,$search); #แปลงคำสั่งให้ sql เข้าใจได้
    oci_execute($objParse,OCI_DEFAULT);

?>
<html>
<title> Orders </title>
<head> รายการสั่งสินค้า </head>
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
    <td> รหัสการสั่งสินค้า </td>
    <td> วันที่สั่ง </td>
    <td> ร้านที่รับสินค้า </td>
    <td> สินค้าที่สั่ง </td>
    <td> แก้ไขข้อมูล </td>
    <td> ลบข้อมูล </td>
 </tr>
  <?php
    while($objResult = oci_fetch_array($objParse,OCI_BOTH))
    {
  ?>
  <tr>
    <td><?php echo $objResult['ORDER_ID']; ?></td>
    <td><?php echo $objResult['D_ORDER']; ?></td>
    <td><?php echo $objResult['STORE_INCOME']; ?></td>
    <td><?php echo $objResult['P_ORDER']; ?></td>
    <td> <button> <a href = 'Oupdate.php?ORDER_ID=<?php echo $objResult['ORDER_ID']; ?>&D_ORDER=<?php echo $objResult['D_ORDER']; ?>&STORE_INCOME=<?php echo $objResult['STORE_INCOME']; ?>&P_ORDER=<?php echo $objResult['P_ORDER']; ?>'>แก้ไขข้อมูล</a> </button> </td>
    <td> <button> <a href = 'Odelete.php?ORDER_ID=<?php echo $objResult['ORDER_ID']; ?>&D_ORDER=<?php echo $objResult['D_ORDER']; ?>&STORE_INCOME=<?php echo $objResult['STORE_INCOME']; ?>&P_ORDER=<?php echo $objResult['P_ORDER']; ?>'>ลบข้อมูล</a> </button> </td>
  </tr> 
 <?php
    }
 ?>
 </table>
 <br>
 <br>
 <button>  <h3><a href = "Oinsert.php"> INSERT </a> </button> </h3>
</body>

</html>