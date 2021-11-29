<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BOX</title>
    <link rel="stylesheet" href="home.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    --twitter-color: #50b7f5;
    --twitter-background: #e6ecf0;
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


/* feed */

.feed {
    flex: 0.5;
    border-right: 1px solid var(--twitter-background);
    min-width: fit-content;
    overflow-y: scroll;
    display: grid;
}

.feed__header {
    position: sticky;
    top: 0;
    background-color: white;
    z-index: 100;
    border: 1px solid var(--twitter-background);
    padding: 15px 20px;
}

.feed__header h2 {
    font-size: 20px;
    font-weight: 800;
}

.feed::-webkit-scrollbar {
    display: none;
}

.feed {
    -ms-overflow-style: none;
    scrollbar-width: none;
}

input[type="file"] {
    float: left;
    font-size: 15px;
    margin-top: 25px;
    opacity: 0.8;
    width: max-content;
    height: max-content;
    margin-left: 50px;
}


/* tweet box */

.tweetbox__input img {
    border-radius: 50%;
    height: 40px;
}

.tweetBox {
    padding-bottom: 10px;
    margin-bottom: 10px;
    position: -webkit-sticky;
    /* Safari */
    position: sticky;
    top: 0;
    background-color: #fff;
}

.tweetBox form {
    display: flex;
    flex-direction: column;
}

.tweetbox__input {
    display: flex;
    padding: 20px;
}

.tweetbox__input input {
    flex: 1;
    margin-left: 20px;
    font-size: 20px;
    border: none;
    outline: none;
    cursor: text;
}

.tweetBox__tweetButton {
    background-color: var(--twitter-color);
    border: none;
    color: white;
    font-weight: 900;
    border-radius: 30px;
    width: 120px;
    height: 40px;
    margin-top: 20px;
    float: right;
    right: 5%;
    bottom: 10%;
    margin-left: auto;
    cursor: pointer;
    position: absolute;
}


/* post */

.post__avatar img {
    border-radius: 50%;
    height: 40px;
}

.post_box {
    position: relative;
    overflow: auto;
}

.post_box::-webkit-scrollbar {
    display: none;
}

.post {
    display: flex;
    align-items: flex-start;
    border-bottom: 1px solid var(--twitter-background);
    padding-bottom: 10px;
    background-color: #f5f8fa;
    border-radius: 20px;
}

.post__body img {
    width: 300px;
    object-fit: contain;
    border-radius: 20px;
}

.post__footer {
    display: flex;
    margin-top: 10px;
    margin-left: 20px;
}

.post__badge {
    font-size: 14px !important;
    color: var(--twitter-color);
    margin-right: 5px;
}

.post__headerSpecial {
    font-weight: 600;
    font-size: 12px;
    color: gray;
}

.post__headerText h3 {
    font-size: 15px;
    margin-bottom: 5px;
}

.post__headerDescription {
    margin-bottom: 10px;
    font-size: 15px;
}

.post__body {
    flex: 1;
    padding: 10px;
}

.post__avatar {
    padding: 20px;
}

.footer_up_down {
    /* margin-left: 10px; */
    margin-right: 20px;
}

.voting span {
    vertical-align: bottom;
    font-size: 25px;
    background-color: none;
}

.voting input {
    width: 30px;
    height: 30px;
    font-size: 20px;
    border: none;
    pointer-events: none;
}

.upvote {
    border: none;
    /* color: #50b7f5; */
}

.downvote {
    border: none;
    /* color: rgb(247, 108, 108); */
}

.upvote :active {
    border: none;
    color: #50b7f5;
    transform: scale(1.2);
}

.downvote :active {
    border: none;
    color: rgb(247, 108, 108);
    transform: scale(1.2);
}


/* widgets */

.widgets {
    flex: 0.3;
    min-width: fit-content;
    overflow-y: scroll;
}

.widgets::-webkit-scrollbar {
    display: none;
}

.widgets_title {
    font-size: 30px;
    font-family: cursive;
    align-items: center;
    text-align: center;
    margin-top: 25px;
    /* margin-left: 30px; */
}

.widgets__input {
    display: flex;
    align-items: center;
    background-color: var(--twitter-background);
    padding: 10px;
    border-radius: 20px;
    margin-top: 10px;
    margin-left: 20px;
}

.widgets_images {
    width: 300px;
}

.widgets__input input {
    border: none;
    background-color: var(--twitter-background);
}

.widgets__searchIcon {
    color: gray;
}

.widgets__widgetContainer {
    margin-top: 15px;
    margin-left: 20px;
    padding: 20px;
    background-color: #f5f8fa;
    border-radius: 20px;
}

.widgets__widgetContainer h2 {
    font-size: 18px;
    font-weight: 800;
}
    </style>
</head>

<body>
    <div style="width: 5%;height: 5%;font-family: monospace, serif;">
        
        <div style="margin-left: 50%; height: 10px;">
            <h2 style="position: absolute;padding-right: 11px;;top: 9px;font-size: 17px;right: 18px;color:#5e5e5e;"><p>Welcome <?php echo $_SESSION['username']; ?>!</p><a href="logout.php" style="text-decoration: none;">Log Out</a> </h2>
            <h2 style="position: absolute;padding-right: 11px;top: 9px;font-size: 17px;right: 148px;color:#5e5e5e;">
                <a href="./Signup.html" style="text-decoration: none;"></a>
            </h2>
    
        </div>
    </div>
    <br><br><br>
    <!-- sidebar starts -->
    <div class="sidebar">
        <img id="logo" src="https://i.ibb.co/1n3103W/BOX.png" alt="" srcset="">
        <div class="sidebarOption active">
            <span class="material-icons"> home </span>
            <a href="./home.html">
                <h2 style="color: #50b7f5;;">Home</h2>
            </a>
        </div>
        <div class="sidebarOption">
            <span class="material-icons"> perm_identity </span>
            <a class="sidebarOption_links" href="profile.php">
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
            <a class="sidebarOption_links" href="announce.html">
                <h2>Host Your Own Announcement</h2>
            </a>
        </div>

        <!-- <button class="tweetBox__tweetButton" style="width: 220px;">Box it here!</button> -->
    </div>
    <!-- sidebar ends -->

    <!-- feed starts -->
    <div class="feed">
        <!-- tweetbox starts -->

        <div class="tweetBox">
            <form>

                <div class="tweetbox__input">
                    <img src="https://i.pinimg.com/originals/a6/58/32/a65832155622ac173337874f02b218fb.png" alt="" />
                    <input type="text" placeholder="Enter your query here" />
                </div>
                <div>
                    <input type="file">
                    <button class="tweetBox__tweetButton">Box it here!</button>
                </div>
            </form>
            <hr style="margin-top: 20px;">
        </div>

        <!-- tweetbox ends -->

        <div class="post_box">
            <!-- post starts -->
            <div class="post">
                <div class="post__avatar">
                    <img src="./images/159128915_888937008566701_93282898053271555_n.jpg" alt="" />
                </div>

                <div class="post__body">
                    <div class="post__header">
                        <div class="post__headerText">
                            <h3>
                                Nayandeep Mishra
                                <span class="post__headerSpecial"><span class="material-icons post__badge"> verified </span>@nayandeepmishra3</span>
                            </h3>
                        </div>
                        <div class="post__headerDescription">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <img src="./images/159128915_888937008566701_93282898053271555_n.jpg" alt="" />
                    <div class="post__footer">
                        <div class="voting">
                            <button class="upvote">
                                <span class="material-icons"> file_upload </span>
                                <input type="number" name="up" class="upvote_input" value="0">
                            </button>
                            <button class="downvote">
                                <span class="material-icons"> file_download </span>
                                <input type="number" name="down" class="downvote_input" value="0">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- post ends -->
            <!-- <br> -->
            <!-- post starts -->
            <div class="post">
                <div class="post__avatar">
                    <img src="./images/harshit-chandra.jpeg" alt="" />
                </div>

                <div class="post__body">
                    <div class="post__header">
                        <div class="post__headerText">
                            <h3>
                                Harshit Chandra
                                <span class="post__headerSpecial"><span class="material-icons post__badge"> verified </span>@harshitchandra</span>
                            </h3>
                        </div>
                        <div class="post__headerDescription">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <img src="./images/harshit-chandra.jpeg" alt="" />
                    <div class="post__footer">
                        <div class="voting">
                            <button class="upvote">
                                <span class="material-icons"> file_upload </span>
                                <input type="number" name="up" class="upvote_input" value="0">
                            </button>
                            <button class="downvote">
                                <span class="material-icons"> file_download </span>
                                <input type="number" name="down" class="downvote_input" value="0">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- post ends -->
            <!-- <br> -->
            <!-- post starts -->
            <div class="post">
                <div class="post__avatar">
                    <img src="./images/chetan.jpg" alt="" />
                </div>

                <div class="post__body">
                    <div class="post__header">
                        <div class="post__headerText">
                            <h3>
                                Chetan Verma
                                <span class="post__headerSpecial"><span class="material-icons post__badge"> verified </span>@chetanverma</span>
                            </h3>
                        </div>
                        <div class="post__headerDescription">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <img src="./images/chetan.jpg" alt="" />
                    <div class="post__footer">
                        <div class="voting">
                            <button class="upvote">
                                <span class="material-icons"> file_upload </span>
                                <input type="number" name="up" class="upvote_input" value="0">
                            </button>
                            <button class="downvote">
                                <span class="material-icons"> file_download </span>
                                <input type="number" name="down" class="downvote_input" value="0">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- post ends -->
        </div>
    </div>
    <!-- feed ends -->

    <!-- widgets starts -->
    <div class="widgets">
        <div class="widgets_title"><br><br>
            <!-- <span class="material-icons widgets__searchIcon"> search </span> -->
            Announcements
        </div>

        <div class="widgets__widgetContainer">
            <img src="./images/fitness.jpg" alt="" srcset="" class="widgets_images">
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="widgets__widgetContainer">
            <img src="./images/sparda-basketball.jpg" alt="" srcset="" class="widgets_images">
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="widgets__widgetContainer">
            <img src="./images/vihiti-club.jpg" alt="" srcset="" class="widgets_images">
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
    <!-- widgets ends -->

    <!-- javascript section -->
    <script>
        let upvote_btn = document.querySelector('.upvote');
        let downvote_btn = document.querySelector('.downvote');
        let input1 = document.querySelector('.up');
        let input2 = document.querySelector('.down');

        upvote_btn.addEventListener('click', () => {
            input1.value = parseInt(input1.value) + 1;
        })
        downvote_btn.addEventListener('click', () => {
            input2.value = parseInt(input2.value) + 1;
        })
    </script>
</body>



</html>