<?php session_start();

?>
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
            background-color: white;
            color: red;
            border: 2px solid #f44336;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button:hover {
            opacity: 1;
            background-color: red;
            color: white;
            border: 2px solid #f44336;
        }

        .logout {
            float: right;
        }

        .mid {
            text-align: center;
            margin-top: 25px;
        }
    </style>

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
                <div class="logout">
                    <a href="selectLoginOrRegister.php">Logout</a>
                </div>
            </div>


            <table align='center' border='1' width='500' height='200' class='mid'>
                <tr>
                    <td>
                        เงินดาวน์ น้อยกว่าหรือเท่ากับ 2%
                    </td>
                    <td>
                        ดอกเบี้ย 5%
                    </td>
                </tr>

                <tr>
                    <td>
                        เงินดาวน์ น้อยกว่าหรือเท่ากับ 10%
                    </td>
                    <td>
                        ดอกเบี้ย 4%
                    </td>
                </tr>

                <tr>
                    <td>
                        เงินดาวน์ น้อยกว่าหรือเท่ากับ 15%
                    </td>
                    <td>
                        ดอกเบี้ย 3%
                    </td>
                </tr>

                <tr>
                    <td>
                        เงินดาวน์ น้อยกว่าหรือเท่ากับ 20%
                    </td>
                    <td>
                        ดอกเบี้ย 2%
                    </td>
                </tr>

                <tr>
                    <td>
                        เงินดาวน์ น้อยกว่าหรือเท่ากับ 30%
                    </td>
                    <td>
                        ดอกเบี้ย 1%
                    </td>
                </tr>

                <tr>
                    <td>
                        เงินดาวน์ น้อยกว่าหรือเท่ากับ 50%
                    </td>
                    <td>
                        ดอกเบี้ย 0.5%
                    </td>
                </tr>

    </body>

    </table>
 
    </html>