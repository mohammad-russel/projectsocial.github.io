<?php
if (isset($_POST['post'])) {
    include "config.php";
    $auther = $_POST['userauther'];
    $time = $_POST['ptime'];
    $text =  mysqli_real_escape_string($con, $_POST['ptext']);
    $pimgname = $_FILES['image']['name'];
    $pimgtmpnam = $_FILES['image']['tmp_name'];
    move_uploaded_file($pimgtmpnam, "../postimage/" . $pimgname);
    $sql4 = "INSERT INTO post(pautherid,ptime,ptext,pimage) VALUES ('{$auther}','{$time}','{$text}','{$pimgname}') ";
    $result4 = mysqli_query($con, $sql4);
    header("location:../myprofile.php");
}
