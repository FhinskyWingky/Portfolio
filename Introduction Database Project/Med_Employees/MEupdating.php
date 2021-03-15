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
    echo "<h1>".$EMP_ID." ".$NAME." ".$BK." ".$DS."</h1>";
    $update = "Update Med_Employees Set EMP_ID = '".$EMP_ID."',NAME = '".$NAME."',BK = '".$BK."',DS = '".$DS."' WHERE EMP_ID = '".$EMP_ID."'";
    $parse = oci_parse($connect,$update);
    $Execute = oci_execute($parse,OCI_DEFAULT);

    if($Execute){
        oci_commit($connect);
        echo "Save Done";
        echo "<botton> <a href = Med_Employees.php> Home Page </a> </botton>";
    }else{
        oci_rollback($connect);
        echo "ERROR!!!";
        echo "<botton> <a href = Med_Employees.php> Home Page </a> </botton>";
    }

}else{
    echo "nothing";
}

?>