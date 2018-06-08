<?php include("partial/sub_admin_header.php") ?>
<?php
    include_once 'includes/dbh.inc.php';
    $sql = "SELECT * FROM personal_req  WHERE status=1 ORDER BY form_no DESC LIMIT 3;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
?>
<?php
    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="req">
            <div class="req_header">
                <h2>Transport Section</h2>
                <h2>Chittagong University of Engineering & Technology</h2>
                <h3>Chittagong-4349</h3>
                <h3>Requisition for Vehicles</h3>
                <h3>Personal</h3>
            </div>
            </div>
            <div class="mytable">
            <table>
                <tr>
                    <td>Form No.</td>
                    <td><?php echo $row['form_no'] ?></td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td><?php echo $row['datee'] ?></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><?php echo $row['user_name'] ?></td>
                </tr>
                <tr>
                    <td>User ID</td>
                    <td><?php echo $row['user_uid'] ?></td>
                </tr>
                <tr>
                    <td>Department</td>
                    <td><?php echo $row['user_dep'] ?></td>
                </tr>
                <tr>
                    <td>Rank</td>
                    <td><?php echo $row['user_rank'] ?></td>
                </tr>
                <tr>
                    <td>Mobile No.</td>
                    <td><?php echo $row['user_phone'] ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo $row['user_email'] ?></td>
                </tr>
                <tr>
                    <td>Reason of Requisition</td>
                    <td><?php echo $row['reason'] ?></td>
                </tr>
                <tr>
                    <td>Journey Type</td>
                    <td><?php echo $row['jtype'] ?></td>
                </tr>
                <tr>
                    <td>Vehicle Type</td>
                    <td><?php echo $row['vtype'] ?></td>
                </tr>
                <tr>
                    <td>Journey Place</td>
                    <td><?php echo $row['jplace'] ?></td>
                </tr>
                <tr>
                    <td>Estimated Time</td>
                    <td><?php echo $row['eta'] ?></td>
                </tr>
                <tr>
                    <td>Return Time</td>
                    <td><?php echo $row['rtime'] ?></td>
                </tr>
                <tr>
                    <td>Starting Place</td>
                    <td><?php echo $row['splace'] ?></td>
                </tr>
                <tr>
                    <td>Journey Date</td>
                    <td><?php echo $row['jdate'] ?></td>
                </tr>
                <tr>
                    <td>Journey Starting Time</td>
                    <td><?php echo $row['stime'] ?></td>
                </tr>
                <tr>
                <td>Status</td>
                <form action='includes/change_personal_status.inc.php' method='post'>
                    <td> <select name='status' required>
                        <option value=1>Accepted</option>
                        <option value=0>Pending</option>
                        <option value=3>Reject</option>
                    </select> </td>
                    
                </tr>
                <tr>
                    <td>Change Status</td>
                
                    <input type="hidden" name='form_no' value="<?php echo $row['form_no']; ?>">
                    <input type="hidden" name='datee' value="<?php echo $row['datee']; ?>">
                    <input type="hidden" name='user_name' value="<?php echo $row['user_name']; ?>">
                    <input type="hidden" name='user_uid' value="<?php echo $row['user_uid']; ?>">
                    <input type="hidden" name='user_dep' value="<?php echo $row['user_dep']; ?>">
                    <input type="hidden" name='user_rank' value="<?php echo $row['user_rank']; ?>">
                    <input type="hidden" name='user_phone' value="<?php echo $row['user_phone']; ?>">
                    <input type="hidden" name='user_email' value="<?php echo $row['user_email']; ?>">
                    <input type="hidden" name='reason' value="<?php echo $row['reason']; ?>">
                    <input type="hidden" name='jtype' value="<?php echo $row['jtype']; ?>">
                    <input type="hidden" name='vtype' value="<?php echo $row['vtype']; ?>">
                    <input type="hidden" name='jplace' value="<?php echo $row['jplace']; ?>">
                    <input type="hidden" name='eta' value="<?php echo $row['eta']; ?>">
                    <input type="hidden" name='rtime' value="<?php echo $row['rtime']; ?>">
                    <input type="hidden" name='splace' value="<?php echo $row['splace']; ?>">
                    <input type="hidden" name='jdate' value="<?php echo $row['jdate']; ?>">
                    <input type="hidden" name='stime' value="<?php echo $row['stime']; ?>">
                    <td>
                        <button type='submit' name='submit'>Change</button>
                    </td>
                
                </tr>
                </tr>
                <tr>
                    <td>Generate Pdf</td>
                    <td><button type='submit' name='create'>Create</button></td>
                </tr>
                </form>
            </table>
            </div>
            
       <?php 
       }    
    }
    else {
        echo"<div class='select'>
        <a href='#'>Empty</a>";
    }
    include('partial/sub_admin_footer.php');
?>
