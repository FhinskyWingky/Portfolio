<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
  <style>
    body {   
      background-color: black;

    }

    .container {
      width: 300px;
      padding: 16px;
      background-color: black;


    }

    .container .button {
      background-color: black;
      color: red;
      padding: 16px 20px;
      margin: 8px 0;
      border: 2px solid #f44336;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
      font-family: KMITLGO;
      font-size: 30px;
    }

    .container .button:hover {
      opacity: 1;
      background-color: red;
      color: white;
      border: none;
    }


    .button {
      padding: 16px 40px;

    }
  </style>
</head>

<body>
  <br><br>
  <center><img src="imageHonda/LogoHonda.jpg" width="600" height="333">

    <center>
      <div class="container"> 
        <button class="button" onclick=" document.location = 'login.php'">Login</button>
        <button class="button" onclick=" document.location = 'register.php'">Register</button><br>
       
      </div>

</body>

</html>