<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_GET['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOX - Log in</title>
    <link rel="icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
    <style>
        .borderDemo {
            -webkit-border-radius: 17px;
            border-radius: 17px;
            background: #ffffff;
            -webkit-box-shadow: 15px 15px 30px #c1c7cf, -15px -15px 30px #ffffff;
            box-shadow: 15px 15px 30px #c1c7cf, -15px -15px 30px #ffffff;
            position: absolute;
            right: 4%;
            top: 22%;
            padding: 50px;
            align-items: center;
        }
        
        *,
         ::after,
         ::before {
            box-sizing: border-box;
        }
        
        body {
            background-color: #ffffff;
            color: rgb(17, 17, 17);
            font-family: monospace, serif;
            letter-spacing: 0.05em;
        }
        
        h1 {
            font-size: 23px;
        }
        
        .form {
            width: 300px;
            padding: 64px 15px 24px;
            margin: 0 auto;
        }
        
        .form .control {
            margin: 0 0 24px;
        }
        
        .form .control input {
            width: 100%;
            padding: 14px 16px;
            border: 0;
            background: transparent;
            color: rgb(0, 0, 0);
            font-family: monospace, serif;
            letter-spacing: 0.05em;
            font-size: 16px;
        }
        
        .form .control input:hover,
        .form .control input:focus {
            outline: none;
            border: 0;
        }
        
        .form .btn {
            width: 100%;
            display: block;
            padding: 14px 16px;
            background: transparent;
            outline: none;
            border: 0;
            color: rgb(0, 0, 0);
            letter-spacing: 0.1em;
            font-weight: bold;
            font-family: monospace;
            font-size: 16px;
        }
        
        .block-cube {
            position: relative;
        }
        
        .block-cube .bg-top {
            position: absolute;
            height: 10px;
            background: #020024;
            background: linear-gradient(90deg, #020024 0%, #340979 37%, #00d4ff 94%);
            /* thisss needs to be addressed*/
            bottom: 100%;
            left: 5px;
            right: -5px;
            transform: skew(-45deg, 0);
            margin: 0;
        }
        
        .block-cube .bg-top .bg-inner {
            bottom: 0;
        }
        
        .block-cube .bg {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            background: #ffffff;
            background: linear-gradient(90deg, #020024d8 0%, #00d4ff 94%);
            /* thisss needs to be addressed*/
        }
        
        .block-cube .bg-right {
            position: absolute;
            background: #020024;
            background: #00d4ff;
            top: -5px;
            z-index: 0;
            bottom: 5px;
            width: 10px;
            left: 100%;
            transform: skew(0, -45deg);
        }
        
        .block-cube .bg-right .bg-inner {
            left: 0;
        }
        
        .block-cube .bg .bg-inner {
            transition: all 0.2s ease-in-out;
        }
        
        .block-cube .bg-inner {
            background: #dfeeff;
            position: absolute;
            left: 2px;
            top: 2px;
            right: 2px;
            bottom: 2px;
        }
        
        .block-cube .text {
            position: relative;
            z-index: 2;
        }
        
        .block-cube.block-input input {
            position: relative;
            z-index: 2;
        }
        
        .block-cube.block-input input:focus~.bg-right .bg-inner,
        .block-cube.block-input input:focus~.bg-top .bg-inner,
        .block-cube.block-input input:focus~.bg-inner .bg-inner {
            top: 100%;
            background: rgba(255, 255, 255, 0.5);
        }
        
        .block-cube.block-input .bg-top,
        .block-cube.block-input .bg-right,
        .block-cube.block-input .bg {
            background: rgba(255, 255, 255, 0.199);
            transition: background 0.2s ease-in-out;
        }
        
        .block-cube.block-input .bg-right .bg-inner,
        .block-cube.block-input .bg-top .bg-inner {
            transition: all 0.2s ease-in-out;
        }
        
        .block-cube.block-input:focus .bg-top,
        .block-cube.block-input:focus .bg-right,
        .block-cube.block-input:focus .bg,
        .block-cube.block-input:hover .bg-top,
        .block-cube.block-input:hover .bg-right,
        .block-cube.block-input:hover .bg {
            background: rgba(0, 0, 0, 0.8);
        }
        
        .block-cube.block-cube-hover:focus .bg .bg-inner,
        .block-cube.block-cube-hover:hover .bg .bg-inner {
            top: 100%;
        }
    </style>
</head>

<body>



    <div class="borderDemo">
        <script type="text/javascript" src="vanilla-tilt.js"></script>
        <script type="text/javascript">
            VanillaTilt.init(document.querySelector(".borderDemo"), {
                max: 10,
                speed: 100
            });

            //It also supports NodeList
            VanillaTilt.init(document.querySelectorAll(".borderDemo"));
        </script>

        <form autocomplete='off' class='form'>
            <div class='control'>
                <h1>
                    Log in
                </h1>
            </div>
            <div class='control block-cube block-input'>
                <input name='username' placeholder='Username' type='text' required>
                <div class='bg-top'>
                    <div class='bg-inner'></div>
                </div>
                <div class='bg-right'>
                    <div class='bg-inner'></div>
                </div>
                <div class='bg'>
                    <div class='bg-inner'></div>
                </div>
            </div>
            <div class='control block-cube block-input'>
                <input name='password' placeholder='Password' type='password' required>
                <div class='bg-top'>
                    <div class='bg-inner'></div>
                </div>
                <div class='bg-right'>
                    <div class='bg-inner'></div>
                </div>
                <div class='bg'>
                    <div class='bg-inner'></div>
                </div>
            </div>
            <button class='btn block-cube block-cube-hover' type='submit' name='submit' value='Login' href=".php">
              <div class='bg-top'>
                <div class='bg-inner'></div>
              </div>
              <div class='bg-right'>
                <div class='bg-inner'></div>
              </div>
              <div class='bg'>
                <div class='bg-inner'></div>
              </div>
              <div class='text'>
                Submit
              </div>
            </button>
            
        </form>
    </div>

    <div style="width: 100%;">
        <div style="width: 50%; height: 10px; float: left;">
            <h1 style="position: absolute;padding-left: 11px;top: 0px;font-size: 30px;color: #00acee;">Box</h1>
        </div>
        <div style="margin-left: 50%; height: 10px;">
            <h2 style="position: absolute;padding-right: 11px;top: 9px;font-size: 17px;right: 18px;color:#5e5e5e;"><a href="us.html" target="_blank" style="text-decoration: none;">About us</a> </h2>
            <h2 style="position: absolute;padding-right: 11px;top: 9px;font-size: 17px;right: 148px;color:#5e5e5e;">Not a user?
                <a href="registration.php" style="text-decoration: none;">Sign up here.</a>
            </h2>

        </div>
    </div>
    <div>
        <img style="padding-top: 10%;padding-left: 28%;top: 28%;align-items: center;width: 42%;height: 42%;" src="https://i.ibb.co/1n3103W/BOX.png" alt="">
    </div>
    <?php } ?>
</body>

</html>
