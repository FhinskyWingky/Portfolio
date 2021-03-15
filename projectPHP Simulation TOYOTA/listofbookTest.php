<html>
<head><title>Update Table Book</title></head>
<body>
<?php
$hostname = "localhost";
$username = "root";
//$password = "mysql2012";
$dbname = "hondadatabase";
$conn = mysqli_connect( $hostname, $username);
mysqli_set_charset($conn, "utf8");
if ( ! $conn ) die ( "ไม่สามารถติดต่อกับ MySQL ได้" );
mysqli_select_db (  $conn ,$dbname )or die ( "ไม่สามารถเลือกฐานข้อมูล bookstore ได้" );
//mysqli_query("SET character_set_results=tis620");
//mysqli_query("SET character_set_client=tis620");
//mysqli_query("SET character_set_connection=tis620");

$sqltxt = "SELECT * FROM product";
$result = mysqli_query (  $conn ,$sqltxt );
echo "<CENTER><H3>Account</H3></CENTER>";
echo "<table width=\"400\" border=\"0\" bordercolor=\"D1D7DA\" ";
echo "align = \"center\" valign = \"top\" >";
echo " <br><b><tr align=\"center\" bgcolor=\"#0099CC\">";
echo "<td width =\"30\" align=\"center\">id_account</font></td>";
echo "<td width =\"100\" align=\"center\" >username</td>";
echo "<td align=\"center\" width =\"200\">password</td>";
echo "<td align=\"center\" width =\"80\" > level</a></font></td>\n</b>";
$a=1;

while ( $rs = mysqli_fetch_array ( $result ) )
{
echo "<tr align=\"center\" bgcolor=\"#CCFFFF\">";
echo "<td align=\"center\" bgcolor =\"#0099CC\">$a</td>";
echo "<td align=\"center\"> ";
echo "<a>$rs[0]</a></td>";
echo "<td align=\"center\">$rs[1]</td>";
echo "<td><img src=".$rs[4]." width='350' height='250'></td>"; 
//echo "<td> <img src=".$rs[4]."></td>";
//echo "<td align=\"center\"> <a href=\"deletebook.php?id=$rs[0]\" ";
//echo "onclick=\"return confirm(' ยืนยันการลบข้อมูลหนังสือ$rs[1] ')\">[ลบ] ";
echo "</a></font></td>\n";
$a++;
}
?>
</tr></table><BR><BR>
<div align = "center"> <A HREF="addbook.php">เพิ่มรายการหนังสือ</A></div><BR>
<?
mysqli_close ( $conn );
?>