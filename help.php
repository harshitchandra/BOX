<?php
require('db.php');
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="help.css"> -->
    <style>
        * {
    box-sizing: border-box;
    font-family: monospace, serif;
}

#logo img {
    margin-left: 60px;
    width: 100px;
    margin-top: 15px;
    margin-bottom: 10px;
}

input[type=text],
select,
textarea :focus-within {
    width: 50rem;
    padding: 12px;
    font-size: 18px;
    border: 1px solid rgb(83, 154, 182);
    border-radius: 4px;
    resize: vertical;
}

input[type=text],
select,
textarea :active {
    width: 50rem;
    padding: 12px;
    font-size: 18px;
    border: 1px solid rgb(83, 154, 182);
    border-radius: 4px;
    resize: vertical;
}

input[type=email],
select,
textarea {
    width: 50rem;
    padding: 12px;
    font-size: 18px;
    border: 1px solid rgb(70, 68, 68);
    border-radius: 4px;
    resize: vertical;
}

input[type=email],
select,
textarea :active {
    width: 50rem;
    padding: 12px;
    font-size: 18px;
    border: 1px solid rgb(83, 154, 182);
    border-radius: 4px;
    resize: vertical;
}

#subject {
    width: 50rem;
    padding: 12px;
    font-size: 18px;
    border: 1px solid rgb(83, 154, 182);
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: rgb(37, 116, 161);
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    right: 5%;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5 px;
    background-color: #f2f2f2;
    padding: 20px;
    width: max-content;
    /* align-items: center; */
    position: absolute;
    float: right;
    border-radius: 20px;
    right: 20vw;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
    margin-left: 20px;
}

.row:after {
    content: "";
    display: table;
    clear: both;
}

h2 {
    margin-left: 20px;
    font-size: 30px;
    color: slategrey;
    font-family: monospace, serif;
}
    </style>
</head>

<body>
    <div style="width: 50%; height: 10px; float: left;">
        <h1 style="position: absolute;padding-left: 11px;top: 0px;font-size: 30px;color: #00acee;">Box</h1>
    </div>
    <div style="width: 5%;height: 5%;font-family: monospace, serif;">
        
        <div style="margin-left: 50%; height: 10px;">
            <h2 style="position: absolute;padding-right: 11px;;top: 0px;font-size: 17px;right: 48px;color:#5e5e5e;"><p>Welcome <?php echo $_SESSION['username']; ?>!</p><a href="logout.php" style="text-decoration: none;">Log Out</a> </h2>
            <h2 style="position: absolute;padding-right: 11px;top: 9px;font-size: 17px;right: 148px;color:#5e5e5e;">
                <a href="./Signup.html" style="text-decoration: none;"></a>
            </h2>
    
        </div>
    </div>
    <div id="logo">
        <a href="">
            <img src="./images/BOX.png" alt="" srcset=""></a>
    </div>
    <br><br>
    <div class="container">
        <h2>ISSUE</h2>
        <form>
            <div class="row">
                <div class="col-75">
                    <input type="text" id="fname" name="firstname" placeholder="First Name">
                </div>
            </div>
            <div class="row">
                <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Last Name">
                </div>
            </div>
            <div class="row">
                <div class="col-75">
                    <input type="email" id="email" name="mailid" placeholder="Mail Id">
                </div>
            </div>

            <div class="row">
                <div class="col-75">
                    <textarea id="subject" name="subject" placeholder="Write your problem here." style="height:200px"></textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

</body>

</html>