  <?php 

$username = $_SESSION['username'];

?>
  




<div id="global_header_wrapper">
    <div id="global_header">
      <div>
<div class="generic_layout_container layout_core_admin_menu_mini">

<div id="global_header_right">
  <div id="global_header_right_menu">
          <a href="">Welcome, <?php echo $username?></a>
    &nbsp;
 [<a href="<?php echo $logoutAction;?>">sign out</a>]
  </div>
</div>
</div>
</div>
      <div>
<div class="generic_layout_container layout_core_admin_menu_logo">
<div id="global_header_logo">
   <a href="index.php"><img src="../logo_admin.png" alt="MyOLLCF Control Panel">  </a>
</div></div>
</div>
    </div>
  </div>



  <div id="global_menu_wrapper">
    <div>
<div class="generic_layout_container layout_core_admin_menu_main">
<ul class="navigation">
    <li>
        <a class="menu_core_admin_main core_admin_main_home" href="announcements.php">Home</a>
    </li>

    <li>
        <a class="menu_core_admin_main core_admin_main_settings" href="javascript:void(0);this.blur();">School Setup</a>
        <ul>
            <li>
                <a class="menu_core_admin_main_settings core_admin_main_settings_general" href="">School Info</a>
            </li>
            <li>
                <a class="menu_core_admin_main_settings core_admin_main_settings_locale" href="schoolterm.php">School Term Manager</a>
            </li>
            <li>
                <a class="menu_core_admin_main_settings core_admin_main_settings_password" href="course.php">Course Manager</a>
            </li>
			<li>
                <a class="menu_core_admin_main_settings core_admin_main_settings_password" href="subject.php ">Subject Manager</a>
            </li>
			<li>
                <a class="menu_core_admin_main_settings core_admin_main_settings_password" href="room.php">Classroom/Lab Manager</a>
            </li>
			<li>
                <a class="menu_core_admin_main_settings core_admin_main_settings_password" href="room.php">System Preferences</a>
            </li>
        </ul>
    </li>
	<li>
        <a class="menu_core_admin_main core_admin_main_plugins" href="javascript:void(0);this.blur();">Students</a>
        <ul>
            <li>
                <a class="menu_core_admin_main_plugins core_admin_main_plugins_group" href="students.php" onclick="">Student Manager</a>
            </li>
        </ul>
    </li>
	<li>
        <a class="menu_core_admin_main core_admin_main_plugins" href="faculty.php">Faculty</a>
        <ul>
            <li>
                <a class="menu_core_admin_main_plugins core_admin_main_plugins_group" href="faculty.php" onclick="">Faculty Manager</a>
            </li>
        </ul>
    </li>
	<li>
        <a class="menu_core_admin_main core_admin_main_plugins" href="user.php">Users</a>
        <ul>
            <li>
                <a class="menu_core_admin_main_plugins core_admin_main_plugins_group" href="user.php" onclick="">User Manager</a>
            </li>
        </ul>
    </li>
	<li>
        <a class="menu_core_admin_main core_admin_main_plugins" href="students.php">Scheduling</a>
        <ul>
            <li>
                <a class="menu_core_admin_main_plugins core_admin_main_plugins_group" href="class.php">Class Manager</a>
            </li>
        </ul>
    </li>
	<li>
        <a class="menu_core_admin_main core_admin_main_plugins" href="students.php">Grades</a>
        <ul>
            <li>
                <a class="menu_core_admin_main_plugins core_admin_main_plugins_group" href="javascript:void(0)" onclick="javascript:getSuggest('groups');">Transcript</a>
            </li>
			<li>
                <a class="menu_core_admin_main_plugins core_admin_main_plugins_group" href="javascript:void(0)" onclick="javascript:getSuggest('groups');">Class Rank</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="menu_core_admin_main core_admin_main_plugins" href="javascript:void(0);this.blur();">Reports</a>
        <ul>
            <li>
                <a class="menu_core_admin_main_plugins core_admin_main_plugins_group" href="student_report.php" onclick="javascript:getSuggest('groups');">Student Enrollment</a>
            </li>
            <li>
                <a class="menu_core_admin_main_plugins core_admin_main_plugins_music" href="javascript:void(0)" onclick="javascript:getSuggest('music');">Faculty Schedule</a>
            </li>
        </ul>
    </li>

</ul></div>
</div>
  </div>