<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
include "../logout.php";


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


}

include("../functions/global_functions.php");

$rpp = 15; // results per page
$adjacents = 5;
$page = intval($_GET["page"]);
if(!$page) $page = 1;
$reload = $_SERVER['PHP_SELF'];
include("../functions/dbcon.php");

if($_COOKIE['termSearch']==",0")setcookie("termSearch", "", time()-3600); //delete cookie if all boxes in seearch form is empty
if(!isset($_COOKIE['termSearch'])){
	$sql = "SELECT * FROM schoolterm ORDER BY term_code DESC";
}else{
$sfield = explode(",", $_COOKIE['termSearch']); //turn cookie data back into array
	$scriteria=trim($sfield[0]);
	$lookin=trim($sfield[1]);
	if($scriteria=="") setcookie("termSearch", "", time()-3600); //delete cookie if search criteria is empty
	else 
		switch ($sfield[1]){
			case 0: $search_filter="WHERE semester LIKE '%%$scriteria%%' 
										OR school_year LIKE '%%$scriteria%%'"; break;
			case 1: $search_filter="WHERE semester LIKE '%%$scriteria%%'"; break;
			case 2: $search_filter="WHERE school_year LIKE '%%$scriteria%%'"; break;
		
		}
	$sql = "SELECT * FROM schoolterm 
	$search_filter
	ORDER BY term_code DESC
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

	<title>Manage School Terms</title>
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
	

</head><body onload="getFormInputs(document.forms.filter_term,retrieveFormInputs('termSearch'));">

  <!-- TOP HEADER BAR -->
<?php
include "../globalheader.php";
?>

  <!-- BEGIN CONTENT -->
  <div id="global_content_wrapper">
    <div id="global_content">
      
<h2>
  Manage School Terms</h2>


<p> The school terms are listed here. If you need to
search for a specific term, enter your search criteria in the fields below.</p>

<br>

<div>
  <a  href="form_addnewterm.php" class="buttonlink" style="background-image: url(../images/add.png);">Add New Term</a>    
</div>
<br/>

<div class="admin_search">
  <div class="clear"><div class="search">
<form name="filter_term" class="global_form_box" action="<?php echo $reload;?>" onsubmit="setFormInputs('termSearch',getFormString(document.forms.filter_term));" method="post">
<div><label for="term_scriteria" tag="" class="optional">Search criteria</label>
<input name="term_scriteria" id="term_scriteria" type="text"></div>

<div><label for="level_id" tag="" class="optional">Look in</label>
<select name="field" id="field">
    <option selected="selected" value="0" label=""> </option>
    <option value="semester" label="semester">Semester</option>
    <option value="year">Year</option>
    
</select></div>

<div><div class="buttons"><button name="search" id="search" type="submit">Search</button></div></div>
<input name="order" value="" id="order" type="hidden">
<input name="order_direction" value="" id="order_direction" type="hidden">
</form>
</div></div></div>

<br>

<div class="admin_results">
  <div>
        <?php echo $tcount." result(s) found "; 
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
<form id="GridView1" name="GridView1" method="post" action="schoolterm_delete.php">
  <table class="admin_table">
    <thead>

      <tr>
        <th style="width: 1%;">
		<input name="checkboxHeader" id="checkboxHeader" onclick="checkedAll();"  class="checkbox" type="checkbox"></th>
        <th><a href="" onclick="">Term Code</a></th>
        <th><a href="" onclick="">Start Date</a></th>
		<th><a href="" onclick="">End Date</a></th>
        <th><a href="" onclick="">Semester</a></th>
		<th style="width: 1%;"><a href="" onclick="">Open</a></th>
		<th style="width: 1%;"><a href="" onclick="">Action</a></th>
      </tr>
    </thead>
    <tbody>
	
	<?php 

	$count = 0; 
	$i = ($page-1)*$rpp;
	while(($count<$rpp) && ($i<$tcount)) {
    mysql_data_seek($result,$i);
    $query = mysql_fetch_array($result);
	
	$dateexplode = explode("-",$query['date_start']);

		$syear = trim($dateexplode[0]);
		$smonth = trim($dateexplode[1]);
		$sday = trim($dateexplode[2]);
		$sformatdate = $smonth."-".$sday."-".$syear;

		$edateexplode = explode("-",$query['date_end']);
		$eyear = trim($edateexplode[0]);
		$emonth = trim($edateexplode[1]);
		$eday = trim($edateexplode[2]);
		$eformatdate = $emonth."-".$eday."-".$eyear;
		
	
?>
       <tr>
            <td><input onclick="checkedHeader();" type="checkbox" name="checkboxList[]" id="checkboxList<?php echo $query['term_code'];?>" class="checkbox"  value="<?php echo $query['term_code'];?>"></td>
            
            <td class="admin_table_bold"><a href="schoolterm_profile.php?sid=<?php echo $query['term_code']?>"><?php echo $query['term_code']?></a></td>
            <td class="admin_table_user"><a href="schoolterm_profile.php?sid=<?php echo $query['term_code']?>"><?php echo $sformatdate?></a></td>
            <td class="admin_table_user"><a href="schoolterm_profile.php?sid=<?php echo $query['term_code']?>"><?php echo $eformatdate?></a></td>
			<td class="admin_table_user">
			<?php 
				switch($query['semester']){
				case 1: echo "1<sup>st</sup>";break;
				case 2: echo "2<sup>nd</sup>";break;
				case 3: echo "Summer";
				}
			?>
			</td>
			
			<td class="admin_table_centered">
					<?php if($query['open']==0)
						echo "<a  href=\"schoolterm_open.php?tid=".$query['term_code']."&to=1\" class=\"buttonlink\" style=\"background-image: url(../images/block.png);\"></a>";
					else 
						echo "<a  href=\"schoolterm_open.php?tid=".$query['term_code']."&to=1\" class=\"buttonlink\" style=\"background-image: url(../images/unblock.png);\"></a>";
					?>
			</td>
		   <td class="admin_table_centered"><a href="schoolterm_profile.php?sid=<?php echo $query['term_code']?>">Delete</a></td>

		
        </tr>            
<?php     
	$i++;
    $count++;} 
?>
           
                  </tbody>
  </table>
	<br>
	
	<div>
    <div class='buttons'><button name="delTerm" type="submit" value="delTerm" id="delTerm">Delete selected term(s)</button>  </div>
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