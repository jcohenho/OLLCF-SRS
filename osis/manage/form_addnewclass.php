<?php 

//initialize the session
if (!isset($_SESSION)) {
  session_start();
include "../logout.php";
}

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




if(isset($_POST['submit'])){
	
		$section=$_POST['section']; 
		$faculty_id=$_POST['faculty_id'];
		$subject_code=$_POST['subject_code'];
		$time=$_POST['time'];
		$room_id=$_POST['room_id'];
		$term_code = $_POST['term_code'];
		
		include("../functions/dbcon.php");
		$query_rsUsers ="INSERT INTO class_info
		(section, faculty_id,subject_code,time,room_id,term_code)
		VALUES ('$section', '$faculty_id', '$subject_code','$time','$room_id','$term_code')";
		mysql_query($query_rsUsers, $con) or die(mysql_error());
		mysql_close ($con);
		header("Location: class.php");
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
$query_rsTerm = "SELECT term_code,date_start,date_end,semester FROM schoolterm ORDER BY date_start DESC,date_end DESC, semester DESC";
$rsTerm = mysql_query($query_rsTerm, $con) or die(mysql_error());
$row_rsTerm = mysql_fetch_assoc($rsTerm);
$totalRows_rsTerm = mysql_num_rows($rsTerm);


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
<form id="admin-form" enctype="application/x-www-form-urlencoded" class="global_form" action="<?php echo $_SERVER['PHP_SELF']?>" method="post"><div><div><h3>Add New Class</h3>
<p class="form-description"> Please fill in the boxes below and click Save to add new class record.</p>
<div class="form-elements">


<div id="field_id-wrapper" class="form-wrapper"><div id="field_id-label" class="form-label"><label for="field_id" class="optional">Subject</label></div>
<div id="field_id-element" class="form-element">

<select name="subject_code" id="subject_code">
	<?php
do{
?>
		<option value="<?php echo $row_rsSubject['subject_code']?>"> <?php echo $row_rsSubject['description']?></option>
<?php
		}while ($row_rsSubject = mysql_fetch_assoc($rsSubject));
		mysql_free_result($rsSubject);
		mysql_close ($con);
?>
	
</select></div></div>


<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Section</label></div>
	<div id="description-element" class="form-element"><input name="section" id="section" value="" type="text"></div>
</div>

<div id="field_id-wrapper" class="form-wrapper"><div id="field_id-label" class="form-label"><label for="field_id" class="optional">Faculty</label></div>
<div id="field_id-element" class="form-element">

<select name="faculty_id" id="faculty_id">
	<?php
do{
?>
		<option value="<?php echo $row_rsTeacher['faculty_id']?>"> <?php echo $row_rsTeacher['firstname']." ".$row_rsTeacher['surname']?> </option>
<?php
		}while ($row_rsTeacher = mysql_fetch_assoc($rsTeacher));
		mysql_free_result($rsTeacher);
		mysql_close ($con);
?>
	
</select></div></div>




<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Time</label></div>
	<div id="description-element" class="form-element"><input name="time" id="time" value="" type="text"></div>
</div>

<div id="field_id-wrapper" class="form-wrapper"><div id="field_id-label" class="form-label"><label for="field_id" class="optional">Room</label></div>
<div id="field_id-element" class="form-element">

<select name="room_id" id="room_id">
	<?php
do{
?>
		<option value="<?php echo $row_rsRoom['room_id']?>"> <?php echo $row_rsRoom['location']?> </option>
<?php
		}while ($row_rsRoom = mysql_fetch_assoc($rsRoom));
		mysql_free_result($rsRoom);
		mysql_close ($con);
?>
	
</select></div></div>





<div id="field_id-wrapper" class="form-wrapper"><div id="field_id-label" class="form-label"><label for="field_id" class="optional">School Term</label></div>
<div id="field_id-element" class="form-element">

<select name="term_code" id="term_code">
	<?php

do{
	//formatting for semester
	switch($row_rsTerm['semester']){
	case 1: $sem = "1<sup>st</sup>";break;
	case 2: $sem = "2<sup>nd</sup>";break;
	case 3: $sem = "Summer";
	}
	
?>
		<option value="<?php echo $row_rsTerm['term_code']?>"> <?php echo substr($row_rsTerm['date_start'],0,4)." to ".substr($row_rsTerm['date_end'],0,4)." ".$sem." semester"?> </option>
<?php
		}while ($row_rsTerm = mysql_fetch_assoc($rsTerm));
		mysql_free_result($rsTerm);
		mysql_close ($con);
?>
	
</select></div></div>








</div></div>









<div class="form-wrapper" id="buttons-wrapper"><fieldset id="fieldset-buttons">
<button name="submit" id="submit" type="submit">Save</button>
 or <a name="cancel" id="cancel" type="button" href="class.php">cancel</a></fieldset>
 </div>

</div></div></div></form></div>
	
	
	</div>
  </div>
</body></html>