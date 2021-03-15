<?php
$db = "(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.69) (PORT = 1521)))(CONNECT_DATA = (SID = introdb)))";
$user = "6106021620125";
$pass = "6106021620125";
$connect = oci_connect($user,$pass,$db,"AL32UTF8");

//DESCRIPTION = (ADDRESS_LIST(ADDRESS(TCP),HOST),CONNECT_DATA(SID));

if($_GET){
    $Order_id = ['ORDER_ID'];
    $D_Order = ['D_ORDER'];
    $Store_income = ['STORE_INCOME'];
    $P_Order = ['P_ORDER'];
    $insert = "Insert into ORDERS VALUES ('".$Order_id."','".$D_Order."','".$Store_income."','".$P_Order."')";
    $parse = oci_parse($connect,$insert);
    $Execute = oci_execute($parse,OCI_DEFAULT);

    if($Execute){
        oci_commit($connect);
        echo "Insert Complete";
        echo "<button> <a href = Orders.php> Home Page </a> </button>";
    }else{
        oci_rollback($connect);
        echo "ERROR!!!";
        echo "<button> <a href = Orders.php> Home Page </a> </button>";
    }

}else{
    echo "nothing";
}

?>

<html>
</html>