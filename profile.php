<?php
require('db.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Box - Profile Page</title>

    <meta name="author" content="Codeconvey" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <style>
        body {
            background-color: #f8f9ff;
            color: rgb(17, 17, 17);
            font-family: monospace, serif;
            letter-spacing: 0.05em;
        }
        
        .sidebarOption {
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        
        .sidebarOption .material-icons,
        .fa-twitter {
            padding: 20px;
        }
        
        img#logo {
            width: 100px;
            height: 100px;
            margin-left: 30px;
            margin-bottom: 20px;
        }
        
        .sidebarOption h2 {
            font-weight: 800;
            font-size: 20px;
            margin-right: 20px;
            width: 200px;
            font-family: 'Baloo Bhaina 2', cursive;
        }
        
        hr {
            opacity: 0.2;
        }
        
        .sidebarOption:hover {
            background-color: var(--twitter-background);
            border-radius: 30px;
            color: var(--twitter-color);
            transition: color 100ms ease-out;
        }
        
        .sidebarOption.active {
            color: var(--twitter-color);
        }
        
        .sidebar__tweet {
            width: 100%;
            background-color: var(--twitter-color);
            border: none;
            color: white;
            font-weight: 900;
            border-radius: 30px;
            height: 50px;
            margin-top: 20px;
        }
        
        body {
            display: flex;
            height: 100vh;
            max-width: 1300px;
            margin-left: auto;
            margin-right: auto;
            padding: 0 10px;
        }
        
        .sidebar {
            border-right: 1px solid var(--twitter-background);
            flex: 0.2;
            min-width: 250px;
            margin-top: 20px;
            padding-left: 20px;
            padding-right: 20px;
        }
        
        .sidebar a {
            text-decoration: none;
            color: #000;
        }
        
        .sidebarOption.active {
            color: var(--twitter-color);
        }
        
        .sidebarOption a :hover {
            text-decoration: none;
            background-color: var(--twitter-background);
            border-radius: 30px;
            color: var(--twitter-color);
            transition: color 100ms ease-out;
        }
        
        .fa-twitter {
            color: var(--twitter-color);
            font-size: 30px;
        }
        
        .student-profile .card {
            border-radius: 10px;
        }
        
        .student-profile .card .card-header .profile_img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin: 10px auto;
            border: 10px solid #ccc;
            border-radius: 50%;
        }
        
        .student-profile .card h3 {
            font-size: 20px;
            font-weight: 700;
        }
        
        .student-profile .card p {
            font-size: 16px;
            color: #000;
        }
        
        .student-profile .table th,
        .student-profile .table td {
            font-size: 14px;
            padding: 5px 10px;
            color: #000;
        }
        
        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            position: absolute;
            left: 30%;
        }
    </style>
</head>
<div style="margin-left: 50%; height: 10px;">
            <h2 style="position: absolute;padding-right: 11px;;top: 9px;font-size: 17px;right: 18px;color:#5e5e5e;"><p>Welcome <?php echo $_SESSION['username']; ?>!</p><a href="logout.php" style="text-decoration: none;">Log Out</a> </h2>
            <h2 style="position: absolute;padding-right: 11px;top: 9px;font-size: 17px;right: 148px;color:#5e5e5e;">
                <a href="./Signup.html" style="text-decoration: none;"></a>
            </h2>
    
        </div>
        <br><br>
<body>
    <!-- sidebar starts -->
    <div class="sidebar" style="position: fixed; ">
        <a href="./home.html">
            <img id="logo" src="https://i.ibb.co/1n3103W/BOX.png" alt="" srcset=""></a>
        <div class="sidebarOption ">
            <span class="material-icons"> home </span>
            <a href="./home.html">
                <h2 style="color: #50b7f5;;">Home</h2>
            </a>
        </div>
        <div class="sidebarOption">
            <span class="material-icons active"> perm_identity </span>
            <a class="sidebarOption_links" href="#">
                <h2>Profile</h2>
            </a>
        </div>


        <div class="sidebarOption">
            <span class="material-icons"> list_alt </span>
            <a class="sidebarOption_links" href="#">
                <h2>About Us</h2>
            </a>
        </div>

        <div class="sidebarOption">
            <span class="material-icons"> contacts </span>
            <a class="sidebarOption_links" href="#">
                <h2>Contact Us</h2>
            </a>
        </div>
        <hr>
        <div class="sidebarOption">
            <span class="material-icons"> hearing </span>
            <a class="sidebarOption_links" href="./help.html">
                <h2>Host Your Own Announcement</h2>
            </a>
        </div>

        <!-- <button class="tweetBox__tweetButton" style="width: 220px;">Box it here!</button> -->
    </div>
    <!-- sidebar ends -->

    <section>
        <div class="rt-container" style="padding-top: 175%;">
            <div class="col-rt-12">
                <div class="Scriptcontent">

                    <!-- Student Profile -->
                    <div class="student-profile py-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card shadow-sm" style="position: fixed; width:300px; top:70px">
                                        <div class="card-header bg-transparent text-center">
                                            <img class="profile_img" src="https://i.ibb.co/qy2fwkJ/Screenshot-578.png" alt="student dp">
                                            <!-- LINK Image of the student -->
                                            <h3><?php echo $_SESSION['username']; ?></h3>
                                            <button type="button" class="btn btn-dark">USER</button>
                                        </div>
                                        <div class="card-body">
                                            <p class="mb-0"><strong class="pr-1">Student ID:</strong><?php echo $_SESSION['rollno']; ?></p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8" style="flex: 0.3; overflow-y: hidden; min-width:600px">
                                    <div class="card shadow-sm">
                                        <div class="card-header bg-transparent border-0">
                                            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                                        </div>
                                        <div class="card-body pt-0">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th width="30%">Roll</th>
                                                    <td width="2%">:</td>
                                                    <td><?php echo $_SESSION['rollno']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Academic Year </th>
                                                    <td width="2%">:</td>
                                                    <td><?php echo $_SESSION['academicyear']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Course</th>
                                                    <td width="2%">:</td>
                                                    <td><?php echo $_SESSION['course']; ?></td>
                                                </tr>
                                                
                                                <tr>
                                                    <th width="30%">Gender</th>
                                                    <td width="2%">:</td>
                                                    <td><?php echo $_SESSION['gender']; ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div style="height: 26px"></div>
                                    <div class="card shadow-sm">
                                        <div class="card-header bg-transparent border-0">
                                            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Bio:</h3>
                                        </div>
                                        <div class="card-body pt-0">
                                            <p><?php echo $_SESSION['bio']; ?></p>
                                        </div>
                                    </div>
                                    <div style="height: 26px"></div>
                                    <div class="card shadow-sm">
                                        <div class="card-header bg-transparent border-0">
                                            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Boxings:</h3>
                                        </div>
                                        <hr style="color: #ccc;">
                                        <div class="card-body pt-0">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                ex ea commodo consequat.</p>
                                        </div>
                                        <hr>
                                        <div class="card-body pt-0">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                ex ea commodo consequat.</p>
                                        </div>
                                        <hr>
                                        <div class="card-body pt-0">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                ex ea commodo consequat.</p>
                                        </div>
                                        <hr>
                                        <div class="card-body pt-0">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                ex ea commodo consequat.</p>
                                        </div>
                                        <hr>
                                        <div class="card-body pt-0">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                ex ea commodo consequat.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- partial -->

                </div>
            </div>
        </div>
    </section>
    <!-- <div style="width: 100%;">
        <div style="width: 50%; height: 10px; float: left;">
            <h1 style="position: absolute;padding-left: 11px;top: 0px;font-size: 30px;color: #00acee;">Box</h1>
    </div>
    <div style="margin-left: 50%; height: 10px;">
        <h2 style="position: absolute;padding-right: 11px;top: 9px;font-size: 17px;right: 18px;color:#5e5e5e;"><a href="https://www.gla.ac.in/" target="_blank" style="text-decoration: none;">About us</a> </h2>

    </div>
    </div> -->


    <!-- Analytics -->

</body>

</html>