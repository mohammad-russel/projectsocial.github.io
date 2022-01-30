<?php

$incoming = $_POST['incoming'];
$outgoing = $_POST['outgoing'];

$con = mysqli_connect("localhost", "root", "", "social");
$sql = "SELECT * FROM msg LEFT JOIN user ON user.id = msg.outgoing WHERE ( outgoing = $outgoing and incoming = $incoming) OR (outgoing = $incoming AND incoming = $outgoing )";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result)) {
    echo   $output = ' <div class="messagebox"> ';
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['outgoing'] == $outgoing) {
            echo  $output = ' <div class="mt">
            <div class="time">
                <p>' . $row['mtime'] . '</p>
            </div>
            <div class="message r">
                <p>' . $row['mtext'] . '</p>
            </div>
        </div> ';
        } else {
            echo     $output = ' <div class="mt">
            <div class="time">
                <p>' . $row['mtime'] . '</p>
            </div>
            <div class="message l">
                <p>' . $row['mtext'] . '</p>
            </div>
        </div>';
        }
    }
    echo    $output = ' </div>';
}
