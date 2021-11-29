<?php
    require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
            // removes backslashes
        $username = stripslashes($_REQUEST['username']);
            //escapes special characters in a string
        $username = mysqli_real_escape_string($con,$username); 
       
        $rollno = stripslashes($_REQUEST['rollno']);
        $rollno = mysqli_real_escape_string($con,$rollno);
    
        $academicyear = stripslashes($_REQUEST['academicyear']);
        $academicyear = mysqli_real_escape_string($con,$academicyear);
    
        $course = stripslashes($_REQUEST['course']);
        $course = mysqli_real_escape_string($con,$course);
    
        $gender = stripslashes($_REQUEST['gender']);
        $gender = mysqli_real_escape_string($con,$gender);
    
        
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
    
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con,$email);
    
        $bio = stripslashes($_REQUEST['bio']);
        $bio = mysqli_real_escape_string($con,$bio);
    
        $trn_date = date("Y-m-d H:i:s");
            $query = "INSERT into `users` (username, rollno ,academicyear ,course , gender , password, email, bio, trn_date)
    VALUES ('$username', '$rollno', '$academicyear', '$course', '$gender', '".md5($password)."', '$email', '$bio' , '$trn_date')";
            $result = mysqli_query($con,$query);
            if($result){
                echo "<div class='form'>
    <h3>You are registered successfully.</h3>
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
    <title>BOX - Signup</title>
    <link rel="icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
    <style>
        .borderDemo {
            -webkit-border-radius: 17px;
            border-radius: 17px;
            background: #ffffff;
            -webkit-box-shadow: 15px 15px 30px #c1c7cf, -15px -15px 30px #ffffff;
            box-shadow: 15px 15px 30px #c1c7cf, -15px -15px 30px #ffffff;
            position: absolute;
            right: 15%;
            top: 15%;
            padding: 15px;
            width: 70%;
            align-items: center;
        }
        
        *,
         ::after,
         ::before {
            box-sizing: border-box;
        }
        
        body {
            background-color: #f8fbff;
            color: rgb(17, 17, 17);
            font-family: monospace, serif;
            letter-spacing: 0.05em;
        }
        
        h1 {
            font-size: 23px;
        }
        
        .form {
            width: 600px;
            padding: 6px 15px 24px;
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
        <!-- <script type="text/javascript" src="vanilla-tilt.js"></script>
        <script type="text/javascript">
            VanillaTilt.init(document.querySelector(".borderDemo"), {
                max: 2,
                speed: 5
            });

            //It also supports NodeList
            VanillaTilt.init(document.querySelectorAll(".borderDemo"));
        </script> -->

        <form  name="registration" action="" method="post" autocomplete='off' class='form' style="position:;">
            <div class='control'>
                <h1>
                    Sign Up
                </h1>
            </div>
            <!-- pattern attribute is not working properly -->
            <div class='control block-cube block-input' style="">
                <input type="text" name='username' placeholder='Username'  title='Atleast one number, one uppercase letter and one lowercase.' onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode >= 97 && event.charCode <= 122 || event.charCode >= 65 && event.charCode <= 90" maxlength='15' required>
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
                <input name='rollno' placeholder='University Roll Number' type='number' onkeypress="return event.charCode >= 48" min="1" maxlength='9' required>
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
                <input name='academicyear' placeholder='Academic Year' type='number' onkeypress="return event.charCode >= 48" min="1" list='Academic Year' required>
                <datalist id="Academic Year">
                <option value="2017">
                <option value="2018">
                <option value="2019">
                <option value="2020">
                <option value="2021"> 
              </datalist>
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
                <input name='course' placeholder='Course' type='text' onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode >= 97 && event.charCode <= 122 || event.charCode >= 65 && event.charCode <= 90" list='Course' required>
                <datalist id="Course">
                <option value="Bachelor of Technology">
                <option value="BCA">
                <option value="Master of Technology">
                <option value="MCA">
              </datalist>
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
                <input name='gender' placeholder='Gender' type='select' list='Gender' required>
                <datalist id="Gender">
                    <option value="Female">
                    <option value="Male">
                </datalist>
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
                <input name='password' placeholder='Password' type='password' title='Atleast one number, one uppercase letter and one lowercase.' pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" minlength="8" maxlength="12" required>
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
                <input name='email' placeholder='E-mail' type='email' pattern=".+@gla\.ac.in" title="Must contain '@gla.ac.in'." required>
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
                <input name='bio' placeholder='Bio' type='text' maxlength="3000">
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
            <button class='btn block-cube block-cube-hover' type='submit' name="submit" value="Register" >
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
                  <!--  -->
                  <a style="text-decoration: none;color: black;">Submit</a>  
                
              </div>
            </button>
        </form>
    </div>
    
    <div style="width: 100%;">
        <div style="width: 50%; height: 10px; float: left;">
            <h1 style="position: absolute;padding-left: 11px;top: 0px;font-size: 30px;color: #00acee;">Box</h1>
        </div>
        <div>

        </div>
        <div style="margin-left: 50%; height: 10px;">
            <h2 style="position: absolute;padding-right: 125px;top: 12px;font-size: 15px;right: 18px;">Already a member? <a href="login.php" target="_blank" style="text-decoration: none;">Log In</a></h2>
            <h2 style="position: absolute;padding-right: 11px;top: 9px;font-size: 17px;right: 18px;color:#5e5e5e;"><a href="us.php" target="_blank" style="text-decoration: none;">About us</a> </h2>
        </div>
    </div>

    <?php } ?>
</body>

</html>