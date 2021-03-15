<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "hondadatabase";
$conn = mysqli_connect( $hostname, $username, $password,$dbname);
mysqli_set_charset($conn, "utf8");
if ( ! $conn ) die ( "ไม่สามารถติดต่อกับ MySQL ได้" );
mysqli_select_db (  $conn ,$dbname )or die ( "ไม่สามารถเลือกฐานข้อมูล HondaDatabase ได้" );
mysqli_query($conn,"SET character_set_results=utf8");
mysqli_query($conn,"SET character_set_client=utf8");
mysqli_query($conn,"SET character_set_connection=utf8");
?>