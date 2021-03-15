<body bgcolor='#eee9e6'>
    <?php
    session_start();
    require_once 'config.php';
    if ($_POST["ConfirmPass"] == $_POST["Pass"]) {
        $accountid = $_POST["accountid"];
        $id = $_POST["id"];
        $password = $_POST["Pass"];
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $phone = $_POST["phone"];
        $level = "user";
        $str2 = "SELECT MAX(id_customer) FROM customer ";
        $objParse2 = mysqli_query($con, $str2);
        while ($objResult = mysqli_fetch_array($objParse2, MYSQLI_BOTH)) {
            $id_customer = $objResult[0];
        }
        $id_customer++;
        $sql2 = "INSERT INTO customer ( id_customer,id_account,name,surname,phone) 
                 VALUES ('$id_customer','$accountid','$name','$surname','$phone')";

        $sql = "INSERT INTO account ( id_account,id,password,Level)
                VALUES ('$accountid','$id','$password','$level')";

        mysqli_query($con, $sql2);
        if (mysqli_query($con, $sql)) {
            echo "<center><img src='/project/picture/logo1.png' style='width:350;margin-top: 150;'>";
            echo "สมัครเรียบร้อย <center style='font-size:30;color:#f7931e'>";
            header("refresh: 2; url=login.php");
        }
    } else {
        echo "<center><img src='/project/picture/logo1.png' style='width:350;margin-top: 150;'>";
        echo "รหัสไม่ตรงกัน <center style='font-size:30;color:#f7931e'>";
        header("refresh:1,url=signup.php");
    }
    ?>
</body>