<?php

require_once 'dbh.inc.php';

if($_POST) {
    $notice = mysqli_real_escape_string($conn, $_POST['notice']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);

    $sql = "INSERT INTO notice (notice, status) VALUES ('$notice', '$status');";
    mysqli_query($conn, $sql);
    header("Location: ../admin_notice_board.php?action=success");
    exit();
}