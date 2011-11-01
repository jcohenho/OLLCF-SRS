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

else if( $level == 1 or $level == 4) {
	
	
}

else{
	$hide = 'display:none';
}
}

include("../functions/global_functions.php");

$rpp = 15; // results per page
$adjacents = 5;
$page = intval($_GET["page"]);
if(!$page) $page = 1;
$reload = $_SERVER['PHP_SELF'];
include("../functions/dbcon.php");

if($_COOKIE['facultySearch']==",0")setcookie("facultySearch", "", time()-3600); //delete cookie if all boxes in seearch form is empty
if(!isset($_COOKIE['facultySearch'])){
	$sql = "SELECT * FROM faculty_info ORDER BY surname";
}else{
$sfield = explode(",", $_COOKIE['facultySearch']); //turn cookie data back into array
	$scriteria=trim($sfield[0]);
	$lookin=trim($sfield[1]);
	if($scriteria=="") setcookie("facultySearch", "", time()-3600); //delete cookie if search criteria is empty
	else 
		switch ($sfield[1]){
			case 0: $search_filter="WHERE faculty_id LIKE '%%$scriteria%%' 
										OR surname LIKE '%%$scriteria%%' 
										OR middlename LIKE '%%$scriteria%%'
										OR firstname LIKE '%%$scriteria%%'
										"; break;
			case 1: $search_filter="WHERE faculty_id LIKE '%%$scriteria%%'"; break;
			case 2: $search_filter="WHERE surname LIKE '%%$scriteria%%'"; break;
			case 3: $search_filter="WHERE firstname LIKE '%%$scriteria%%'"; break;
			case 4: $search_filter="WHERE middlename LIKE '%%$scriteria%%'";
		}
	$sql = "SELECT * FROM faculty_info $search_filter ORDER BY surname";
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

	<title>Manage Students</title>
	<link href="../css.css" media="screen" rel="stylesheet" type="text/css">
	<link href="favicon.ico" rel="favicon" type="image/x-icon">
	<script src="../scripts/global_scripts.js" type="text/javascript"></script>
	<script language='JavaScript'>
      checked = false;
      function checkedAll() {
        if (checked == false){checked = true}else{checked = false}
			for (var i = 0; i < document.getElementById('facultyList').elements.length; i++) {
			document.getElementById('facultyList').elements[i].checked = checked;
			}
      }
	  
      function checkedHeader () {
			if (checked == false){checked = true}else{checked = false}
			var totalchecked=0;
			for (var i = 0; i < document.getElementById('facultyList').elements.length; i++) {
				if (document.getElementById('facultyList').elements[i].checked) totalchecked++;
			}
			if (totalchecked > (document.getElementById('facultyList').elements.length-2)) 
			document.getElementById('checkboxHeader').checked=checked;	
      }
    </script>
</head><body onload="getFormInputs(document.forms.filter_faculty,retrieveFormInputs('facultySearch'));">

  <!-- TOP HEADER BAR -->
<?php
include "../globalheader.php";
?>

  <!-- BEGIN CONTENT -->
  <div id="global_content_wrapper">
    <div id="global_content">
      
<h2>
  Manage Faculty</h2>


<p> The officially employed faculty of Our Lady of Lourdes College Foundation are listed here. If you need to
search for a specific faculty, enter your search criteria in the fields below.</p>


<br>

<div style="<?php echo $hide ?>;">
  <a  href="form_addnewfaculty.php" class="buttonlink" style="background-image: url(../images/add.png);">Add New Faculty</a>    
</div>
<br/>

<div class="admin_search">
  <div class="clear"><div class="search">
<form name="filter_faculty" enctype="" class="global_form_box" action="<?php echo $reload;?>" onsubmit="setFormInputs('facultySearch',getFormString(document.forms.filter_faculty));"method="post">
<div><label for="faculty_scriteria" tag="" class="optional">Search criteria</label>
<input name="faculty_scriteria" id="faculty_scriteria" type="text"></div>

<div><label for="level_id" tag="" class="optional">Look in</label>
<select name="field" id="field">
    <option selected="selected" value="0" label=""> </option>
    <option value="student_id" label="student_id">ID Number</option>
    <option value="surname">Surname</option>
    <option value="firstname">Firstname</option>
    <option value="middlename">Middlename</option>
</select></div>

<div><div class="buttons"><button name="search" id="search" type="submit">Search</button></div></div>
<input name="order" value="" id="order" type="hidden">
<input name="order_direction" value="" id="order_direction" type="hidden">
</form>
</div></div></div>

<br>

<div class="admin_results">
  <div>
        <?php echo $tcount." faculty found "; 
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
<form id='facultyList' name="facultyList" method="post" action="faculty_delete.php">
  <table class="admin_table">
    <thead>

      <tr>
        <th style="width: 1%;"><input name="checkboxHeader" id="checkboxHeader" onclick="checkedAll();"  class="checkbox" type="checkbox"></th>
        <th style="width: 1%;"><a href="" onclick="">ID No.</a></th>
        <th><a href="" onclick="">Surname</a></th>
        <th><a href="" onclick="">Firstname</a></th>
		<th><a href="" onclick="">Middlename</a></th>
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
            <td><input onclick="checkedHeader();" type="checkbox" name="checkboxList[]" id="checkboxList<?php echo $query['faculty_id'];?>" class="checkbox"  value="<?php echo $query['faculty_id'];?>"></td>
            <td><?php echo $query['faculty_id']?></td>
            <td class="admin_table_bold"><a href="faculty_profile.php?fid=<?php echo $query['faculty_id']?>"><?php echo strtoupper($query['surname'])?></a></td>
            <td class="admin_table_user"><a href="faculty_profile.php?fid=<?php echo $query['faculty_id']?>"><?php echo ucwords($query['firstname'])?></a></td>
			<td class="admin_table_user"><a href="faculty_profile.php?fid=<?php echo $query['faculty_id']?>"><?php echo ucfirst($query['middlename'])?></a></td>
        </tr>            
<?php     
	$i++;
    $count++;} 
?>
           
                  </tbody>
  </table>
	<br>
	
	<div class="form-wrapper" id="buttons-wrapper">
		<fieldset id="fieldset-buttons">
			<button name="delFaculty" id="delFaculty" type="submit" value="delFaculty" style="<?php echo $hide ?>;">Delete selected faculty</button>
		</fieldset>
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