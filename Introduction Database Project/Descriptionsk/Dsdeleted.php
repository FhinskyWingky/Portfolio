<?php
$db = "(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.69) (PORT = 1521)))(CONNECT_DATA = (SID = introdb)))";
$user = "6106021620125";
$pass = "6106021620125";
$connect = oci_connect($user,$pass,$db,"AL32UTF8");

if($_GET){
    $RO = $_GET['RO'];
    $BK = $_GET['BK'];
    $PRODUCT_ID = $_GET['PRODUCT_ID'];
    $Delete = 'Delete From "6106021610162".Descriptionsk Where RO = '".$RO."'';
    $parse = oci_parse($connect,$Delete);
    $Execute = oci_execute($parse,OCI_DEFAULT);

    if($Execute){
        oci_commit($connect);
        echo "Delete Done";
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