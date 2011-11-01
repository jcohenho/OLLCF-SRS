<div id="admin_cms_wrapper">

  <div class="admin_layoutbox_menu">
    <ul>
	   <li class="admin_layoutbox_menu_generic" id="admin_layoutbox_menu_openpage"><a href="students.php"><span>Student List</span></a></li>
		<li class="admin_layoutbox_menu_generic" id="admin_layoutbox_menu_openpage"><a href="<?php echo "stud_profile.php?sid=".$row_rsStudent['student_id']?>"><span>
		 <strong> [ <?php 
			$string = $row_rsStudent['middlename'];
			$words = explode(" ", $string);
			$mname = "";
			foreach ($words as $value) {
				$mname .= strtoupper(substr($value, 0, 1));
			}
		  echo strtoupper($row_rsStudent['surname'])." ".ucwords($row_rsStudent['firstname'])." ".$mname;?> ]</strong>
		</span></a></li>
	   <li id="admin_layoutbox_menu_savechanges">
        <a href="<?php echo "stud_profile.php?sid=".$row_rsStudent['student_id']?>">Profile</a>
      </li>
	  <li id="admin_layoutbox_menu_savechanges" style="<?php echo $hide ?>;">
        <a href="<?php echo "stud_admission.php?sid=".$row_rsStudent['student_id']?>">Admissions Requirements</a>
      </li>
      <li id="admin_layoutbox_menu_deletepage">
        <a href="<?php echo "stud_classes.php?sid=".$row_rsStudent['student_id']?>" >Classes</a>
      </li>
	  <li id="admin_layoutbox_menu_deletepage" style="<?php echo $hide ?>;">
        <a href="<?php echo "stud_openclass.php?sid=".$row_rsStudent['student_id']?>" >Enroll New Class</a>
      </li>
    </ul>
  </div>

</div>