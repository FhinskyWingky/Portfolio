<?php session_start();
require_once "config.php";

if ($_SESSION['staff'] && $_SESSION['psw_staff']) {
    $check = mysqli_query($conn, "SELECT username,password FROM account WHERE level ='admin'");
    $staff = mysqli_fetch_array($check);
    if ($_SESSION['staff'] == $staff[0] && $_SESSION['psw_staff'] == $staff[1]) {
?>
        <html>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <style>
            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                background-color: #f9f9f9;

            }

            .navbar {
                overflow: hidden;
                background-color: #333;
                font-family: KMITLGO;
            }

            .navbar a {
                float: left;
                font-size: 20px;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            .dropdown {
                float: left;
                overflow: hidden;
            }

            .dropdown .dropbtn {
                font-size: 20px;
                border: none;
                outline: none;
                color: white;
                padding: 14px 16px;
                background-color: inherit;
                font: inherit;
                margin: 0;
            }

            .navbar a:hover,
            .dropdown:hover .dropbtn {
                background-color: red;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                width: 100%;
                left: 0;
                box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                z-index: 1;
            }

            .dropdown-content .header {
                background: red;
                padding: 16px;
                color: white;
            }

            .dropdown:hover .dropdown-content {
                display: block;
            }

            /* Create three equal columns that floats next to each other */
            .column {
                float: left;
                width: 33.33%;
                padding: 10px;
                background-color: #F5F5F5;
                height: 315px;
            }

            .column a {
                float: none;
                color: black;
                padding: 16px;
                text-decoration: none;
                display: block;
                text-align: left;
            }

            .column a:hover {
                background-color: #ddd;
            }

            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
                .column {
                    width: 100%;
                    height: auto;
                }
            }

            .button {
                background-color: white;
                color: red;
                border: 2px solid #f44336;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 20px;
                margin: 4px 2px;
                cursor: pointer;
            }

            .button:hover {
                opacity: 1;
                background-color: red;
                color: white;
                border: 2px solid #f44336;
            }

            .a {
                background-color: #F5F5F5;
                padding: 20px;
                font-size: 50px;
                font-family: KMITLGO;

            }

            .logout {
                float: right;
            }

            .container {
                position: relative;
                width: 50%;
            }

            .image {
                opacity: 1;
                display: block;
                width: 100%;
                height: auto;
                transition: .5s ease;
                backface-visibility: hidden;
            }

            .middle {
                transition: .5s ease;
                opacity: 0;
                position: absolute;
                top: 50%;
                left: 36%;
                transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                text-align: center;
            }

            .container:hover .image {
                opacity: 0.3;
            }

            .container:hover .middle {
                opacity: 1;

            }

            .text {
                background-color: red;
                color: white;
                font-size: 16px;
                padding: 16px 32px;
                font-family: KMITLGO;
                float: center;
            }

            /*insert*/
            .insertCarData {
                -ms-flex: 50%;
                /* IE10 */
                flex: 50%;
                background-color: #f2f2f2;
                padding: 5px 20px 15px 20px;
                border: 1px solid lightgrey;
                border-radius: 3px;
                display: -ms-flexbox;
                /* IE10 */
                display: flex;
                -ms-flex-wrap: wrap;
                /* IE10 */
                flex-wrap: wrap;
                margin: 0 -16px;
                width: 50%;
                font-size: 23px;
                font-family: KMITLGO;
            }

            input[type=text] {
                width: 100%;
                margin-bottom: 20px;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 3px;
            }

            /**/
            .btn {
                background-color: white;
                color: red;
                padding: 12px;
                margin: 10px 0;
                border: 2px solid #f44336;
                width: 100%;
                border-radius: 3px;
                cursor: pointer;
                font-size: 17px;
                font-family: KMITLGO;
            }

            .btn:hover {
                opacity: 1;
                background-color: red;
                color: white;
                border: none;
            }
        </style>

        <body>
            <center>
                <table class='a' border='0' align='center' width='100%' height='10%'>
                    <tr>
                        <td>
                            <div>
                                <img src="imageHonda/Honda_logo.png" width="300" height="80">
                            </div>
                        </td>

                        <td>
                            <div style="text-align: right">
                                <p>For Staff Only</p>
                            </div>
                        </td>
                    </tr>
                </table>
                <div class="navbar">
                    <a href="admin.php">Home</a>
                    <a href="insert.php">เพิ่มสินค้าใหม่</a>
                    <a href="delete.php">ลบสินค้า</a>
                    <a href="update.php">แก้ไขข้อมูลสินค้า</a>
                    <div class="logout">
                        <a href="selectLoginOrRegister.php">Logout</a>
                    </div>
                </div>

                </div>
                <br><br>
                <div style="font-family: KMITLGO;">
                    <h1>Insert Data</h1>
                </div>
                <form class="insertCarData" method="post" enctype="multipart/form-data" style=" font-family: KMITLGO;">
                    <label for="cname">Name of car</label>
                    <input type="text" id="Cname" name="carName" placeholder="Ex. Honda Accord">

                    <label for="ccnum">Price</label>
                    <input type="text" id="CPrice" name="carPrice" placeholder="Ex. 999999">

                    <label for="ccnum">Amount</label>
                    <input type="text" id="CAmount" name="cardAmount" placeholder="Ex. 10">

                    <input type="file" name="upload">

                    <input type="submit" value="Submit" class="btn">
                </form>

        </body>
<?php
        error_reporting(0);
        require_once "config.php";

        $CName = $_POST['carName'];
        $CPrice = $_POST['carPrice'];
        $CAmount = $_POST['cardAmount'];

        $CPic = $_FILES['upload'];
        $TargerDir = "/projectPHP/ImageHonda_PHP/";
        $Picture =  $TargerDir . basename($CPic["name"]);

        if (isset($CName) && isset($CPrice) && isset($CAmount) && isset($CPic)) {
            $findId = "SELECT MAX(id_product) FROM product";
            $Find = mysqli_query($conn, $findId);
            while ($rs = mysqli_fetch_array($Find, MYSQLI_BOTH)) {
                $current = $rs[0];
            }
            $current++;

            $import = "INSERT INTO product VALUES ('$current','$CName',$CPrice,$CAmount,'$Picture')";
            $imported = mysqli_query($conn, $import);


            if ($imported) {
                echo '<script> alert("เพิ่มสินค้าใหม่สำเร็จ"); </script>';
                echo "<script type='text/javascript'>window.location.href = 'admin.php';</script>";
            } else {
                echo '<script> alert("เกิดข้อผิดพลาด"); </script>';
                echo "<script type='text/javascript'>window.location.href = 'admin.php';</script>";
            }
        }
    } else {
        echo "<script> alert('Invalid Entrance'); </script>";
        echo "<script type='text/javascript'> window.location.href= 'selectLoginOrRegister.php'</script>";
    }
} else {
    echo "<script> alert('Invalid Entrance'); </script>";
    echo "<script type='text/javascript'> window.location.href= 'selectLoginOrRegister.php'</script>";
}
?>

        </html>
