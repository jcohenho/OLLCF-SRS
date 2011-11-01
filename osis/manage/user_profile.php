<?php
if (!isset($_SESSION)) {
  session_start();

include "../logout.php";


$level = $_SESSION['level'];
if( $level == ""){
	
	header("Location: ../login.php");

}
else if( $level == 1) {
	
	
}

else{
		header("Location: ../error_unauthorized.php");
}


}



if(isset($_POST['submit'])){
		$user_id=$_POST['user_id'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$type_id = $_POST['type_id'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$surname = $_POST['surname'];
		
		include("../functions/dbcon.php");
		$query_rsUsers ="UPDATE users SET 
			username='$username',password='$password',type_id = $type_id, firstname='$firstname',middlename='$middlename',
			surname='$surname'
			WHERE user_id='$user_id'";
		mysql_query($query_rsUsers, $con) or die(mysql_error());
}

if(isset($_GET['sid'])){
	$id=$_GET['sid'];
	include("../functions/dbcon.php");
	$query_rsUser ="SELECT * FROM users LEFT JOIN user_types USING (type_id) 
	WHERE user_id='$id'";
	$rsUser = mysql_query($query_rsUser, $con) or die(mysql_error());
	$row_rsUser = mysql_fetch_assoc($rsUser);
}

include("../functions/dbcon.php");
$query_rsUsertype = "SELECT type_id,description FROM user_types";
$rsUsertype = mysql_query($query_rsUsertype, $con) or die(mysql_error());
$row_rsUsertype = mysql_fetch_assoc($rsUsertype);
$totalRows_rsUsertype = mysql_num_rows($rsUsertype);



?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir="ltr" xml:lang="en_US" xmlns="http://www.w3.org/1999/xhtml" lang="en_US"><head>
<title>User Panel</title>
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
  	
  echo strtoupper($row_rsUser['username']);?>
 </h2>
 
 <?php
include "user_panel_menu.php";
?>


<div class="settings">
<form id="admin-form" enctype="" class="global_form" action="<?php echo $_SERVER['PHP_SELF']."?sid=".$row_rsUser['user_id']?>" method="post"><div><div><h3>User Profile</h3>
<p class="form-description"> Click Update to save changes to the user profile.</p>
<div class="form-elements">
<div id="title-wrapper" class="form-wrapper">
	<div id="title-label" class="form-label"><label for="title" class="required">User ID</label></div>
	<div id="title-element" class="form-element"><input  disabled="true" name="user_id" id="user_id" value="<?php echo $row_rsUser['user_id']; ?>" type="text">
	<input  name="user_id" id="user_id" value="<?php echo $row_rsUser['user_id']; ?>" type="hidden"></div>
</div>

<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Username</label></div>
	<div id="description-element" class="form-element">
	<input name="username" id="username" value="<?php echo $row_rsUser['username']; ?>" type="text"></div>
</div>

<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Password</label></div>
	<div id="description-element" class="form-element">
	<input name="password" id="password" value="<?php echo $row_rsUser['password']; ?>" type="text"></div>
</div>

<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">First Name</label></div>
	<div id="description-element" class="form-element">
	<input name="firstname" id="firstname" value="<?php echo $row_rsUser['firstname']; ?>" type="text"></div>
</div>

<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Middle Name</label></div>
	<div id="description-element" class="form-element">
	<input name="middlename" id="middlename" value="<?php echo $row_rsUser['middlename']; ?>" type="text"></div>
</div>
<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Surname</label></div>
	<div id="description-element" class="form-element">
	<input name="surname" id="surname" value="<?php echo $row_rsUser['surname']; ?>" type="text"></div>
</div>





<div id="field_id-wrapper" class="form-wrapper"><div id="field_id-label" class="form-label"><label for="field_id" class="optional">User Type</label></div>
<div id="field_id-element" class="form-element">

<select name="type_id" id="type_id">
<?php
do{
?>
		<option value="<?php echo $row_rsUsertype['type_id']?>" <?php if (!(strcmp($row_rsUsertype['type_id'], $row_rsUser['type_id']))) {echo "selected=\"selected\"";} ?>> <?php echo $row_rsUsertype['description']?></option>
<?php
		}while ($row_rsUsertype = mysql_fetch_assoc($rsUsertype));
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
mysql_free_result($rsUser);

?>