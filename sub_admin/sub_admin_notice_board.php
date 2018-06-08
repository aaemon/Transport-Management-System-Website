<?php include("partial/sub_admin_header.php") ?>

    <div class="notice_board">
        <h1>Notice Board</h1>
    </div>
    <?php
    include_once 'includes/dbh.inc.php';
    $sql = "SELECT * FROM notice WHERE status=0 OR status=1 OR status=2 ORDER BY notice_no DESC LIMIT 10;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) { 
        ?>
        <div class="notice_box">
        <p><?php echo $row['notice']?></p>
        
        </div>
        <?php
        }
    }
    else {
        ?>
        <div class="notice_box">
        <p>Empty</p>
        
        </div>
        <?php
    }
    ?>
</body>

</html>

<?php include("partial/sub_admin_footer.php") ?>