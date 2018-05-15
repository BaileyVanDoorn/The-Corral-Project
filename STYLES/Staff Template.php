<?php
session_start();
if ( $_SESSION['STAFF_ID'] != 1) {
	$_SESSION['message'] = "You mus log in before viewing this page";
	header("location: ../ACCESS/error.php");
	}
	else {
	$id = $_SESSION['STAFF_ID'];
	$staff_firstname = $_SESSION['STAFF_FIRSTNAME'];
	$staff_lastname = $_SESSION['STAFF_LASTNAME'];
	}
?>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" type="text/css" href="../STYLES/stylesheet.css">
</head>

<body>

<div class="Header">
	<h1>Corral</h1>
</div>
<div class="navbar">
	<a href="../PAGES/STAFFHOME.php">Home</a>
	<div class="dropdown">
		<button class="dropbtn">Projects
			<i class="fa fa-caret-down"></i>
		</button>
        	<div class="dropdown-content">
            	<a href="../PROJECT/ADDPROJECT.php">Create Project</a>
				<a href="../PROJECT/PROJECTLIST.php">Project List</a>
				<a href="../PROJECT/PROJECTUPDATE.PHP">Update Project</a>
            	<a href="../PROJECT/ADDGROUP.php">Create Group</a>
            	<a href="../PROJECT/GROUPLIST.php">Group List</a>
				<a href="../PROJECT/GROUPUPDATE.PHP">Update Group</a>
                <a href="../PROJECT/STUDENTLIST.php">Student List</a>
                <a href="../PROJECT/STAFFLIST.php">Staff List</a>
			</div>
	</div>
	<a href="../PAGES/STAFFCONTACT.php">Contacts</a>
	<a href="../PAGES/STAFFABOUTUS.php">About Us</a>
	<a href="../ACCESS/stafflogout.php">Logout</a>
</div>

<div class="Footer">
	<h4>This is copyrighted by Deakin and the project group 29</h4>
</div>
</body>
</html>