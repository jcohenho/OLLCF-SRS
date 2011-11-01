<?php

//initialize the session
if (!isset($_SESSION)) {
  session_start();
include ("../logout.php");

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


include("../functions/global_functions.php");

$rpp = 15; // results per page
$adjacents = 5;
$page = intval($_GET["page"]);
if(!$page) $page = 1;
$reload = $_SERVER['PHP_SELF'];
include("../functions/dbcon.php");

if($_COOKIE['userSearch']==",0")setcookie("userSearch", "", time()-3600); //delete cookie if all boxes in seearch form is empty
if(!isset($_COOKIE['userSearch'])){
	$sql = "SELECT *
			FROM users LEFT JOIN user_types USING (type_id)
			ORDER BY type_id";
}else{
$sfield = explode(",", $_COOKIE['userSearch']); //turn cookie data back into array
	$scriteria=trim($sfield[0]);
	$lookin=trim($sfield[1]);
	if($scriteria=="") setcookie("userSearch", "", time()-3600); //delete cookie if search criteria is empty
	else 
		switch ($sfield[1]){
			case 0: $search_filter="WHERE user_id LIKE '%%$scriteria%%' 
										OR username LIKE '%%$scriteria%%' 	
										OR description LIKE '%%$scriteria%%'"; break;
			case 1: $search_filter="WHERE user_id LIKE '%%$scriteria%%'"; break;
			case 2: $search_filter="WHERE username LIKE '%%$scriteria%%'"; break;
			case 3: $search_filter="WHERE description LIKE '%%$scriteria%%'"; break;
		
		}	"SELECT user_id, username, description
					FROM users LEFT JOIN user_types USING (type_id)
					$search_filter
					ORDER BY type_id";
}
	
$result = mysql_query($sql, $con);

// count total number of appropriate listings:
$tcount = mysql_num_rows($result);

// count number of pages:
$tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
		
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir="ltr" xml:lang="en_US" xmlns="http://www.w3.org/1999/xhtml" lang="en_US">
<head>

	<title>Manage Users</title>
	<link href="../css.css" media="screen" rel="stylesheet" type="text/css">
	<link href="favicon.ico" rel="favicon" type="image/x-icon">
	<script src="../scripts/global_scripts.js" type="text/javascript"></script>
    <script language='JavaScript'>
      checked = false;
      function checkedAll() {
        if (checked == false){checked = true}else{checked = false}
			for (var i = 0; i < document.getElementById('GridView1').elements.length; i++) {
			document.getElementById('GridView1').elements[i].checked = checked;
			}
      }
	  
      function checkedHeader () {
			if (checked == false){checked = true}else{checked = false}
			var totalchecked=0;
			for (var i = 0; i < document.getElementById('GridView1').elements.length; i++) {
				if (document.getElementById('GridView1').elements[i].checked) totalchecked++;
			}
			if (totalchecked > (document.getElementById('GridView1').elements.length-2)) 
			document.getElementById('checkboxHeader').checked=checked;	
      }
    </script>
	

</head><body onload="getFormInputs(document.forms.filter_user,retrieveFormInputs('userSearch'));">

  <!-- TOP HEADER BAR -->
<?php
include "../globalheader.php";
?>

  <!-- BEGIN CONTENT -->
  <div id="global_content_wrapper">
    <div id="global_content">
      
<h2>
  Manage Users</h2>


<p> The users of Our Lady of Lourdes College Foundation are listed here. If you need to
search for a specific user, enter your search criteria in the fields below.</p>

<br>

<div>
  <a  href="form_addnewuser.php" class="buttonlink" style="background-image: url(../images/add.png);">Add New User</a>    
</div>
<br/>

<div class="admin_search">
  <div class="clear"><div class="search">
<form name="filter_user" class="global_form_box" action="<?php echo $reload;?>" onsubmit="setFormInputs('userSearch',getFormString(document.forms.filter_user));" method="post">
<div><label for="user_scriteria" tag="" class="optional">Search criteria</label>
<input name="user_scriteria" id="user_scriteria" type="text"></div>

<div><label for="level_id" tag="" class="optional">Look in</label>
<select name="field" id="field">
    <option selected="selected" value="0" label=""> </option>
    <option value="user_id" label="User ID">User ID</option>
    <option value="username">Username</option>
 <option value="description">User Type</option>
</select></div>

<div><div class="buttons"><button name="search" id="search" type="submit">Search</button></div></div>
<input name="order" value="" id="order" type="hidden">
<input name="order_direction" value="" id="order_direction" type="hidden">
</form>
</div></div></div>

<br>

<div class="admin_results">
  <div>
        <?php echo $tcount." user(s) found "; 
		if(!$scriteria=="") echo "for your search criteria <em>\"".$scriteria."\"</em>";
		if($tcount<=0) exit;
		?>	  
	</div>

</div>
	<br>
  <div>

  	<?php
		if($tcount>$rpp){
			$reload = $_SERVER['PHP_SELF'] . "?tpages=" . $tpages . "&amp;adjacents=" . $adjacents."&amp;adjacents=";
			include("../functions/pagination.php");
			echo paginate_three($reload, $page, $tpages, $adjacents);
		}
	?>

  </div>

<div class="admin_table_form">
<form id="GridView1" name="GridView1" method="post" action="user_delete.php">
  <table class="admin_table">
    <thead>

      <tr>
        <th style="width: 1%;">
		<input name="checkboxHeader" id="checkboxHeader" onclick="checkedAll();"  class="checkbox" type="checkbox"></th>
        <th style="width: 1%;"><a href="" onclick="">User ID</a></th>
        <th style="width: 1%;"><a href="" onclick="">Username</a></th>
    <th style="width: 1%;"><a href="" onclick="">User Type</a></th>
      </tr>
    </thead>
    <tbody>
	
	<?php 

	$count = 0; 
	$i = ($page-1)*$rpp;
	while(($count<$rpp) && ($i<$tcount)) {
    mysql_data_seek($result,$i);
    $query = mysql_fetch_array($result);
?>
        <tr>
            <td><input onclick="checkedHeader();" type="checkbox" name="checkboxList[]" id="checkboxList<?php echo $query['user_id'];?>" class="checkbox"  value="<?php echo $query['user_id'];?>"></td>
            
            <td class="admin_table_bold"><a href="user_profile.php?sid=<?php echo $query['user_id']?>"><?php echo strtoupper($query['user_id'])?></a></td>
            <td class="admin_table_user"><a href="user_profile.php?sid=<?php echo $query['user_id']?>"><?php echo ucwords($query['username'])?></a></td>
 <td class="admin_table_user"><a href="user_profile.php?sid=<?php echo $query['user_id']?>"><?php echo ucwords($query['description'])?></a></td>
		
        </tr>            
<?php     
	$i++;
    $count++;} 
?>
           
                  </tbody>
  </table>
	<br>
	
	<div>
    <div class='buttons'><button name="delUser" type="submit" value="delUser" id="delUser">Delete selected user(s)</button>  </div>
	</div>
  	<?php

		if($tcount>$rpp){
			$reload = $_SERVER['PHP_SELF'] . "?tpages=" . $tpages . "&amp;adjacents=" . $adjacents."&amp;adjacents=";
			//include("../functions/pagination.php");
			echo paginate_three($reload, $page, $tpages, $adjacents);
		}

	?>


</form>
</div>

    </div>
  </div>

</body></html>