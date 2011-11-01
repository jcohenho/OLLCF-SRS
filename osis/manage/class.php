<?php

//initialize the session
if (!isset($_SESSION)) {
  session_start();


include ("../logout.php");


$level = $_SESSION['level'];

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

//if($_COOKIE['classesSearch']==",0")setcookie("classesSearch", "", time()-3600); //delete cookie if all boxes in seearch form is empty
	
if(isset($_COOKIE['classesSearch'])){

	$sfield = explode(",", $_COOKIE['classesSearch']); //turn cookie data back into array
	$scriteria=trim($sfield[0]);
	$lookin=trim($sfield[1]);
	if($scriteria=="") setcookie("classesSearch", "", time()-3600); //delete cookie if search criteria is empty
	else 
		switch ($sfield[1]){
			case 0: $search_filter="AND (class_code LIKE '%%$scriteria%%' 
										OR subject_code LIKE '%%$scriteria%%'
										OR description LIKE '%%$scriteria%%')"; break;
			case 1: $search_filter="AND class_code LIKE '%%$scriteria%%'";break;
			case 2: $search_filter="AND subject_code LIKE '%%$scriteria%%'";break;
			case 3: $search_filter="AND description LIKE '%%$scriteria%%'";break;
			case 4: $search_filter="AND (firstname LIKE '%%$scriteria%%' 
										OR middlename LIKE '%%$scriteria%%'
										OR surname LIKE '%%$scriteria%%')";
		}
		
		$sql = "SELECT class_code, time, room_id, location, section,  subject_code, description, firstname, middlename, surname, open
			FROM class_info LEFT JOIN subject USING (subject_code)
			LEFT JOIN faculty_info USING (faculty_id)
			LEFT JOIN schoolterm USING (term_code) LEFT JOIN room USING (room_id)
			WHERE open=1 $search_filter
			ORDER BY subject_code,section ASC
			";
}else{
	
		$sql = "SELECT class_code, time, room_id, location, section,  subject_code, description, firstname, middlename, surname, open
			FROM class_info LEFT JOIN subject USING (subject_code)
			LEFT JOIN faculty_info USING (faculty_id)
			LEFT JOIN schoolterm USING (term_code) LEFT JOIN room USING (room_id)
			WHERE open=1
			ORDER BY subject_code,section ASC
			";
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

	<title>Manage Class</title>
	<link href="../css.css" media="screen" rel="stylesheet" type="text/css">
	<link href="favicon.ico" rel="favicon" type="image/x-icon">
	<script src="../scripts/global_scripts.js" type="text/javascript"></script>
    <script language='JavaScript'>
      checked = false;
      function checkedAll() {
        if (checked == false){checked = true}else{checked = false}
			for (var i = 0; i < document.getElementById('classeslist').elements.length; i++) {
			document.getElementById('classeslist').elements[i].checked = checked;
			}
      }
	  
      function checkedHeader () {
			if (checked == false){checked = true}else{checked = false}
			var totalchecked=0;
			for (var i = 0; i < document.getElementById('classeslist').elements.length; i++) {
				if (document.getElementById('classeslist').elements[i].checked) totalchecked++;
			}
			if (totalchecked > (document.getElementById('classeslist').elements.length-2)) 
			document.getElementById('checkboxHeader').checked=checked;	
      }
    </script>
	

</head><body onload="getFormInputs(document.forms.filter_classes,retrieveFormInputs('classesSearch'));">

  <!-- TOP HEADER BAR -->
<?php
include "../globalheader.php";
?>

  <!-- BEGIN CONTENT -->
  <div id="global_content_wrapper">
    <div id="global_content">
      
<h2>Manage Class</h2>
<p> The official list of classes are listed below. If you need to search for a specific class, 
enter your search criteria in the fields below.</p>
<br/>

<div style="<?php echo $hide ?>;">
  <a  href="form_addnewclass.php" class="buttonlink" style="background-image: url(../images/add.png);">Add New Class</a>    
</div>
<br/>
 <div class="admin_search">
<div class="clear"><div class="search">
<form name="filter_classes" class="global_form_box" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit="setFormInputs('classesSearch',getFormString(document.forms.filter_classes));" method="post">
<div><label for="enroll_scriteria" tag="" class="optional">Search criteria</label>
<input name="enroll_scriteria" id="enroll_scriteria" type="text"></div>

<div><label for="level_id" tag="" class="optional">Look in</label>
<select name="field" id="field">
	<option value="0" selected="selected"></option>
	<option value="1">Class Code</option>
    <option value="2">Subject Code</option>
	<option value="3">Subject Name</option>
	<option value="3">Faculty Name</option>
</select></div>

<div><div class="buttons"><button name="search" id="search" type="submit">Search</button></div></div>
<input name="order" value="" id="order" type="hidden">
<input name="order_direction" value="" id="order_direction" type="hidden">
</form>
</div></div></div>

<br/>
<div class="admin_results">
  <div>
        <?php echo $tcount." class(es) found "; 
		if(!$scriteria=="") echo "for your search criteria <em>\"".$scriteria."\"</em>";
		if($tcount<=0) exit;
		?>	  
	</div>

</div>
	<br>
  <div>

  	<?php
		if($tcount>$rpp){
			$reload = $_SERVER['PHP_SELF'] . "?sid=".$id."&tpages=" . $tpages . "&amp;adjacents=" . $adjacents."&amp;adjacents=";
			include("../functions/pagination.php");
			echo paginate_three($reload, $page, $tpages, $adjacents);
		}
	?>

  </div>

<div class="admin_table_form">
<form id="classeslist" name="classeslist" method="post" action="class_delete.php">
  <table class="admin_table">
    <thead>

      <tr>
        <th style="width: 1%;">
		<input name="checkboxHeader" id="checkboxHeader" onclick="checkedAll();"  class="checkbox" type="checkbox"></th>
		<th><a href="">Subject Code</a></th>
        <th><a href="">Subject Name</a></th>
		<th><a href="">Faculty</a></th>
        <th><a href="">Time</a></th>
		<th style="width: 1%;"><a href="">Room</a></th>
		<th style="width: 1%;"><a href="">Section</a></th>
		
      </tr>
    </thead>
    <tbody>
	
	<?php 

	$count = 0; 
	$i = ($page-1)*$rpp;
	while(($count<$rpp) && ($i<$tcount)) {
    mysql_data_seek($result,$i);
    $query = mysql_fetch_array($result);
	
			$string = $query['middlename'];
			$words = explode(" ", $string);
			$mname = "";
			foreach ($words as $value) {
				$mname .= strtoupper(substr($value, 0, 1));
			}
		  
?>
        <tr>
            <td><input onclick="checkedHeader();" type="checkbox" name="checkboxList[]" id="checkboxList<?php echo $query['class_code'];?>" class="checkbox" value="<?php echo $query['class_code'];?>"></td>
			<td class="admin_table_user"><?php echo $query['subject_code']?></td>
            <td class="admin_table_bold"><a href="class_profile.php?sid=<?php echo $query['class_code']?>"><?php echo ucwords($query['description'])?></a></td>
			<td class="admin_table_faculty"><?php echo ucwords($query['surname'])." ".ucwords($query['firstname'])." ".$mname;?></td>
            <td class="admin_table_user"><?php echo $query['time']?></td>
			<td class="admin_table_centered"><?php echo $query['location']?></td>
			<td class="admin_table_centered"><?php echo $query['section']?></td>
		
        </tr>            
<?php     
	$i++;
    $count++;} 
?>
           
                  </tbody>
  </table>
	<br>
	
	<div class="form-wrapper" id="buttons-wrapper" style="<?php echo $hide ?>;">
		<fieldset id="fieldset-buttons">
			<button name="delClass" id="delClass" type="submit">Delete selected class(es)</button>
		</fieldset>
	</div>
	

  	<?php

		if($tcount>$rpp){
			$reload = $_SERVER['PHP_SELF'] . "?sid=".$id."&tpages=" . $tpages . "&amp;adjacents=" . $adjacents."&amp;adjacents=";
			//include("../functions/pagination.php");
			echo paginate_three($reload, $page, $tpages, $adjacents);
		}

	?>


</form>
</div>

    </div>
  </div>

</body></html>