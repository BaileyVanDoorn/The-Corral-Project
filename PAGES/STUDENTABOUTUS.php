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
<html>
<head>
<meta charset="utf-8">
<title>About Us</title>
<link rel="stylesheet" type="text/css" href="../STYLES/stylesheet.css">
</head>

<body>
<div class="Header">
	<h1>The Corral Project</h1>
</div>

<div class="navbar">
	<a href="../PAGES/STUDENTHOME.php">Home</a>
	<a href="../SURVEY/SURVEYANSWERS.php">Survey</a>
	<a href="../PAGES/STUDENTCONTACT.php">Contacts</a>
	<a href="../PAGES/STUDENTABOUTUS.php">About Us</a>
	<a href="../Access/LOGOUT.php">Logout</a>
</div>
<div id="contents">
  <h2>About Us</h2>
<p>Welcome to the Corral Project 'about us' page. Here you will find details of how this project began along with some frequently asked questions as listed below:</p>

</div>

<hr>
<h2>Origins of the Corral Project</h2>
<p>The Corral Project was created for the SIT374 'Project Design' unit at Deakin University, whereby we were required to create a prototype that serves as a solution to the pre-existing problem of sorting individuals into equal groups based on skill.</p>

<hr>
<h2>Frequently Asked Questions</h2>
<h3>How does it work?</h3>
<p>The process begins with users completing our quick survey, detailing their skills on both a technical and personal level. From there, the survey is submitted and added to our databases. From there your job as the user is done! When new projects are added, users can then be allocated certain roles, which is dependant on not only the users proficiency in certain skills, but also the skills required for the task at hand. Once the team has been finalised, users may access details of the project and contact other members of the group.</p>
<h3>Who can use the Corral Project?</h3>
<p>The Corral Project has been primarily designed for students and teachers as an interface for sharing upcoming projects that students will take part in. However, The Corral Project can also be utilised by employers who desire a platform for showcase upcoming projects that require group work, as the Corral Project takes away the pain and time of assigning equal teams to different tasks. </p>
<h3>What options do I have if I don't get the project I want?</h3>
<p>Badluck (tbc)</p>
<h3>Can I decline a project after already being accepted into it?</h3>
<p>This depends on the nature of the project (tbc)</p>
<p>&nbsp;</p>

<div class="Footer">
	<h4>This is copyrighted by Deakin and the project group 29</h4>
</div>
</body>
</html>
