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

if($_COOKIE['roomSearch']==",0")setcookie("roomSearch", "", time()-3600); //delete cookie if all boxes in seearch form is empty
if(!isset($_COOKIE['roomSearch'])){
	$sql = "SELECT room_id, location
			FROM room
			ORDER BY location";
}else{
$sfield = explode(",", $_COOKIE['roomSearch']); //turn cookie data back into array
	$scriteria=trim($sfield[0]);
	$lookin=trim($sfield[1]);
	if($scriteria=="") setcookie("roomSearch", "", time()-3600); //delete cookie if search criteria is empty
	else 
		switch ($sfield[1]){
			case 0: $search_filter="WHERE room_id LIKE '%%$scriteria%%' 
										OR location LIKE '%%$scriteria%%'"; break;
			case 1: $search_filter="WHERE room_id LIKE '%%$scriteria%%'"; break;
			case 2: $search_filter="WHERE location LIKE '%%$scriteria%%'"; break;
		
		}	"SELECT room_id, location
					FROM room
					$search_filter
					ORDER BY location";
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

	<title>Manage Rooms</title>
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
	

</head><body onload="getFormInputs(document.forms.filter_room,retrieveFormInputs('roomSearch'));">

  <!-- TOP HEADER BAR -->
<?php
include "../globalheader.php";
?>

  <!-- BEGIN CONTENT -->
  <div id="global_content_wrapper">
    <div id="global_content">
      
<h2>
  Manage Rooms</h2>


<p> The room and labs of Our Lady of Lourdes College Foundation are listed here. If you need to
search for a specific room, enter your search criteria in the fields below.</p>

<br>

<div style="<?php echo $hide ?>;">
  <a  href="form_addnewroom.php" class="buttonlink" style="background-image: url(../images/add.png);">Add New Room</a>    
</div>
<br/>

<div class="admin_search">
  <div class="clear"><div class="search">
<form name="filter_room" class="global_form_box" action="<?php echo $reload;?>" onsubmit="setFormInputs('roomSearch',getFormString(document.forms.filter_room));" method="post">
<div><label for="room_scriteria" tag="" class="optional">Search criteria</label>
<input name="room_scriteria" id="room_scriteria" type="text"></div>

<div><label for="level_id" tag="" class="optional">Look in</label>
<select name="field" id="field">
    <option selected="selected" value="0" label=""> </option>
    <option value="room_id" label="room_id">Room ID</option>
    <option value="location">Location</option>
</select></div>

<div><div class="buttons"><button name="search" id="search" type="submit">Search</button></div></div>
<input name="order" value="" id="order" type="hidden">
<input name="order_direction" value="" id="order_direction" type="hidden">
</form>
</div></div></div>

<br>

<div class="admin_results">
  <div>
        <?php echo $tcount." room(s) found "; 
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
<form id="GridView1" name="GridView1" method="post" action="room_delete.php">
  <table class="admin_table">
    <thead>

      <tr>
        <th style="width: 1%;">
		<input name="checkboxHeader" id="checkboxHeader" onclick="checkedAll();"  class="checkbox" type="checkbox"></th>
        <th style="width: 1%;"><a href="" onclick="">Room ID</a></th>
        <th style="width: 1%;"><a href="" onclick="">Location</a></th>
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
            <td><input onclick="checkedHeader();" type="checkbox" name="checkboxList[]" id="checkboxList<?php echo $query['room_id'];?>" class="checkbox"  value="<?php echo $query['room_id'];?>"></td>
            
            <td class="admin_table_bold"><a href="room_profile.php?sid=<?php echo $query['room_id']?>"><?php echo strtoupper($query['room_id'])?></a></td>
            <td class="admin_table_user"><a href="room_profile.php?sid=<?php echo $query['room_id']?>"><?php echo ucwords($query['location'])?></a></td>
		
        </tr>            
<?php     
	$i++;
    $count++;} 
?>
           
                  </tbody>
  </table>
	<br>
	
	<div style="<?php echo $hide ?>;">
    <div class='buttons'><button name="delRoom" type="submit" value="delRoom" id="delRoom">Delete selected room(s)</button>  </div>
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