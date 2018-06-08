<?php include("partial/header.php") ?>
        
        <div class="login_panel_header">
            <h2>Registration Panel</h2>
        </div>

        <?php
            if(isset($_SESSION['error_message'])) {
            $error_message = $_SESSION['error_message'];
            echo "<script type='text/javascript'>alert('$error_message');</script>"; 
            } ?>

        <div class="req">
            <section>
            <form action="includes/reg.inc.php" method = "POST">
                <label for="first name">First Name: </label>
                <input type="text" name="fname" placeholder="First Name" maxlength="12"autocomplete="off" value="" required/>
                <br />

                <label for="last name">Last Name:</label>
                <input type="text" name="lname" placeholder="Last Name" maxlength="12" autocomplete="off" value="" required />
                <br />

                <label for="department">Department or Section:</label>
                <input list="department" name="department" placeholder="Department or Section" autocomplete="off"/>
                <datalist id="department">
                    <option value="Civil Engineering" />
                    <option value="Electrical & Elecronic Engineering" />
                    <option value="Mechanical Engineering" />
                    <option value="Computer Science & Engineering" />
                    <option value="Architecture" />
                    <option value="Urban & Regional Planning" />
                    <option value="Petroleum & Mining Engineering"/>
                    <option value="Electronics & Telecommunication Engineering" />
                    <option value="Mechatronics" />
                    <option value="Water Research & Engineering" />
                    <option value="Department of Humanities" />
                    <option value="Transport Section" />

                </datalist>
                <br />

                <label for="rank">Rank:</label>
                <input list="rank" name="rank" placeholder="Choose Rank" autocomplete="off"/>
                <datalist id="rank">
                    <option value="Vice Chancellor" />
                    <option value="Dean" />
                    <option value="Head" />
                    <option value="Professor" />
                    <option value="Assistant Professor" />
                    <option value="Lecturer" />
                    <option value="Officer" />
                    <option value="Staff" />
                </datalist>
                <br />
                
                <label for="email">E-mail:</label>
                <input type="email" name="email" autocomplete="off" placeholder="someone@email.com" required/>
                <br />

                <label for="phone">Phone Number:</label>
                <input type="int" name="phone" placeholder="Phone Number" autocomplete="off" maxlength="11" required />
                <br />   

                <label for="user id">User ID:</label>
                <input type="text" name="uid" placeholder="User ID" autocomplete="off" maxlength="10" required />
                <br />  

                <label for="password">Password:</label>
                <input type="password" name="password" autocomplete="off" placeholder="Password" required />
                <br />

                <label for="repassword">Retype Password:</label>
                <input type="password" name="repassword" autocomplete="off" placeholder="Retype Password" required />
                <br />

                <button type="submit" id="rsubmit" name="submit">Submit</button>
                
            </form>
            </section>
        </div>
<?php 
unset($_SESSION['error_message']);
include("partial/footer.php") ?>