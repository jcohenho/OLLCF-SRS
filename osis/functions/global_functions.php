<?php

function dbConnect(){
	$con = mysql_connect("localhost","root","");
	if (!$con){die('Could not connect: ' . mysql_error());}				
	mysql_select_db("osis", $con);
}

function getCourses(){
	dbConnect();
	$rsCourse = mysql_query("select * from course");
	if (mysql_num_rows($rsCourse)>0) return false; else return true;
	//mysql_free_result($rsCourse);
	//mysql_close ($con);
}

function register($username, $email, $password)
// register new person with db
// return true or error message
{
 // connect to db
  $conn = dbConnect(); if (!$conn) return 'Could not connect to database server - please try later.';
  
  // check if username is unique 
  $result = mysql_query("select * from user where username='$username'"); 
  if (!$result)
     return 'Could not execute query';
  if (mysql_num_rows($result)>0) 
     return 'That username is taken - go back and choose another one.';

  // if ok, put in db
  $result = mysql_query("insert into user values 
                         ('$username', password('$password'), '$email')");
  if (!$result)
    return 'Could not register you  in database - please try again later.';

  return true;
}
 
function loginAlumni($username, $password){
	dbConnect();
	$rsAlumni = mysql_query("select alumni_id,email,password from alumni_account where email='$username' and password = '$password'");
	if (!$rsAlumni) return false; 
	if (mysql_num_rows($rsAlumni)>0) return true; else return false;
	mysql_free_result($rsAlumni);
	mysql_close ($con);
}

function check_valid_member()
// see if somebody is logged in and notify them if not
{
 
}

function getAlumniFullName($alumniId){
	dbConnect();
	$rsAlumni = mysql_query("select full_name from alumni_account where alumni_id='$alumniId'");
	$row_rsAlumni = mysql_fetch_assoc($rsAlumni);
	if (!$rsAlumni) return false; 
	if (mysql_num_rows($rsAlumni)>0) return $row_rsAlumni['full_name']; else return false;
	mysql_free_result($rsAlumni);
	mysql_close ($con);
}
function getTotalInbox($alumniId){
	dbConnect();
	$rsAlumni = mysql_query("select full_name from alumni_account where alumni_id='$alumniId'");
	$row_rsAlumni = mysql_fetch_assoc($rsAlumni);
	if (!$rsAlumni) return false; 
	if (mysql_num_rows($rsAlumni)>0) return $row_rsAlumni['full_name']; else return false;
	mysql_free_result($rsAlumni);
	mysql_close ($con);
}

function change_password($username, $old_password, $new_password)
// change password for username/old_password to new_password
// return true or false
{
  // if the old password is right 
  // change their password to new_password and return true
  // else return false
  if (login($username, $old_password))
  {
    if (!($conn = db_connect()))
      return false;
    $result = mysql_query( "update user
                            set passwd = password('$new_password')
                            where username = '$username'");
    if (!$result)
      return false;  // not changed
    else
      return true;  // changed successfully
  }
  else
    return false; // old password was wrong
}

function get_random_word($min_length, $max_length)
// grab a random word from dictionary between the two lengths
// and return it
{
   // generate a random word
  $word = '';
  //remember to change this path to suit your system
  $dictionary = '/usr/dict/words';  // the ispell dictionary
  $fp = fopen($dictionary, 'r');
  if(!$fp)
    return false; 
  $size = filesize($dictionary);

  // go to a random location in dictionary
  srand ((double) microtime() * 1000000);
  $rand_location = rand(0, $size);
  fseek($fp, $rand_location);

  // get the next whole word of the right length in the file
  while (strlen($word)< $min_length || strlen($word)>$max_length || strstr($word, "'"))
  {  
     if (feof($fp))   
        fseek($fp, 0);        // if at end, go to start
     $word = fgets($fp, 80);  // skip first word as it could be partial
     $word = fgets($fp, 80);  // the potential password
  };
  $word=trim($word); // trim the trailing \n from fgets
  return $word;  
}

function reset_password($username)
// set password for username to a random value
// return the new password or false on failure
{ 
  // get a random dictionary word b/w 6 and 13 chars in length
  $new_password = get_random_word(6, 13);
  
  if($new_password==false)
    return false;
  // add a number  between 0 and 999 to it
  // to make it a slightly better password
  srand ((double) microtime() * 1000000);
  $rand_number = rand(0, 999); 
  $new_password .= $rand_number;
 
  // set user's password to this in database or return false
  if (!($conn = db_connect()))
      return false;
  $result = mysql_query( "update user
                          set passwd = password('$new_password')
                          where username = '$username'");
  if (!$result)
    return false;  // not changed
  else
    return $new_password;  // changed successfully  
}

function notify_password($username, $password)
// notify the user that their password has been changed
{
    if (!($conn = db_connect()))
      return false;
    $result = mysql_query("select email from user
                            where username='$username'");
    if (!$result)
    {
      return false;  // not changed
    }
    else if (mysql_num_rows($result)==0)
    {
      return false; // username not in db
    }
    else
    {
      $email = mysql_result($result, 0, 'email');
      $from = "From: support@phpbookmark \r\n";
      $mesg = "Your PHPBookmark password has been changed to $password \r\n"
              ."Please change it next time you log in. \r\n";
      
      
      if (mail($email, 'PHPBookmark login information', $mesg, $from))
        return true;      
      else
        return false;     
    }
} 

?>