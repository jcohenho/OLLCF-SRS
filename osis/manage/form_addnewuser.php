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

else if( $level == 1) {
	
	
}

else{
	header("Location: ../error_unauthorized.php");
}




if(isset($_POST['submit'])){
		$user_id=$_POST['user_id'];
		$username=$_POST['username'];	
		$type_id = $_POST['type_id'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$surname = $_POST['surname'];
		
		include("../functions/dbcon.php");
		$query_rsUsers ="INSERT INTO users
		(user_id,username, type_id,firstname,middlename,surname)
		VALUES ('$user_id', '$username', '$type_id', '$firstname','$middlename','$surname')";
		mysql_query($query_rsUsers, $con) or die(mysql_error());
		mysql_close ($con);
		header("Location: user.php");
}
include("../functions/dbcon.php");
$query_rsUsertype = "SELECT type_id,description FROM user_types";
$rsUsertype = mysql_query($query_rsUsertype, $con) or die(mysql_error());
$row_rsUsertype = mysql_fetch_assoc($rsUsertype);
$totalRows_rsUsertype = mysql_num_rows($rsUsertype);



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
<form id="admin-form" enctype="application/x-www-form-urlencoded" class="global_form" action="<?php echo $_SERVER['PHP_SELF']?>" method="post"><div><div><h3>Add New User</h3>
<p class="form-description"> Please fill in the boxes below and click Save to add new user record.</p>
<div class="form-elements">
<div id="title-wrapper" class="form-wrapper">
	<div id="title-label" class="form-label"><label for="title" class="required">User ID</label></div>
	<div id="title-element" class="form-element"><input maxlength="12" name="user_id" id="user_id" value="" type="text"></div>
</div>



<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Username</label></div>
	<div id="description-element" class="form-element"><input name="username" id="username" value="" type="text"></div>
</div>

<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Password</label></div>
	<div id="description-element" class="form-element"><input name="password" id="password" value="" type="text"></div>
</div>

<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">First Name</label></div>
	<div id="description-element" class="form-element"><input name="firstname" id="firstname" value="" type="text"></div>
</div>

<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Middle Name</label></div>
	<div id="description-element" class="form-element"><input name="middlename" id="middlename" value="" type="text"></div>
</div>

<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Surname</label></div>
	<div id="description-element" class="form-element"><input name="surname" id="surname" value="" type="text"></div>
</div>


<div id="field_id-wrapper" class="form-wrapper"><div id="field_id-label" class="form-label"><label for="field_id" class="optional">User Type</label></div>
<div id="field_id-element" class="form-element">

<select name="type_id" id="type_id">
	<?php
do{
?>
		<option value="<?php echo $row_rsUsertype['type_id']?>"> <?php echo $row_rsUsertype['description']?></option>
<?php
		}while ($row_rsUsertype = mysql_fetch_assoc($rsUsertype));
		mysql_free_result($rsUsertype);
		mysql_close ($con);
?>
	
</select></div></div>











</div></div>









<div class="form-wrapper" id="buttons-wrapper"><fieldset id="fieldset-buttons">
<button name="submit" id="submit" type="submit">Save</button>
 or <a name="cancel" id="cancel" type="button" href="user.php">cancel</a></fieldset>
 </div>

</div></div></div></form></div>
	
	
	</div>
  </div>
</body></html>