
 <html>

 <body bgcolor="#eee9e6">
     <?php
        session_start();
        if ($_SESSION["level"] == "admin") {
        ?>
         <?php
            require_once "config.php";
            $name = $_POST["name"];
            $file = $_POST["file"];
            $type = $_POST["type"];
            $price = $_POST["price"];
            $amount = $_POST["amount"];
            $q2 = mysqli_query($con, "SELECT MAX(id_product) FROM product");
            while ($objResult = mysqli_fetch_array($q2)) {
                $pdid = $objResult[0];
            }
            $pdid++;
            mysqli_query($con, "INSERT INTO product (id_product, productName, Price, amount ,name_image) values ($pdid,'$name','$price','$amount','/projectPHP/product/$file')");
            header("location:/projectPHP/admin.php");
            ?>
     <?php
        } else {
            header("location:/projectPHP/login.php");
        }
        ?>
 </body>

 </html>