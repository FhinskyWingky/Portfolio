<?php
$db = "(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.69) (PORT = 1521)))(CONNECT_DATA = (SID = introdb)))";
$user = "6106021620125";
$pass = "6106021620125";
$connect = oci_connect($user,$pass,$db,"AL32UTF8");

if($_GET){
    $BK = $_GET['BK'];
    $NUMBERSK = $_GET['NUMBERSK'];
    $WITHDRAWAL = $_GET['WITHDRAWAL'];
    $EMP_ID = $_GET['EMP_ID'];
    $RO = $_GET['RO'];
    $update = "Update Med_Employees Set BK = '".$BK."',NUMBERSK = '".$NUMBERSK."',WITHDRAWAL = '".$WITHDRAWAL."' ,EMP_ID = '".$EMP_ID."',RO ='".$RO."' WHERE BK =  '".$BK."'";
    $parse = oci_parse($connect,$update);
    $Execute = oci_execute($parse,OCI_DEFAULT);

    if($Execute){
        oci_commit($connect);
        echo "Save Done";
        echo "<button> <a href = Withdraw.php> Home Page </a> </button>";
    }else{
        oci_rollback($connect);
        echo "ERROR!!!";
        echo "<button> <a href = Withdraw.php> Home Page </a> </button>";
    }

}else{
    echo "nothing";
}

?>