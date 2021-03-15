<?php
$db = "(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.69) (PORT = 1521)))(CONNECT_DATA = (SID = introdb)))";
$user = "6106021620125";
$pass = "6106021620125";
$connect = oci_connect($user,$pass,$db,"AL32UTF8");

if($_GET){
    $PRODUCT_ID = $_GET['PRODUCT_ID'];
    $PRODUCT_NAME = $_GET['PRODUCT_NAME'];
    $PRODUCE_DATE = $_GET['PRODUCE_DATE'];
    $PRODUCE_EXPIRED = $_GET['PRODUCE_EXPIRED'];
    $RO = $_GET['RO'];
    $CC = $_GET['CC'];
    $RC = $_GET['RC'];
    $Delete = "Delete From Product Where EMP_ID = '".$PRODUCT_ID."'";
    $parse = oci_parse($connect,$Delete);
    $Execute = oci_execute($parse,OCI_DEFAULT);

    if($Execute){
        oci_commit($connect);
        echo "Delete Done";
        echo "<button>  <a href =Product.php> Home Page </a> </button> ";
    }else{
        oci_rollback($connect);
        echo "ERROR!!!";
        echo "<button> <a href = Product.php> Home Page </a> </button> ";
    }

}else{
    echo "nothing";
}

?>