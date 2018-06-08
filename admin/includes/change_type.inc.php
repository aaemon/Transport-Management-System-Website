<?php

require_once 'dbh.inc.php';

if($_POST) {
    $user_fname = $_POST['user_fname'];
    $user_lname = $_POST['user_lname'];
    $user_uid = $_POST['user_uid'];
    $user_type = $_POST['user_type'];
    $user_email = $_POST['user_email'];
    

    $sql = "UPDATE users SET user_type = '$user_type' WHERE user_uid = '$user_uid';";
    mysqli_query($conn, $sql);
    
    if($user_type == 2 || $user_type == 3) {
    
    $to = $user_email;
    $subject = 'Registration Successful';
    $message_body = 'Hello,' .$user_fname .' '.$user_lname .',
    
Congratulations, your request has been approved. You are now a member of CUET transport section.

Thank you';
       
    $header = 'From: transport.cuetwebprojects.com'; 
    mail($to, $subject, $message_body, $header);
    header("Location: ../admin_users.php?user_registration=success");
    exit(); 
}
    else if($user_type == 4) {
        $sql = "DELETE FROM users WHERE user_uid = '$user_uid';";
        mysqli_query($conn, $sql);
        header("Location: ../admin_users.php?user=deleted");
        exit();
    }
    else if($user_type == 0) {
        header("Location: ../admin_users.php?user=pending");
        exit();
    }
    
}
else die;

