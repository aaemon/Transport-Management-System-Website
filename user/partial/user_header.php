<?php session_start() ?>
<?php
    if(!isset($_SESSION['u_uid'])) {
        header("Location: ../login.php?login_first");
        exit();
    }
?>


<!DOCTYPE html>
<html>
	<head>
		<title>CUET transport</title>
        <link href="user_style.css" type="text/css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
        <meta charset="UTF-8">
		<!--<meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
	</head>

	<body>
		<div class="header" >
		<h1>CHITTAGONG UNIVERSITY OF ENGINEERING & TECHNOLOGY</h1>
		<ul>
			<li><a href="user_home.php">Home</a></li>
			<li><a href="user_roster.php">Roster</a></li>
            <li><a href="user_informations.php">Informations</a></li>
			<li><a href="user_application_forms.php">Forms</a></li>
            <li><a href="user_notice_board.php">Notice Board</a></li>
            <li><a href="user_profile.php">Profile</a></li>
			<li><a href="../index.php">Logout</a></li>
		</ul>
		</div>