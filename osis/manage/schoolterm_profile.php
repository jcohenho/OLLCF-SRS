<?php
if (!isset($_SESSION)) {
  session_start();

include "../logout.php";


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



if(isset($_POST['submit'])){
		$term_code = $_POST['term_code'];
		$date_start=$_POST['date_start'];
		$date_end=$_POST['date_end'];
		$semester=$_POST['semester'];
	
		$open = $_POST['open'];
		include("../functions/dbcon.php");
		$query_rsUsers ="UPDATE schoolterm SET 
			date_start='$date_start',
			date_end = '$date_end',
			semester='$semester',
			open='$open'
			WHERE term_code='$term_code'";
		mysql_query($query_rsUsers, $con) or die(mysql_error());
}

if(isset($_GET['sid'])){
	$id=$_GET['sid'];
	include("../functions/dbcon.php");
	$query_rsTerm ="SELECT *
	FROM schoolterm WHERE term_code='$id'";
	$rsTerm = mysql_query($query_rsTerm, $con) or die(mysql_error());
	$row_rsTerm = mysql_fetch_assoc($rsTerm);
}




?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir="ltr" xml:lang="en_US" xmlns="http://www.w3.org/1999/xhtml" lang="en_US"><head>
<title>Term Panel</title>
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
  
  echo ucwords($row_rsTerm['date_start'])." to ".ucwords($row_rsTerm['date_end'])." Semester ".ucwords($row_rsTerm['semester']);?>
 </h2>
 
<?php
include "schoolterm_panel_menu.php";
?>

<div class="settings">
<form id="admin-form" enctype="" class="global_form" action="<?php echo $_SERVER['PHP_SELF']."?sid=".$row_rsTerm['term_code']?>" method="post"><div><div><h3>Term Profile</h3>
<p class="form-description"> Click Update to save changes to the term profile.</p>
<div class="form-elements">
<div id="title-wrapper" class="form-wrapper">
	<div id="title-label" class="form-label"><label for="title" class="required">School Term Code</label></div>
	<div id="title-element" class="form-element"><input  disabled="true" name="term_code" id="term_code" value="<?php echo $row_rsTerm['term_code']; ?>" type="text">
	<input  name="term_code" id="term_code" value="<?php echo $row_rsTerm['term_code']; ?>" type="hidden"></div>
</div>


<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Start Date</label></div>

	<div id="description-element" class="form-element">
	<input name="date_start" id="date_start" value="<?php echo $row_rsTerm['date_start']; ?>" type="text"></div>
</div>

<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">End Date</label></div>

	<div id="description-element" class="form-element">
	<input name="date_end" id="date_end" value="<?php echo $row_rsTerm['date_end']; ?>" type="text"></div>
</div>




<div id="field_id-wrapper" class="form-wrapper"><div id="field_id-label" class="form-label"><label for="field_id" class="optional">Semester</label></div>
<div id="field_id-element" class="form-element">

<select name="semester" id="semester">
    <option value="1" label="1st" <?php if ($row_rsTerm['semester']=="1") echo "selected=\"selected\""; ?>>1st</option>
    <option value="2" label="2nd"<?php if ($row_rsTerm['semester']=="2") echo "selected=\"selected\""; ?>>2nd</option>
    <option value="3" label="Summer"<?php if ($row_rsTerm['semester']=="3") echo "selected=\"selected\""; ?>>Summer</option>
  

</select></div></div>



<div id="field_id-wrapper" class="form-wrapper"><div id="field_id-label" class="form-label"><label for="field_id" class="optional">Open</label></div>
<div id="field_id-element" class="form-element">

<select name="open" id="open">
    <option value="1" label="open" <?php if ($row_rsTerm['open']=="1") echo "selected=\"selected\""; ?>>Open</option>
    <option value="0" label="close"<?php if ($row_rsTerm['open']=="0") echo "selected=\"selected\""; ?>>Close</option>
   
  

</select></div></div>



<div class="form-wrapper" id="buttons-wrapper"><fieldset id="fieldset-buttons">
<button name="submit" id="submit" type="submit">Update</button></fieldset>
 </div>

</div></div></div></form></div>




</div>
</div>
</body></html>
<?php
mysql_free_result($rsTerm);

?>