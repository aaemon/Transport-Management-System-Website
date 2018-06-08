<?php include("partial/admin_header.php") ?>

<?php
    include_once 'includes/dbh.inc.php';
    $sql = "SELECT * FROM users WHERE user_type = 0 ORDER BY user_id DESC LIMIT 5;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
?>

    
    <?php
        if ($resultCheck > 0) {
    ?>
            <div class="mytable1">
                <br />
            <h2>Pending Requests</h2>
            <table>
                <thead>
                    <th>Name</th>
                    <th>UserID</th>
                    <th>Department</th>
                    <th>Rank</th>
                    <th>Email</th>
                    <th>Phone No.</th>
                    <th>Active Status</th>
                    <th>Action</th>
                </thead>
    <?php   while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>";
            
                echo "<td>".$row['user_fname'] ." ".$row['user_lname']."</td>";
                echo "<td>".$row['user_uid'] ."</td>";
                echo "<td>".$row['user_department'] ."</td>";
                echo "<td>".$row['user_rank'] ."</td>";
                echo "<td>".$row['user_email'] ."</td>";
                echo "<td>".$row['user_phone'] ."</td>";
                //echo "<td>".$row['user_type'] ."</td>";
                /*echo "<form>";
                echo "<td> <input type='text' name='active' value=" . $row['user_type'] . " /> </td>";
                echo "</form>";
                echo "</tr>";*/
                ?>
                <form action='includes/change_type.inc.php' method='post'>
                <td> <select name='user_type' required>
                      <option value=0>Pending</option>
                      <option value=3>User</option>
                      <option value=2>Sub Admin</option>
                      <option value=4>Delete</option>
                    </select> </td>
                    <input type="hidden" name='user_fname' value="<?php echo $row['user_fname']; ?>">
                    <input type="hidden" name='user_lname' value="<?php echo $row['user_lname']; ?>">
                    <input type="hidden" name='user_uid' value="<?php echo $row['user_uid']; ?>">
                    <input type="hidden" name='user_email' value="<?php echo $row['user_email']; ?>">
                    
                <td>
                <button type='submit' name='submit'>Change</button>
                </td>
                </form>
                </tr>
            <?php
            }    
        }
        else {
            echo"<div class='select'>
            <a href='#'>NO PENDING REQUESTS</a>";
        }
        
        
    ?>
</table>
</div>

<?php
/*
$type = mysqli_real_escape_string($conn, $_POST['type']);
$sql = "UPDATE users SET user_type = '$type' WHERE user_uid = $row['user_uid'];"
mysqli_query($conn, $sql);


header("Location: admin_users.php?user_add=success");
echo "submit success";
?>*/
