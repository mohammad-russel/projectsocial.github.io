<?php
session_start();
$useremail = $_SESSION['uemail'];
if (!isset($useremail)) {
    header("location:index.php");
}
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
    <?php include "css/profile.php";  ?>


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
                <div class="menu"><a href="homepage.php"><i>
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="home" class="svg-inline--fa fa-home fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor" d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"></path>
                            </svg>
                        </i></a></div>
            </div>
        </header>
        <!-- --------------------content--------------------- -->
        <main>
            <!-- ---------------------user info section------------------------>
            <?php
            include "php/config.php";
            $sql = "SELECT * FROM user WHERE mail='{$useremail}'";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result)) {
                $row = mysqli_fetch_assoc($result);

            ?>
                <div class="userfullinfo">
                    <div class="usercmb">
                        <div class="coverpic">
                            <img onclick="coverpic()" src="usercover/<?php echo $row['procover']; ?>" alt="">
                        </div>
                        <div class="userpic">
                            <img onclick="profilepic()" src="userimage/<?php echo $row['propic']; ?>" alt="">
                        </div>
                        <?php
                        if (isset($_POST['submit'])) {
                            include "php/config.php";
                            $imgnam = $_FILES['img']['name'];
                            $imgtmp = $_FILES['img']['tmp_name'];
                            move_uploaded_file($imgtmp, "userimage/" . $imgnam);
                            $sql1 = "UPDATE user SET propic = '{$imgnam}'  WHERE mail ='{$useremail}'  ";
                            $result1 = mysqli_query($con, $sql1);
                        }
                        ?>
                        <div class="userpicedit">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                                <img style="width: 200px;" src="userimage/<?php echo $row['propic']; ?>" alt="" id="see">
                                <br>
                                <label for="img">Upload Image</label>
                                <br>
                                <input type="file" name="img" id="img" accept="image/*" onchange="show(event);">
                                <input type="submit" name="submit" value="SAVE">
                            </form>

                        </div>
                        <?php
                        if (isset($_POST['csubmit'])) {
                            include "php/config.php";
                            $cimgnam = $_FILES['cimg']['name'];
                            $cimgtmp = $_FILES['cimg']['tmp_name'];
                            move_uploaded_file($cimgtmp, "usercover/" . $cimgnam);
                            $sql2 = "UPDATE user SET procover = '{$cimgnam}'  WHERE mail ='{$useremail}'  ";
                            $result2 = mysqli_query($con, $sql2);
                        }
                        ?>
                        <div class="coverpicedit">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                                <img style="width: 200px;" src="usercover/<?php echo $row['procover']; ?>" alt="" id="csee">
                                <br>
                                <label for="cimg">Upload Image</label>
                                <br>
                                <input type="file" name="cimg" id="cimg" accept="image/*" onchange="cshow(event);">
                                <input type="submit" name="csubmit" value="SAVE">
                            </form>

                        </div>
                        <div class="namebio">
                            <h2><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></h2>
                            <br>
                            <p><?php echo $row['bio']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="postpopup" id="pp">
                        <div class="cphead">
                            <img src="userimage/<?php echo $row['propic'] ?>" alt="">
                            <h3><?php echo $row['fname'] ?> <?php echo $row['lname'] ?></h3>
                        </div>


                        <?php date_default_timezone_set("Asia/Dhaka"); ?>
                        <form action="php/postinsert.php" method="post" enctype="multipart/form-data">
                            <textarea name="ptext" id="ptext" cols="50" rows="5" placeholder="Write something..."></textarea>
                            <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" style="display: none;"></p>
                            <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
                            <p><img id="output" width="100" /></p>
                            <input type="hidden" name="userauther" id="userauther" value="<?php echo $row['id']; ?>">
                            <?php time() ?>
                            <input type="hidden" name="ptime" id="time" value=" <?php echo date("h:i / d-m-y"); ?>">
                            <input style="width: 150px; height: 30px; border-radius: 8px;  border: none; font-weight: 600; letter-spacing: 4px; font-size: 20px;" type="submit" id="post" name="post" value="POST">
                        </form>
                    </div>
                    <div class="postedit">
                        <div class="btn post">
                            <a href="#">
                                <h3 onclick="post()">CREATE POST</h3>
                            </a>
                        </div>

                        <div class="btn story">
                            <a href="#">
                                <h3>CREATE STORY</h3>
                            </a>
                        </div>
                        <div class="storypopup"></div>
                    </div>

                    <div class="userinfos">
                        <div class="title">
                            <h2>INFO</h2>
                        </div>
                        <!-- ---------------------------------info----------------------- -->
                        <div class="inforoom">
                            <div class="infobox">
                                <i>
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" class="svg-inline--fa fa-envelope fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path>
                                    </svg> <span><?php echo $row['mail']; ?></span>
                                </i>
                            </div>
                            <div class="infobox">
                                <i>
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-square-alt" class="svg-inline--fa fa-phone-square-alt fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h352a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48zm-16.39 307.37l-15 65A15 15 0 0 1 354 416C194 416 64 286.29 64 126a15.7 15.7 0 0 1 11.63-14.61l65-15A18.23 18.23 0 0 1 144 96a16.27 16.27 0 0 1 13.79 9.09l30 70A17.9 17.9 0 0 1 189 181a17 17 0 0 1-5.5 11.61l-37.89 31a231.91 231.91 0 0 0 110.78 110.78l31-37.89A17 17 0 0 1 299 291a17.85 17.85 0 0 1 5.91 1.21l70 30A16.25 16.25 0 0 1 384 336a17.41 17.41 0 0 1-.39 3.37z"></path>
                                    </svg> <span><?php echo $row['num']; ?></span>
                                </i>
                            </div>
                            <div class="infobox">
                                <i>
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="briefcase" class="svg-inline--fa fa-briefcase fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M320 336c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-48H0v144c0 25.6 22.4 48 48 48h416c25.6 0 48-22.4 48-48V288H320v48zm144-208h-80V80c0-25.6-22.4-48-48-48H176c-25.6 0-48 22.4-48 48v48H48c-25.6 0-48 22.4-48 48v80h512v-80c0-25.6-22.4-48-48-48zm-144 0H192V96h128v32z"></path>
                                    </svg> <span><?php echo $row['job']; ?></span>
                                </i>
                            </div>
                            <div class="infobox">
                                <i>
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="graduation-cap" class="svg-inline--fa fa-graduation-cap fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path fill="currentColor" d="M622.34 153.2L343.4 67.5c-15.2-4.67-31.6-4.67-46.79 0L17.66 153.2c-23.54 7.23-23.54 38.36 0 45.59l48.63 14.94c-10.67 13.19-17.23 29.28-17.88 46.9C38.78 266.15 32 276.11 32 288c0 10.78 5.68 19.85 13.86 25.65L20.33 428.53C18.11 438.52 25.71 448 35.94 448h56.11c10.24 0 17.84-9.48 15.62-19.47L82.14 313.65C90.32 307.85 96 298.78 96 288c0-11.57-6.47-21.25-15.66-26.87.76-15.02 8.44-28.3 20.69-36.72L296.6 284.5c9.06 2.78 26.44 6.25 46.79 0l278.95-85.7c23.55-7.24 23.55-38.36 0-45.6zM352.79 315.09c-28.53 8.76-52.84 3.92-65.59 0l-145.02-44.55L128 384c0 35.35 85.96 64 192 64s192-28.65 192-64l-14.18-113.47-145.03 44.56z"></path>
                                    </svg> <span><?php echo $row['edu']; ?></span>
                                </i>
                            </div>
                            <div class="infobox">
                                <i>
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="house-user" class="svg-inline--fa fa-house-user fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="currentColor" d="M570.69,236.27,512,184.44V48a16,16,0,0,0-16-16H432a16,16,0,0,0-16,16V99.67L314.78,10.3C308.5,4.61,296.53,0,288,0s-20.46,4.61-26.74,10.3l-256,226A18.27,18.27,0,0,0,0,248.2a18.64,18.64,0,0,0,4.09,10.71L25.5,282.7a21.14,21.14,0,0,0,12,5.3,21.67,21.67,0,0,0,10.69-4.11l15.9-14V480a32,32,0,0,0,32,32H480a32,32,0,0,0,32-32V269.88l15.91,14A21.94,21.94,0,0,0,538.63,288a20.89,20.89,0,0,0,11.87-5.31l21.41-23.81A21.64,21.64,0,0,0,576,248.19,21,21,0,0,0,570.69,236.27ZM288,176a64,64,0,1,1-64,64A64,64,0,0,1,288,176ZM400,448H176a16,16,0,0,1-16-16,96,96,0,0,1,96-96h64a96,96,0,0,1,96,96A16,16,0,0,1,400,448Z"></path>
                                    </svg> <span><?php echo $row['city']; ?>,<?php echo $row['locala']; ?></span>
                                </i>
                            </div>
                            <div class="infobox">
                                <i>
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path>
                                    </svg> <span><?php echo $row['relation']; ?></span>
                                </i>
                            </div>

                        </div>
                    </div>
                </div>
                <?php
                if (isset($_POST['update'])) {
                    include "php/config.php";
                    $fname = mysqli_real_escape_string($con, $_POST['fname']);
                    $lname = mysqli_real_escape_string($con, $_POST['lname']);
                    $bio =  mysqli_real_escape_string($con, $_POST['bio']);
                    $job = mysqli_real_escape_string($con, $_POST['job']);
                    $study = mysqli_real_escape_string($con, $_POST['study']);
                    $city = mysqli_real_escape_string($con, $_POST['city']);
                    $number = mysqli_real_escape_string($con, $_POST['number']);
                    $localarea = mysqli_real_escape_string($con, $_POST['localarea']);
                    $relation = mysqli_real_escape_string($con, $_POST['relation']);
                    $gender = mysqli_real_escape_string($con, $_POST['gender']);
                    $sql0 = "UPDATE user SET fname = '{$fname}', lname = '{$lname}', bio = '{$bio}' , job='{$job}' , edu = '{$study}' , city = '{$city}' , num = '{$number}' , locala = '{$localarea}' , relation = '{$relation}' , gender = '{$gender}'  WHERE mail ='{$useremail}'";
                    $result0 = mysqli_query($con, $sql0);
                }
                ?>
                <div class="infoedit" id="ie">
                    <h2>EDIT YOUR INFORMATION</h2>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <input type="text" name="fname" id="fname" placeholder="First name" value="<?php echo $row['fname']; ?>">
                        <input type="text" name="lname" id="lname" placeholder="Last name" value="<?php echo $row['lname']; ?>"><br>
                        <input type="text" name="bio" id="bio" placeholder="bio" value="<?php echo $row['bio']; ?>"><br>
                        <input type="number" name="number" id="number" placeholder="Number" value="<?php echo $row['num']; ?>"><br>
                        <input type="text" name="job" id="job" placeholder="Your Job title (Web designer)" value="<?php echo $row['job']; ?>"><br>
                        <select name="study" id="study">
                            <option value="<?php echo $row['edu']; ?>">study <?php echo $row['edu']; ?> </option>
                            <option value="school">School</option>
                            <option value="collage">Collage</option>
                            <option value="university">University</option>
                        </select><br>
                        <input type="text" name="city" id="city" placeholder="City" value="<?php echo $row['city']; ?>"><br>
                        <input type="text" name="localarea" id="localarea" placeholder="Local-Area name" value="<?php echo $row['locala']; ?>"><br>
                        <select name="relation" id="relation">
                            <option value="<?php echo $row['relation']; ?>">reletion <?php echo $row['relation']; ?></option>
                            <option value="marriage">Marriage</option>
                            <option value="single">Single</option>
                        </select><br>
                        <select name="gender" id="gender">
                            <option value=" <?php echo $row['gender']; ?>">gender <?php echo $row['gender']; ?></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select><br>
                        <input type="submit" id="update" name="update" value="Update">
                    </form>
                </div>
                <div class="editinfo">
                    <a href="#">
                        <h2 onclick="info()">EDIT INFO</h2>
                    </a>
                </div>
                <?php $userid = $row['id']; ?>
                <!-- --------------------Post section---------------------- -->
                <?php
                include "php/config.php";
                $sql5 = "SELECT * FROM post WHERE pautherid = {$userid}  ORDER BY id DESC ";
                $result5 = mysqli_query($con, $sql5);
                if (mysqli_num_rows($result5)) {

                ?>
                    <div class="postroom">
                        <?php while ($row5 = mysqli_fetch_assoc($result5)) { ?>
                            <div class="postbox">

                                <div class="ed editdelete<?php echo $row5['id']; ?>">
                                    <a class="delete" href="php/postdelete.php?postid=<?php echo $row5['id']; ?>">
                                        <button>delete</button>
                                    </a><br><br>
                                    <a class="edit" href="#">
                                        <button>edit</button>
                                    </a><br><br>
                                    <button onclick="cclick(<?php echo $row5['id']; ?>)" class="cancel">cancel</button>
                                </div>
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

                                        <div onclick="moreclick(<?php echo $row5['id']; ?>)" class="more">

                                            <i>
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" class="svg-inline--fa fa-ellipsis-h fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path>
                                                </svg>
                                            </i>
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

                                ?>
                                <?php
                                include "php/config.php";
                                $csql = "SELECT * FROM comment";
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
                                        <div class="commentinput">
                                            <div class="userimg">
                                                <img src="userimage/<?php echo $row['propic'] ?>" alt="">
                                            </div>
                                            <input type="hidden" name="ctime" id="ctime" value=" <?php echo date("h:i / d-m-y"); ?>">
                                            <textarea type="text" name="comment" id="commentinput" placeholder="Write comment..."></textarea>
                                            <input type="hidden" name="comid" id="comid" value="<?php echo $row['id'] ?>">
                                            <a href="#">
                                                <i>
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paper-plane" class="svg-inline--fa fa-paper-plane fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="currentColor" d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z"></path>
                                                    </svg>
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
                <div class="space"></div>
        </main>
    </div>

</body>
<script>
    function coverpic() {
        if (document.querySelector(".coverpicedit").style.display === "block") {
            document.querySelector(".coverpicedit").style.display = "none";
        } else {
            document.querySelector(".coverpicedit").style.display = "block";
        }
    }

    function profilepic() {
        if (document.querySelector(".userpicedit").style.display === "block") {
            document.querySelector(".userpicedit").style.display = "none";
        } else {
            document.querySelector(".userpicedit").style.display = "block";
        }
    }

    function post() {
        if (document.querySelector(".postpopup").style.display === "block") {
            document.querySelector(".postpopup").style.display = "none";
        } else {
            document.querySelector(".postpopup").style.display = "block";
        }
    }

    function info() {
        if (document.querySelector(".infoedit").style.display === "block") {
            document.querySelector(".infoedit").style.display = "none";
        } else {
            document.querySelector(".infoedit").style.display = "block";
        }
    }

    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };

    function show(event) {
        if (event.target.files.length > 0) {
            var wsrc = URL.createObjectURL(event.target.files[0]);
            var see = document.getElementById("see");
            see.src = wsrc;

        }
    }

    function cshow(event) {
        if (event.target.files.length > 0) {
            var csrc = URL.createObjectURL(event.target.files[0]);
            var csee = document.getElementById("csee");
            csee.src = csrc;

        }
    }

    function moreclick(id) {
        document.querySelector(".editdelete" + id).style.display = " block";
    }

    function cclick(id) {
        document.querySelector(".editdelete" + id).style.display = " none";
    }

    function comment(id) {
        if (document.querySelector(".commentroom" + id).style.display === "block") {
            document.querySelector(".commentroom" + id).style.display = "none"
        } else {
            document.querySelector(".commentroom" + id).style.display = "block"
        }
    }

    function like(pid) {

        var likecount = $(".likecount" + pid).html()
        likecount++;
        $(".likecount" + pid).html(likecount);
        $.ajax({
            url: "php/like.php",
            type: 'post',
            data: {
                likecount: likecount,
                id: pid
            },
            success: function(data) {


            }
        })

    }

    function dislike(pid) {

        var dislikecount = $(".dislikecount" + pid).html()
        dislikecount++;
        $(".dislikecount" + pid).html(dislikecount);
        $.ajax({
            url: "php/like.php",
            type: 'post',
            data: {
                dislikecount: dislikecount,
                id: pid
            },
            success: function(data) {


            }
        })

    }
</script>
<?php

            } ?>

</html>