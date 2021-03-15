<?php
$db = "(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.69) (PORT = 1521)))(CONNECT_DATA = (SID = introdb)))";
$user = "6106021620125";
$pass = "6106021620125";
$connect = oci_connect($user,$pass,$db,"AL32UTF8");

if($_GET){
    $STOCK_ID = $_GET['STOCK_ID'];
    $PRODUCT_NAME = $_GET['PRODUCT_NAME'];
    $DATE_DEPOSIT = $_GET['DATE_DEPOSIT'];
    $AMOUNT = $_GET['AMOUNT'];
    $Delete = "Delete From Med_Employees Where EMP_ID = '".$STOCK_ID."'";
    $parse = oci_parse($connect,$Delete);
    $Execute = oci_execute($parse,OCI_DEFAULT);

    if($Execute){
        oci_commit($connect);
        echo "Delete Done";
        echo "<button>  <a href = Stock_pile.php> Home Page </a> </button> ";
    }else{
        oci_rollback($connect);
        echo "ERROR!!!";
        echo "<button>  <a href = Stock_pile.php> Home Page </a> </button> ";
    }

}else{
    echo "nothing";
}

?>