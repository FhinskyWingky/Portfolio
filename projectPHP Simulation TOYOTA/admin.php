<html>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;

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

    .Footer {
        background-color: #F5F5F5;
        padding: 7px;
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

<body>
    <center>
        <table class='a' border='0' align='center' width='100%' height='10%'>
            <tr>
                <td>
                    <div>
                        <img src="imageHonda/Honda_logo.png" width="250" height="70">
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
            <a href="Delete.php">ลบสินค้า</a>
            <a href="update.php">แก้ไขข้อมูลสินค้า</a>

            <?php
            /* <div class="dropdown">
                <button class="dropbtn">Car-Model
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <div class="header">
                        <h1>Honda</h1>
                    </div>
                    <div class="row">
                        <div class="column">
                            <h3><a href="HondaBrio.php">Honda Brio</a></h3>
                            <h3><a href="#">Honda Brio Amaze</a></h3>
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

            </div>*/ ?>

            <div class="logout">
                <a href="selectLoginOrRegister.php">Logout</a>
            </div>
        </div>

        <div class="main">
            <img src="imageHonda/44dc7de6-aca7-4c88-a779-597053214194.jpg" style="width:100%">
        </div>

        <div class="Footer">
            <table style="width:180%;">
                <tr>
                    <th align="left">Contact</th>
                    <th align="left">Address</th>
                </tr>
                <tr>
                    <td>Tel. +66 2 555-2000</td>
                    <td>Email : contact@op.kmutnb.ac.th</td>
                </tr>
                <tr>
                    <td>มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ</td>
                    <td>1518 ถนนประชาราษฎร์ 1 แขวงวงศ์สว่าง เขตบางซื่อ กรุงเทพฯ 10800</td>
                </tr>
            </table>
        </div>

</body>
<?php

?>

</html>