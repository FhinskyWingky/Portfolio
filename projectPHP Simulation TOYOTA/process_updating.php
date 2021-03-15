<?php session_start(); ?>
<html>

<style>
    .a {
        text-align: center;
    }
</style>


<form method='post' enctype="multipart/form-data" style="font-family: KMITLGO;">
    <table align='center' border='1' width='500' height='200' class="a">
        <tr>
            <td>
                ชื่อรถ <input type='text' name='product_name'>
            </td>
        </tr>

        <tr>
            <td>
                ราคารถ <input type='text' name='price'>
            </td>
        </tr>
        <tr>
            <td>
                จำนวนที่มี <input type='text' name='amount'>
            </td>
        </tr>
        <tr>
            <td>
                รูปภาพรถ <input type=file name='pic'>
            </td>
        </tr>
        <tr>
            <td>
                <input type='submit' value='ยืนยัน' name='submit'>
                <input type='reset' value='แก้ไข'>
            </td>
        </tr>
</form>
</table>

</html>
<?php

if ($_SESSION['staff'] && $_SESSION['psw_staff']) {
    if (isset($_POST['submit'])) {
        require_once "config.php";
        $id = $_GET['id'];
        $CName = $_POST['product_name'];
        $CPrice = $_POST['price'];
        $CAmount = $_POST['amount'];
        $CPic = $_FILES['pic'];
        $TargerDir = "/projectPHP/ImageHonda_PHP/";
        $Picture =  $TargerDir . basename($CPic["name"]);

        $Update = "Update product SET productName = '$CName', price = $CPrice ,amount = $CAmount, name_image = '$Picture' WHERE id_product = '$id'";
        $Updating = mysqli_query($conn, $Update);

        if ($Updating) {
            echo '<script> alert("แก้ไขข้อมูลสินค้าสำเร็จ"); </script>';
            echo "<script type='text/javascript'>window.location.href = 'admin.php';</script>";
        } else {
            echo '<script> alert("แก้ไขล้มเหลว"); </script>';
            echo "<script type='text/javascript'>window.location.href = 'admin.php';</script>";
        }
    }
} else {
    echo "<script> alert('Invalid Entrance'); </script>";
    echo "<script type='text/javascript'> window.location.href= 'login.php'</script>";
}
?>