<?php
function do_html_header($title)
{
// print an HTML header
?>
<html>
<head>
<title><?php echo $title;?></title>
<style>
body { 
    font-family: Arial, Helvetica, sans-serif; 
	font-size: 13px ;
	position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 0;
    margin: 0;
	width:97%
	
}
li, td { 
    font-family: Arial, Helvetica, sans-serif; 
	font-size: 13px }
hr { 
    color: #3333cc; 
    width=300; text-align=left;
}
a { 
  
    text-decoration:none;
}
footer {
	background:olive;
	color:white;
	padding:15px;
	position: absolute;
    bottom: 0;
	width:100%;
}
.content {
    max-width: 500px;
    margin: auto;
}
</style>
</head>
<body>
<img src='bit.png' alt='Brainwave Institute of Technology Logo' border='0' align='left' valign='bottom' height = '55' width = '57' />
<h1>&nbsp;Brainwave Institute of Technology</h1>
<hr />
<?php
function do_html_heading($title)
{
?>	
<head>
<title><?php echo $title;?></title>
</head>
<?php
}
if($title)
do_html_heading($title);
}

function display_site_info()
{
	echo "<div class='content'><h3>This is Brainwave Institute of Technology(BIT)'s Registration and Login source code.</h3>
	<p>Thanks for downloading my simple work. I'm <a href='https://facebook.com/olaiwola.akeem.3'><b>Olaiwola Akeem</b></a>. 
	 This is just my little work. Contact me through WhatsApp <b>+2347039839326</b> if you are having any problem on this source 
	 code or you want more functionalities of this source code. You can also contact me if you have any big project 
	  you want me to handle for you. Open the ReadMe.txt file to learn how to use this source code.</p>
	</div>";
}

function display_login_form() 
{
?>
<div class="content">
<h3>Login Form</h3>
<p><a href='register_form.php'>Not a member?</a><br></p>
<form action="index.php" method="post">
<table border="0">
<tr>
    <td>Username</td>
    <td align="left"> <input type="text" name="username" size="30" maxlength="200" placeholder="Enter Username"></td>
</tr>
<tr>
    <td>Password</td>
    <td align="left"> <input type="password" name="passwd" size="30" maxlength="200" placeholder="Enter Password"></td>
</tr>

<tr>
      <td colspan="2" align= "center"> <input type="submit" value= "Login" ></td>
</tr>
</table>
</form>
</div>
<?php
}

function do_html_footer()
{
?>
	<footer style='clear:both;'>
	&copy 2018 <a href='https://bit.obrainacademy.com'> Brainwave 
	Institute of Technology</a> Designed by <a href="https://facebook.com/olaiwola.akeem.3" target="blank">
	<b>Olaiwola Akeem (Brainwave)</b></a>
	</footer>
<?php
}

function display_registration_form()
{
?>
<div class="content">
<h3>Registration form</h3>
<form action="register_new.php" method="post">
<table border="0">
<tr>
    <td>Email Address</td>
    <td align="left"> <input type="text" name="email" size="30" maxlength="200" placeholder="Enter Email Address"></td>
</tr>
<tr>
    <td>Preferred Username</td>
    <td align="left"> <input type="text" name="username" size="30" maxlength="200" placeholder="Enter Username"></td>
</tr>
<tr>
    <td>Password</td>
    <td align="left"> <input type="password" name="passwd" size="30" maxlength="200" placeholder="Enter Password"></td>
</tr>
<tr>
    <td>Confirm Password</td>
    <td align="left"> <input type="password" name="passwd2" size="30" maxlength="200" placeholder="Confirm Password"></td>
</tr>

<tr>
      <td colspan="2" align= "center"> <input type="submit" value= "Register" ></td>
</tr>
<tr>
      <td colspan="2" align="center">Have an account? <a href="login.php">Login here</a></td>
</tr>
</table>
</form>	
</div>
<?php
}

function get_user_urls()
{
	echo "<div class='content'><b>Display the contents of your website here</b></div>";
	echo "<div class='content'> <a href='#'> Go To Dashboard</a><br>"; //Put the url you want to redirect the user to
	echo "<a href='logout.php'> Logout </a></div>";
}

function do_html_url() 
{
	echo "<div class='content'><a href='login.php'> <b>Login here</b> </a> or <a href='register_form.php'> <b> Register</b></a></div>";
}