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


//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

if(isset($_POST['submit'])){
		$studid=$_POST['facultyid'];
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
		$query_rsUsers ="INSERT INTO faculty_info (faculty_id, firstname,middlename,surname, date_of_birth, address, contact, course, teaching, prof, admin, date_of_entry, department, position, status)
						VALUES ('$studid', '$fname', '$mname', '$sname', '$dob', '$address', '$contact', '$course', '$teaching', '$prof', '$admin', '$doe', '$department', '$position', '$status')";
		mysql_query($query_rsUsers, $con) or die(mysql_error());
		mysql_close ($con);
		header("Location: faculty_profile.php?fid=$studid");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir="ltr" xml:lang="en_US" xmlns="http://www.w3.org/1999/xhtml" lang="en_US"><head>
<title>Control Panel</title>
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
	
<div class="settings">
<form id="admin-form" enctype="application/x-www-form-urlencoded" class="global_form" action="<?php echo $_SERVER['PHP_SELF']?>" method="post"><div><div><h3>Add New Faculty</h3>
<p class="form-description"> Please fill in the boxes below and click Save to add new student record.</p>
<div class="form-elements">
<div id="title-wrapper" class="form-wrapper">
	<div id="title-label" class="form-label"><label for="title" class="required">ID Number</label></div>
	<div id="title-element" class="form-element"><input maxlength="12" name="facultyid" id="facultyid" value="" type="text"></div>
</div>
<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Surname</label></div>
	<div id="description-element" class="form-element"><input name="surname" id="surname" value="" type="text"></div>
</div>
<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Firstname</label></div>
	<div id="description-element" class="form-element"><input name="firstname" id="firstname" value="" type="text"></div>
</div>
<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Middlename</label></div>
	<div id="description-element" class="form-element"><input name="middlename" id="middlename" value="" type="text"></div>
</div>

<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Date of Birth</label></div>
	<div id="description-element" class="form-element"><input name="dateofbirth" id="dateofbirth" value="" type="text"></div>
</div>
<div id="body-wrapper" class="form-wrapper">
	<div id="body-label" class="form-label"><label for="body" class="required">Address</label></div>
	<div id="body-element" class="form-element">
<textarea name="address" id="address" cols="45" rows="6"></textarea>
<p class="description">(Street/Barangay,Town,Province)</p></div></div>
<div id="body-wrapper" class="form-wrapper">
	<div id="body-label" class="form-label"><label for="body" class="required">Contacts</label></div>
	<div id="body-element" class="form-element">
<textarea name="contact" id="contact" cols="45" rows="6"></textarea>
<p class="description">(telephone, cp no., e-mails, website)</p></div></div>
<div id="body-wrapper" class="form-wrapper">
	<div id="body-label" class="form-label"><label for="body" class="required">Course</label></div>
	<div id="body-element" class="form-element">
<textarea name="course" id="course" cols="45" rows="6"></textarea>
<p class="description">(Tertiary,Graduate)</p></div></div>
<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Teaching</label></div>
	<div id="description-element" class="form-element"><input name="teaching" id="teaching" value="" type="text"></div>
</div>
<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Prof</label></div>
	<div id="description-element" class="form-element"><input name="prof" id="prof" value="" type="text"></div>
</div>
<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Admin</label></div>
	<div id="description-element" class="form-element"><input name="admin" id="admin" value="" type="text"></div>
</div>
<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Date of Entry</label></div>
	<div id="description-element" class="form-element"><input name="dateofentry" id="dateofentry" value="" type="text"></div>
</div>
<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Department</label></div>
	<div id="description-element" class="form-element"><input name="department" id="department" value="" type="text"></div>
</div>
<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Position</label></div>
	<div id="description-element" class="form-element"><input name="position" id="position" value="" type="text"></div>
</div>
<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Status</label></div>
	<div id="description-element" class="form-element"><input name="status" id="status" value="" type="text"></div>
</div>


<div class="form-wrapper" id="buttons-wrapper"><fieldset id="fieldset-buttons">
<button name="submit" id="submit" type="submit">Save</button>
 or <a name="cancel" id="cancel" type="button" href="faculty.php">cancel</a></fieldset>
 </div>

</div></div></div></form></div>
	
	
	</div>
  </div>
</body></html>