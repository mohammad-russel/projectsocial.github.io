<?php
$con = mysqli_connect("localhost", "root", "", "social");
$likecount = $_POST['likecount'];
$id = $_POST['id'];
$sql = " UPDATE post SET plike = $likecount WHERE id = $id ";
$result = mysqli_query($con, $sql);

$dislikecount = $_POST['dislikecount'];
$sql = " UPDATE post SET pdislike = $dislikecount WHERE id = $id ";
$result = mysqli_query($con, $sql);
