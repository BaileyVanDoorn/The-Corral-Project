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
<title>Contact Us</title>
<link rel="stylesheet" type="text/css" href="../STYLES/stylesheet.css">
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

<div id="contents">
<h2>Contact Us</h2>
<p>Although the Corral Project is designed to make communcation between team members and employers/teachers more efficient when dealing with group projects, we understand that some individuals might still want some questions answered. If you do have any questions, please first check out our 'About Us' page as we do have a frequently asked questions section.

<hr>
<h2>Tell Us What You Think!</h2>
<p>Do you have a question that we didn't talk about in our FAQ section or would you like to give us some feedback? Insert your details below and we will get back to you as soon as possible!
<form style="margin-left: 40px" name="emailcontact" onSubmit="return validate(emailcontact)" method="post" action="../WEBSITE/STUDENTSUCCESS.php">
	First Name: <input type="text" name="firstname" required><br><br>
	Last Name: <input type="text" name="lastname" required><br><br>
	Student ID: <input type="text" name="id" maxlength="9" required><br><br>
	Email Address: <input type="text" name="email" size="40" required><br><br>
  Question: <input type="text" name="question" size="40" required><br><br>

		<input type="submit" name="Submit" value="Submit">
		<input type="reset" value="Clear Form"><br><br>
</form>

<div class="Footer">
	<h4>This is copy righted by Deakin and the project group 29</h4>
</div>
</body>
