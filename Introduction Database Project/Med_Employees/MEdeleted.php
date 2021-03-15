<?php
$db = "(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.69) (PORT = 1521)))(CONNECT_DATA = (SID = introdb)))";
$user = "6106021620125";
$pass = "6106021620125";
$connect = oci_connect($user,$pass,$db,"AL32UTF8");

if($_GET){
    $EMP_ID = $_GET['EMP_ID'];
    $NAME = $_GET['NAME'];
    $BK = $_GET['BK'];
    $DS = $_GET['DS'];
    $Delete = "Delete From Med_Employees Where EMP_ID = '".$EMP_ID."'";
    $parse = oci_parse($connect,$Delete);
    $Execute = oci_execute($parse,OCI_DEFAULT);

    if($Execute){
        oci_commit($connect);
        echo "Delete Done";
        echo " <button> <a href = Med_Employees.php> Home Page </a> </button> ";
    }else{
        oci_rollback($connect);
        echo "ERROR!!!";
        echo " <button> <a href = Med_Employees.php> Home Page </a> </button> ";
    }

}else{
    echo "nothing";
}

?>