<?php session_start();
if($_SESSION['Customer'] && $_SESSION['Customer_Psw']){
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
        font-size: 20px;
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

      .box {
        padding: 6px 10px;
        margin-top: 8px;
        margin-right: 16px;
        background: #ddd;
        font-size: 17px;
        border: none;
        font-family: KMITLGO;
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

    <?php
   
    require_once "config.php";

    $id = $_GET['id'];
    $Buy = $_POST['Buy'];
    if ($Buy == 'ชำระเงินสด') {
      $FindMax = "SELECT MAX(amount) FROM product WHERE id_product = '$id'"; //คำสั่งหาข้อมูล Amount
      $Car_Current  = mysqli_query($conn, $FindMax); //Query DataBase ให้หาค่า Amount 

      while ($objResult = mysqli_fetch_array($Car_Current, MYSQLI_BOTH)) {
        $Amount = $objResult[0]; //ช่องที่ 3 ใน ตาราง product จะได้เป็น หัวตารางชื่อ amount
      }

      if ($Amount > 0) {
        $Amount--;
        $remain_car = "UPDATE product SET Amount = '$Amount' WHERE id_product = '$id'";
        $Car_Current  = mysqli_query($conn, $remain_car);
        if ($Car_Current) {
          //header('refresh:1 index.php');
          echo '<script "text/javascript"> 
                alert("การซื้อขายรถเสร็จสิ้น"); 
                window.location.href = "index.php"; 
                </script>';
        }
      } else if ($Amount == 0) {
        //header('refresh:1 index.php');
        echo '<script "text/javascript"> 
                alert("การซื้อขายรถเสร็จสิ้น"); 
                window.location.href = "index.php"; 
                </script>';
      }
    } else if ($Buy == 'ชำระผ่อนจ่าย') {
      $Call = "SELECT * FROM product WHERE id_product = '$id'";
      $Calling = mysqli_query($conn, $Call);
      while ($objResult = mysqli_fetch_array($Calling, MYSQLI_BOTH)) {
        echo "<br><br><br>";
        echo "<form method = 'post' action ='Installment_Report.php?id=$id'>";
        echo "<table border = '0' align = 'center' width = '500' height = '400' class = 'table'><tr>";
        echo "<td align = 'center'><h3>ตัวเลือกการผ่อนชำระ</h3></td>";
        echo "<tr> <td align = 'center'> ชื่อสินค้า : " . $objResult[1] . " </td> </tr>";
        echo "<tr> <td align = 'center'> ราคา : " . number_format($objResult[2]) . " </td> </tr>";
        echo "<tr> <td align = 'center'> จำนวนเงินดาวน์ : <input type = 'text 'class = 'box' name= 'prepaid' placeholder='กรุณากรอกเงินดาวน์'> </td> </tr>";
        echo "<tr> 
                    <td align = 'center'> ระยะเวลาผ่อนเงินดาวน์ : 
                        <select name='Installment' class = 'box'> 
                            <option value='24'> 24 เดือน (2 ปี) </option>
                            <option value='36'> 36 เดือน (3 ปี) </option> 
                            <option value='48'> 48 เดือน (4 ปี) </option> 
                            <option value='60'> 60 เดือน (5 ปี) </option> 
                            <option value='72'> 72 เดือน (6 ปี) </option>
                            <option value='84'> 84 เดือน (7 ปี) </option>  
                            <option value='96'> 96 เดือน (8 ปี) </option> 
                            <option value='108'> 108 เดือน (9 ปี)</option>  
                        </select> 
                </td> 
            </tr>";
        echo "<tr> <td align = 'center'> <input type= 'submit' class = 'button' value= 'ตกลง' >";
        echo "<input type= 'submit' class = 'button' value= 'ยกเลิก'> </td> </tr> ";
        echo "</tr> </table>";
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      }
    } else {
      echo '<script "text/javascript"> 
                alert("การซื้อขายรถเสร็จสิ้น"); 
                window.location.href = "index.php"; 
                </script>';
    }
}else{
  echo "<script> alert('Invalid Entrace'); </script>";
  echo "<script text/javascript> window.location.href='selectLoginOrRegister.php'; </script>";
}
  ?>
  </body>

  </html>