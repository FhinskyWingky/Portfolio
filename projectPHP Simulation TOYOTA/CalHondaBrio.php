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
        font-family: Arial, Helvetica, sans-serif;
    }

    .navbar a {
        float: left;
        font-size: 16px;
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
        font-size: 16px;
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
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
</style>

<body>

    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="promotion.php">Promotion</a>
        <div class="dropdown">
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
        </div>
    </div>
</body>
<?php
session_start();
require_once "config.php";

$sql = "SELECT * FROM product where id_product='P001'";
$query = mysqli_query($conn, $sql);

echo "<table class='a' border = '0' align='center' >";
echo "<tr>";

while ($rs = mysqli_fetch_array($query)) {
    echo "<td class='a'>
          <img src=" . $rs[4] . " width='100%' height='90%'></td>";

    echo "<td>
    <fieldset>
    <legend>เลือกเงินดาวน์</legend>
    <label for='selectmoney'>เงินดาวน์</label><input type='radio' name='selectmoney' value='1' required>
    <select name='perdown' id='perdown'>
                    <option value='15'>15%</option>
                    <option value='20'>20%</option>
                    <option value='25'>25%</option>
                    <option value='30'>30%</option>
                </select>
                <label for='selectmoney'>หรือ ระบุจำนวนเงิน</label><input type='radio' name='selectmoney' value='2' required><br>
                <input type='number' id='inputmoney' name='inputmoney' min='0'><label> บาท</label>
                </fieldset>

                <br><br><br>
    <fieldset>
    <legend>เลือกระยะเวลาการผ่อนชำระ</legend>
    <label for='installment'><center>เงินดาวน์</label>
    <select name='installment' id='installment'>
    <option selected value='36'>36</option>
                    <option value='48'>48</option>
                    <option value='60'>60</option>
                    <option value='72'>72</option>
                    <option value='84'>84</option>
                </select>
                </fieldset>

                <br>

                <input type='hidden' name='car' value=''>
            <center><button type='submit' name='btncal' id='btncal'>Calculate</button></center>
            
                </td>";
}

echo "</tr>";
echo "</table>";

?>

</html>