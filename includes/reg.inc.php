<?php 
    session_start();
    if (isset($_POST['submit'])) {
        include_once 'dbh.inc.php';

        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $department = mysqli_real_escape_string($conn, $_POST['department']);
        $rank = mysqli_real_escape_string($conn, $_POST['rank']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $uid = mysqli_real_escape_string($conn, $_POST['uid']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $repassword = mysqli_real_escape_string($conn, $_POST['repassword']);


        $sql = "SELECT * FROM users WHERE user_uid = '$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0) {
            $_SESSION['error_message'] = "User Already Exist";
            header("Location: ../registration.php?registration=user_already_exist");
            exit();
            }
        else {
            if($password == $repassword) {
            $hashPwd = password_hash($password, PASSWORD_DEFAULT);

            //insert the user in the database
            $sql = "INSERT INTO users (user_fname, user_lname, user_department, user_rank, user_email, user_phone, user_uid, user_pwd) VALUES ('$fname', '$lname', '$department', '$rank', '$email', '$phone', '$uid', '$hashPwd');";
            mysqli_query($conn, $sql);
            $_SESSION['message'] = "Your Information has been submitted successfully. Approval Pending";

            header("Location: ../login.php?registration=submit_success");
            exit();
            }
            else {
                $_SESSION['error_message'] = "Passwords do not match!";
                header("Location: ../registration.php?registration=password_error");
                exit();
            }
        }

}
    else {
        header("Location: ../registration.php");
        exit();
    }
