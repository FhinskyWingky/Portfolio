<?php session_start(); ?>
<?php if ($_SESSION['Customer'] && $_SESSION['Customer_Psw']) { ?>
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
            <th>Contect</th>
            <th>Address</th>
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
<?php } else {
  echo "<script> alert('Invalid Entrace'); </script>";
  echo "<script text/javascript> window.location.href='login.php'; </script>";
} ?>

  </html>