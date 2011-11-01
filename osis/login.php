<?php

if (!isset($_SESSION)) {
  session_start();
}


include ("./logout.php");
include("./functions/global_functions.php");
$reload = $_SERVER['PHP_SELF'];


if(isset($_POST['submit'])){
		$username=$_POST['username'];
		$password=$_POST['password']; 
		include("functions/dbcon.php");
		$query_rsLogin ="SELECT *
		FROM users WHERE username='$username' AND password='$password'";
		$rsLogin = mysql_query($query_rsLogin, $con) or die(mysql_error());
		$row_rsLogin = mysql_fetch_assoc($rsLogin);
		$user_id = $row_rsLogin['user_id'];
		$username = $row_rsLogin['username'];
		$level = $row_rsLogin['type_id'];
			// count total number of appropriate listings:
			$recordcount = mysql_num_rows($rsLogin);

			if($recordcount < 1){

		header("Location: invalid_login.php");
		echo "invalid login";
			}
			else{
				$_SESSION['user_id'] = $user_id;
				$_SESSION['username'] = $username;	
				$_SESSION['level'] = $level;
				header("Location: manage/students.php");
				echo "Successful login.";
			
			
			}
		
}


	

	

?>






<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir="ltr" xml:lang="en_US" xmlns="http://www.w3.org/1999/xhtml" lang="en_US"><head>
<title>Control Panel</title>
<link href="css.css" media="screen" rel="stylesheet" type="text/css">
<link href="favicon.ico" rel="favicon" type="image/x-icon">

<script type="text/javascript" src="core.js"></script>

</head><body id="global_page_core-admin-auth-login">

  <!-- TOP HEADER BAR -->

  <!-- BEGIN CONTENT -->
  <div id="global_content_wrapper">
    <div id="global_content">
		 <span id="global_content_simple">

		<style type="text/css">
		  html { height: 100%; }
		</style>

		<div class="admin_auth_reauthenticate">


		  <div class="settings">
		    <form enctype="application/x-www-form-urlencoded" class="global_form" action="<?php echo $reload;?>" method="post"><div><div><h3>Admin Sign In</h3>
		<p class="form-description">To access the control panel, please provide your administrator username and password.</p>
		<div class="form-elements">
		<div id="username-wrapper" class="form-wrapper"><div id="username-label" class="form-label"><label for="username" class="required">Admin Username</label></div>
		<div id="username-element" class="form-element">
		<input type="text" name="username" id="username" /></div></div>
		<div id="password-wrapper" class="form-wrapper"><div id="password-label" class="form-label"><label for="password" class="required">Password</label></div>
		<div id="password-element" class="form-element">
		<input type="password" name="password" id="password" />
		<p class="description"></p></div></div>

		<div id="execute-wrapper" class="form-wrapper"><div id="execute-label" class="form-label">&nbsp;</div><div id="execute-element" class="form-element">
		<button name="submit" id="submit" type="submit">Sign In</button></div></div></div></div></div></form>  </div>

		</div>  </span>
	
	</div>
  </div>

</body></html>