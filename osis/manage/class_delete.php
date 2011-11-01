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

else if( $level == 1 or $level == 4) {
	
	
}

else{
		header("Location: ../error_unauthorized.php");
}


}


include("../functions/global_functions.php");

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir="ltr" xml:lang="en_US" xmlns="http://www.w3.org/1999/xhtml" lang="en_US">
<head>

	<title>Manage Classes</title>
	<link href="../css.css" media="screen" rel="stylesheet" type="text/css">
	<link href="favicon.ico" rel="favicon" type="image/x-icon">
	
</head><body>

  <!-- TOP HEADER BAR -->
<?php
include "../globalheader.php";
?>

  <!-- BEGIN CONTENT -->
  <div id="global_content_wrapper">
    <div id="global_content">
      
<h2>
  Delete Classes</h2>
<?php
if(isset($_POST['delConfirmed'])){
	$class = $_POST['classList'];
	$countCheck = count($_POST['classList']);
	for($i=0; $i<$countCheck; $i++){
		$class_code  = $class[$i];
		include("../functions/dbcon.php");
		$sql = "DELETE FROM class_info WHERE class_code='$class_code'";
		$rsDel = mysql_query($sql);

	}
	
	if($rsDel){
		echo "Record(s) was successfully deleted. Click <a href=\"class.php\">Classes</a> to view the list of classes.";
	}
	
	exit;

}
if(isset($_POST['delClass'])){
	
	if (empty($_POST['checkboxList'])){
	echo "<div class=\"tip\"><span>No record(s) to delete. Click <a href=\"class.php\">Classes</a> to view the list of classes.</span></div>";
	exit;
	}
  
     
}
?>

<p> Click Delete to delete the classes listed below.</p>

<br>
<div class="admin_table_form">
<form id="classlist" name="classlist" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <table class="admin_table">
    <thead>
      <tr>
        <th style="width: 1%;"></th>
        <th style="width: 1%;">No.</th>
        <th>Class</th>
		<th>Section</th>
      </tr>
    </thead>
    <tbody>
	
<?php 

if(isset($_POST['delClass'])){
	
	if (empty($_POST['checkboxList'])){
	echo "<tr><td>No record(s) to delete. Click <a href=\"class.php\">Classes</a> to view the list of classes.</td></tr>";
	exit;
	}
	
	$class = $_POST['checkboxList'];
	$countCheck = count($_POST['checkboxList']);
	for($i=0; $i<$countCheck; $i++){
		$class_code  = $class[$i];
		
		include("../functions/dbcon.php");
		$sql = "SELECT class_code,
				description,
				section,
				subject_code
			FROM (class_info LEFT JOIN subject USING (subject_code))
				WHERE class_code = '$class_code'";
		$rsDel = mysql_query($sql);
		$row_rsDel = mysql_fetch_assoc($rsDel);
		
	#	$string = $row_rsDel['middlename'];
	#	$mname = "";
	#	foreach ($words as $value) {$mname = strtoupper(substr($value, 0, 1));}
			
	?>	
		<tr>
		<td><input checked="checked" style="display:none;" type="checkbox" name="classList[]" id="classList<?php echo $row_rsDel['class_code'];?>" class="checkbox"  value="<?php echo $row_rsDel['class_code'];?>"></td>
        <td class="admin_table_user"><?php echo $i+1; ?></td>
		<td><?php echo ucwords($row_rsDel['description']);?></td>
		<td><?php echo strtoupper($row_rsDel['section']);?></td>
		</tr>
	<?php
		mysql_free_result($rsDel);
	}
}
	?>
		          
        
    </tbody>
  </table>
	<br>
	<div class="form-wrapper" id="buttons-wrapper">
		<fieldset id="fieldset-buttons">
			<button name="delConfirmed" id="delConfirmed" type="submit" value="delConfirmed">Delete</button>
			or <a name="cancel" id="cancel" type="button" href="class.php">cancel</a>
		</fieldset>
	</div>

</form>
</div>

    </div>
  </div>
</body></html>