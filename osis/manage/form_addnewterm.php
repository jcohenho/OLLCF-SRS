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
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir="ltr" xml:lang="en_US" xmlns="http://www.w3.org/1999/xhtml" lang="en_US"><head>
<title>Control Panel</title>
<link href="../css.css" media="screen" rel="stylesheet" type="text/css">
<link href="favicon.ico" rel="favicon" type="image/x-icon">

<script type="text/javascript" src="core.js"></script>

</head><body>

  <!-- TOP HEADER BAR -->
<?php
include "../globalheader.php";
?>

  <!-- BEGIN CONTENT -->
  <div id="global_content_wrapper">
    <div id="global_content">
<h2>Manage School Term</h2>
<p> Adding new school term.</p>
<br>
<?php
if(isset($_POST['submit'])){
		$startdate=$_POST['syear']."-".$_POST['smonth']."-".$_POST['sday'];
		$enddate=$_POST['tyear']."-".$_POST['tmonth']."-".$_POST['tday'];
		$semester=$_POST['semester']; 
	
		include("../functions/dbcon.php");
		$query_rsUsers ="INSERT INTO schoolterm
		(date_start,date_end,semester)
		VALUES ('$startdate', '$enddate', '$semester')";
		mysql_query($query_rsUsers, $con) or die(mysql_error());
		mysql_close ($con);
		
		echo "<div class=\"tip\"><span>New term was successfully saved.</span></div>";
}
?>
<div class="settings">
<form id="admin-form" enctype="application/x-www-form-urlencoded" class="global_form" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<div><div><h3>Add New Term Form</h3>
<p class="form-description"> Please fill in the boxes below and click Save to add new a term record.</p>
<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Start Date</label></div>
	<div id="description-element" class="form-element">
		
			<div id="description-element" class="form-element">
				<select name="smonth" id="smonth">
					<?php 
						$month=array('January','February', 'March', 
									'April', 'May', 'June', 
									'July', 'August', 'September', 
									'October', 'November', 'December');

						for($i=0; $i<=11; $i++){
							echo "<option value=\"". ($i+1) ."\">". $month[$i] ."</option>";
						}					

					?>

				</select>
		</div>
		
			<div id="description-element" class="form-element">
				<select name="sday" id="sday">
					<?php 
						$day=array('1','2', '3', '4', '5', '6','7', '8', '9', '10', '11', '12', '13', '14', '15', 
									'16','17', '18', '19', '20', '21','22', '23', '24', '25', '26', '27', '28', '29', '30','31');

						for($i=0; $i<=30; $i++){
							echo "<option value=\"". ($i+1) ."\">". $day[$i] ."</option>";
						}					

					?>

				</select>
		</div>
		
		
		
		
			<select name="syear" id="syear">
			  
				<?php 
					$todate=(date('Y')+5);								
					for($i=1985; $i<=$todate; $i++){
						if($i==date('Y')) echo "<option selected=\"selected\" value=\"". $i ."\">". $i ."</option>";
						else echo "<option value=\"". $i ."\">". $i ."</option>";	
					}								
				?>
			
			</select>
	</div>

	

	
	
	
	
</div>

<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">End Date</label></div>
	
	
	<div id="description-element" class="form-element">
		<select name="tmonth" id="tmonth">
			<?php 
				$month=array('January','February', 'March', 
							'April', 'May', 'June', 
							'July', 'August', 'September', 
							'October', 'November', 'December');
							
				for($i=0; $i<=11; $i++){
					echo "<option value=\"". ($i+1) ."\">". $month[$i] ."</option>";
				}					
							
			?>
		
		</select>
</div>

	<div id="description-element" class="form-element">
		<select name="tday" id="tday">
			<?php 
				$day=array('1','2', '3', '4', '5', '6','7', '8', '9', '10', '11', '12', '13', '14', '15', 
							'16','17', '18', '19', '20', '21','22', '23', '24', '25', '26', '27', '28', '29', '30','31');
								
				for($i=0; $i<=30; $i++){
					echo "<option value=\"". ($i+1) ."\">". $day[$i] ."</option>";
				}					
							
			?>
		
		</select>
</div>
	
	<div id="description-element" class="form-element">
			<select name="tyear" id="tyear">
			  
				<?php 
					$todate=(date('Y')+5);								
					for($i=1985; $i<=$todate; $i++){
						if($i==date('Y')) echo "<option selected=\"selected\" value=\"". $i ."\">". $i ."</option>";
						else echo "<option value=\"". $i ."\">". $i ."</option>";	
					}								
				?>
			
			</select>
	</div>

		
</div>
<div id="description-wrapper" class="form-wrapper">
		<div id="description-label" class="form-label"><label for="description" class="optional">Semester</label></div>
		<div id="description-element" class="form-element">
			<select name="semester" id="semester">
				<?php 
					$sem=array('1st','2nd', 'Summer');		
					for($i=0; $i<=2; $i++){ 
						echo "<option value=\"". ($i+1) ."\">". $sem[$i] ."</option>";
					}								
				?>
			
			</select>
	</div>
</div>

<div class="form-wrapper" id="buttons-wrapper"><fieldset id="fieldset-buttons">
<button name="submit" id="submit" type="submit">Save</button>
 or <a name="cancel" id="cancel" type="button" href="schoolterm.php">cancel</a></fieldset>
 </div>

</div></div></div></form></div>
	
	
	</div>
  </div>
</body></html>