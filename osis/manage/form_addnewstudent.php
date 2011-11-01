<?php 

//initialize the session
if (!isset($_SESSION)) {
  session_start();
include "../logout.php";


$level = $_SESSION['level'];

//if not logged in, redirect to login page.
if( $level == ""){
	
	header("Location: ../login.php");

}
//if admin or registrar, do nothing
else if( $level == 1 or $level == 2) {
	
	
}
//if not admin or registrar than redirect to error page
else{
	header("Location: ../error_unauthorized.php");
}




}

if(isset($_POST['submit'])){
		$studid=$_POST['studentid'];
		$sname=$_POST['surname'];
		$fname=$_POST['firstname'];
		$mname=$_POST['middlename'];
		$nextension=$_POST['nameextension'];
		$bday=$_POST['birthday'];
		$gender=$_POST['gender'];
		$course=$_POST['course'];
		$ylevel=$_POST['yearlevel'];
		$scholarship=$_POST['scholarship'];
		$place_of_birth = $_POST['place_of_birth'];
		$civil_status = $_POST['civil_status'];
		$phone = $_POST['phone'];
		$street = $_POST['street'];
		$brgy = $_POST['brgy'];
		$town = $_POST['town'];
		$province = $_POST['province'];
		$doctor = $_POST['doctor'];
		$elementary = $_POST['elementary'];
		$secondary = $_POST['secondary'];
		$college = $_POST['college'];
		$transferee = $_POST['transferee'];
		
		include("../functions/dbcon.php");
		$query_rsUsers ="INSERT INTO student_info 
		(student_id, firstname,middlename,surname,name_extension,
		birthday,gender,course_id,year_level,scholarship_id,place_of_birth,civil_status,phone,street,brgy,
		town,province,doctor,elementary,secondary,college,transferee)
		VALUES ('$studid', '$fname', '$mname', '$sname', '$nextension',
		'$bday', '$gender','$course', '$ylevel','$scholarship','$place_of_birth','$civil_status','$phone','$street','$brgy',
		'$town','$province','$doctor','$elementary','$secondary','$college','$transferee')";
		mysql_query($query_rsUsers, $con) or die(mysql_error());
		mysql_close ($con);
		header("Location: stud_admission.php?sid=$studid");
}
include("../functions/dbcon.php");
$query_rsCourse = "SELECT course_id,name from course";
$rsCourse = mysql_query($query_rsCourse, $con) or die(mysql_error());
$row_rsCourse = mysql_fetch_assoc($rsCourse);
$totalRows_rsCourse = mysql_num_rows($rsCourse);

include("../functions/dbcon.php");
$query_rsScholarship = "SELECT scholarship_id,name FROM scholarship";
$rsScholarship = mysql_query($query_rsScholarship, $con) or die(mysql_error());
$row_rsScholarship = mysql_fetch_assoc($rsScholarship);
$totalRows_rsScholarship = mysql_num_rows($rsScholarship);

include("../functions/dbcon.php");
$query_rsProvince = "SELECT * FROM province";
$rsProvince = mysql_query($query_rsProvince, $con) or die(mysql_error());
$row_rsProvince = mysql_fetch_assoc($rsProvince);
$totalRows_rsProvince = mysql_num_rows($rsProvince);






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
<form id="admin-form" enctype="application/x-www-form-urlencoded" class="global_form" action="<?php echo $_SERVER['PHP_SELF']?>" method="post"><div><div><h3>Add New Student</h3>
<p class="form-description"> Please fill in the boxes below and click Save to add new student record.</p>
<div class="form-elements">
<div id="title-wrapper" class="form-wrapper">
	<div id="title-label" class="form-label"><label for="title" class="required">ID Number</label></div>
	<div id="title-element" class="form-element"><input maxlength="12" name="studentid" id="studentid" value="" type="text"></div>
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
<div id="description-label" class="form-label"><label for="description" class="optional">Name Extension</label></div>
	<div id="description-element" class="form-element"><input name="nameextension" id="nameextension" value="" type="text"></div>
</div>

<div id="description-wrapper" class="form-wrapper">
<div id="description-label" class="form-label"><label for="description" class="optional">Date of Birth</label></div>
	<div id="description-element" class="form-element"><input name="birthday" id="birthday" value="" type="text">
	<p class="description">Birthday must be mm-dd-yyyy format.</p></div>
</div>

<div id="gender-wrapper" class="form-wrapper"><div id="gender-label" class="form-label">
<label for="gender" class="required">Gender</label></div>
<div id="gender-element" class="form-element">
<ul class="form-options-wrapper">
<li><input name="gender" id="gender-1" value="1" checked="checked" type="radio"><label for="gender-1">Male</label></li>
<li><input name="gender" id="gender-0" value="0" type="radio"><label for="gender-0">Female</label></li>

</ul>
</div></div>


<div id="field_id-wrapper" class="form-wrapper"><div id="field_id-label" class="form-label"><label for="field_id" class="optional">Course</label></div>
<div id="field_id-element" class="form-element">

<select name="course" id="course">
	<?php
do{
?>
		<option value="<?php echo $row_rsCourse['course_id']?>"> <?php echo $row_rsCourse['name']?></option>
<?php
		}while ($row_rsCourse = mysql_fetch_assoc($rsCourse));
		mysql_free_result($rsCourse);
		mysql_close ($con);
?>
	
</select></div></div>

<div id="field_id-wrapper" class="form-wrapper"><div id="field_id-label" class="form-label"><label for="field_id" class="optional">Year Level</label></div>
<div id="field_id-element" class="form-element">

<select name="yearlevel" id="yearlevel">
    <option value="I" label="First Year">First Year</option>
    <option value="II" label="Second Year">Second Year</option>
    <option value="III" label="Third Year">Third Year</option>
    <option value="IV" label="Fourth Year">Fourth Year</option>
    <option value="V" label="Fifth Year">Fifth Year</option>

</select></div></div>

<div id="field_id-wrapper" class="form-wrapper"><div id="field_id-label" class="form-label"><label for="field_id" class="optional">Availed Scholarship</label></div>
<div id="field_id-element" class="form-element">

<select name="scholarship" id="scholarship">
    <option value="" label=""></option>
	<?php
do{
?>
		<option value="<?php echo $row_rsScholarship['scholarship_id']?>"> <?php echo $row_rsScholarship['name']?></option>
<?php
		}while ($row_rsScholarship = mysql_fetch_assoc($rsScholarship));
		mysql_free_result($rsScholarship);
		mysql_close ($con);
?>
	
</select></div></div>


<div id="description-wrapper" class="form-wrapper">
<div id="description-label" class="form-label"><label for="description" class="optional">Place of Birth</label></div>
	<div id="description-element" class="form-element"><input name="place_of_birth" id="place_of_birth" value="" type="text"></div>
</div>

<div id="civil-wrapper" class="form-wrapper"><div id="civil-label" class="form-label">
<label for="civil" class="required">Civil Status</label></div>
<div id="civil-element" class="form-element">
<ul class="form-options-wrapper">
<li><input name="civil_status" id="civil_status-1" value="1" checked="checked" type="radio"><label for="civil-1">Single</label></li>
<li><input name="civil_status" id="civil_status-0" value="0" type="radio"><label for="civil_status-0">Married</label></li>

</ul>
</div></div>


<div id="description-wrapper" class="form-wrapper">
<div id="description-label" class="form-label"><label for="description" class="optional">Phone</label></div>
	<div id="description-element" class="form-element"><input name="phone" id="phone" value="" type="text"></div>
</div>



<div id="description-wrapper" class="form-wrapper">
<div id="description-label" class="form-label"><label for="description" class="optional">Street</label></div>
	<div id="description-element" class="form-element"><input name="street" id="street" value="" type="text"></div>
</div>



<div id="description-wrapper" class="form-wrapper">
<div id="description-label" class="form-label"><label for="description" class="optional">Barangay</label></div>
	<div id="description-element" class="form-element"><input name="brgy" id="brgy" value="" type="text"></div>
</div>



<div id="description-wrapper" class="form-wrapper">
<div id="description-label" class="form-label"><label for="description" class="optional">Town</label></div>
	<div id="description-element" class="form-element"><input name="town" id="town" value="" type="text"></div>
</div>


<div id="field_id-wrapper" class="form-wrapper"><div id="field_id-label" class="form-label"><label for="field_id" class="optional">Province</label></div>
<div id="field_id-element" class="form-element">

<select name="province" id="province">
    <option value="" label=""></option>
	<?php
do{
?>
		<option value="<?php echo $row_rsProvince['province_name']?>"> <?php echo $row_rsProvince['province_name']?></option>
<?php
		}while ($row_rsProvince = mysql_fetch_assoc($rsProvince));
		mysql_free_result($rsProvince);
		mysql_close ($con);
?>
	
</select></div></div>


<div id="description-wrapper" class="form-wrapper">
<div id="description-label" class="form-label"><label for="description" class="optional">Doctor of Medicine</label></div>
	<div id="description-element" class="form-element"><input name="doctor" id="doctor" value="" type="text"></div>
</div>


<div id="description-wrapper" class="form-wrapper"><h3>Background Education</h3></div>
<div id="description-wrapper" class="form-wrapper">
<div id="description-label" class="form-label"><label for="description" class="optional">Elementary</label></div>
	<div id="description-element" class="form-element"><input name="elementary" id="elementary" value="" type="text"></div>
</div>

<div id="description-wrapper" class="form-wrapper">
<div id="description-label" class="form-label"><label for="description" class="optional">Secondary</label></div>
	<div id="description-element" class="form-element"><input name="secondary" id="secondary" value="" type="text"></div>
</div>

<div id="description-wrapper" class="form-wrapper">
<div id="description-label" class="form-label"><label for="description" class="optional">College</label></div>
	<div id="description-element" class="form-element"><input name="college" id="college" value="" type="text"></div>
</div>

<div id="transferee-wrapper" class="form-wrapper"><div id="transferee-label" class="form-label">
<label for="transferee" class="required">Transferee</label></div>
<div id="transferee-element" class="form-element">
<ul class="form-options-wrapper">
<li><input name="transferee" id="transferee-0" value="0" checked="checked" type="radio"><label for="transferee-0">No</label></li>
<li><input name="transferee" id="transferee-1" value="1" type="radio"><label for="transferee-0">Yes</label></li>

</ul>
</div></div>





<div class="form-wrapper" id="buttons-wrapper"><fieldset id="fieldset-buttons">
<button name="submit" id="submit" type="submit">Save</button>
 or <a name="cancel" id="cancel" type="button" href="students.php">cancel</a></fieldset>
 </div>

</div></div></div></form></div>
	
	
	</div>
  </div>
</body></html>