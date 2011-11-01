<?php
if (!isset($_SESSION)) {
  session_start();
include "../logout.php";
}

$level = $_SESSION['level'];

//if not logged in, redirect to login page.
if( $level == ""){
	
	header("Location: ../login.php");

}

else if( $level == 1 or $level == 2) {
	
	
}

else{
	header("Location: ../error_unauthorized.php");
}


if(isset($_POST['submit'])){
		$studid=$_POST['student_id'];
		
		$eer=$_POST['eeresult'];
		$atr=$_POST['atranking'];
		$eper=$_POST['eperesult'];
		$mer=$_POST['meresult'];
		$ia=$_POST['iassessment'];
	         
		if ($_POST['form138']=="on")$f138=1;
		if ($_POST['pept']=="on")$pept=1;
		if ($_POST['form137']=="on")$f137=1;
		if ($_POST['tcgrades']=="on")$tcog=1;
		if ($_POST['torecords']=="on")$tor=1;
		if ($_POST['cgmcharacter']=="on")$cogmc=1;
		if ($_POST['spermit']=="on")$sp=1;
		if ($_POST['cbcertificate']=="on")$cobc=1;
		if ($_POST['mcontract']=="on")$mc=1;
		
		$others=$_POST['others'];
		
		include("../functions/dbcon.php");
		$query_rsUsers ="UPDATE student_info SET 
			entrance_exam_result='$eer',
			admission_test_ranking='$atr',
			englishplus_exam_result='$eper',	
			medical_exam_result='$mer',
			interview_assesment='$ia',
			
			form138='$f138',
			pept='$pept',
			form137='$f137',
			true_copy_of_grades='$tcog',
			transcript_of_records='$tor',
			certificate_of_good_moral_character='$cogmc',
			study_permit='$sp',
			copy_of_birth_certificate='$cobc',
			marriage_contract='$mc',	
			others='$others'			
			WHERE student_id='$studid'";
		mysql_query($query_rsUsers, $con) or die(mysql_error());

}


if(isset($_GET['sid'])){
	$id=$_GET['sid'];
	include("../functions/dbcon.php");
	$query_rsStudent ="SELECT * FROM student_info WHERE student_id='$id'";
	$rsStudent = mysql_query($query_rsStudent, $con) or die(mysql_error());
	$row_rsStudent = mysql_fetch_assoc($rsStudent);
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir="ltr" xml:lang="en_US" xmlns="http://www.w3.org/1999/xhtml" lang="en_US"><head>
<title>Student Panel</title>
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
<h2>Manage Students</h2>
<p> This page contains the student submitted entrance credentials.</p>
<br/>

<div>
  <a  href="form_addnewstudent.php" class="buttonlink" style="background-image: url(../images/add.png);">Add New Student</a>    
</div>

<?php
include "stud_panel_menu.php";
?>

<div class="settings">
<form id="admin-form" enctype="" class="global_form" action="<?php echo $_SERVER['PHP_SELF']."?sid=".$row_rsStudent['student_id']?>" method="post">
<div><div><h3>Admission Requirements</h3>
<p class="form-description"> Click Update to save changes to the student admission requirements.</p>
<div class="form-elements">

<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Entrance exam result</label></div>
	<div id="description-element" class="form-element">
	<input name="eeresult" id="eeresult" value="<?php echo $row_rsStudent['entrance_exam_result']; ?>" type="text"></div>
</div>
<div id="description-wrapper" class="form-wrapper">
<div id="description-label" class="form-label"><label for="description" class="optional">Admission test ranking</label></div>
	<div id="description-element" class="form-element">
	<input name="atranking" id="atranking" value="<?php echo $row_rsStudent['admission_test_ranking']; ?>" type="text"></div>
</div>
<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">English(+) exam result</label></div>
	<div id="description-element" class="form-element">
	<input name="eperesult" id="eperesult" value="<?php echo $row_rsStudent['englishplus_exam_result']; ?>" type="text"></div>
</div>
<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Medical exam results</label></div>
	<div id="description-element" class="form-element">
		<textarea name="meresult" id="meresult" cols="45" rows="5"><?php echo $row_rsStudent['medical_exam_result']; ?></textarea>
</div>
<div id="description-wrapper" class="form-wrapper">
	<div id="description-label" class="form-label"><label for="description" class="optional">Interview Assessment</label></div>
	<div id="description-element" class="form-element">
	<textarea name="iassessment" id="iassessment" cols="45" rows="5"><?php echo $row_rsStudent['interview_assesment']; ?></textarea></div>
</div>

<div id="allowed-wrapper" class="form-wrapper"><div id="allowed-label" class="form-label"><label for="allowed" class="optional">Entrance credentials submitted</label></div>
<div id="allowed-element" class="form-element"><p class="description">Which credentials items are submitted by the student?</p>

<input name="allowed" value="" type="hidden"><ul class="form-options-wrapper">

<input name="allowed" value="" type="hidden"><ul class="form-options-wrapper">
<li><input name="form138" id="form138" <?php if($row_rsStudent['form138']==1) echo "checked=\"checked\"";?> type="checkbox"><label for="form138">FORM 138</label></li>
<li><input name="pept" id="pept"  <?php if($row_rsStudent['pept']==1) echo "checked=\"checked\"";?>type="checkbox"><label for="pept">PEPT/A&E</label></li>
<li><input name="form137" id="form137" <?php if($row_rsStudent['form137']==1) echo "checked=\"checked\"";?>type="checkbox"><label for="form137">FORM 137</label></li>
<li><input name="tcgrades" id="tcgrades" <?php if($row_rsStudent['true_copy_of_grades']==1) echo "checked=\"checked\"";?>type="checkbox"><label for="tcgrades">TRUE COPY OF GRADES</label></li>
<li><input name="torecords" id="torecords" <?php if($row_rsStudent['transcript_of_records']==1) echo "checked=\"checked\"";?>type="checkbox"><label for="torecords">TRANSCRIPT OF RECORDS</label></li>

<li><input name="cgmcharacter" id="cgmcharacter" <?php if($row_rsStudent['certificate_of_good_moral_character']==1) echo "checked=\"checked\"";?>type="checkbox"><label for="cgmcharacter">CERTIFICATION OF GOOD MORAL CHARACTER</label></li>
<li><input name="spermit" id="spermit" <?php if($row_rsStudent['study_permit']==1) echo "checked=\"checked\"";?>type="checkbox"><label for="spermit">PERMIT / STUDY PERMIT</label></li>
<li><input name="cbcertificate" id="cbcertificate" <?php if($row_rsStudent['copy_of_birth_certificate']==1) echo "checked=\"checked\"";?>type="checkbox"><label for="cbcertificate">COPY OF BIRTH CERTIFICATE</label></li>
<li><input name="mcontract" id="mcontract" <?php if($row_rsStudent['marriage_contract']==1) echo "checked=\"checked\"";?>type="checkbox"><label for="mcontract">MARRIAGE CONTRACT</label></li>
<br>
<li><label for="allowed-profilephotoupdate">OTHERS</label></li>
<li>
	<div id="description-element" class="form-element"><textarea name="others" id="others" cols="45" rows="5"><?php echo $row_rsStudent['others']; ?></textarea></div>
<p class="description">Enter here other credentials which are not in the list above.</p>
</li>
</ul>
</div></div>



<div class="form-wrapper" id="buttons-wrapper"><fieldset id="fieldset-buttons">
<input name="student_id" id="student_id" value="<?php echo $row_rsStudent['student_id']; ?>" type="hidden">
<button name="submit" id="submit" type="submit">Update</button></fieldset>
 </div>

</div></div></div></form></div>




</div>
</div>
</body></html>
<?php
mysql_free_result($rsStudent);
?>