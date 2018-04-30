<?php
session_start();

if ( $_SESSION['STUDENT_ID'] != 1) {
	$_SESSION['message'] = "You mus log in before viewing this page";
	header("location: ../ACCESS/error.php");
	}
	else {
	$id = $_SESSION['STUDENT_ID'];
	$student_firstname = $_SESSION['STUDENT_FIRSTNAME'];
	$student_lastname = $_SESSION['STUDENT_LASTNAME'];
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome <?= $student_firstname.' '.$student_lastname ?> </title>
<link rel="stylesheet" type="text/css" href="STYLES/stylesheet.css">
</head>

<body>
<div class="Header">
	<h1>Corral Project</h1>
</div>

<div class="navbar">
	<a href="../PAGES/STUDENTHOME.php">Home</a>
	<a href="../SURVEY/SURVEYANSWERS.php">Survey</a>
	<a href="../PAGES/STUDENTCONTACT.php">Contacts</a>
	<a href="../PAGES/STUDENTABOUTUS.php">About Us</a>
	<a href="../Access/LOGOUT.php">Logout</a>
</div>


<h2>Welcome, <?= $student_firstname. ' '?></h2>
<p>This is an intro page about the purpose of the skills survey.</p>

</ul><br><br>
<p>If you wish to logout, please click the tab above.</p>
<div class="Footer">
	<h4>© Copyright Deakin University & Group 29 2018</h4>
</div>
</body>
</html>
