<?php include("partial/user_header.php") ?>
    <div class="notice_board">
        <h1>User Profile</h1>
    </div>
    <?php
    //require_once 'includes/dbh.inc.php';
    //$sql = "SELECT * FROM users WHERE user_uid = $_SESSION['u_uid'];";
    ?>
    <div class="mytable2"> 
        <table>
            <tr>
                <th>Name:</th>
                <td><?php echo $_SESSION['u_fname'] .' '.$_SESSION['u_lname'] ?></td>
            </tr>
            <tr>
                <th>User ID:</th>
                <td><?php echo $_SESSION['u_uid'] ?></td>
            </tr>
            <tr>
                <th>Department:</th>
                <td><?php echo $_SESSION['u_department'] ?></td>
            </tr>
            <tr>
                <th>Rank:</th>
                <td><?php echo $_SESSION['u_rank'] ?></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><?php echo $_SESSION['u_email'] ?></td>
            </tr>
            <tr>
                <th>Phone:</th>
                <td><?php echo $_SESSION['u_phone'] ?></td>
            </tr>
            <tr>
                <th></th>
                <td>
                <form>
                    <button type="submit" name="update">Update Profile</button>
                </form>
                </td>
            </tr>
            
        </table>

    </div>

<?php include("partial/user_footer.php") ?>
