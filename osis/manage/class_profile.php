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
		$class_code=$_POST['class_code'];
		$section=$_POST['section'];
		$faculty_id=$_POST['faculty_id'];
		$subject_code=$_POST['subject_code'];
		$time=$_POST['time'];
		$room_id=$_POST['room_id'];
		$term_code=$_POST['term_code'];
		
		include("../functions/dbcon.php");
		$query_rsUsers ="UPDATE class_info SET 
			section = '$section',
			faculty_id='$faculty_id',
			subject_code='$subject_code',
			time='$time',
			room_id='$room_id',
			term_code='$term_code'
			WHERE class_code='$class_code'";
		mysql_query($query_rsUsers, $con) or die(mysql_error());
}

if(isset($_GET['sid'])){
	$id=$_GET['sid'];
	include("../functions/dbcon.php");
	$query_rsClass ="SELECT *
	FROM (class_info LEFT JOIN subject USING (subject_code)) LEFT JOIN faculty_info USING (faculty_id) LEFT JOIN room USING (room_id) WHERE class_code='$id'";
	$rsClass = mysql_query($query_rsClass, $con) or die(mysql_error());
	$row_rsClass = mysql_fetch_assoc($rsClass);
}

include("../functions/dbcon.php");
$query_rsSubject = "SELECT subject_code,description FROM subject";
$rsSubject = mysql_query($query_rsSubject, $con) or die(mysql_error());
$row_rsSubject = mysql_fetch_assoc($rsSubject);
$totalRows_rsSubject = mysql_num_rows($rsSubject);

include("../functions/dbcon.php");
$query_rsTeacher = "SELECT faculty_id,firstname,surname FROM faculty_info";
$rsTeacher = mysql_query($query_rsTeacher, $con) or die(mysql_error());
$row_rsTeacher = mysql_fetch_assoc($rsTeacher);
$totalRows_rsTeacher = mysql_num_rows($rsTeacher);

include("../functions/dbcon.php");
$query_rsRoom = "SELECT room_id,location FROM room";
$rsRoom = mysql_query($query_rsRoom, $con) or die(mysql_error());
$row_rsRoom = mysql_fetch_assoc($rsRoom);
$totalRows_rsRoom = mysql_num_rows($rsRoom);

include("../functions/dbcon.php");
$query_rsTerm = "SELECT term_code,date_start,date_end,semester FROM schoolterm ORDER BY date_start DESC, date_end DESC, semester DESC";
$rsTerm = mysql_query($query_rsTerm, $con) or die(mysql_error());
$row_rsTerm = mysql_fetch_assoc($rsTerm);
$totalRows_rsTerm = mysql_num_rows($rsTerm);

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir="ltr" xml:lang="en_US" xmlns="http://www.w3.org/1999/xhtml" lang="en_US"><head>
<title>Class Panel</title>
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
  
  echo strtoupper($row_rsClass['class_code'])." :: ".ucwords($row_rsClass['description']);?>
 </h2>
 
<?php
include "class_panel_menu.php";
?>

<div class="settings">
<form id="admin-form" enctype="" class="global_form" action="<?php echo $_SERVER['PHP_SELF']."?sid=".$row_rsClass['class_code']?>" method="post"><div><div><h3>Class Profile</h3>
<p class="form-description"> Click Update to save changes to the class profile.</p>
<div class="form-elements">
<div id="title-wrapper" class="form-wrapper">
	<div id="title-label" class="form-label"><label for="title" class="required">Class Code</label></div>
	<div id="title-element" class="form-element"><input  disabled="true" name="class_code" id="class_code" value="<?php echo $row_rsClass['class_code']; ?>" type="text">
	<input  name="class_code" id="class_code" value="<?php echo $row_rsClass['class_code']; ?>" type="hidden"></div>
</div>



<div id="field_id-wrapper" class="form-wrapper"><div id="field_id-label" class="form-label"><label for="field_id" class="optional">Subject</label></div>
<div id="field_id-element" class="form-element">

<select name="subject_code" id="subject_code">
<?php
do{
?>
		<option value="<?php echo $row_rsSubject['subject_code']?>" <?php if (!(strcmp($row_rsSubject['subject_code'], $row_rsClass['subject_code']))) {echo "selected=\"selected\"";} ?>> <?php echo $row_rsSubject['description']?></option>
<?php
		}while ($row_rsSubject = mysql_fetch_assoc($rsSubject));
?>

</select></div></div>



<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Section</label></div>

	<div id="description-element" class="form-element">
	<input name="section" id="section" value="<?php echo $row_rsClass['section']; ?>" type="text"></div>
</div>

<div id="field_id-wrapper" class="form-wrapper"><div id="field_id-label" class="form-label"><label for="field_id" class="optional">Faculty</label></div>
<div id="field_id-element" class="form-element">

<select name="faculty_id" id="faculty_id">
    <option value="" label=""></option>
<?php
do{
?>
		<option value="<?php echo $row_rsTeacher['faculty_id']?>" <?php if (!(strcmp($row_rsTeacher['faculty_id'], $row_rsClass['faculty_id']))) {echo "selected=\"selected\"";} ?>> <?php echo $row_rsTeacher['firstname']." ".$row_rsTeacher['surname']?></option>
<?php
		}while ($row_rsTeacher = mysql_fetch_assoc($rsTeacher));
?>

</select></div></div>



<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Time</label></div>

	<div id="description-element" class="form-element">
	<input name="time" id="time" value="<?php echo $row_rsClass['time']; ?>" type="text"></div>
</div>




<div id="field_id-wrapper" class="form-wrapper"><div id="field_id-label" class="form-label"><label for="field_id" class="optional">Room</label></div>
<div id="field_id-element" class="form-element">

<select name="room_id" id="room_id">
<?php
do{
?>
		<option value="<?php echo $row_rsRoom['room_id']?>" <?php if (!(strcmp($row_rsRoom['room_id'], $row_rsClass['room_id']))) {echo "selected=\"selected\"";} ?>> <?php echo $row_rsRoom['location']?></option>
<?php
		}while ($row_rsRoom = mysql_fetch_assoc($rsRoom));
?>

</select></div></div>


<div id="field_id-wrapper" class="form-wrapper"><div id="field_id-label" class="form-label"><label for="field_id" class="optional">School Term</label></div>
<div id="field_id-element" class="form-element">

<select name="term_code" id="term_code">
<?php
do{
	switch($row_rsTerm['semester']){
	case 1: $sem = "1<sup>st</sup>";break;
	case 2: $sem = "2<sup>nd</sup>";break;
	case 3: $sem = "Summer";
}
?>
		<option value="<?php echo $row_rsTerm['term_code']?>" <?php if (!(strcmp($row_rsTerm['term_code'], $row_rsClass['term_code']))) {echo "selected=\"selected\"";} ?>> <?php echo substr($row_rsTerm['date_start'],0,4)." to ".substr($row_rsTerm['date_end'],0,4)." ".$sem." semester" ?></option>
<?php
		}while ($row_rsTerm = mysql_fetch_assoc($rsTerm));
?>

</select></div></div>



<div class="form-wrapper" id="buttons-wrapper"><fieldset id="fieldset-buttons">
<button name="submit" id="submit" type="submit">Update</button></fieldset>
 </div>

</div></div></div></form></div>




</div>
</div>
</body></html>
<?php
mysql_free_result($rsClass);
mysql_free_result($rsTeacher);
mysql_free_result($rsSubject);
mysql_free_result($rsRoom);
?>