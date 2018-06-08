<?php include("partial/user_header.php") ?>
        <div class="req">
            <div class="req_header">
                <h2>Transport Section</h2>
                <h2>Chittagong University of Engineering & Technology</h2>
                <h3>Chittagong-4349</h3>
                <h3>Requisition for Vehicles</h3>
                <h3>Personal</h3>
            </div>
            <section> 
            <form action="includes/personal_req.inc.php" method="post" class="form">
                    <label for="date">Date:</label>
                    <input type="date" name="date" autocomplete="off" value="" required/>
                    <br />
                    <label for="name">User's Name:</label>
                    <input type="text" name="user_name" placeholder="Name" value="<?php echo $_SESSION['u_fname'].' '.$_SESSION['u_lname'] ?>" required/>
                    <br />

                    <label for="user_uid">User's ID:</label>
                    <input type="text" name="user_uid" placeholder="UserID" value="<?php echo $_SESSION['u_uid'] ?>" required/>
                    <br />
                    
                    <label for="department">User's Department or Section:</label>
                    <input list="department" name="user_dep" placeholder="Department or Section" value="<?php echo $_SESSION['u_department'] ?>" autocomplete="off" required/>
                    <datalist id="department">
                        <option value="Civil Engineering" />
                        <option value="Electrical & Elecronic Engineering" />
                        <option value="Mechanical Engineering" />
                        <option value="Computer Science & Engineering" />
                        <option value="Architecture" />
                        <option value="Urban & Regional Planning" />
                        <option value="Petroleum & Mining Engineering"/>
                        <option value="Electronics & Telecommunication Engineering" />
                    </datalist>
                    <br />
                    <label for="rank">User's Rank:</label>
                    <input list="rank" name="user_rank" placeholder="Rank" value="<?php echo $_SESSION['u_rank'] ?>" autocomplete="off" required/>
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
                    

                    <label for="mobile">Mobile No:</label>
                    <input type="int" name="user_phone" maxlength="11" value="<?php echo $_SESSION['u_phone'] ?>" placeholder="Mobile Number" required />
                    <br />
                    <label for="email">E-mail:</label>
                    <input type="varchar" name="user_email" value="<?php echo $_SESSION['u_email'] ?>" placeholder="Email" required />
                    <br />
                    <label for="personal_req_reason">Reason of Requisition:</label>
                    <input type="text" name="reason"  placeholder="Reason" required/>
                    <br />
                    
                    <input type="radio" class="radiobutton" name="jtype" value="Individual Journey">Individual Journey
                    <br />
                    <input type="radio" class="radiobutton" name="jtype" value="Group Journey">Group Journey
                    <br />
                    <label for="vehicle">Vehicle Type:</label> 
                    <input type="text" name="vtype" placeholder="Vehicle Type" required/>
                    <br />
                    <label for="jplace">Journey Place:</label>
                    <input type="text" name="jplace" placeholder="Place Name" required>
                    <br />
                    <label for="eta">Estimated Time:</label>
                    <input type="text" name="eta" placeholder="ETA" required/>
                    <br />
                
                    <label for="return_time">Return Time:</label>
                    <input type="time" name="rtime" placeholder="Return Time" required/>
                    <br />
                    <label for="place">Starting Place:</label>
                    <input type="text" name="splace" placeholder="Starting Place" required/>
                    <br />
                    <label for="jdate">Journey Date:</label>
                    <input type="date" name="jdate" placeholder="" autocomplete="off" required/>
                    <br />
                    <label for="stime">Journey Starting Time:</label>
                    <input type="time" name="stime" placeholder="" autocomplete="off" required/>
                    <br />
                    
                    <button type="submit" id="submit" name="submit" >Submit</button>
            </form>
            </section>
            
        </div>
    </body>
</html>