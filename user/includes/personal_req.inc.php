<?php 
    session_start();
    if (isset($_POST['submit'])) {
        include_once 'dbh.inc.php';
        
        $datee = mysqli_real_escape_string($conn, $_POST['date']);
        $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
        $user_uid = mysqli_real_escape_string($conn, $_POST['user_uid']);
        $user_dep = mysqli_real_escape_string($conn, $_POST['user_dep']);
        $user_rank = mysqli_real_escape_string($conn, $_POST['user_rank']);
        $user_phone = mysqli_real_escape_string($conn, $_POST['user_phone']);
        $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
        $reason = mysqli_real_escape_string($conn, $_POST['reason']);
        $jtype = mysqli_real_escape_string($conn, $_POST['jtype']);
        $vtype = mysqli_real_escape_string($conn, $_POST['vtype']);
        $jplace = mysqli_real_escape_string($conn, $_POST['jplace']);
        $eta = mysqli_real_escape_string($conn, $_POST['eta']);
        $rtime = mysqli_real_escape_string($conn, $_POST['rtime']);
        $splace = mysqli_real_escape_string($conn, $_POST['splace']);
        $jdate = mysqli_real_escape_string($conn, $_POST['jdate']);
        $stime = mysqli_real_escape_string($conn, $_POST['stime']);

        $sql = "INSERT INTO personal_req (datee, user_name, user_uid, user_dep, user_rank, user_phone, user_email, reason, jtype, vtype, jplace, eta, rtime, splace, jdate, stime) VALUES ('$datee', '$user_name', '$user_uid','$user_dep', '$user_rank', '$user_phone', '$user_email', '$reason', '$jtype', '$vtype', '$jplace', '$eta', '$rtime', '$splace', '$jdate', '$stime');";
        mysqli_query($conn, $sql);
        
        $_SESSION['message'] = "Form Submitted Successfully";
        header("Location: ../user_application_forms.php?user_login=success");
        
        exit();
        
    }