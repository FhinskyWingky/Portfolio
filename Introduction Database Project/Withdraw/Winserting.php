<?php
$db = "(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.69) (PORT = 1521)))(CONNECT_DATA = (SID = introdb)))";
$user = "6106021620125";
$pass = "6106021620125";
$connect = oci_connect($user,$pass,$db,"AL32UTF8");

//DESCRIPTION = (ADDRESS_LIST(ADDRESS(TCP),HOST),CONNECT_DATA(SID));

if($_GET){
    $BK = $_GET['BK'];
    $NUMBERSK = $_GET['NUMBERSK'];
    $WITHDRAWAL = $_GET['WITHDRAWAL'];
    $EMP_ID = $_GET['EMP_ID'];
    $RO = $_GET['RO'];
    $insert = "Insert into Withdraw VALUES ('".$BK."','".$NUMBERSK."','".$WITHDRAWAL."','".$EMP_ID."','".$RO."')";
    $parse = oci_parse($connect,$insert);
    $Execute = oci_execute($parse,OCI_DEFAULT);

    if($Execute){
        oci_commit($connect);
        echo "Insert Complete";
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

<html>
</html>