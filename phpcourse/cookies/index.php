<?php
//create
//get
//check (enabled, disabled)

$cookiename = 'userID';
$value = 1;
$expiry = 1*60*60*24*1; //a day (1 day)

$value = md5(md5($value)); //sha1
$expiry = time() + $expiry;

setcookie($cookiename, $value, $expiry, '/');

if(isset($_COOKIE['userID']))
{
	$var = $_COOKIE['userID'];
	echo 'Cookie exist, value:' . $var;
}
else
{
	echo 'cookie not exist';
}



