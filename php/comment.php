<?php
$con = mysqli_connect("localhost", "root", "", "social");
$time = $_POST['ctime'];
$comment = $_POST['comment'];
$autherid = $_POST['comid'];
$postid = $_POST['postid'];
$sql = "INSERT INTO comment(ctime,ctext,cautherid,postid) VALUES ('{$time}','{$comment}',{$autherid},{$postid} )";
$result = mysqli_query($con, $sql) or die("bal");
header("location:../homepage.php");
