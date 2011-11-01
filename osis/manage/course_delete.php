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
	header("Location: ../error_unauthorized.php");
}



}


include("../functions/global_functions.php");

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir="ltr" xml:lang="en_US" xmlns="http://www.w3.org/1999/xhtml" lang="en_US">
<head>

	<title>Manage Courses</title>
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
  Delete Courses</h2>
<?php
if(isset($_POST['delConfirmed'])){
	$course = $_POST['courseList'];
	$countCheck = count($_POST['courseList']);
	for($i=0; $i<$countCheck; $i++){
		$course_id  = $course[$i];
		include("../functions/dbcon.php");
		$sql = "DELETE FROM course WHERE course_id='$course_id'";
		$rsDel = mysql_query($sql);

	}
	
	if($rsDel){
		echo "Record(s) was successfully deleted. Click <a href=\"course.php\">Courses</a> to view the list of courses.";
	}
	
	exit;

}
if(isset($_POST['delCourse'])){
	
	if (empty($_POST['checkboxList'])){
	echo "<div class=\"tip\"><span>No record(s) to delete. Click <a href=\"course.php\">Courses</a> to view the list of courses.</span></div>";
	exit;
	}
  
     
}
?>

<p> Click Delete to delete the courses listed below.</p>

<br>
<div class="admin_table_form">
<form id="courseList" name="courseList" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <table class="admin_table">
    <thead>
      <tr>
        <th style="width: 1%;"></th>
        <th style="width: 1%;">No.</th>
        <th>Course ID</th>
		<th>Name</th>
			<th>Description</th>
      </tr>
    </thead>
    <tbody>
	
<?php 

if(isset($_POST['delCourse'])){
	
	if (empty($_POST['checkboxList'])){
	echo "<tr><td>No record(s) to delete. Click <a href=\"course.php\">Course</a> to view the list of courses.</td></tr>";
	exit;
	}
	
	$course = $_POST['checkboxList'];
	$countCheck = count($_POST['checkboxList']);
	for($i=0; $i<$countCheck; $i++){
		$course_id  = $course[$i];
		
		include("../functions/dbcon.php");
		$sql = "SELECT *
			FROM course
				WHERE course_id = '$course_id'";
		$rsDel = mysql_query($sql);
		$row_rsDel = mysql_fetch_assoc($rsDel);
		
	#	$string = $row_rsDel['middlename'];
	#	$mname = "";
	#	foreach ($words as $value) {$mname = strtoupper(substr($value, 0, 1));}
			
	?>	
		<tr>
		<td><input checked="checked" style="display:none;" type="checkbox" name="courseList[]" id="courseList<?php echo $row_rsDel['course_id'];?>" class="checkbox"  value="<?php echo $row_rsDel['course_id'];?>"></td>
        <td class="admin_table_user"><?php echo $i+1; ?></td>
		<td><?php echo strtoupper($row_rsDel['course_id']);?></td>
		<td><?php echo ucwords($row_rsDel['name']);?></td>
			<td><?php echo strtoupper($row_rsDel['description']);?></td>
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
			or <a name="cancel" id="cancel" type="button" href="course.php">cancel</a>
		</fieldset>
	</div>

</form>
</div>

    </div>
  </div>
</body></html>