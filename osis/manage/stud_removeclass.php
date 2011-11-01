<?php


//initialize the session
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

else{
	header("Location: ../error_unauthorized.php");
}



}

if(isset($_GET['sid'])){
	$id=$_GET['sid'];
	include("../functions/dbcon.php");
	$query_rsStudent ="SELECT * FROM student_info WHERE student_id='$id'";
	$rsStudent = mysql_query($query_rsStudent, $con) or die(mysql_error());
	$row_rsStudent = mysql_fetch_assoc($rsStudent);
}

include("../functions/global_functions.php");

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir="ltr" xml:lang="en_US" xmlns="http://www.w3.org/1999/xhtml" lang="en_US">
<head>

	<title>Manage Students</title>
	<link href="../css.css" media="screen" rel="stylesheet" type="text/css">
	<link href="favicon.ico" rel="favicon" type="image/x-icon">
	
</head><body>

  <!-- TOP HEADER BAR -->
<?php
include "../globalheader.php";
?>

  <!-- BEGIN CONTENT -->
  <div id="global_content_wrapper">
    <div id="global_content">
      
<h2>Manage Student
<strong> [ <?php 
			$string = $row_rsStudent['middlename'];
			$words = explode(" ", $string);
			$mname = "";
			foreach ($words as $value) {
				$mname .= strtoupper(substr($value, 0, 1));
			}
		  echo strtoupper($row_rsStudent['surname'])." ".ucwords($row_rsStudent['firstname'])." ".$mname;
		  mysql_free_result($rsStudent);
		  ?> ]
</strong>
</h2>
<p> Your selected student classes for dropping or removal will are listed below.</p>
<?php

include "stud_panel_menu.php";

if(isset($_POST['removeConfirmed'])){
	$class = $_POST['classList'];
	$countCheck = count($_POST['classList']);
	for($i=0; $i<$countCheck; $i++){
		$id=$_GET['sid'];
		$classcode  = $class[$i];
		include ("../functions/dbcon.php");
		if($_GET['action']=="rem")$query_rsRemove ="DELETE FROM class WHERE student_id='$id' AND class_code='$classcode'";
		elseif($_GET['action']=="drop"){
			if($_GET['to']==1)$query_rsRemove ="UPDATE class SET dropped=1 WHERE student_id='$id' AND class_code='$classcode'";
			else $query_rsRemove ="UPDATE class SET dropped=0 WHERE student_id='$id' AND class_code='$classcode'";
		}
		$rsRemove = mysql_query($query_rsRemove, $con) or die(mysql_error());
		mysql_close ($con);

	}
	if($_GET['action']=="rem")echo "<div class=\"tip\"><span>Class(es) was successfully removed.</span></div>"; 
	else echo "<div class=\"tip\"><span>Class status was successfully changed.</span></div>";
	exit;
}
if(isset($_POST['removeClass'])){
	if (empty($_POST['checkboxList'])){
	echo "<div class=\"tip\"><span>No selected classes to remove.</span></div>";
	exit;
	}
}

if (isset($_POST['removeClass'])) $action="rem";
else $action=$_GET['action'];

?>


<div class="admin_table_form">
<form id="StudentList" name="StudentList" method="post" action="<?php echo $_SERVER['PHP_SELF']."?sid=".$_GET['sid']."&action=".$action."&to=".$_GET['to'];?>">

  <table class="admin_table">
    <thead>

      <tr>
        <th style="width: 1%;"></th>
        <th style="width: 1%;"><a href="" onclick="">Class Code</a></th>
        <th><a href="" onclick="">Subject Name</a></th>
        <th><a href="" onclick="">Time</a></th>
		<th><a href="" onclick="">Room</a></th>
		<th style="width: 1%;"><a href="" >Section</a></th>
		<th style="width: 1%;"><a href="">Grade</a></th>
        <th style="width: 1%;" class="admin_table_centered"><a href="" >School Year</a></th>
		<th style="width: 1%;" class="admin_table_centered"><a href="">Term</a></th>
      </tr>
    </thead>
    <tbody>
	
<?php 

if(isset($_POST['removeClass']) || isset($_GET['ccode'])){
	
	$class = $_POST['checkboxList'];
	if (isset($_POST['removeClass'])){$countCheck = count($_POST['checkboxList']);}
	elseif(isset($_GET['ccode'])){$countCheck=1;}

	for($i=0; $i<$countCheck; $i++){
		$id  = $_GET['sid'];
		if (isset($_POST['removeClass']))$classcode  = $class[$i]; 
		elseif(isset($_GET['ccode'])) $classcode  = $_GET['ccode'];

		include("../functions/dbcon.php");
		$sql = "SELECT class_code, grade, time, room_id, section, subject_code, description, term_code, date_start, semester
			FROM (class LEFT JOIN class_info USING (class_code)
			LEFT JOIN subject USING (subject_code)
			LEFT JOIN schoolterm USING (term_code))
			WHERE student_id='$id' AND class_code='$classcode'";
			
		$rsRemove = mysql_query($sql);
		$row_rsRemove = mysql_fetch_assoc($rsRemove);
			
	?>
        <tr>
            <td><input checked="checked" style="display:none;" type="checkbox" name="classList[]" id="classList<?php echo $row_rsRemove['class_code'];?>" class="checkbox"  value="<?php echo $row_rsRemove['class_code'];?>"></td>
            <td><?php echo $row_rsRemove['class_code']?></td>
            <td class="admin_table_bold"><?php echo $row_rsRemove['description']?></td>
            <td class="admin_table_user"><?php echo $row_rsRemove['time']?></td>
			<td class="admin_table_user"><?php echo $row_rsRemove['room_id']?></td>
			<td class="admin_table_centered"><?php echo $row_rsRemove['section']?></td>
			<td class="admin_table_centered"><?php echo $row_rsRemove['grade']?></td>
            <td class="admin_table_centered"><?php echo $row_rsRemove['date_start']?></td>
			<td class="admin_table_centered">
			<?php 
				switch($row_rsRemove['semester']){
				case 1: echo "1<sup>st</sup>";break;
				case 2: echo "2<sup>nd</sup>";break;
				case 3: echo "Summer";
				}
			?>
				</td>
        </tr>            
	<?php
		mysql_free_result($rsRemove);
	}
}
	?>
           
                  </tbody>
  </table>

	<br>
	<div class="form-wrapper" id="buttons-wrapper">
		<fieldset id="fieldset-buttons">
			<button name="removeConfirmed" id="removeConfirmed" type="submit">
			<?php if(isset($_POST['removeClass']) || ($_GET['action']=="rem")) echo "Remove class(es)"; 
			elseif($_GET['action']=="drop") echo "Change drop status";?></button>
			or <a name="cancel" id="cancel" type="button" href="stud_classes.php<?php echo "?sid=".$_GET['sid']; ?>">cancel</a>
		</fieldset>
	</div>
</form>
</div>


    </div>
  </div>
</body></html>
