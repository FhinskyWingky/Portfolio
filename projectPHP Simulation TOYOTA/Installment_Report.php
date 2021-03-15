<?php session_start(); ?>
<?php
error_reporting(0);
if ($_SESSION['Customer'] && $_SESSION['Customer_Psw']) {
    require_once "config.php";

    $id = $_GET['id'];
    $Call = "SELECT * FROM product WHERE id_product = '$id'";
    $Calling = mysqli_query($conn, $Call);
    while ($objResult = mysqli_fetch_array($Calling, MYSQLI_BOTH)) {
        $price_car = $objResult[2];
    }
    $prepaid = $_POST['prepaid'];

    $Installment = $_POST['Installment'];

    $percent_paid = ($prepaid / $price_car) * 100;

    $Down = number_format($percent_paid);

    if ($Down >= 50) //ดอกเบี้ย 5% 0.05
    {
        $interest = 0.005;
        $txt_interest = "0.5%";
    } else if ($Down >= 30) //ดอกเบี้ย 4% 0.04
    {
        $interest = 0.01;
        $txt_interest = "1%";
    } else if ($Down >= 20) //ดอกเบี้ย 3% 0.03
    {
        $interest = 0.02;
        $txt_interest = "2%";
    } else if ($Down >= 15) //ดอกเบี้ย 2% 0.02
    {
        $interest = 0.03;
        $txt_interest = "3%";
    } else if ($Down >= 10) //ดอกเบี้ย 1% 0.01
    {

        $interest = 0.04;
        $txt_interest = "4%";
    } else if ($Down >= 2) //ดอกเบี้ย 0.5% 0.005
    {
        $interest = 0.05;
        $txt_interest = "5%";
    }

    $finance_price = $price_car - $prepaid; //คิดไฟแนนซ์ //485000
    $Annual_paid = $finance_price * $interest; //คิดดอกเบี้ยต่อปี //24250
    $interest_per_year = $Annual_paid * ($Installment / 12); // คิดดอกเบี้ยรวม //48500
    $interest_Summation = $finance_price + $interest_per_year; //คิดยอดที่ต้องจ่ายรวมพร้อมดอกเบี้ย //533500
    $period_payment = $interest_Summation / $Installment; //ดอกเบี้ยที่ต้องจ่ายต่อเดือน

?>
    <!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                font-family: KMITLGO;
                font-size: 35px;
                text-align: center;
            }

            .navbar {
                overflow: hidden;
                background-color: #333;
                font-family: KMITLGO;
                font-size: 20px;
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
                font-family: KMITLGO;
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

            .main {
                float: left;
                width: 100%;
                padding: 0 0px;
                overflow: hidden;
            }

            .logout {
                float: right;
            }

            .table {
                background-color: #F5F5F5;
                padding: 20px;
                font-size: 20 px;
                font-family: KMITLGO;
                border: 2px solid red;

            }

            .button {
                background-color: white;
                color: red;
                border: 2px solid #f44336;
                padding: 11px 26px;
                text-align: center;
                font-family: KMITLGO;
                text-decoration: none;
                display: inline-block;
                font-size: 20px;
                margin: 4px 6px;
                cursor: pointer;
            }

            .button:hover {
                opacity: 1;
                background-color: red;
                color: white;
                border: 2px solid #f44336;
            }

            .Footer {
                background-color: #F5F5F5;
                padding: 100px;
                text-align: left;
                margin-top: 10px;
                font-size: 13px;
                height: 100px;
                font-family: KMITLGO;

            }


            .Footer .th {
                text-align: right;
            }
        </style>
    </head>

    <body>
        <center>
            <div style="background-color:#F5F5F5;padding:15px;">
                <img src="imageHonda/Honda_logo.png" width="350" height="80">
            </div>

            <div class="navbar">
                <a href="index.php">Home</a>
                <div class="dropdown">
                    <button class="dropbtn">Car-Model
                        <i class="fa fa-caret-down"></i>
                    </button>

                    <div class="dropdown-content" id="car">
                        <div class="header">
                            <h1>Honda</h1>
                        </div>
                        <div class="row">
                            <div class="column">
                                <h3><a href="HondaBrio.php">Honda Brio</a></h3>
                                <h3><a href=" ">Honda Brio Amaze</a></h3>
                                <h3><a href="#">Honda City</a></h3>
                                <h3><a href="#">Honda Jazz</a></h3>
                            </div>
                            <div class="column">
                                <h3><a href="#">Honda Mobilio</a></h3>
                                <h3><a href="#">Honda BR-V</a></h3>
                                <h3><a href="#">Honda Civic</a></h3>
                                <h3><a href="#">Honda Civic Hatchback</a></h3>
                            </div>
                            <div class="column">
                                <h3><a href="#">Honda HR-V</a></h3>
                                <h3><a href="#">Honda CR-V</a></h3>
                                <h3><a href="#">Honda Accord</a></h3>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="logout">
                    <a href="selectLoginOrRegister.php">Logout</a>
                </div>
            </div>

            <br> <br> <br>
            <table align='center'>
                <tr>
                    <td>
                        ราคาเงินต้น : <?php echo number_format($price_car); ?> บาท
                    </td>
                </tr>
                <tr>
                    <td>
                        เงินดาวน์ : <?php echo number_format($prepaid, 2); ?> บาท
                    </td>
                </tr>
                <tr>
                    <td>
                        ดอกเบี้ย : <?php echo $txt_interest; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        ยอดผ่อนชำระต่อเดือน : <?php echo number_format($period_payment, 2); ?> บาท
                    </td>
                </tr>
                </tr>
            </table>
            <hr width='40%'>
            <h3 align='center'>คุณยืนยันการทำรายการหรือไม่? </h3>

            <form method='post'>
                <input type='submit' class="button" name='submit' value='ยืนยัน'>
                <input type='submit' class="button" name='submit' value='ยกเลิก'>
            </form>
    </body>

    </html>
<?php
    if (isset($_POST['submit'])) {
        if ($_POST['submit'] == 'ยืนยัน') {
            $FindMax = "SELECT MAX(amount) FROM product WHERE id_product = '$id'"; //คำสั่งหาข้อมูล Amount
            $Car_Current  = mysqli_query($conn, $FindMax); //Query DataBase ให้หาค่า Amount 

            while ($objResult = mysqli_fetch_array($Car_Current, MYSQLI_BOTH)) {
                $Amount = $objResult[0]; //ช่องที่ 3 ใน ตาราง product จะได้เป็น หัวตารางชื่อ amount
            }
            if ($Amount > 0) {
                $Amount--;
                
                $remain_car = "UPDATE product SET amount = '$Amount' WHERE id_product = '$id' ";
                $Car_Current  = mysqli_query($conn, $remain_car);
                if ($Car_Current) {

                    echo '<script> alert("การซื้อขายรถเสร็จสิ้น"); </script>';
                    echo '<script "text/javascript">  window.location.href = "index.php"; </script>';
                }
            } else if ($Amount == 0) {

                echo '<script> alert("ขออภัย สินค้าหมด"); </script>';
                echo '<script "text/javascript"> window.location.href = "index.php"; </script>';
            }
        } else if ($_POST['submit'] == 'ยกเลิก') {
            echo '<script "text/javascript"> window.location.href = "index.php"; </script>';
        }
    }
} else {
    echo "<script> alert('Invalid Entrace'); </script>";
    echo "<script text/javascript> window.location.href='selectLoginOrRegister.php'; </script>";
}
?>