<?php
session_start();
$useremail = $_SESSION['uemail'];
if (!isset($useremail)) {
    header("location:index.php");
}
?>
<?php
include "php/config.php";
$mid = $_GET['mid'];
$sql = "SELECT * FROM user WHERE id = $mid ";
$result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Message</title>
    <?php include "css/homepage.php";  ?>
    <?php include "css/message.php";  ?>

</head>

<body onload="myload()">
    <div class="container">
        <div class="chatroom">
            <div class="chathead">
                <a href="messageroom.php"> <i>
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path>
                        </svg>
                    </i>
                </a>
                <?php
                if (mysqli_num_rows($result)) {
                    $row = mysqli_fetch_assoc($result);
                ?>
                    <div class="messagerinfo">
                        <img src="userimage/<?php echo $row['propic'] ?>" alt="">
                        <div class="ua">
                            <h2><?php echo $row['fname'] ?> <?php echo $row['lname'] ?></h2>
                            <p>active now</p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="chatcontent">
            </div>
            <?php date_default_timezone_set("Asia/Dhaka"); ?>
            <?php
            include "php/config.php";
            $sql1 = "SELECT * FROM user WHERE mail = '{$useremail}' ";
            $result1 = mysqli_query($con, $sql1);
            if (mysqli_num_rows($result1)) {
                $row1 = mysqli_fetch_assoc($result1);
            ?>
                <div class="chatfooter">
                    <label class="imglabel" for="img">
                        <i>
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="image" class="svg-inline--fa fa-image fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M464 448H48c-26.51 0-48-21.49-48-48V112c0-26.51 21.49-48 48-48h416c26.51 0 48 21.49 48 48v288c0 26.51-21.49 48-48 48zM112 120c-30.928 0-56 25.072-56 56s25.072 56 56 56 56-25.072 56-56-25.072-56-56-56zM64 384h384V272l-87.515-87.515c-4.686-4.686-12.284-4.686-16.971 0L208 320l-55.515-55.515c-4.686-4.686-12.284-4.686-16.971 0L64 336v48z"></path>
                            </svg>
                        </i>
                    </label>
                    <input type="file" name="img" id="img">
                    <textarea name="msg" id="msg" placeholder="write message..."></textarea>
                    <label class="inplabel" for="send">
                        <i>
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paper-plane" class="svg-inline--fa fa-paper-plane fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z"></path>
                            </svg>
                        </i>
                    </label>
                    <input type="hidden" id="time" name="time" value=" <?php echo date("h:i / d-m-y"); ?> ">
                    <input type="hidden" id="incoming" class="incoming" name="incoming" value="<?php echo $row['id']; ?>">
                    <input type="hidden" id="outgoing" class="outgoing" name="outgoing" value="<?php echo $row1['id']; ?>">
                    <input onclick="myfunc()" type="submit" id="send" value="Send">
                </div>
            <?php } ?>
        </div>
    </div>
</body>
<?php
include "js/msg.php";
?>

</html>