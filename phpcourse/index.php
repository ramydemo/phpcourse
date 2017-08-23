<?php 
include "header.php";
/*
+, - , *, / , %
$i++, ++$i; $i--, --$i
==, ===, <=, >= != <>
&& || 
*/

/*Indexed 
Associative
Multidimentional*/
 
$myarray = array(
	'red',
	'blue',
	'green',
);
//echo count($myarray);

for ($i=0; $i < count($myarray); $i++) { 
	echo $myarray[$i] . '<br>';
}
foreach($myarray as $record)
{
	//echo $key.': '.$value.' <br>';
	echo $record .'<br>';
}

echo '<hr>';

$table = array(
	array('title'=>'this is a title',
		'image'=>'1.jpg',
		'keywords'=>'dd, dd, fff'),
	array('title'=>'this is a title2',
		'image'=>'2.jpg',
		'keywords'=>'dd2, dd2, fff2'),
);

//echo count($table);

foreach($table as $record)
{
	echo 'Title: ' .$record['title'].'
		<br>Image: '.$record['image'].'
		<hr><br>';
}

/*echo $i;
echo '<br> continue my website';*/

/*gg(); //fatal*/

//echo 'fatal above';




/*==
===
<
>*/

