<?php include('partial/header.php'); ?>
<?php

session_unset();
session_destroy();

?>
	<div class="section1">
		<h1>Transport Section</h1>
		<p>CUET has a collection of 11 buses and a total of 22 vehicles. It provides bus services everyday for both students and teachers.</p> 
		<img src="assets/ichamoti.jpg" />
		<img src="http://pic.thedailynewnation.com/1438611165_0.jpg" />
		<img src="http://www.thedailystar.net/sites/default/files/upload-2014/gallery/image/arts/cuet.jpg" />
	</div>
	<div class="select">
        <a href="transportation_details.php">Get Details</a>
        <hr />
    </div>
	<div class="section2">
		<h2>Requisition for vehicles? You can fillup the form for both personal and official purposes if you are a member of CUET transport organisation. If you have permissions then you are ready to go!</h1>
		<ul>
			<li><a href="login.php">Official Requisition</a></li>
			<li><a href="login.php">Personal Requisition</a></li>
		</ul>
	</div>
    <div class="amb">
        <img src="http://ambutrans.on.ca/wp-content/uploads/2015/01/ambulance2.png" />
        <h3>CUET Ambulance's Emergency mobile no:</h3>
        <h2>01733644436</h2>
    </div>
<?php include("partial/footer.php");
		