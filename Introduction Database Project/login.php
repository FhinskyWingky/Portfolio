<html>
<title> Login </title>
<head>
<style> 
.input{
    color:Orange;
    padding-left: 35%;
    padding-top: 50px;
}
.input2{
    color:Orange;
    margin-left: 35%;
    margin-top: 5px;
}
.login{
    padding-left : 25px;
    font-size: 30px;
    border: 0.5px;
}
.logo{
    color:green;
    font-size: 25px;
    margin-left: 40%
}
.login{
    margin-left: 40%;
    margin-top: 15px;
}
.boxlogin{
    border: 5px solid red;
    margin :250px;
   
}
</style>
</head>


<body style = "background-color:MediumSeaGreen;">
<div class = "boxlogin">
<div class = "logo">  ร้านขายยาโดยเภสัช </div>
<form action = "welcome.php" method = "GET">
 <div class = "input">Username <input type = "text" name = "USERNAME"> </div> <br>
 <div class = "input2"> Password    <input type = "password" name = "PASSWORD"> </div> <br>
 <div class = "login"> <input type = "submit" value = "Login" > </div>
</form>
</div>
</body>

</html>

  