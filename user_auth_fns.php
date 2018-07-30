<?php
function register($username, $email, $password)
// register new person with db
// return true or error message
{
// connect to db
$conn = db_connect();
// check if username is unique
$result = $conn->query("select * from user where username='$username'");
if (!$result)
throw new Exception('Could not execute query');
if ($result->num_rows>0)
throw new Exception("<div class='content'>That username is taken. Go back and choose another one.</div>") ;
// if ok, put in db
$result = $conn->query("insert into user values('$username', sha1('$password'), '$email')");
if (!$result)
throw new Exception("<div class='content'>Could not register you in database. Please try again later.</div>");
return true;
}


function login($username, $password)
// check username and password with db
// if yes, return true
// else throw exception
{
// connect to db
$conn = db_connect();
// check if username is unique
$result = $conn->query("select * from user where username='$username' and passwd = sha1('$password')");
if (!$result)
throw new Exception("<div class='content'>Could not log you in.</div>");
if ($result->num_rows>0)
return true;
else
throw new Exception("<div class='content'>Could not log you in.</div>");
}

function check_valid_user()
// see if somebody is logged in and notify them if not
{
if (isset($_SESSION['valid_user']))
{
echo "<div class='content'>Logged in as ".stripslashes($_SESSION['valid_user']).".</div>";
echo '<br>';
}
else
{
// they are not logged in 
do_html_heading('Problem:');
echo "<div class='content'><h1>Welcome,</h1></div>";
echo "<div class='content'><b>You are not logged in. You must login before can use this site</b> <br></div>";
display_site_info();
do_html_url('login.php', 'Login');
do_html_footer();
exit;
}  
}