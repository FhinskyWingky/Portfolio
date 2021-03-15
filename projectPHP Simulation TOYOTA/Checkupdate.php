<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
                $hostname = "localhost";
                $username = "root";
                $dbname = "้hondadatabase";
                $conn = mysqli_connect( $hostname, $username );
                if ( ! $conn ) die ( "ไม่สามารถติดต่อกับ MySQL ได้" );
                mysqli_select_db ( $conn,$dbname  )or die ( "ไม่สามารถเลือกฐานข้อมูล bookstore ได้" );
                mysqli_query($conn,"SET character_set_results=utf8");
                mysqli_query($conn,"SET character_set_client=utf8");
                mysqli_query($conn,"SET character_set_connection=utf8");
                $sql = "INSERT INTO product (id_product, productName, Price, amount ,name_image)
                VALUES ('".$_GET["id_product"]."','".$_GET["productName"]."','".$_GET["Price"]."','".$_GET["amount"]."'
                            ,'".$_GET["name_image"]."')";
                $result = mysqli_query ($conn,$sql) or die( mysqli_error($conn));
                header("Location: manege.php");
?>
</body>
</html>
