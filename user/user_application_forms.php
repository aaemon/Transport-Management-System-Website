<?php include("partial/user_header.php") ?>
<?php
    if(isset($_SESSION['message'])) {
        $message = $_SESSION['message'];
        echo "<script type='text/javascript'>alert('$message');</script>"; 
    }
?>
<div class="section4">
    <div class="icon1">
        <a href="user_official_req.php"><i class="material-icons" style="font-size: 120px">local_post_office</i></a>
        <p>Official Requisition Form</p>
    </div>
    <div class="icon2">
        <a href="user_personal_req.php"><i class="material-icons" style="font-size: 120px">person_pin</i></a>
        <p>Personal Requisition Form</p>
    </div>
</div>
<?php 
unset($_SESSION['message']);
include("partial/user_footer.php") ?>