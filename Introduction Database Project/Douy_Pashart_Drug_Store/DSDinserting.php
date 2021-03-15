<?php
$db = "(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.69) (PORT = 1521)))(CONNECT_DATA = (SID = introdb)))";
$user = "6106021620125";
$pass = "6106021620125";
$connect = oci_connect($user,$pass,$db,"AL32UTF8");

//DESCRIPTION = (ADDRESS_LIST(ADDRESS(TCP),HOST),CONNECT_DATA(SID));

if($_GET){
    $STORE_ID = $_GET['STORE_ID'];
    $PNAME = $_GET['PNAME'];
    $AVA_AMOUNT = $_GET['AVA_AMOUNT'];
    $insert = "Insert into Douy_Pasat_Drug_Store VALUES ('".$STORE_ID."','".$PNAME."','".$AVA_AMOUNT."')";
    $parse = oci_parse($connect,$insert);
    $Execute = oci_execute($parse,OCI_DEFAULT);

    if($Execute){
        oci_commit($connect);
        echo "Insert Complete";
        echo "<a href = Douy_Pashart_Drug_Store.php> Home Page </a>";
    }else{
        oci_rollback($connect);
        echo "ERROR!!!";
        echo "<button> <a href = Douy_Pashart_Drug_Store.php> Home Page </a> </button>";

    }

}else{
    echo "nothing";
}

?>

<html>
</html>