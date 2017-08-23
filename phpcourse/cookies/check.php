<?php

//var_dump($_COOKIE); die;


if(isset($_COOKIE['userID']))
{
	$var = $_COOKIE['userID'];
	echo 'Cookie exist, value:' . $var;
}
else
{
	echo 'cookie not exist';
}