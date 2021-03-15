<?php session_start()?>
<?php
require_once "config.php";

$id = $_POST["user"];
$pass = $_POST["psw"];

if (isset($id) && isset($pass)) {

    $query = mysqli_query($conn, "SELECT * FROM account WHERE username = '$id' AND password = '$pass'");

    if ($query) {
        
        while ($rs = mysqli_fetch_array($query)) {
            if ($id == $rs[1] && $pass == $rs[2] && $rs[3] == "admin") {
                $_SESSION['staff'] = $id;
                $_SESSION['psw_staff'] = $pass;
                echo "<script> alert('Welcome Admin $id'); </script>";
                echo "<script text/javascript> window.location.href='admin.php'; </script>";

            } else if ($id == $rs[1] && $pass == $rs[2] && $rs[3] == "user") {
                $_SESSION['Customer'] = $id;
                $_SESSION['Customer_Psw'] = $pass;
                echo "<script> alert('Welcome User $id'); </script>";
                echo "<script text/javascript> window.location.href='index.php'; </script>";
                
            } else {
                echo "<script> alert('Login Failed'); </script>";
                echo "<script text/javascript> window.location.href='login.php'; </script>";
            }
        }
    }
    else{
        echo "<script> alert('Login Failed'); </script>";
        echo "<script text/javascript> window.location.href='login.php'; </script>";
    }
}else{
    echo "<script> alert('Login Failed'); </script>";
    echo "<script text/javascript> window.location.href='login.php'; </script>";
}




?>