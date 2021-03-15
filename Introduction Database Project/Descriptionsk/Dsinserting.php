<?php
$db = "(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.69) (PORT = 1521)))(CONNECT_DATA = (SID = introdb)))";
$user = "6106021620125";
$pass = "6106021620125";
$connect = oci_connect($user,$pass,$db,"AL32UTF8");

//DESCRIPTION = (ADDRESS_LIST(ADDRESS(TCP),HOST),CONNECT_DATA(SID));

if($_POST){
    $RO = $_POST['RO'];
    $BK = $_POST['BK'];  
    $PRODUCT_ID = $_POST['PRODUCT_ID'];
    echo "<h1>".$EMP_ID." ".$NAME." ".$BK." ".$DS."</h1>";
    $insert = 'insert into "6106021620125".Descritionsk (RO,BK,PRODUCT_ID) value ('".$RO."','".$BK."','".$PRODUCT_ID."')';
    $objparse = oci_parse($connect,$insert);
    $objExecute = oci_execute($objparse,OCI_DEFAULT);

    if($objExecute){
        oci_commit($connect);
        echo "Save Done";
        echo "<button> <a href = Descriptionsk.php> กลับสู่ตาราง </a> </button>";
    }else{
        oci_rollback($connect);
        echo "ERROR!!!";
        echo "<button> <a href = Descriptionsk.php> กลับสู่ตาราง </a> </button>";

    }

}else{
    echo "nothing";
}

?>

<html>
</html>