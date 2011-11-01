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
		$room_id=$_POST['room_id'];
		$location=$_POST['location'];
		
		include("../functions/dbcon.php");
		$query_rsUsers ="UPDATE room SET 
			location='$location'
			
			WHERE room_id='$room_id'";
		mysql_query($query_rsUsers, $con) or die(mysql_error());
}

if(isset($_GET['sid'])){
	$id=$_GET['sid'];
	include("../functions/dbcon.php");
	$query_rsRoom ="SELECT * FROM room WHERE room_id='$id'";
	$rsRoom = mysql_query($query_rsRoom, $con) or die(mysql_error());
	$row_rsRoom = mysql_fetch_assoc($rsRoom);
}




?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir="ltr" xml:lang="en_US" xmlns="http://www.w3.org/1999/xhtml" lang="en_US"><head>
<title>Room Panel</title>
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
  	
  echo strtoupper("Room ".$row_rsRoom['location']);?>
 </h2>
 
 <?php
include "room_panel_menu.php";
?>


<div class="settings">
<form id="admin-form" enctype="" class="global_form" action="<?php echo $_SERVER['PHP_SELF']."?sid=".$row_rsRoom['room_id']?>" method="post"><div><div><h3>Room Profile</h3>
<p class="form-description"> Click Update to save changes to the room profile.</p>
<div class="form-elements">
<div id="title-wrapper" class="form-wrapper">
	<div id="title-label" class="form-label"><label for="title" class="required">Room ID</label></div>
	<div id="title-element" class="form-element"><input  disabled="true" name="room_id" id="room_id" value="<?php echo $row_rsRoom['room_id']; ?>" type="text">
	<input  name="room_id" id="room_id" value="<?php echo $row_rsRoom['room_id']; ?>" type="hidden"></div>
</div>

<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Location</label></div>
	<div id="description-element" class="form-element">
	<input name="location" id="location" value="<?php echo $row_rsRoom['location']; ?>" type="text"></div>
</div>


<div class="form-wrapper" id="buttons-wrapper"><fieldset id="fieldset-buttons">
<button name="submit" id="submit" type="submit">Update</button></fieldset>
 </div>

</div></div></div></form></div>




</div>
</div>
</body></html>
<?php
mysql_free_result($rsRoom);

?>