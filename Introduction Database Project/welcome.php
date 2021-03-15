<?php

if($_GET){
$User = $_GET['USERNAME']; 
$Pass = $_GET['PASSWORD'];
    error_reporting(0);
    $db = "(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.69) (PORT = 1521)))(CONNECT_DATA = (SID = introdb)))";
    $connect = oci_connect($User,$Pass,$db);
    if($connect){
    echo "<h1> ยินดีต้อนรับ ".$User."</h1>";
    echo "<button> <a href = index.php> เข้าสู่ระบบ </a> </button>";
    }else{
    echo "<button> <a href = login.php> เข้าสู่ระบบ </a> </button>";
    $error = oci_error();
    trigger_error(htmlentitles($error['message'], E_QUOTES), E_USER_ERROR); 
    
  }
}

?>