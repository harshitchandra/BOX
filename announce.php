<?php
require('db.php');
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Announcement</title>
</head>

<body><div style="width: 50%; height: 10px; float: left;">
    <h1 style="position: absolute;padding-left: 11px;top: 0px;font-size: 30px;color: #00acee;">Box</h1>
</div>
    <div style="margin-left: 50%; height: 10px;">
        
        <h2 style="position: absolute;padding-right: 11px;;top: 9px;font-size: 17px;right: 18px;color:#5e5e5e;"><p>Welcome <?php echo $_SESSION['username']; ?>!</p><a href="logout.php" style="text-decoration: none;">Log Out</a> </h2>
        <h2 style="position: absolute;padding-right: 11px;top: 9px;font-size: 17px;right: 148px;color:#5e5e5e;">
            <a href="./Signup.html" style="text-decoration: none;"></a>
        </h2>

    </div>

<br><br><br><br><br><br><br>

    <div class="card text-center" style="padding-left: 20%;padding-right: 20%;">

        <div class="card-header fs-2">
            Announcement !
        </div>
        <div class="card mx-auto my-3" style="width: 40rem; justify-content:center; text-align:center">
            <div class="card-body">
                <!-- <label for="basic-url" class="form-label fs-4">Your Google Form Link.</label> -->
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Google Form Link</span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>
                <div class="mb-3">
                    <!-- <label for="formFileSm" class="form-label">Small file input example</label> -->
                    <input class="form-control form-control-sm" id="formFileSm" type="file" disabled placeholder="Announcement Page">
                </div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-outline-primary">Submit</button>

                </div>
            </div>
            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
        </div>
        <div class="card-footer text-muted fixed-bottom">
            Welcome You are announcing in the BOX.
        </div>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>