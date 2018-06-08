<?php
    session_start();
?>

<?php 
$items = [
    [
        "title" => "Home",
        "href" => "index.php"
    ],
    [
        "title" => "Roster",
        "href" => "roster.php"
    ],
    [
        "title" => "Informations",
        "href" => "informations.php"
    ],
    [
        "title" => "Application Forms",
        "href" => "application_forms.php"
    ],
    [
        "title" => "Notice Board",
        "href" => "notice_board.php"
    ],
    [
        "title" => "Login",
        "href" => "login.php"
    ]
];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>CUET transport</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
		<!--<meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

	</head>

	<body>
		<div class="header" >
		<h1>CHITTAGONG UNIVERSITY OF ENGINEERING & TECHNOLOGY</h1>
		<ul>
            <?php foreach($items as $item) : ?>
                <li>
                    <a href="<?php echo $item['href']; ?>"
                        <?php if (basename($_SERVER['PHP_SELF']) === $item['href']) : ?>
                        style='font-weight:bold';
                        <?php endif; ?>
                    >
                        <?php echo $item['title']; ?>
                    </a>
                </li>
            <?php endforeach; ?>
		</ul>
		</div>
