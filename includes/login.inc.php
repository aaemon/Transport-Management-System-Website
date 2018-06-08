<?php 

session_start();

include 'dbh.inc.php';
if(isset($_POST['submit'])) {
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['password']);    

    if(empty($uid) || empty($pwd)) {
        $_SESSION['error_message'] = "Username or Password Empty";
        header("Location: ../login.php?login=empty");
        
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE user_uid = '$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck < 1) {
            $_SESSION['error_message'] = "Username Invalid!";
            header("Location: ../login.php?username_invalid");
            exit();
        }
        else {
            if($row = mysqli_fetch_assoc($result)) {

                //checking the password with the hashed password 
                $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
                if($hashedPwdCheck == false) {
                    $_SESSION['error_message'] = "Username and Password do not match";
                    header("Location: ../login.php?username_or_password_error");
                    exit();
                }
                elseif ($hashedPwdCheck == true) {
                    //login success
                    
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_fname'] = $row['user_fname'];
                    $_SESSION['u_lname'] = $row['user_lname'];
                    $_SESSION['u_department'] = $row['user_department'];
                    $_SESSION['u_rank'] = $row['user_rank'];
                    $_SESSION['u_email'] = $row['user_email'];
                    $_SESSION['u_phone'] = $row['user_phone'];
                    $_SESSION['u_uid'] = $row['user_uid'];
                    $_SESSION['u_type'] = $row['user_type'];
                    $_SESSION['u_active'] = $row['user_active'];


                    if ($_SESSION['u_type'] == 1) {
                        //$_SESSION['message'] = "Welcome Admin";                       
                        header("Location: ../admin/admin_home.php?admin_login=success");
                        exit();
                        
                    }
                    else if ($_SESSION['u_type'] == 2) {
                        //$_SESSION['message'] = 'Welcome Sub-Admin'; 
                        header("Location: ../sub_admin/sub_admin_home.php?sub_admin_login=success");
                        exit();
                    }
                    else if ($_SESSION['u_type'] == 3) {
                        //$_SESSION['message'] = 'Welcome' .' ' .$_SESSION['u_fname']; 
                        header("Location: ../user/user_home.php?user_login=success");
                        exit();
                    }
                    else if ($_SESSION['u_type'] == 0) {
                        $_SESSION['error_message'] = "Registration Pending for Approval";
                        header("Location: ../login.php?user_login=registration_pending");
                        exit();
                    }
                    else {
                        $_SESSION['error_message'] = "Unknown Error";
                        header("Location: ../login.php?unkonwn_error");
                        exit();
                    }
                }
            }
        }
    }
}
else {
    $_SESSION['error_message'] = "Login First";
    header("Location: ../login.php?login=error");
    exit();
}