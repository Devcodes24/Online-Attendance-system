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
    <div class="container-1" id="container-1">
        <h1>Sign Up</h1>
        <div class="line"></div>
        <form action="#">
            <div class="box">
                <label for="first name">Username</label>
                <input type="text" name="username" id="username" required>


            </div>
            <div class="box">
                <label for="password">Password</label>
                <input type="Password" name="password1" id="Password1" placeholder="password" required>

            </div>
            <div class="box">
                <label for="password">Confirm Password</label>
                <input type="Password" name="cpassword" id="cpassword" placeholder="cpassword" required>

            </div>

            <div class="button">
                
                <input type="submit" name="submit" value="Sign Up">
            </div>
			<a href="testingfetch.php" ><button type="button" id="login" style="background-color:gray; color:navyblue; width:60px;height:25px ; border-radius:20px ; cursor:pointer">Login</button></a>



        </form>
    </div>

    
<?php
include "connection.php";
error_reporting(0);
    $username1 = $_GET['username'];
    $password1 = $_GET['password1'];
    $cpassword1 = $_GET['cpassword'];

    if($password1 == $cpassword1){
        $sql1 = "INSERT INTO USERDATA22 VALUES ( '$username1', '$password1',current_timestamp())";
        $result1 = mysqli_query($conn,$sql1);

    }
    


?>






