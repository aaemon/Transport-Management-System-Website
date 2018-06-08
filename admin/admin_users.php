<?php include("partial/admin_header.php") ?>
<?php
    include_once 'includes/dbh.inc.php';
    $sql = "SELECT * FROM users WHERE user_type = 3;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
?>
<div class="mytable1">
<br />
<h2>Registered Users</h2>
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
    <?php
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>";
                echo "<td>".$row['user_fname'] ." ".$row['user_lname']."</td>";
                echo "<td>".$row['user_uid'] ."</td>";
                echo "<td>".$row['user_department'] ."</td>";
                echo "<td>".$row['user_rank'] ."</td>";
                echo "<td>".$row['user_email'] ."</td>";
                echo "<td>".$row['user_phone'] ."</td>";?>
                <form action='includes/change_type.inc.php' method='post'>
                <td> <select name='user_type' required>
                    <option value=3>User</option>
                    
                    <option value=0>Pending</option>
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
            <?php
            echo "</tr>";
            }    
        }
    ?>
</table>
</div>
<?php
    include_once 'includes/dbh.inc.php';
    $sql = "SELECT * FROM users WHERE user_type = 2;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
?>
<div class="mytable1">
<br />
<br />
<br />
<h2>Sub-Admins</h2>
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
    <?php
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>";
                echo "<td>".$row['user_fname'] ." ".$row['user_lname']."</td>";
                echo "<td>".$row['user_uid'] ."</td>";
                echo "<td>".$row['user_department'] ."</td>";
                echo "<td>".$row['user_rank'] ."</td>";
                echo "<td>".$row['user_email'] ."</td>";
                echo "<td>".$row['user_phone'] ."</td>";?>
                <form action='includes/change_type.inc.php' method='post'>
                <td> <select name='user_type' required>

                    <option value=2>Sub Admin</option>
                    <option value=0>Pending</option>
                    <option value=3>User</option>
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

            echo "</tr>";
            }    
        }
    ?>
</table>
</div>

<?php include_once 'includes/dbh.inc.php';
    $sql = "SELECT * FROM users WHERE user_type = 0;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
?>

<div class="mytable1">
<br />
<br />
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
    <?php
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>";
                echo "<td>".$row['user_fname'] ." ".$row['user_lname']."</td>";
                echo "<td>".$row['user_uid'] ."</td>";
                echo "<td>".$row['user_department'] ."</td>";
                echo "<td>".$row['user_rank'] ."</td>";
                echo "<td>".$row['user_email'] ."</td>";
                echo "<td>".$row['user_phone'] ."</td>";?>
                <form action='includes/change_type.inc.php' method='post'>
                <td> <select name='user_type' required>
                    <option value=0>Pending</option>
                    <option value=3>User</option>
                    <option value=2>Sub Admin</option>
                    <option value=4>Delete</option>
                    
                    </select> </td>
                    <input type="hidden" name='user_fname' value="<?php echo $row['user_fname']; ?>">
                    <input type="hidden" name='user_uid' value="<?php echo $row['user_uid']; ?>">
                    <input type="hidden" name='user_email' value="<?php echo $row['user_email']; ?>">
                    
                <td>
                <button type='submit' name='submit'>Change</button>
                </td>
                </form>
                </tr>
            <?php

            echo "</tr>";
            }    
        }
    ?>
</table>
</div>
<?php include("partial/admin_footer.php") ?>
