<?php 
//initialize the session
if (!isset($_SESSION)) {
  
session_start();
include "logout.php";

$level = $_SESSION['level'];

if($level!=1 || 2){
	
	header("Location: ../error_unauthorized.php");
}

}

if(isset($_POST['submit'])){
		$studid=$_POST['studentid'];
		$sname=$_POST['surname'];
		$fname=$_POST['firstname'];
		$mname=$_POST['middlename'];
		$nextension=$_POST['nameextension'];
		$course=$_POST['course'];
		$ylevel=$_POST['yearlevel'];
		
		include("../functions/dbcon.php");
		$query_rsUsers ="INSERT INTO student_info (student_id, firstname,middlename,surname,name_extension,course_id,year_level)VALUES ('$studid', '$fname', '$mname', '$sname', '$nextension', '$course', '$ylevel')";
		mysql_query($query_rsUsers, $con) or die(mysql_error());
		mysql_close ($con);
		header("Location: enroll.php");
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
		
		<h2>
  Enroll Student</h2>


<p> The officially enrolled subject will be listed here. Please fill in the ....</p>
<br>

<div class="admin_search">
  <div class="clear"><div class="search"><form id="filter_form" enctype="application/x-www-form-urlencoded" class="global_form_box" action="/admin/user/manage" method="post">
<div><label for="displayname" tag="" class="optional">Class Code.</label>
<input name="displayname" id="displayname" type="text"></div>

<div><label for="level_id" tag="" class="optional">School Year</label>
<select name="level_id" id="level_id">
    <option selected="selected" value="0" label=" "> </option>
    <option value="1" label="Super Admins">2011-2012</option>
    <option value="2" label="Admins">2012-2013</option>
    <option value="3" label="Moderators">2013-2014</option>
    <option value="4" label="Default Level">2014-2015</option>
</select></div>

<div><label for="enabled" tag="" class="optional">Semester</label>
<select name="enabled" id="enabled">
    <option selected="selected" value="-1" label=""></option>
    <option value="0" label="Not Approved">First Semester</option>
    <option value="1" label="Approved">Second Semester</option>
	<option value="1" label="Approved">Summer</option>

</select></div>

<div><div class="buttons">
<button name="search" id="search" type="submit">Add to list</button></div></div>

<input name="order" value="" id="order" type="hidden">

<input name="order_direction" value="" id="order_direction" type="hidden"></form></div></div></div>

<br>

<div class="admin_results">
  <div>
        7 students found.	  </div>

</div>

<br>

<div class="admin_table_form">
<form id="multimodify_form" method="post" action="/admin/user/manage/multi-modify" onsubmit="multiModify()">
  <table class="admin_table">

    <thead>

      <tr>
        <th style="width: 1%;"><input onclick="selectAll()" class="checkbox" type="checkbox"></th>
        <th style="width: 1%;"><a href="" onclick="">Class Code</a></th>
        <th><a href="" onclick="">Subject Code</a></th>
        <th><a href="" onclick="">Subject Description</a></th>
		<th><a href="" onclick="">Teacher</a></th>
        <th style="width: 1%;"><a href="" onclick="">Time</a></th>
        <th style="width: 1%;" class="admin_table_centered"><a href="" onclick="">Room</a></th>
        <th style="width: 1%;" class="admin_table_options">Options</th>
      </tr>
    </thead>
    <tbody>
	
	        <tr>

            <td><input name="modify_5117" value="5117" class="checkbox" type="checkbox"></td>
            <td>1</td>
            <td class="admin_table_bold"><a href="" target="_blank">BALUTAN</a></td>
            <td class="admin_table_user"><a href="" target="_blank">Vydelaine</a></td>
			<td class="admin_table_user"><a href="" target="_blank">A</a></td>
            <td class="admin_table_email">Third Year</td>

            <td class="admin_table_centered"><a href="">1</a></td>
            <td class="admin_table_options">
				<a class="smoothbox" href="">enroll</a>
				|<a class="smoothbox" href="">edit</a>
				|<a class="smoothbox" href="">delete</a></td>
        </tr>            
        <tr>

            <td><input name="modify_5117" value="5117" class="checkbox" type="checkbox"></td>
            <td>12004885</td>
            <td class="admin_table_bold"><a href="" target="_blank">GALEON</a></td>
            <td class="admin_table_user"><a href="" target="_blank">dario</a></td>
			<td class="admin_table_user"><a href="" target="_blank">humiwat</a></td>
            <td class="admin_table_email">First Year</td>

            <td class="admin_table_centered"><a href="">10</a></td>
            <td class="admin_table_options">
				<a class="smoothbox" href="">remove</a>
				|<a class="smoothbox" href="">edit</a>
				|<a class="smoothbox" href="">delete</a></td>
        </tr>            
        <tr>

            <td><input name="modify_5117" value="5117" class="checkbox" type="checkbox"></td>
            <td>12004886</td>
            <td class="admin_table_bold"><a href="" target="_blank">PUGONG</a></td>
            <td class="admin_table_user"><a href="" target="_blank">von</a></td>
			<td class="admin_table_user"><a href="" target="_blank">toan</a></td>
            <td class="admin_table_email">Third</td>

            <td class="admin_table_centered"><a href="">8</a></td>
            <td class="admin_table_options">
				<a class="smoothbox" href="">enroll</a>
				|<a class="smoothbox" href="">edit</a>
				|<a class="smoothbox" href="">delete</a></td>
        </tr>            
        <tr>

            <td><input name="modify_5117" value="5117" class="checkbox" type="checkbox"></td>
            <td>12004887</td>
            <td class="admin_table_bold"><a href="" target="_blank">LINUBHOT</a></td>
            <td class="admin_table_user"><a href="" target="_blank">vermon</a></td>
			<td class="admin_table_user"><a href="" target="_blank">nomrev</a></td>
            <td class="admin_table_email">First Year</td>

            <td class="admin_table_centered"><a href="">11</a></td>
            <td class="admin_table_options">
				<a class="smoothbox" href="">enroll</a>
				|<a class="smoothbox" href="">edit</a>
				|<a class="smoothbox" href="">delete</a></td>
        </tr>            
        <tr>

            <td><input name="modify_5117" value="5117" class="checkbox" type="checkbox"></td>
            <td>2</td>
            <td class="admin_table_bold"><a href="" target="_blank">ASIAO</a></td>
            <td class="admin_table_user"><a href="" target="_blank">Von Floyd</a></td>
			<td class="admin_table_user"><a href="" target="_blank">A</a></td>
            <td class="admin_table_email">Second Yea</td>

            <td class="admin_table_centered"><a href="">2</a></td>
            <td class="admin_table_options">
				<a class="smoothbox" href="">enroll</a>
				|<a class="smoothbox" href="">edit</a>
				|<a class="smoothbox" href="">delete</a></td>
        </tr>            
           
                  </tbody>

  </table>
<br>
<div class="form-wrapper" id="buttons-wrapper"><fieldset id="fieldset-buttons">
<button name="submit" id="submit" type="submit">Print</button>
<button name="submit" id="submit" type="submit">Remove Selected</button>
 or <a name="cancel" id="cancel" type="button" href="">cancel</a></fieldset>
 </div>
 
</form>

</div>

		
	</div>
  </div>
</body></html>