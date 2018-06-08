<?php include("partial/user_header.php") ?>
        
        <div class="req">
            <div class="req_header">
                <h2>Transport Section</h2>
                <h2>Chittagong University of Engineering & Technology</h2>
                <h3>Chittagong-4349</h3>
                <h3>Requisition for Vehicles</h3>
                <h3>Official</h3>
            </div>
            <section>
            <form action="includes/official_req.inc.php" method="post">
                    <label for="date">Date:</label>
                    <input type="date" name="datee" placeholder="Date" autocomplete="off" value="" required/>
                    <br />
                    <label for="name">User Name:</label>
                    <input type="text" name="user_name" placeholder="Name" autocomplete="off" value="<?php echo $_SESSION['u_fname'] .' '.$_SESSION['u_lname'] ?>" required />
                    <br />
                    <label for="uid">User ID:</label>
                    <input type="text" name="user_uid" placeholder="UserID" autocomplete="off" value="<?php echo $_SESSION['u_uid'] ?>" required />
                    <br />
                    <label for="department">User's Department:</label>
                    <input list="department" name="user_dep" autocomplete="off" placeholder="Department or Section" value="<?php echo $_SESSION['u_department'] ?>" required/>
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
                    <input type="int" name="user_phone" maxlength="11" placeholder="Mobile Number" value="<?php echo $_SESSION['u_phone'] ?>" autocomplete="off" required/>
                    <br />
                    <label for="email">E-mail:</label>
                    <input type="email" name="user_email" placeholder="E-mail" value="<?php echo $_SESSION['u_email'] ?>" autocomplete="off" required/>
                    <br />
                    <label for="official_req_reason">Reason of Requisition:</label>
                    <input type="text" name="reason" autocomplete="off" placeholder="Reason" />
                    </textarea>
                    <br />
                    <label for="vehicle">Vehicle Type:</label> 
                    <input type="text" name="vtype" placeholder="Vehicle Type" autocomplete="off" required/>
                    <br />
                    <label for="eta">Estimated Time:</label>
                    <input type="text" name="eta" placeholder="ETA" autocomplete="off" required />
                    <br />
                    <label for="token">Token No:</label>
                    <input type="text" name="token" placeholder="Token No" autocomplete="off"/>
                    <br />
                    <label for="place">Starting Place:</label>
                    <input type="text" name="splace" placeholder="Starting Place" autocomplete="off" required/>
                    <br />
                    <label for="date">Journey Date:</label>
                    <input type="date" name="jdate" autocomplete="off" required />
                    <br />
                    <label for="time">Journey Starting Time:</label>
                    <input type="time" name="stime" autocomplete="off" required />
                    <br />
                    
                    <button type="submit" id="submit" name="submit" >Submit</button>
                    
            </form>
            </section>
            
        </div>
    </body>
</html>