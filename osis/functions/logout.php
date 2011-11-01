<?php
// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles and cookies
  $_SESSION['AEalumniId'] = NULL;
  $_SESSION['AEemail'] = NULL;
  $_SESSION['AEfullName'] = NULL;
  unset($_SESSION['AEalumniId']);
  unset($_SESSION['AEemail']);
  unset($_SESSION['AEfullName']);

  setcookie("memberSearch", "", time()-3600);
	
  $logoutGoTo = "index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>