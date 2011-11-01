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
      
<h2>Manage Students</h2>
<p> Your class selection for enrollment are listed below.</p>
<?php
include "stud_panel_menu.php";

if(isset($_POST['enrollConfirmed'])){
	$class = $_POST['classList'];
	$countCheck = count($_POST['classList']);
	for($i=0; $i<$countCheck; $i++){
		$id=$_GET['sid'];
		$classcode  = $class[$i];
		include ("../functions/dbcon.php");
		$query_rsEnroll ="INSERT INTO class (class_code,student_id)VALUES ('$classcode', '$id')";
		$rsEnroll = mysql_query($query_rsEnroll, $con) or die(mysql_error());
		mysql_close ($con);

	}
	
	echo "<div class=\"tip\"><span>New class(es) was successfully enrolled.</span></div>"; exit;
}

if(isset($_POST['enrollClass'])){
	if (empty($_POST['checkboxList'])){echo "<div class=\"tip\"><span>No selected classes to enroll.</span></div>"; exit;}
}
?>
<div class="admin_table_form">
<form id="studentlist" name="studentlist" method="post" action="<?php echo $_SERVER['PHP_SELF']."?sid=".$_GET['sid'];?>">
  <table class="admin_table">
    <thead>
      <tr>
        <th style="width: 1%;"></th>
        <th style="width: 1%;">No.</th>
        <th>Class Code</th>
		<th>Subject Code</th>
		<th>Subject Name</th>
		<th>Time</th>
		<th>Section</th>
		<th>Units</th>
      </tr>
    </thead>
    <tbody>
	
<?php 

if((isset($_POST['enrollClass'])) || (isset($_GET['enroll']))){
	
	$class = $_POST['checkboxList'];
	if (isset($_POST['enrollClass'])){$countCheck = count($_POST['checkboxList']);}else{$countCheck=1;}

	for($i=0; $i<$countCheck; $i++){
		if (isset($_POST['enrollClass']))$classcode  = $class[$i]; else $classcode  = $_GET['enroll'];
		
		include("../functions/dbcon.php");
		$sql = "SELECT class_code, time, section, subject_code, description, units
				FROM class_info LEFT JOIN subject USING (subject_code)
				WHERE class_code = '$classcode'";
		$rsEnroll = mysql_query($sql);
		$row_rsEnroll = mysql_fetch_assoc($rsEnroll);
			
	?>	
		<tr>
		<td><input checked="checked" style="display:none;" type="checkbox" name="classList[]" id="classList<?php echo $row_rsEnroll['class_code'];?>" class="checkbox"  value="<?php echo $row_rsEnroll['class_code'];?>"></td>
        <td class="admin_table_user"><?php echo $i+1; ?></td>
		<td><?php echo $row_rsEnroll['class_code'];?></td>
		<td><?php echo $row_rsEnroll['subject_code'];?></td>
		<td><?php echo $row_rsEnroll['description'];?></td>
		<td><?php echo $row_rsEnroll['time'];?></td>
		<td><?php echo $row_rsEnroll['section'];?></td>
		<td><?php echo $row_rsEnroll['units'];?></td>
		</tr>
	<?php
		mysql_free_result($rsEnroll);
	}
}
	?>
		          
        
    </tbody>
  </table>
	<br>
	<div class="form-wrapper" id="buttons-wrapper">
		<fieldset id="fieldset-buttons">
			<button name="enrollConfirmed" id="enrollConfirmed" type="submit">Enroll</button>
			or <a name="cancel" id="cancel" type="button" href="stud_openclass.php<?php echo "?sid=".$_GET['sid']; ?>">cancel</a>
		</fieldset>
	</div>

</form>
</div>

    </div>
  </div>
</body></html>