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
        <title>People</title>
        <?php include "css/homepage.php";  ?>
        <?php include "css/people.php";  ?>

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
                    <div class="menu"><a href="homepage.php"><i>
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="home" class="svg-inline--fa fa-home fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor" d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"></path>
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
            <!-- ----------------------people --------------------- -->
            <?php
            include "php/config.php";
            $sql = "SELECT * FROM user WHERE NOT mail = '{$useremail}' ";
            $result = mysqli_query($con, $sql);
            ?>
            <div class="box">
                <?php
                if (mysqli_num_rows($result)) {

                ?>
                    <div class="peopleroom">
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <div class="peoplebox">
                                <img src="userimage/<?php echo $row['propic']; ?>" alt="">
                                <br>
                                <h3><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></h3>
                                <br>
                                <a href="friendprofile.php?id=<?php echo $row['id']; ?>">Visit</a>
                            </div>

                        <?php } ?>
                    </div>
            </div>

        </div>
    </body>
<?php }
            } ?>

    </html>