1 <html>

<head>
    <title>INSERT PRODUCT</title>
</head>

<body bgcolor="#eee9e6">
    <style>
        input.ok {
            background-color: #f7931e;
            /* Green */
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
    <?php
    session_start();
    if ($_SESSION["level"] == "admin") {
    ?>
        <form action="insert.php" method="post">
            <center>
                <table>
                    <tr>
                        <td>
                            <center><img src='\projectPHP\imageHonda\LogoHonda.jpg' style='width:350;margin-top: 100;'>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" value="" name="name" required placeholder="กรอกชื่อสินค้า" style="width:300">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type='file' name="file" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type='number' name="price" placeholder="กรอกราคา" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type='number' name="amount" placeholder="กรอกจํานวน" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                             <center><input type="submit" value="ตกลง" class="ok">
                        </td>
                    </tr>
        </form>
    <?php
    } else {
        header("location:/projectPHP/login.php");
    }
    ?>
</body>

</html>