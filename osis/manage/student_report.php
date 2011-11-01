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

else if( $level == 1 or $level == 2) {
	
	
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



	$sql = "SELECT COUNT(student_id) as totalenrolled,year_level,name
			FROM student_info LEFT JOIN course USING (course_id) 
			GROUP BY description
			ORDER BY surname";

	
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
	

</head><body onload="getFormInputs(document.forms.filter_student,retrieveFormInputs('studentSearch'));">

  <!-- TOP HEADER BAR -->
<?php
include "../globalheader.php";
?>

  <!-- BEGIN CONTENT -->
  <div id="global_content_wrapper">
    <div id="global_content">
      
<h2>
  Manage Students</h2>


<p> The officially registered students of Our Lady of Lourdes College Foundation are listed here. If you need to
search for a specific student, enter your search criteria in the fields below.</p>

<br>

<div style="<?php echo $hide ?>;">
  <a  href="form_addnewstudent.php" class="buttonlink" style="background-image: url(../images/add.png);">Add New Student</a>    
</div>
<br/>

<div class="admin_search">
  <div class="clear"></div></div>

<br>

<div class="admin_results">
  <div>
        <?php echo $tcount." student(s) found "; 
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
<form id="GridView1" name="GridView1" method="post" action="stud_delete.php">
  <table class="admin_table">
    <thead>

      <tr>
        <th style="width: 1%;">
		<input name="checkboxHeader" id="checkboxHeader" onclick="checkedAll();"  class="checkbox" type="checkbox"></th>
        <th style="width: 1%;"><a href="" onclick="">Course</a></th>
        <th><a href="" onclick="">Total enrolled</a></th>
        <th><a href="" onclick="">Year Level</a></th>
		
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
            <td><input onclick="checkedHeader();" type="checkbox" name="checkboxList[]" id="checkboxList<?php echo $query['student_id'];?>" class="checkbox"  value="<?php echo $query['student_id'];?>"></td>
            <td><?php echo $query['name']?></td>
 			<td><?php echo $query['year_level']?></td>	
            <td><?php echo $query['totalenrolled']?></td>
		
        </tr>            
<?php     
	$i++;
    $count++;} 
?>
           
                  </tbody>
  </table>
	<br>
	
	<div>
    <div class='buttons' style="<?php echo $hide ?>;"><button name="delStud" type="submit" value="delStud" id="delStud">Delete selected student(s)</button>  </div>
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