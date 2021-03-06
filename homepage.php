<?php
session_start();
$useremail = $_SESSION['uemail'];
if (!isset($useremail)) {
    header("location:index.php");
}
?>
<?php
include "php/config.php";
$sql = "SELECT * FROM user WHERE mail='{$useremail}'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result)) {
    $row = mysqli_fetch_assoc($result);

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Newsfeed</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <?php include "css/homepage.php";  ?>
    </head>

    <body>
        <div class="container">
            <!-- ------------------header-------------------------- -->
            <header>
                <!-- ------------------ logo section------------------ -->
                <div class="header1">
                    <div class="logo">
                        <h3><span>MY</span>SOCIAL</h3>
                    </div>
                    <div class="logo"></div>
                </div>
                <!-- -------------------menu section------------------- -->
                <div class="header2">
                    <div class="menu"> <a href="php/logout.php"><i>
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sign-out-alt" class="svg-inline--fa fa-sign-out-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z"></path>
                                </svg> </i> </a> </div>
                    <div class="menu"><a href="people.php"><i>
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="users" class="svg-inline--fa fa-users fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                    <path fill="currentColor" d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path>
                                </svg>
                            </i></a></div>
                    <div class="menu"><a href="messageroom.php"><i>
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comment-dots" class="svg-inline--fa fa-comment-dots fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M256 32C114.6 32 0 125.1 0 240c0 49.6 21.4 95 57 130.7C44.5 421.1 2.7 466 2.2 466.5c-2.2 2.3-2.8 5.7-1.5 8.7S4.8 480 8 480c66.3 0 116-31.8 140.6-51.4 32.7 12.3 69 19.4 107.4 19.4 141.4 0 256-93.1 256-208S397.4 32 256 32zM128 272c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z"></path>
                                </svg>
                            </i></a></div>
                    <div class="menu"><a href="notify.php"><i>
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bell" class="svg-inline--fa fa-bell fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z"></path>
                                </svg>
                            </i></a></div>
                    <div class="menu"><a href="myprofile.php"><i><img src="userimage/<?php echo $row['propic'] ?>" alt=""></i></a></div>
                </div>
            </header>
        <?php } ?>
        <!-- --------------------content--------------------- -->
        <main>
            <!-- ---------------------story section------------------------>
            <div class="storyroom">

                <div class="storybox">
                    <img src="userimage/user.png" alt="">
                </div>
                <div class="storybox">
                    <img src="userimage/user.png" alt="">
                </div>
                <div class="storybox">
                    <img src="userimage/user.png" alt="">
                </div>
                <div class="storybox">
                    <img src="userimage/user.png" alt="">
                </div>
            </div>
            <!-- --------------------Post section---------------------- -->
            <?php
            include "php/config.php";
            $sql5 = "SELECT * FROM post ORDER BY id DESC ";
            $result5 = mysqli_query($con, $sql5);
            if (mysqli_num_rows($result5)) {

            ?>
                <div class="postroom">
                    <?php while ($row5 = mysqli_fetch_assoc($result5)) { ?>
                        <div class="postbox">

                            <!-- -------------- post head -------------- -->
                            <?php
                            $postautherid = $row5['pautherid'];
                            include "php/config.php";
                            $sql6 = "SELECT * FROM user WHERE id='{$postautherid}'";
                            $result6 = mysqli_query($con, $sql6);
                            if (mysqli_num_rows($result6)) {
                                $row6 = mysqli_fetch_assoc($result6);

                            ?>
                                <div class="postheader">
                                    <div class="autherinfo">
                                        <img src="userimage/<?php echo $row6['propic']; ?>" alt="auther">
                                        <div class="info">
                                            <h3><?php echo $row6['fname']; ?> <?php echo $row6['lname']; ?></h3>
                                            <p><?php echo $row5['ptime']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- ----------------- post content ---------------- -->
                            <div class="postcontent">
                                <div class="text">
                                    <p><?php echo $row5['ptext']; ?></p>
                                </div>
                                <div class="image">
                                    <img src="postimage/<?php echo $row5['pimage']; ?>" alt="ww">
                                </div>
                            </div>
                            <!-- --------------- post footer ---------------- -->
                            <div class="postfooter">
                                <a href="#">
                                    <div class="react like" onmousedown="audio.play();" onclick="like(<?php echo $row5['id'] ?>)">
                                        <i>
                                            <svg class="svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="thumbs-up" class="svg-inline--fa fa-thumbs-up fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="currentColor" d="M104 224H24c-13.255 0-24 10.745-24 24v240c0 13.255 10.745 24 24 24h80c13.255 0 24-10.745 24-24V248c0-13.255-10.745-24-24-24zM64 472c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zM384 81.452c0 42.416-25.97 66.208-33.277 94.548h101.723c33.397 0 59.397 27.746 59.553 58.098.084 17.938-7.546 37.249-19.439 49.197l-.11.11c9.836 23.337 8.237 56.037-9.308 79.469 8.681 25.895-.069 57.704-16.382 74.757 4.298 17.598 2.244 32.575-6.148 44.632C440.202 511.587 389.616 512 346.839 512l-2.845-.001c-48.287-.017-87.806-17.598-119.56-31.725-15.957-7.099-36.821-15.887-52.651-16.178-6.54-.12-11.783-5.457-11.783-11.998v-213.77c0-3.2 1.282-6.271 3.558-8.521 39.614-39.144 56.648-80.587 89.117-113.111 14.804-14.832 20.188-37.236 25.393-58.902C282.515 39.293 291.817 0 312 0c24 0 72 8 72 81.452z"></path>
                                            </svg>
                                        </i>
                                        <p class="likecount<?php echo $row5['id']; ?>"><?php echo $row5['plike']; ?></p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="react comment" onclick="comment(<?php echo $row5['id'] ?>)">
                                        <i>
                                            <svg class="svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comments" class="svg-inline--fa fa-comments fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor" d="M416 192c0-88.4-93.1-160-208-160S0 103.6 0 192c0 34.3 14.1 65.9 38 92-13.4 30.2-35.5 54.2-35.8 54.5-2.2 2.3-2.8 5.7-1.5 8.7S4.8 352 8 352c36.6 0 66.9-12.3 88.7-25 32.2 15.7 70.3 25 111.3 25 114.9 0 208-71.6 208-160zm122 220c23.9-26 38-57.7 38-92 0-66.9-53.5-124.2-129.3-148.1.9 6.6 1.3 13.3 1.3 20.1 0 105.9-107.7 192-240 192-10.8 0-21.3-.8-31.7-1.9C207.8 439.6 281.8 480 368 480c41 0 79.1-9.2 111.3-25 21.8 12.7 52.1 25 88.7 25 3.2 0 6.1-1.9 7.3-4.8 1.3-2.9.7-6.3-1.5-8.7-.3-.3-22.4-24.2-35.8-54.5z"></path>
                                            </svg>
                                        </i>
                                        <p class="commentcount"><?php echo $row5['pcomment']; ?></p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="react dislike" onmousedown="disaudio.play();" onclick="dislike(<?php echo $row5['id'] ?>)">
                                        <i>
                                            <svg class="svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="thumbs-down" class="svg-inline--fa fa-thumbs-down fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="currentColor" d="M0 56v240c0 13.255 10.745 24 24 24h80c13.255 0 24-10.745 24-24V56c0-13.255-10.745-24-24-24H24C10.745 32 0 42.745 0 56zm40 200c0-13.255 10.745-24 24-24s24 10.745 24 24-10.745 24-24 24-24-10.745-24-24zm272 256c-20.183 0-29.485-39.293-33.931-57.795-5.206-21.666-10.589-44.07-25.393-58.902-32.469-32.524-49.503-73.967-89.117-113.111a11.98 11.98 0 0 1-3.558-8.521V59.901c0-6.541 5.243-11.878 11.783-11.998 15.831-.29 36.694-9.079 52.651-16.178C256.189 17.598 295.709.017 343.995 0h2.844c42.777 0 93.363.413 113.774 29.737 8.392 12.057 10.446 27.034 6.148 44.632 16.312 17.053 25.063 48.863 16.382 74.757 17.544 23.432 19.143 56.132 9.308 79.469l.11.11c11.893 11.949 19.523 31.259 19.439 49.197-.156 30.352-26.157 58.098-59.553 58.098H350.723C358.03 364.34 384 388.132 384 430.548 384 504 336 512 312 512z"></path>
                                            </svg>
                                        </i>
                                        <p class="dislikecount<?php echo $row5['id']; ?>"><?php echo $row5['pdislike']; ?></p>
                                    </div>

                                </a>
                            </div>
                            <?php
                            include "php/config.php";
                            $pid = $row5['id'];
                            $csql = "SELECT * FROM comment WHERE postid = $pid";
                            $cresult = mysqli_query($con, $csql);
                            if (mysqli_num_rows($cresult)) {
                            ?>
                                <div class="com commentroom<?php echo $row5['id'] ?>" id="cm">
                                    <?php
                                    while ($crow = mysqli_fetch_assoc($cresult)) {
                                    ?>
                                        <div class="commentbox">
                                            <?php
                                            $comid = $crow['cautherid'];
                                            include "php/config.php";
                                            $sql11 = "SELECT * FROM user WHERE id = $comid ";
                                            $result11 = mysqli_query($con, $sql11);
                                            if (mysqli_num_rows($result11)) {
                                                $row11 = mysqli_fetch_assoc($result11)
                                            ?>
                                                <div class="commentimage">
                                                    <img src="userimage/<?php echo $row11['propic'] ?>" alt="">
                                                </div>

                                                <div class="commenttext">
                                                    <div class="name">
                                                        <h3><?php echo $row11['fname'] ?> <?php echo $row11['lname'] ?></h3>
                                                    </div>
                                                <?php } ?>
                                                <div class="commentoutput">
                                                    <p><?php echo $crow['ctext'] ?></p>
                                                </div>
                                                </div>
                                        </div>
                                    <?php } ?>

                                </div>
                            <?php } ?>
                            <div class="commentinput">
                                <div class="userimg">
                                    <img src="userimage/<?php echo $row['propic'] ?>" alt="">
                                </div>
                                <div style="display: none;" class="iid"><?php echo $row5['id'] ?></div>
                                <form action="php/comment.php" method="post">
                                    <input type="hidden" name="ctime" id="ctime" value=" <?php echo date("h:i / d-m-y"); ?>">
                                    <input type="hidden" name="comid" id="comid" value="<?php echo $row['id'] ?>">
                                    <input type="hidden" name="postid" id="postid" value="<?php echo $row5['id'] ?>">
                                    <textarea type="text" name="comment" id="commentinput" placeholder="Write comment..." required></textarea>
                                    <input type="submit" name="csubmit" class="csubmit" value="SEND">
                                </form>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            <div class="space"></div>
        </main>
        </div>
    </body>
    <?php include "js/homejs.php"; ?>

    </html>