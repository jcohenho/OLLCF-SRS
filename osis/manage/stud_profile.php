<?php
if (!isset($_SESSION)) {
  session_start();
include ("../logout.php");



$level = $_SESSION['level'];

//if not logged in, redirect to login page.
if( $level == ""){
	
	header("Location: ../login.php");

}
else if( $level == 1 or $level == 2) {
	
	
}

else if($level == 3 or $level ==4){
	
		$hide = 'display:none';
		$disabled = 'disabled=true';
}

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
		$query_rsUsers ="UPDATE student_info SET 
			firstname='$fname',
			middlename='$mname',
			surname='$sname',
			name_extension='$nextension',
			birthday='$bday',
			gender='$gender',
			course_id='$course',
			year_level='$ylevel',
			scholarship_id='$scholarship',
			place_of_birth ='$place_of_birth',
			civil_status = '$civil_status',
			phone = '$phone',
			street = '$street',
			brgy = '$brgy',
			town = '$town',
			province = '$province',
			doctor = '$doctor',
			elementary = '$elementary',
			secondary = '$secondary',
			college = '$college',
			transferee = '$transferee'
			WHERE student_id='$studid'";
		mysql_query($query_rsUsers, $con) or die(mysql_error());
}

if(isset($_GET['sid'])){
	$id=$_GET['sid'];
	include("../functions/dbcon.php");
	$query_rsStudent ="SELECT * FROM student_info WHERE student_id='$id'";
	$rsStudent = mysql_query($query_rsStudent, $con) or die(mysql_error());
	$row_rsStudent = mysql_fetch_assoc($rsStudent);
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
<title>Student Panel</title>
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
  	$string = $row_rsStudent['middlename'];
	$words = explode(" ", $string);
	$mname = "";
	foreach ($words as $value) {
		$mname .= strtoupper(substr($value, 0, 1));
	}
  echo strtoupper($row_rsStudent['surname']).", ".ucwords($row_rsStudent['firstname'])." ".$mname;?>
 </h2>
 
<?php
include "stud_panel_menu.php";
?>

<div class="settings">
<form id="admin-form" enctype="" class="global_form" action="<?php echo $_SERVER['PHP_SELF']."?sid=".$row_rsStudent['student_id']?>" method="post"><div><div><h3>Student Profile</h3>
<p class="form-description"> Click Update to save changes to the student profile.</p>
<div class="form-elements">
<div id="title-wrapper" class="form-wrapper">
	<div id="title-label" class="form-label"><label for="title" class="required">ID Number</label></div>
	<div id="title-element" class="form-element"><input  disabled="true" name="studentid" id="studentid" value="<?php echo $row_rsStudent['student_id']; ?>" type="text">
	<input  name="studentid" id="studentid" value="<?php echo $row_rsStudent['student_id']; ?>" type="hidden"></div>
</div>

<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Surname</label></div>
	<div id="description-element" class="form-element">
	<input name="surname" id="surname" value="<?php echo $row_rsStudent['surname']; ?>" type="text" <?php echo $disabled ?>;></div>
</div>
<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Firstname</label></div>
	<div id="description-element" class="form-element">
	<input name="firstname" id="firstname" value="<?php echo $row_rsStudent['firstname']; ?>" type="text" <?php echo $disabled ?>;></div>
</div>
<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Middlename</label></div>

	<div id="description-element" class="form-element">
	<input name="middlename" id="middlename" value="<?php echo $row_rsStudent['middlename']; ?>" type="text" <?php echo $disabled ?>;></div>
</div>

<div id="description-wrapper" class="form-wrapper">
<div id="description-label" class="form-label"><label for="description" class="optional">Name Extension</label></div>
	<div id="description-element" class="form-element">
	<input name="nameextension" id="nameextension" value="<?php echo $row_rsStudent['name_extension']; ?>" type="text" <?php echo $disabled ?>;></div>
</div>

<div id="description-wrapper" class="form-wrapper">
<div id="description-label" class="form-label"><label for="description" class="optional">Date of Birth</label></div>
	<div id="description-element" class="form-element">
	<input name="birthday" id="birthday" value="<?php echo $row_rsStudent['birthday']; ?>" type="text" <?php echo $disabled ?>;>
	<p class="description">mm-dd-yyyy</p></div>

</div>

<div id="gender-wrapper" class="form-wrapper"><div id="gender-label" class="form-label">
<label for="gender" class="required">Gender</label></div>
<div id="gender-element" class="form-element" >
<ul class="form-options-wrapper" <?php echo $disabled ?>; >
<?php
if ($row_rsStudent['gender']==1){
	echo "<li><input name=\"gender\" id=\"gender-1\" value=\"1\" checked=\"checked\" type=\"radio\"><label for=\"gender-1\">Male</label></li>";
	echo "<li><input name=\"gender\" id=\"gender-0\" value=\"0\" type=\"radio\"><label for=\"gender-0\">Female</label></li>";
}else{
	echo "<li><input name=\"gender\" id=\"gender-1\" value=\"1\" type=\"radio\"><label for=\"gender-1\">Male</label></li>";
	echo "<li><input name=\"gender\" id=\"gender-0\" value=\"0\" checked=\"checked\" type=\"radio\"><label for=\"gender-0\">Female</label></li>";
}
?>
</ul>
</div></div>


<div id="field_id-wrapper" class="form-wrapper"><div id="field_id-label" class="form-label"><label for="field_id" class="optional">Course</label></div>
<div id="field_id-element" class="form-element">

<select name="course" id="course" <?php echo $disabled ?>;>
<?php
do{
?>
		<option value="<?php echo $row_rsCourse['course_id']?>" <?php if (!(strcmp($row_rsCourse['course_id'], $row_rsStudent['course_id']))) {echo "selected=\"selected\"";} ?>> <?php echo $row_rsCourse['name']?></option>
<?php
		}while ($row_rsCourse = mysql_fetch_assoc($rsCourse));
?>

</select></div></div>

<div id="field_id-wrapper" class="form-wrapper"><div id="field_id-label" class="form-label"><label for="field_id" class="optional">Year Level</label></div>
<div id="field_id-element" class="form-element">

<select name="yearlevel" id="yearlevel" <?php echo $disabled ?>;>
    <option value="I" label="First Year" <?php if ($row_rsStudent['year_level']=="I") echo "selected=\"selected\""; ?>>First Year</option>
    <option value="II" label="Second Year"<?php if ($row_rsStudent['year_level']=="II") echo "selected=\"selected\""; ?>>Second Year</option>
    <option value="III" label="Third Year"<?php if ($row_rsStudent['year_level']=="III") echo "selected=\"selected\""; ?>>Third Year</option>
    <option value="IV" label="Fourth Year"<?php if ($row_rsStudent['year_level']=="IV") echo "selected=\"selected\""; ?>>Fourth Year</option>
    <option value="V" label="Fifth Year"<?php if ($row_rsStudent['year_level']=="V") echo "selected=\"selected\""; ?>>Fifth Year</option>

</select></div></div>

<div id="field_id-wrapper" class="form-wrapper"><div id="field_id-label" class="form-label"><label for="field_id" class="optional">Availed Scholarship</label></div>
<div id="field_id-element" class="form-element">

<select name="scholarship" id="scholarship" <?php echo $disabled ?>;>
    <option value="" label=""></option>
<?php
do{
?>
		<option value="<?php echo $row_rsScholarship['scholarship_id']?>" <?php if (!(strcmp($row_rsScholarship['scholarship_id'], $row_rsStudent['scholarship_id']))) {echo "selected=\"selected\"";} ?>> <?php echo $row_rsScholarship['name']?></option>
<?php
		}while ($row_rsScholarship = mysql_fetch_assoc($rsScholarship));
?>

</select></div></div>

<div id="description-wrapper" class="form-wrapper">
<div id="description-label" class="form-label"><label for="description" class="optional">Place of Birth</label></div>
	<div id="description-element" class="form-element">
	<input name="place_of_birth" id="place_of_birth" value="<?php echo $row_rsStudent['place_of_birth']; ?>" type="text" <?php echo $disabled ?>;></div>
</div>


<div id="civilstatus-wrapper" class="form-wrapper"><div id="civilstatus-label" class="form-label">
<label for="civilstatus" class="required">Civil Status</label></div>
<div id="gender-element" class="form-element" >
<ul class="form-options-wrapper" <?php echo $disabled ?>; >
<?php
if ($row_rsStudent['civil_status']==1){
	echo "<li><input name=\"civil_status\" id=\"civilstatus-1\" value=\"1\" checked=\"checked\" type=\"radio\"><label for=\"civilstatus-1\">Single</label></li>";
	echo "<li><input name=\"civil_status\" id=\"civilstatus-0\" value=\"0\" type=\"radio\"><label for=\"civilstatus-0\">Married</label></li>";
}else{
	echo "<li><input name=\"civil_status\" id=\"civilstatus-1\" value=\"1\" type=\"radio\"><label for=\"gender-1\">Single</label></li>";
	echo "<li><input name=\"civil_status\" id=\"civilstatus-0\" value=\"0\" checked=\"checked\" type=\"radio\"><label for=\"gender-0\">Married</label></li>";
}
?>
</ul>
</div></div>


<div id="description-wrapper" class="form-wrapper">
<div id="description-label" class="form-label"><label for="description" class="optional">Phone</label></div>
	<div id="description-element" class="form-element">
	<input name="phone" id="phone" value="<?php echo $row_rsStudent['phone']; ?>" type="text" <?php echo $disabled ?>;></div>
</div>

<div id="description-wrapper" class="form-wrapper">
<div id="description-label" class="form-label"><label for="description" class="optional">Street</label></div>
	<div id="description-element" class="form-element">
	<input name="street" id="street" value="<?php echo $row_rsStudent['street']; ?>" type="text" <?php echo $disabled ?>;></div>
</div>

<div id="description-wrapper" class="form-wrapper">
<div id="description-label" class="form-label"><label for="description" class="optional">Barangay</label></div>
	<div id="description-element" class="form-element">
	<input name="brgy" id="brgy" value="<?php echo $row_rsStudent['brgy']; ?>" type="text" <?php echo $disabled ?>;></div>
</div>

<div id="description-wrapper" class="form-wrapper">
<div id="description-label" class="form-label"><label for="description" class="optional">Town</label></div>
	<div id="description-element" class="form-element">
	<input name="town" id="town" value="<?php echo $row_rsStudent['town']; ?>" type="text" <?php echo $disabled ?>;></div>
</div>

<div id="field_id-wrapper" class="form-wrapper"><div id="field_id-label" class="form-label"><label for="field_id" class="optional">Province</label></div>
<div id="field_id-element" class="form-element">

<select name="province" id="province" <?php echo $disabled ?>;>
<?php
do{
?>
		<option value="<?php echo $row_rsProvince['province_name']?>" <?php if (!(strcmp($row_rsProvince['province_name'], $row_rsStudent['province']))) {echo "selected=\"selected\"";} ?>> <?php echo $row_rsProvince['province_name']?></option>
<?php
		}while ($row_rsProvince = mysql_fetch_assoc($rsProvince));
?>

</select></div></div>


<div id="description-wrapper" class="form-wrapper">
<div id="description-label" class="form-label"><label for="description" class="optional">Doctor Of Medicine</label></div>
	<div id="description-element" class="form-element">
	<input name="doctor" id="doctor" value="<?php echo $row_rsStudent['doctor']; ?>" type="text" <?php echo $disabled ?>;></div>
</div>

<div id="description-wrapper" class="form-wrapper"><h3>Background Education</h3></div>
<div id="description-wrapper" class="form-wrapper">
<div id="description-label" class="form-label"><label for="description" class="optional">Elementary</label></div>
	<div id="description-element" class="form-element">
	<input name="elementary" id="elementary" value="<?php echo $row_rsStudent['elementary']; ?>" type="text" <?php echo $disabled ?>;></div>
</div>

<div id="description-wrapper" class="form-wrapper">
<div id="description-label" class="form-label"><label for="description" class="optional">Secondary</label></div>
	<div id="description-element" class="form-element">
	<input name="secondary" id="secondary" value="<?php echo $row_rsStudent['secondary']; ?>" type="text" <?php echo $disabled ?>;></div>
</div>

<div id="description-wrapper" class="form-wrapper">
<div id="description-label" class="form-label"><label for="description" class="optional">College</label></div>
	<div id="description-element" class="form-element">
	<input name="college" id="college" value="<?php echo $row_rsStudent['college']; ?>" type="text" <?php echo $disabled ?>;></div>
</div>


<div id="transferee-wrapper" class="form-wrapper"><div id="transferee-label" class="form-label">
<label for="transferee" class="required">Transferee</label></div>
<div id="transferee-element" class="form-element" >
<ul class="form-options-wrapper" <?php echo $disabled ?>; >
<?php
if ($row_rsStudent['transferee']==1){
	echo "<li><input name=\"transferee\" id=\"transferee-0\" value=\"0\" checked=\"checked\" type=\"radio\"><label for=\"transferee-0\">No</label></li>";
	echo "<li><input name=\"transferee\" id=\"transferee-1\" value=\"1\" type=\"radio\"><label for=\"transferee-1\">Yes</label></li>";
}else{
	echo "<li><input name=\"transferee\" id=\"transferee-0\" value=\"0\" type=\"radio\"><label for=\"transferee-0\">No</label></li>";
	echo "<li><input name=\"transferee\" id=\"transferee-1\" value=\"1\" checked=\"checked\" type=\"radio\"><label for=\"transferee-1\">Yes</label></li>";
}
?>
</ul>
</div></div>


<div class="form-wrapper" id="buttons-wrapper" style="<?php echo $hide ?>;"><fieldset id="fieldset-buttons">
<button name="submit" id="submit" type="submit">Update</button></fieldset>
 </div>

</div></div></div></form></div>




</div>
</div>
</body></html>
<?php
mysql_free_result($rsCourse);
mysql_free_result($rsStudent);
mysql_free_result($rsProvince);
?>