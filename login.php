<?php include("partial/header.php") ?>

        
        <div class="login_panel_header">
        <h2>Login Panel</h2>
        </div>
        
            <?php
            if(isset($_SESSION['error_message'])) {
            $error_message = $_SESSION['error_message'];
            echo "<script type='text/javascript'>alert('$error_message');</script>"; 
            } ?>
            <?php
            if(isset($_SESSION['message'])) {
            $message = $_SESSION['message'];
            echo "<script type='text/javascript'>alert('$message');</script>"; 
            } ?>
            
        <div class="login_section">
            <form action="includes/login.inc.php" method="POST">
                <p>UserID:</p>
                <input type="text" name="uid" autocomplete="off" required>
                <p>Password:</p>
                <input type="password" name="password" autocomplete="off" required><br/>
                <button type="submit" name="submit">Login</button>
                
            </form>
        </div>
            <div class="select">
                <a href="registration.php">Register Here</a>
            </div>
        <?php
        unset($_SESSION['error_message']);
        unset($_SESSION['message']);
            
        include("partial/footer.php") ?>
        
    
        