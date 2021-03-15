<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: black;
            float: center;
        }

        * {
            box-sizing: border-box;
        }

        /* Add padding to containers */
        .container {

            padding: 16px;
            background-color: white;

            /* width: 50%;*/
        }

        /* Full-width input fields */
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;

        }

        /* Set a style for the submit button */
        .registerbtn {
            background-color: white;
            color: red;
            padding: 16px 20px;
            margin: 8px 0;
            border: 2px solid #f44336;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
            background-color: red;
            color: white;
            border: none;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
    </style>
</head>

<body>

    <form method='post' action='checklogin.php'>
        <div class="container">
            <h1>Login</h1>
            <p>Member login.</p>
            <hr>

            <label for="surname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username..." name="user" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password..." name="psw" required>

            <hr>

            <button type="submit" class="registerbtn">Login</button>
        </div>

    </form>

</body>

<?php
$status = $_GET['status'];
if ($status == 2) {
    echo '<script> alert("ลงทะเบียนสำเร็จ"); </script>';
}
?>

</html>