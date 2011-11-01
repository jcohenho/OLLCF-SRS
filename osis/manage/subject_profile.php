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
		$subject_code=$_POST['subject_code'];
		$description=$_POST['description']; 
		$units=$_POST['units'];
		
		include("../functions/dbcon.php");
		$query_rsUsers ="UPDATE subject SET 
			subject_code = '$subject_code',
			description='$description',
			units='$units'
			WHERE subject_code='$subject_code'";
		mysql_query($query_rsUsers, $con) or die(mysql_error());
}

if(isset($_GET['sid'])){
	$id=$_GET['sid'];
	include("../functions/dbcon.php");
	$query_rsSubject ="SELECT *
	FROM subject WHERE subject_code='$id'";
	$rsSubject = mysql_query($query_rsSubject, $con) or die(mysql_error());
	$row_rsSubject = mysql_fetch_assoc($rsSubject);
}



?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir="ltr" xml:lang="en_US" xmlns="http://www.w3.org/1999/xhtml" lang="en_US"><head>
<title>Subject Panel</title>
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
  
  echo strtoupper($row_rsSubject['subject_code'])." :: ".ucwords($row_rsSubject['description']);?>
 </h2>
 <?php
include "subject_panel_menu.php";
?>


<div class="settings">
<form id="admin-form" enctype="" class="global_form" action="<?php echo $_SERVER['PHP_SELF']."?sid=".$row_rsSubject['subject_code']?>" method="post"><div><div><h3>Subject Profile</h3>
<p class="form-description"> Click Update to save changes to the subject profile.</p>
<div class="form-elements">
<div id="title-wrapper" class="form-wrapper">
	<div id="title-label" class="form-label"><label for="title" class="required">Subject Code</label></div>
	<div id="title-element" class="form-element"><input  disabled="true" name="subject_code" id="subject_code" value="<?php echo $row_rsSubject['subject_code']; ?>" type="text">
	<input  name="subject_code" id="subject_code" value="<?php echo $row_rsSubject['subject_code']; ?>" type="hidden"></div>
</div>



<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Subject</label></div>

	<div id="description-element" class="form-element">
	<input name="description" id="description" value="<?php echo $row_rsSubject['description']; ?>" type="text"></div>
</div>



<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Units</label></div>

	<div id="description-element" class="form-element">
	<input name="units" id="units" value="<?php echo $row_rsSubject['units']; ?>" type="text"></div>
</div>

<div class="form-wrapper" id="buttons-wrapper"><fieldset id="fieldset-buttons">
<button name="submit" id="submit" type="submit">Update</button></fieldset>
 </div>

</div></div></div></form></div>




</div>
</div>
</body></html>
<?php
mysql_free_result($rsSubject);

?>