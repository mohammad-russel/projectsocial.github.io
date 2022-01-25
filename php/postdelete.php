<?php
include "config.php";
$pid = $_GET['postid'];
$sql = "DELETE FROM post WHERE id = $pid ";
$result = mysqli_query($con, $sql);
header("location:../myprofile.php");
