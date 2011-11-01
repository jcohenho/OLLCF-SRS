<?php


//initialize the session
if (!isset($_SESSION)) {
  session_start();


include ("../logout.php");


$level = $_SESSION['level'];
//if not logged in redirect to login.php
if( $level == ""){
	
	header("Location: ../login.php");

}

else if( $level == 1 or $level == 2) {
	
	
}

else if($level == 3 or $level == 4){
	
	$hide = 'display:none';
}

else{
		header("Location: ../error_unauthorized.php");
}
}
include("../functions/global_functions.php");

if(isset($_GET['sid'])){
	$id=$_GET['sid'];
	include("../functions/dbcon.php");
	$query_rsStudent ="SELECT * FROM student_info WHERE student_id='$id'";
	$rsStudent = mysql_query($query_rsStudent, $con) or die(mysql_error());
	$row_rsStudent = mysql_fetch_assoc($rsStudent);
}

$rpp = 9; // results per page
$adjacents = 5;
$page = intval($_GET["page"]);
if(!$page) $page = 1;
$reload = $_SERVER['PHP_SELF'];
include("../functions/dbcon.php");

//if($_COOKIE['studclassSearch']==",0")setcookie("studclassSearch", "", time()-3600); //delete cookie if all boxes in seearch form is empty
if(isset($_COOKIE['studclassSearch'])){
	$sfield = explode(",", $_COOKIE['studclassSearch']); //turn cookie data back into array
	$scriteria=trim($sfield[0]);
	$lookin=trim($sfield[1]);
	if($scriteria=="") setcookie("studclassSearch", "", time()-3600); //delete cookie if search criteria is empty
	else 
		switch ($sfield[1]){
			case 0: $search_filter="AND (class_code LIKE '%%$scriteria%%' 
										OR description LIKE '%%$scriteria%%'
										OR grade LIKE '%%$scriteria%%'
										OR date_start LIKE '%%$scriteria%%'
										OR date_end LIKE '%%$scriteria%%'
										OR semester LIKE '%%$scriteria%%')"; break;
			case 1: $search_filter="AND class_code LIKE '%%$scriteria%%'"; break;
			case 2: $search_filter="AND description LIKE '%%$scriteria%%'"; break;
			case 3: $search_filter="AND grade LIKE '%%$scriteria%%'"; break;
			case 4: $search_filter="AND date_start LIKE '%%$scriteria%%'";break;
			case 5: $search_filter="AND date_end LIKE '%%$scriteria%%'";break;
			case 6: $search_filter="AND semester LIKE '%%$scriteria%%'";
		}
		$sql = "SELECT class_code, grade, dropped, time, room_id, section, subject_code, description, term_code, date_start, date_end, semester
			FROM (class LEFT JOIN class_info USING (class_code)
			LEFT JOIN subject USING (subject_code)
			LEFT JOIN schoolterm USING (term_code))
			WHERE student_id='$id' $search_filter
			ORDER BY date_start DESC,date_end DESC,semester DESC";
}else{
		$sql = "SELECT class_code, grade, dropped, time, room_id, section, subject_code, description, term_code, date_start, date_end, semester
			FROM (class LEFT JOIN class_info USING (class_code)
			LEFT JOIN subject USING (subject_code)
			LEFT JOIN schoolterm USING (term_code))
			WHERE student_id='$id'
			ORDER BY date_start DESC,date_end DESC,semester DESC";
}



$queryunits = "SELECT SUM(units) FROM subject LEFT JOIN class_info USING (subject_code) LEFT JOIN class USING (class_code) WHERE student_id ='$id'"; 
	 
$unitsresult = mysql_query($queryunits) or die(mysql_error());

// Print out result





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
			for (var i = 0; i < document.getElementById('studclasslist').elements.length; i++) {
			document.getElementById('studclasslist').elements[i].checked = checked;
			}
      }
	  
      function checkedHeader () {
			if (checked == false){checked = true}else{checked = false}
			var totalchecked=0;
			for (var i = 0; i < document.getElementById('studclasslist').elements.length; i++) {
				if (document.getElementById('studclasslist').elements[i].checked) totalchecked++;
			}
			if (totalchecked > (document.getElementById('studclasslist').elements.length-2)) 
			document.getElementById('checkboxHeader').checked=checked;	
      }
    </script>
	

</head><body onload="getFormInputs(document.forms.filter_studclass,retrieveFormInputs('studclassSearch'));">

  <!-- TOP HEADER BAR -->
<?php
include "../globalheader.php";
?>

  <!-- BEGIN CONTENT -->
  <div id="global_content_wrapper">
    <div id="global_content">
<h2>Manage Student
<strong> [ <?php 
			$string = $row_rsStudent['middlename'];
			$words = explode(" ", $string);
			$mname = "";
			foreach ($words as $value) {
				$mname .= strtoupper(substr($value, 0, 1));
			}
		  echo strtoupper($row_rsStudent['surname'])." ".ucwords($row_rsStudent['firstname'])." ".$mname;?> ]
</strong>
</h2>
<p> The officially enrolled student classes will be listed here. If you need to search for a specific student, 
enter your search criteria in the fields below.</p>
<br/>

<div>
  <a  href="form_addnewstudent.php" class="buttonlink" style="background-image: url(../images/add.png);">Add New Student</a>    
</div>
<?php
include "stud_panel_menu.php";
?>

 <div class="admin_search">
<div class="clear"><div class="search">
<form name="filter_studclass" class="global_form_box" action="<?php echo $_SERVER['PHP_SELF']."?sid=".$row_rsStudent['student_id']?>" onsubmit="setFormInputs('studclassSearch',getFormString(document.forms.filter_studclass));" method="post">
<div><label for="enroll_scriteria" tag="" class="optional">Search criteria</label>
<input name="enroll_scriteria" id="enroll_scriteria" type="text"></div>

<div><label for="level_id" tag="" class="optional">Look in</label>
<select name="field" id="field">
    <option value="0" selected="selected"></option>
	<option value="1">Class Code</option>
	<option value="2">Subject Name</option>
	<option value="3">Grade</option>
	<option value="4">School Year Start</option>
	<option value="4">School Year End</option>
	<option value="5">Semester</option>
</select></div>

<div><div class="buttons"><button name="search" id="search" type="submit">Search</button></div></div>
<input name="order" value="" id="order" type="hidden">
<input name="order_direction" value="" id="order_direction" type="hidden">
</form>
</div></div></div>

<br>



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
<form id="studclasslist" name="studclasslist" method="post" action="<?php echo "stud_removeclass.php?sid=".$row_rsStudent['student_id'];?>">
  <table class="admin_table">
    <thead>

      <tr>
        <th style="width: 1%;">
		<input name="checkboxHeader" id="checkboxHeader" onclick="checkedAll();"  class="checkbox" type="checkbox"></th>
        <th style="width: 1%;"><a href="" onclick="">Class Code</a></th>
        <th><a href="" onclick="">Subject Name</a></th>
        <th><a href="" onclick="">Time</a></th>
		<th><a href="" onclick="">Room</a></th>
		<th style="width: 1%;"><a href="" onclick="">Section</a></th>
		<th style="width: 1%;"><a href="" onclick="">Grade</a></th>
        <th style="width: 1%;" class="admin_table_centered"><a href="" >School Year</a></th>
		<th style="width: 1%;" class="admin_table_centered"><a href="">Term</a></th>
		<th style="width: 1%;" class="admin_table_centered"><a href="">Dropped</a></th>
		<th style="width: 1%;"><a href="">Action</a></th>
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
            <td><input onclick="checkedHeader();" type="checkbox" name="checkboxList[]" id="checkboxList<?php echo $query['class_code'];?>" class="checkbox"  value="<?php echo $query['class_code'];?>"></td>
            <td><?php echo $query['class_code']?></td>
            <td class="admin_table_bold"><?php echo ucwords($query['description'])?></td>
            <td class="admin_table_user"><?php echo $query['time']?></td>
			<td class="admin_table_user"><?php echo $query['room_id']?></td>
			<td class="admin_table_centered"><?php echo $query['section']?></td>
			<td class="admin_table_centered"><?php echo $query['grade']?></td>
            <td class="admin_table_centered"><?php echo substr($query['date_start'],0,4)." - ".substr($query['date_end'],0,4)?></td>
			<td class="admin_table_centered">
			<?php 
				switch($query['semester']){
				case 1: echo "1<sup>st</sup>";break;
				case 2: echo "2<sup>nd</sup>";break;
				case 3: echo "Summer";
				}
			?>
				</td>
			<td class="admin_table_centered">
			<?php if($query['dropped']==0)
				echo "<a  href=\"stud_removeclass.php?sid=".$row_rsStudent['student_id']."&ccode=".$query['class_code']."&action=drop&to=1\" class=\"buttonlink\" style=\"background-image: url(../images/block.png);\"></a>";
			else 
				echo "<a  href=\"stud_removeclass.php?sid=".$row_rsStudent['student_id']."&ccode=".$query['class_code']."&action=drop&to=0\" class=\"buttonlink\" style=\"background-image: url(../images/unblock.png);\"></a>";
			?>
			</td>
			<td class="admin_table_centered">
				<a href="<?php echo "stud_removeclass.php?sid=".$row_rsStudent['student_id']."&ccode=".$query['class_code']."&action=rem";?>">Remove</a>
			</td>
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
			<button name="removeClass" id="removeClass" type="submit">Remove selected classes</button>
		</fieldset>
		
		
		<div class="tip" style="float:right;margin:0 0;padding:0 0;"><span><?php while($row = mysql_fetch_array($unitsresult)){
			echo "<b>Total Units: </b>".$row['SUM(units)'];



		}?></span></div>
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