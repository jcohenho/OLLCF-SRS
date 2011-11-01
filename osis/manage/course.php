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

else if( $level == 1) {
	
	
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

if($_COOKIE['courseSearch']==",0")setcookie("courseSearch", "", time()-3600); //delete cookie if all boxes in seearch form is empty
if(!isset($_COOKIE['courseSearch'])){
	$sql = "SELECT course_id, name, description
			FROM course
			ORDER BY name";
}else{
$sfield = explode(",", $_COOKIE['courseSearch']); //turn cookie data back into array
	$scriteria=trim($sfield[0]);
	$lookin=trim($sfield[1]);
	if($scriteria=="") setcookie("courseSearch", "", time()-3600); //delete cookie if search criteria is empty
	else 
		switch ($sfield[1]){
			case 0: $search_filter="WHERE course_id LIKE '%%$scriteria%%' 
										OR name LIKE '%%$scriteria%%' 
										OR description LIKE '%%$scriteria%%'"; break;
			case 1: $search_filter="WHERE course_id LIKE '%%$scriteria%%'"; break;
			case 2: $search_filter="WHERE name LIKE '%%$scriteria%%'"; break;
			case 2: $search_filter="WHERE description LIKE '%%$scriteria%%'"; break;
			
		}
		$sql = "SELECT course_id, name, description
				FROM course
				$search_filter
				ORDER BY name";
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

	<title>Manage Courses</title>
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
	

</head><body onload="getFormInputs(document.forms.filter_subject,retrieveFormInputs('subjectSearch'));">

  <!-- TOP HEADER BAR -->
<?php
include "../globalheader.php";
?>

  <!-- BEGIN CONTENT -->
  <div id="global_content_wrapper">
    <div id="global_content">
      
<h2>
  Manage Courses</h2>


<p> The officially registered courses of Our Lady of Lourdes College Foundation are listed here. If you need to
search for a specific course, enter your search criteria in the fields below.</p>

<br>

<div style="<?php echo $hide ?>;">
  <a  href="form_addnewcourse.php" class="buttonlink" style="background-image: url(../images/add.png);">Add New Course</a>    
</div>
<br/>

<div class="admin_search">
  <div class="clear"><div class="search">
<form name="filter_course" class="global_form_box" action="<?php echo $reload;?>" onsubmit="setFormInputs('courseSearch',getFormString(document.forms.filter_course));" method="post">
<div><label for="course_scriteria" tag="" class="optional">Search criteria</label>
<input name="course_scriteria" id="course_scriteria" type="text"></div>

<div><label for="level_id" tag="" class="optional">Look in</label>
<select name="field" id="field">
    <option selected="selected" value="0" label=""> </option>
    <option value="course_id" label="Course ID">Course ID</option>
    <option value="Name">Name</option>
<option value="Description">Description</option>
</select></div>

<div><div class="buttons"><button name="search" id="search" type="submit">Search</button></div></div>
<input name="order" value="" id="order" type="hidden">
<input name="order_direction" value="" id="order_direction" type="hidden">
</form>
</div></div></div>

<br>

<div class="admin_results">
  <div>
        <?php echo $tcount." course(s) found "; 
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
<form id="GridView1" name="GridView1" method="post" action="course_delete.php">
  <table class="admin_table">
    <thead>

      <tr>
        <th style="width: 1%;">
		<input name="checkboxHeader" id="checkboxHeader" onclick="checkedAll();"  class="checkbox" type="checkbox"></th>
        <th style="width: 1%;"><a href="" onclick="">Course ID</a></th>
        <th><a href="" onclick="">Name</a></th>
<th><a href="" onclick="">Description</a></th>
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
            <td><input onclick="checkedHeader();" type="checkbox" name="checkboxList[]" id="checkboxList<?php echo $query['course_id'];?>" class="checkbox"  value="<?php echo $query['course_id'];?>"></td>
            <td><?php echo $query['course_id']?></td>
            <td class="admin_table_bold"><a href="course_profile.php?sid=<?php echo $query['course_id']?>"><?php echo ucwords($query['name'])?></a></td>
            <td class="admin_table_user"><a href="course_profile.php?sid=<?php echo $query['course_id']?>"><?php echo ucwords($query['description'])?></a></td>
        </tr>            
<?php     
	$i++;
    $count++;} 
?>
           
                  </tbody>
  </table>
	<br>
	
	<div>
    <div class='buttons' style="<?php echo $hide ?>;"><button name="delCourse" type="submit" value="delCourse" id="delCourse">Delete selected course(s)</button></div>
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