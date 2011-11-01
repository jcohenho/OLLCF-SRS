<?php

if (!isset($_SESSION)) {
  session_start();

include "../logout.php";


$level = $_SESSION['level'];

//if not logged in, redirect to login page.
if( $level == ""){
	
	header("Location: ../login.php");

}

else if( $level == 1 or $level == 4) {
	
	
}

else{
		header("Location: ../error_unauthorized.php");
}


}




if(isset($_POST['submit'])){
		$facultyid=$_POST['facultyid'];
		$sname=$_POST['surname'];
		$fname=$_POST['firstname'];
		$mname=$_POST['middlename'];
		$dob=$_POST['dateofbirth'];
		$address=$_POST['address'];
		$contact=$_POST['contact'];
		$course=$_POST['course'];
		$teaching=$_POST['teaching'];
		$prof=$_POST['prof'];
		$admin=$_POST['admin'];
		$doe=$_POST['dateofentry'];
		$department=$_POST['department'];
		$position=$_POST['position'];
		$status=$_POST['status'];
		
		include("../functions/dbcon.php");
		$query_rsUsers ="UPDATE faculty_info SET 
			firstname='$fname',
			middlename='$mname',
			surname='$sname',
			date_of_birth='$dob',
			address='$address',
			contact='$contact',
			course='$course',
			teaching='$teaching',
			prof='$prof',
			admin='$admin',
			date_of_entry='$doe',
			department='$department',
			position='$position',
			status='$status'
			WHERE faculty_id='$facultyid'";
		mysql_query($query_rsUsers, $con) or die(mysql_error());
}

if(isset($_GET['fid'])){
	$fid=$_GET['fid'];
	include("../functions/dbcon.php");
	$query_rsFaculty ="SELECT * FROM faculty_info WHERE faculty_id='$fid'";
	$rsFaculty = mysql_query($query_rsFaculty, $con) or die(mysql_error());
	$row_rsFaculty = mysql_fetch_assoc($rsFaculty);
}

include("../functions/dbcon.php");
$query_rsCourse = "SELECT course_id,name from course";
$rsCourse = mysql_query($query_rsCourse, $con) or die(mysql_error());
$row_rsCourse = mysql_fetch_assoc($rsCourse);
$totalRows_rsCourse = mysql_num_rows($rsCourse);

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir="ltr" xml:lang="en_US" xmlns="http://www.w3.org/1999/xhtml" lang="en_US"><head>
<title>Faculty Panel</title>
<link href="../css.css" media="screen" rel="stylesheet" type="text/css">
<link href="favicon.ico" rel="favicon" type="image/x-icon">

<script type="text/javascript" src="core.js"></script>

</head><body>

  <!-- TOP HEADER BAR -->
<?php
include "../globalheader.php";
?>

  <!-- BEGIN CONTENT -->
  <div id="global_content_wrapper">
    <div id="global_content">


<h2>

  <?php 
  	$string = $row_rsFaculty['middlename'];
	$words = explode(" ", $string);
	$mname = "";
	foreach ($words as $value) {
		$mname .= strtoupper(substr($value, 0, 1));
	}
  echo strtoupper($row_rsFaculty['surname']).", ".ucwords($row_rsFaculty['firstname'])." ".$mname;?>
 </h2>
 
<?php
include "faculty_panel_menu.php";
?>

<div class="settings">
<form id="admin-form" enctype="" class="global_form" action="<?php echo $_SERVER['PHP_SELF']."?fid=".$row_rsFaculty['faculty_id']?>" method="post"><div><div><h3>Faculty Profile</h3>
<p class="form-description"> Click Update to save changes to the faculty profile.</p>
<div class="form-elements">
<div id="title-wrapper" class="form-wrapper">
	<div id="title-label" class="form-label"><label for="title" class="required">ID Number</label></div>
	<div id="title-element" class="form-element"><input  disabled="true" name="facultyid" id="facultyid" value="<?php echo $row_rsFaculty['faculty_id']; ?>" type="text">
	<input  name="facultyid" id="facultyid" value="<?php echo $row_rsFaculty['faculty_id']; ?>" type="hidden"></div>
</div>

<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Surname</label></div>
	<div id="description-element" class="form-element">
	<input name="surname" id="surname" value="<?php echo $row_rsFaculty['surname']; ?>" type="text"></div>
</div>
<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Firstname</label></div>
	<div id="description-element" class="form-element">
	<input name="firstname" id="firstname" value="<?php echo $row_rsFaculty['firstname']; ?>" type="text"></div>
</div>
<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Middlename</label></div>

	<div id="description-element" class="form-element">
	<input name="middlename" id="middlename" value="<?php echo $row_rsFaculty['middlename']; ?>" type="text"></div>
</div>

<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Date of Birth</label></div>
	<div id="description-element" class="form-element"><input name="dateofbirth" id="dateofbirth" value="<?php echo $row_rsFaculty['date_of_birth']; ?>" type="text"></div>
</div>
<div id="body-wrapper" class="form-wrapper">
	<div id="body-label" class="form-label"><label for="body" class="required">Address</label></div>
	<div id="body-element" class="form-element">
<textarea name="address" id="address" cols="45" rows="6"><?php echo $row_rsFaculty['address']; ?></textarea>
<p class="description">(Street/Barangay,Town,Province)</p></div></div>
<div id="body-wrapper" class="form-wrapper">
	<div id="body-label" class="form-label"><label for="body" class="required">Contacts</label></div>
	<div id="body-element" class="form-element">
<textarea name="contact" id="contact" cols="45" rows="6"><?php echo $row_rsFaculty['contact']; ?></textarea>
<p class="description">(telephone, cp no., e-mails, website)</p></div></div>
<div id="body-wrapper" class="form-wrapper">
	<div id="body-label" class="form-label"><label for="body" class="required">Course</label></div>
	<div id="body-element" class="form-element">
<textarea name="course" id="course" cols="45" rows="6"><?php echo $row_rsFaculty['course']; ?></textarea>
<p class="description">(Tertiary,Graduate)</p></div></div>
<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Teaching</label></div>
	<div id="description-element" class="form-element"><input name="teaching" id="teaching" value="<?php echo $row_rsFaculty['teaching']; ?>" type="text"></div>
</div>
<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Prof</label></div>
	<div id="description-element" class="form-element"><input name="prof" id="prof" value="<?php echo $row_rsFaculty['prof']; ?>" type="text"></div>
</div>
<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Admin</label></div>
	<div id="description-element" class="form-element"><input name="admin" id="admin" value="<?php echo $row_rsFaculty['admin']; ?>" type="text"></div>
</div>
<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Date of Entry</label></div>
	<div id="description-element" class="form-element"><input name="dateofentry" id="dateofentry" value="<?php echo $row_rsFaculty['date_of_entry']; ?>" type="text"></div>
</div>
<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Department</label></div>
	<div id="description-element" class="form-element"><input name="department" id="department" value="<?php echo $row_rsFaculty['department']; ?>" type="text"></div>
</div>
<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Position</label></div>
	<div id="description-element" class="form-element"><input name="position" id="position" value="<?php echo $row_rsFaculty['position']; ?>" type="text"></div>
</div>
<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Status</label></div>
	<div id="description-element" class="form-element"><input name="status" id="status" value="<?php echo $row_rsFaculty['status']; ?>" type="text"></div>
</div>

<div class="form-wrapper" id="buttons-wrapper"><fieldset id="fieldset-buttons">
<button name="submit" id="submit" type="submit">Update</button></fieldset>
 </div>

</div></div></div></form></div>




</div>
</div>
</body></html>
<?php
mysql_free_result($rsFaculty);
?>