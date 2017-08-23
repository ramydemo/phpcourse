<?php
//connection
$connection = mysqli_connect('localhost', 'root', '', 'phpcourse1');

function clean($connection, $input_value)
{
	return mysqli_real_escape_string($connection, trim(htmlspecialchars($input_value)));
}

$cookie_name = 'phpcourse_ck';