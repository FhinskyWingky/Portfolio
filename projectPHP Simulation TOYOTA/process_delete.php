<?php
session_start();
if ($_SESSION['staff'] && $_SESSION['psw_staff']) {
    require_once "config.php";
    $id = $_GET['id'];
    $Delete = "Delete FROM product WHERE id_product = '$id'";
    $Deleting = mysqli_query($conn , $Delete);
    if($Deleting)
    {
        echo "<script type='text/javascript'>window.location.href = 'admin.php';</script>";
    }
    else{
        echo "<script type='text/javascript'>window.location.href = 'admin.php';</script>";
    }
}else{
    echo "<script> alert('Invalid Entrance'); </script>";
    echo "<script type='text/javascript'> window.location.href= 'login.php'</script>";
}
?>
