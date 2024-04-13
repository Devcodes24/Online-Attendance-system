
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
<div class="logo" id="logo">
        <img src="http://www.rmlau.ac.in/images/logo_red_s.png" alt="">
    </div>

<div class="container" id="container">

        <h1>Login</h1>
        <div class="line"></div>
        <form action="#" >
            <div class="box">
                <label for="userId">User Id</label>
                <input type="text" name="username2" id="userId" required>

            </div>
			
            <div class="box">
                <label for="password">Password</label>
                <input type="Password" name="password2" id="Password" placeholder="password" required>

            </div>

            <div class="button">
                <!-- <button id="login" name="signin" class="login" type="button"> Login</button> -->
                <input type="submit" name="signin" value="Login" class="signin-btn" style="display: flex;

width: 100px;
padding: 10px 20px;
margin: 0px 8px 0px 8px;
justify-content: space-between;
outline: none;
letter-spacing: 2px;
border: none;
border-radius: 4px ;
cursor: pointer;
transition: .8s;">
            </div>
            


        </form>
		<a href="login2.php" ><button type="button" style="background-color:gray; color:navyblue; width:60px;height:25px ; border-radius:20px ; cursor:pointer">Register</button></a>
    </div>
</body>
	
</html>
	
	
	


<?php
include "connection.php";
error_reporting(0);
$login = false;
$showError = false;

    $username2 =  $_GET['username2'];
    $password2 =  $_GET['password2'];

    $sql = "SELECT * FROM userdata22 WHERE username1='$username2' AND password1='$password2'";

    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);


    if ($num ==1) {
		echo('<a href="attendence.html"><input type="submit" value="continue"/></a>');
        $login = true;
		
    }
    else{
		
        echo("Enter correct Username and Password");
		

    }


?>