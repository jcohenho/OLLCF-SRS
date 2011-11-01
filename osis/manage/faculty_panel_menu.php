<div id="admin_cms_wrapper">

  <div class="admin_layoutbox_menu">
    <ul>
	   <li class="admin_layoutbox_menu_generic" id="admin_layoutbox_menu_openpage"><a href="faculty.php"><span>Back to Faculty List</span></a></li>

	   <li id="admin_layoutbox_menu_savechanges">

        <a href="<?php echo "faculty_profile.php?fid=".$row_rsFaculty['faculty_id']?>">
          Profile        </a>
      </li>
	  <li id="admin_layoutbox_menu_savechanges">

        <a href="<?php echo "stud_admission.php?sid=".$row_rsStudent['student_id']?>">
          Students        </a>
      </li>
      <li id="admin_layoutbox_menu_deletepage">
        <a href="javascript:void(0);" onclick="deleteCurrentPage();">
          Classes       </a>
      </li>
    </ul>
  </div>

</div>