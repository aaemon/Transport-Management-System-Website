<?php include("partial/admin_header.php") ?>
<div class="notice_board">
        <h1>Notice Board</h1>
        <section>
                <form action="includes/notice.inc.php" method="post" autocomplete="off" autofocus="autofocus"> 
                <input type="textarea" id="textarea" name="notice">
                <select name="status">
                        <option value="0">Post to Public</option>
                        <option value="1">Post to Users and Sub-Admins</option>
                        <option value="2">Post to Sub-Admins</option>

                </select>
                
                <button type='submit' name='submit'>POST</button>
                
                </form>
                </section>
</div>
        
                



<?php include("partial/admin_footer.php") ?>
