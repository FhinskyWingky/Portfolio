
<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Accessories</title>
    <link rel="icon" type="img/png" href="icons.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="css2.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        .topnav {
            overflow: hidden;
            background-color: rgb(38, 35, 80);
        }
        
        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }
        
        .topnav a.active {
            background-color: rgb(120, 110, 175);
            color: white;
        }
        
        .topnav-right {
            float: right;
        }
    </style>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }
        
        body {
            font-family: Verdana, sans-serif;
        }
        
        .mySlides {
            display: none;
        }
        
        img {
            vertical-align: middle;
        }
        /* Slideshow container */
        
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }
        /* Caption text */
        
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }
        /* Number text (1/3 etc) */
        
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }
        /* The dots/bullets/indicators */
        
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }
        
        .active {
            background-color: #d88282;
        }
        /* Fading animation */
        
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }
        
        @-webkit-keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }
        
        @keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }
        /* On smaller screens, decrease text size */
        
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }
    </style>

    <style>
        .vertical-menu {
            width: 300px;
            height: 300px;
        }
        
        .vertical-menu a {
            background-color: rgb(38, 35, 80);
            color: #f2f2f2;
            display: block;
            padding: 12px;
            text-decoration: none;
        }
        
        .vertical-menu a:hover {
            background-color: #ddd;
            color: black;
        }
        
        .vertical-menu a.active {
            background-color: #4CAF50;
            color: black;
        }
    </style>

    <style type="text/css">
        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
        }
        
        #container {
            min-height: 100%;
            position: relative;
        }
        
        
        
        #footer2 {
            width: 100%;
            height: 50px;
            /* Height of the footer */
            background: rgb(38, 35, 80);
            color: #f2f2f2;
            padding-top: 5px;
            position: absolute;
            bottom: 10px;
        }
    </style>
</head>

<body>

    <div class="topnav">
        <a class="active" href="index.php">Home</a>

        <a href="index.php">Back</a>
        <a href="pay.php">Payment</a>
        <div class="topnav-right">
        <?php
        
            if( $_GET['Username'] ){
                ?>
                <a href="Register.php"> <?$_GET['Username']?></a>
                <a href="login.php">Logout</a>
                <?php
            }
            else{
                ?>
                <a href="Register.php">Sign Up</a>
            <a href="login.php">Login</a>
                <?php
            }
        ?>
        </div>
        
    </div>
            <?php
                $hostname = "localhost";
                $username = "root";
                $dbname = "primond";
                $conn = mysqli_connect( $hostname, $username );
                if ( ! $conn ) die ( "ไม่สามารถติดต่อกับ MySQL ได้" );
                mysqli_select_db ( $conn,$dbname  )or die ( "ไม่สามารถเลือกฐานข้อมูล bookstore ได้" );
                mysqli_query($conn,"SET character_set_results=utf8");
                mysqli_query($conn,"SET character_set_client=utf8");
                mysqli_query($conn,"SET character_set_connection=utf8");
                $sqltxt = "SELECT * FROM diamond  ORDER BY DiamondID DESC LIMIT 1" ;
                $result = mysqli_query ($conn,$sqltxt) or die( mysqli_error($conn));
                
                ?>
                
        </tr>
    </table>
<br>
  
  <?php
        while ( $rs = mysqli_fetch_array ( $result ) )
        {
  ?>
  <form action ="Checkupdate.php" method = "get">
    รหัสสินค้า : <input type="text"  value="<?php echo $rs[0]+1;?>" disabled ><br/> <?php // disable ทำให้ไม่สามารถกดใช้งานได้ไว้โชว์ค่าเฉย ๆ?>
    <input type="hidden" name='DiamondID' value="<?php echo $rs[0]+1;?>"  > <?php // hidden ใช้เก็บค่าของ DiamondIDเพื่อใช้ในการส่งค้าไปหน้าCheckuodate แต่จะไม่โชว์แท็กนั้น?>
    ชื่อสินค้า  : <input type="text" name='DiamondName'  > <br/>
    รหัสชนิดสินค้า  : <input type="text" name='TypeID' > <br/>
    ราคา    : <input type="text" name='Price'  > <br/>
    จำนวนสินค้า : <input type="text" name='Stock' ><br/>
    รูปภาพ : <input type="file" name='Picture' ><br/>
    <input type='submit' value='submit' >
    </form>
            <?php
        }
            ?>

<footer>
        <center>
            <div id="footer2">Copyright &copy; Your Website 2020 </div>
        </center>
    </footer>
</body>

</html>


