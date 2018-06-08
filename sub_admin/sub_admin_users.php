<?php include("partial/sub_admin_header.php") ?>


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
                echo "<td>".$row['user_phone'] ."</td>";
                echo "<td>".'User' ."</td>";
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
                echo "<td>".$row['user_phone'] ."</td>";
                echo "<td>".'Sub Admin' ."</td>";
            echo "</tr>";
            }    
        }
    ?>
</table>
</div>

<?php include("partial/sub_admin_footer.php") ?>
