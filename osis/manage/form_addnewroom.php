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
		$room_id=$_POST['room_id'];
		$location=$_POST['location'];
		
		
		include("../functions/dbcon.php");
		$query_rsUsers ="INSERT INTO room 
		(room_id,location)
		VALUES ('$room_id', '$location')";
		mysql_query($query_rsUsers, $con) or die(mysql_error());
		mysql_close ($con);
		header("Location: room.php");
}
include("../functions/dbcon.php");
$query_rsRoom = "SELECT room_id,location FROM room";
$rsRoom = mysql_query($query_rsRoom, $con) or die(mysql_error());
$row_rsRoom = mysql_fetch_assoc($rsRoom);
$totalRows_rsRoom = mysql_num_rows($rsRoom);

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
<form id="admin-form" enctype="application/x-www-form-urlencoded" class="global_form" action="<?php echo $_SERVER['PHP_SELF']?>" method="post"><div><div><h3>Add New Room</h3>
<p class="form-description"> Please fill in the boxes below and click Save to add new room record.</p>
<div class="form-elements">
<div id="title-wrapper" class="form-wrapper">
	<div id="title-label" class="form-label"><label for="title" class="required">Room ID</label></div>
	<div id="title-element" class="form-element"><input maxlength="12" name="room_id" id="room_id" value="" type="text"></div>
</div>
<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Location</label></div>
	<div id="description-element" class="form-element"><input name="location" id="location" value="" type="text"></div>
</div>




<div class="form-wrapper" id="buttons-wrapper"><fieldset id="fieldset-buttons">
<button name="submit" id="submit" type="submit">Save</button>
 or <a name="cancel" id="cancel" type="button" href="students.php">cancel</a></fieldset>
 </div>

</div></div></div></form></div>
	
	
	</div>
  </div>
</body></html>