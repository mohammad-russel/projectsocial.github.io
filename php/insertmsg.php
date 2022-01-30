<?php
$con = mysqli_connect("localhost", "root", "", "social");

$time = mysqli_real_escape_string($con, $_POST['time']);
$incoming = mysqli_real_escape_string($con, $_POST['incoming']);
$outgoing = mysqli_real_escape_string($con, $_POST['outgoing']);
$message = mysqli_real_escape_string($con, $_POST['message']);
$sql = "INSERT INTO msg(mtime,incoming,outgoing,mtext) VALUES ('{$time}',{$incoming},{$outgoing},'{$message}') ";
$result = mysqli_query($con, $sql);

if ($result) {
    echo 1;
} else {
    echo 0;
}
